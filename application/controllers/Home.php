<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_home');
		$this->load->model('m_kategori');
		$this->load->model('m_order');
	}

	public function index()
	{
		$data = array(
			'title' => 'Indah Jaya Motor',
			'produk_kategori' => $this->m_home->produk_kategori(),
			'produk' => $this->m_home->katalog(),
			'produk_all' => $this->m_home->produk_all(),
			'kategori' => $this->m_kategori->kategori(),
			'isi' => 'v_home'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}

	public function detail_produk($id = null)
	{
		$data = array(
			'title' => 'Detail Produk',
			'data' => $this->m_home->detail_produk($id),
			// 'gambar' => $this->m_home->gambar_produk($id),
			'kategori' => $this->m_kategori->kategori(),
			'produk_all' => $this->m_home->produk_all(),
			'related_produk' => $this->m_home->related_produk($id),
			'review' => $this->m_order->review_all(),
			'isi' => 'frontend/cart/v_detail_produk'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}

	public function kategori($id_kategori)
	{
		$kategori = $this->m_home->kategori_produk($id_kategori);
		$data = array(
			'title' => $kategori->nama_kategori,
			'produk' => $this->m_home->produk_kategori_all($id_kategori),
			'best_produk' => $this->m_home->best_produk(),
			'kategori' => $this->m_kategori->kategori(),
			'isi' => 'frontend/detail/v_detail',
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}
}
