<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_laporan');
	}


	public function index()
	{
		$data = array(
			'title' => 'Laporan Transaksi',
			'grafik' => $this->m_laporan->grafik_transaksi(),
			'isi' => 'backend/laporan/v_lap_transaksi'
		);
		$this->load->view('backend/v_wrapper', $data);
	}

	public function lap_harian_transaksi()
	{
		$tanggal = $this->input->post('tanggal');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		$data = array(
			'title' => 'Laporan Transaksi',
			'tanggal' => $tanggal,
			'bulan' => $bulan,
			'tahun' => $tahun,
			'laporan' => $this->m_laporan->lap_harian_transaksi($tanggal, $bulan, $tahun),
			'isi' => 'backend/laporan/harian'
		);
		$this->load->view('backend/v_wrapper', $data);
	}
	public function lap_bulanan_transaksi()
	{
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		$data = array(
			'title' => 'Laporan Transaksi',
			'bulan' => $bulan,
			'tahun' => $tahun,
			'laporan' => $this->m_laporan->lap_bulanan_transaksi($bulan, $tahun),
			'isi' => 'backend/laporan/bulanan'
		);
		$this->load->view('backend/v_wrapper', $data);
	}
	public function lap_tahunan_transaksi()
	{
		$tahun = $this->input->post('tahun');

		$data = array(
			'title' => 'Laporan Transaksi',
			'tahun' => $tahun,
			'laporan' => $this->m_laporan->lap_tahunan_transaksi($tahun),
			'isi' => 'backend/laporan/tahunan'
		);
		$this->load->view('backend/v_wrapper', $data);
	}
}

/* End of file claporan.php */
