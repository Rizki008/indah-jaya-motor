<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_order');
		$this->load->model('m_home');
		$this->load->model('m_kategori');
	}


	public function index()
	{
		$this->pelanggan_login->proteksi_halaman();
		$data = array(
			'title' => 'Status Order',
			'status' => $this->m_order->pesanan(),
			'kategori' => $this->m_kategori->kategori(),
			'produk_all' => $this->m_home->produk_all(),
			'isi' => 'frontend/order/v_order'
		);
		$this->load->view('frontend/v_wrapper', $data);
	}
	public function detail_pesanan($id)
	{
		$data = array(
			'title' => 'Detail Pesanan',
			'detail' => $this->m_order->detail_pesanan($id),
			'kategori' => $this->m_kategori->kategori(),
			'produk_all' => $this->m_home->produk_all(),
			'isi' => 'frontend/cart/v_detail_pesanan'
		);
		$this->load->view('frontend/v_wrapper', $data);
	}
	public function pembayaran($id)
	{
		$config['upload_path'] = './assets/pembayaran';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']  = '5000';
		// $this->load->library('upload', $config);
		$this->upload->initialize($config);
		$field_name = "bukti_pembayaran";
		if (!$this->upload->do_upload($field_name)) {
			$data = array(
				'title' => 'Pembayaran',
				'detail' => $this->m_order->detail_pesanan($id),
				'kategori' => $this->m_kategori->kategori(),
				'produk_all' => $this->m_home->produk_all(),
				'error_upload' => $this->upload->display_errors(),
				'isi' => 'frontend/cart/v_detail_pesanan'
			);
			$this->load->view('frontend/v_wrapper', $data, FALSE);
		} else {
			$upload_data = array('uploads' => $this->upload->data());
			$config['image_library'] = 'gd2';
			$config['source_image'] = './assets/pembayaran' . $upload_data['uploads']['file_name'];
			$this->load->library('image_lib', $config);
			$data = array(
				'status_order' => '1',
				'bukti_pembayaran' => $upload_data['uploads']['file_name']
			);
			$this->m_order->pembayaran($id, $data);
			$this->session->set_flashdata('success', 'Pembayaran Berhasil Dikirim!');
			redirect('Order/detail_pesanan/' . $id);
		}
	}
	public function diterima($id)
	{
		$id_pelanggan = $this->input->post('pelanggan');
		$pelanggan = $this->m_order->pelanggan($id_pelanggan);
		$point_sebelumnya = $pelanggan->point;

		$point_update = $point_sebelumnya + $this->input->post('point');
		//update level member
		if ($point_update <= 1000) {
			$member = '3';
		} else if ($point_update >= 1000) {
			$member = '2';
		} else if ($point_update >= 10000) {
			$member = '1';
		}
		$data = array(
			'point' => $point_update,
			'level_member' => $member
		);
		$this->m_order->update_point($id_pelanggan, $data);

		$status_order = array(
			'status_order' => '4'
		);
		$this->db->where('id_transaksi', $id);
		$this->db->update('transaksi', $status_order);
		$this->session->set_flashdata('success', 'Pesanan Sudah Diterima');
		redirect('Order');
	}

	public function kritiksaran()
	{
		$data = array(
			'isi_kritik' => $this->input->post('review'),
			'id_pelanggan' => $this->session->userdata('id_pelanggan'),
			'id_user' => '1'
		);
		$this->m_order->kritik_saran($data);
		redirect('Order');
	}
	public function all_review()
	{
		$data = array(
			'review' => $this->m_order->review_all()
		);
		$this->load->view('Pelanggan/Layout/head');
		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/review', $data);
		$this->load->view('Pelanggan/Layout/footer');
	}

	//transkasi langsung
	public function detail_pesanan_langsung($id)
	{
		$data = array(
			'detail' => $this->m_order->detail_pesanan_langsung($id)
		);
		$this->load->view('Pelanggan/Layout/head');
		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/detail_pesananLangsung', $data);
		$this->load->view('Pelanggan/Layout/footer');
	}
}

/* End of file cStatusOrder.php */
