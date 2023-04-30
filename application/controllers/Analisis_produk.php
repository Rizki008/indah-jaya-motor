<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Analisis_produk extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_laporan');
	}


	public function index()
	{
		$data = array(
			'title' => 'Laporan Produk',
			'grafik_produk' => $this->m_laporan->grafik_produk(),
			'isi' => 'backend/laporan/v_lap_produk'
		);
		$this->load->view('backend/v_wrapper', $data);
	}

	public function lap_harian_produk()
	{
		$tanggal = $this->input->post('tanggal');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		$data = array(
			'title' => 'Laporan Produk',
			'tanggal' => $tanggal,
			'bulan' => $bulan,
			'tahun' => $tahun,
			'laporan' => $this->m_laporan->lap_harian_produk($tanggal, $bulan, $tahun),
			'isi' => 'backend/laporan/laporanProduk/harian'
		);
		$this->load->view('backend/v_wrapper', $data);
	}
	public function lap_bulanan_produk()
	{
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		$data = array(
			'title' => 'Laporan Produk',
			'bulan' => $bulan,
			'tahun' => $tahun,
			'laporan' => $this->m_laporan->lap_bulanan_produk($bulan, $tahun),
			'isi' => 'backend/laporan/laporanProduk/bulanan'
		);
		$this->load->view('backend/v_wrapper', $data);
	}
	public function lap_tahunan_produk()
	{
		$tahun = $this->input->post('tahun');

		$data = array(
			'title' => 'Laporan Produk',
			'tahun' => $tahun,
			'laporan' => $this->m_laporan->lap_tahunan_produk($tahun),
			'isi' => 'backend/laporan/laporanProduk/tahunan'
		);
		$this->load->view('backend/v_wrapper', $data);
	}
}

/* End of file claporan.php */
