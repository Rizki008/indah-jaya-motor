<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pesanan');
	}

	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'Pesanan Masuk',
			'masuk' => $this->m_pesanan->masuk(),
			'isi' => 'backend/pesanan/v_masuk'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	// Add a new item
	public function pembayaran()
	{
		$data = array(
			'title' => 'Pesanan Konfirmasi',
			'konfirmasi' => $this->m_pesanan->konfirmasi(),
			'isi' => 'backend/pesanan/v_konfirmasi'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	//Update one item
	public function proses()
	{
		$data = array(
			'title' => 'Pesanan Proses',
			'proses' => $this->m_pesanan->proses(),
			'isi' => 'backend/pesanan/v_proses'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	//Delete one item
	public function kirim()
	{
		$data = array(
			'title' => 'Pesanan Kirim',
			'kirim' => $this->m_pesanan->kirim(),
			'isi' => 'backend/pesanan/v_kirim'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}
	//Delete one item
	public function selesai()
	{
		$data = array(
			'title' => 'Pesanan Selesai',
			'selesai' => $this->m_pesanan->selesai(),
			'isi' => 'backend/pesanan/v_selesai'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}
	//Delete one item
	public function batal()
	{
		$data = array(
			'title' => 'Pesanan Batal',
			'batal' => $this->m_pesanan->batal(),
			'isi' => 'backend/pesanan/v_batal'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	public function detail_pesanan($id = null)
	{
		$data = array(
			'title' => 'Pesanan Detail Pesanan',
			'detail' => $this->m_pesanan->detail_pesanan($id),
			'isi' => 'backend/pesanan/v_detail'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	public function konfirmasi($id_transaksi = null)
	{
		$data = array(
			'status_order' => '2'
		);
		$this->db->where('id_transaksi', $id_transaksi);
		$this->db->update('transaksi', $data);
		$this->session->set_flashdata('pesan', 'Pesanan Segera di Proses');
		redirect('pesanan/proses');
	}

	public function dikirim($id_transaksi = null)
	{
		$data = array(
			'status_order' => '3'
		);
		$this->db->where('id_transaksi', $id_transaksi);
		$this->db->update('transaksi', $data);
		$this->session->set_flashdata('pesan', 'Pesanan Segera di Kirim');
		redirect('pesanan/kirim');
	}

	public function pesanan_diterima_admin($id = null)
	{
		$id_pelanggan = $this->input->post('pelanggan');
		$pelanggan = $this->m_pesanan->pelanggan($id_pelanggan);
		$point_sebelum = $pelanggan->point;

		$point_update = $point_sebelum + $this->input->post('point');

		if ($point_update <= 1000) {
			$member = '3';
		} elseif ($point_update >= 1000) {
			$member = '2';
		} elseif ($point_update >= 10000) {
			$member = '1';
		}
		$data = array(
			'point' => $point_update,
			'level_member' => $member
		);
		$this->m_pesanan->update_point($id_pelanggan, $data);

		$status_order = array(
			'status_order' => '4'
		);
		$this->db->where('id_transaksi', $id);
		$this->db->update('transaksi', $status_order);
		$this->session->set_flashdata('success', 'Pesanan Sudah Diterima');
		redirect('pesanan/selesai');
	}
}

/* End of file Pesanan.php */
