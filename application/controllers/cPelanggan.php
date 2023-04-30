<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPelanggan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_laporan');
	}
	public function index()
	{
		$data = array(
			'title' => 'Pelanggan',
			'lap' => $this->m_laporan->member(),
			'isi' => 'backend/pelanggan/vpelanggan',
		);
		$this->load->view('backend/v_wrapper', $data);
	}
}

/* End of file cPelanggan.php */
