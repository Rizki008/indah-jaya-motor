<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pesanan');
		$this->load->model('m_cekout');
	}


	// List all your items
	public function index()
	{
		if (empty($this->cart->contents())) {
			redirect('home');
		}
		$data = array(
			'title' => 'Keranjang Belanja',
			'isi' => 'frontend/cart/v_cart'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}

	public function add_cart()
	{
		$this->pelanggan_login->proteksi_halaman();
		$data = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			'price' => $this->input->post('price'),
			'qty' => $this->input->post('qty'),
			'picture' => $this->input->post('picture'),
			'stok' => $this->input->post('stok'),
			'disc' => $this->input->post('diskon'),
		);
		$this->cart->insert($data);
		$this->session->set_flashdata('success', 'Data Produk Berhasil Disimpan Dikeranjang!');
		redirect('Cart');
	}
	public function update_cart()
	{
		$i = 1;
		foreach ($this->cart->contents() as $items) {
			$data = array(
				'rowid'  => $items['rowid'],
				'qty'    => $this->input->post($i . '[qty]')
			);
			$this->cart->update($data);
			$i++;
		}
		redirect('Cart');
	}
	public function delete($rowid)
	{
		$this->cart->remove($rowid);
		redirect('Cart');
	}
	function add_ajax_kec()
	{
		$id = $this->input->post('id', TRUE);
		$data = $this->m_pesanan->kecamatan($id);
		echo json_encode($data);
	}
	public function pesan()
	{
		$this->pelanggan_login->proteksi_halaman();
		$this->form_validation->set_rules('kota', 'Kota', 'required');
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
		// $this->form_validation->set_rules('rt', 'RT', 'required');
		// $this->form_validation->set_rules('rw', 'RW', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('frontend/cart/v_cart');
		} else {
			//menyimpan tabel trasnsaksi
			$data = array(
				'id_transaksi' => $this->input->post('id_transaksi'),
				'id_pelanggan' => $this->session->userdata('id_pelanggan'),
				'tgl_transaksi' => date('Y-m-d'),
				'total_bayar' => $this->input->post('total'),
				'status_order' => '0',
				'bukti_pembayaran' => '0'
			);
			$this->m_cekout->transaksi($data);

			//menyimpan ke pengiriman
			$pengiriman = array(
				'id_transaksi' => $this->input->post('id_transaksi'),
				// 'rt' => $this->input->post('rt'),
				// 'rw' => $this->input->post('rw'),
				'ongkir' => $this->input->post('ongkir'),
				'alamat_pengiriman' => $this->input->post('alamat'),
				'id_kecamatan' => $this->input->post('kecamatan'),
				'kota' => $this->input->post('kota')
			);
			$this->m_cekout->pengiriman($pengiriman);


			//menyimpan pesanan ke detail transaksi
			$i = 1;
			foreach ($this->cart->contents() as $item) {
				$data_rinci = array(
					'id_transaksi' => $this->input->post('id_transaksi'),
					'id_diskon' => $item['id'],
					'qty' => $this->input->post('qty' . $i++)
				);
				$this->m_cekout->detail_transaksi($data_rinci);
			}

			//mengurangi jumlah stok
			$kstok = 0;
			foreach ($this->cart->contents() as $key => $value) {
				$id = $value['id'];
				$kstok = $value['stok'] - $value['qty'];
				$data = array(
					'stok' => $kstok
				);
				$this->m_cekout->stok($id, $data);
			}


			$this->cart->destroy();
			redirect('Order');
		}
	}
}

/* End of file Cart.php */
