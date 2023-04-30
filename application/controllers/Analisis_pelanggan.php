<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Analisis_pelanggan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_laporan');
	}


	public function index()
	{
		$data = array(
			'title' => 'Analisis Pelanggan',
			'lap' => $this->m_laporan->member(),
			'isi' => 'backend/laporan/v_lap_pelanggan'
		);
		$this->load->view('backend/v_wrapper', $data);
	}
	public function kelola_pelanggan($id)
	{
		$data = array(
			'nm_pel' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'no_tlpon' => $this->input->post('no_hp'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		$this->db->where('id_pelanggan', $id);
		$this->db->update('pelanggan', $data);
		redirect('Admin/cPelanggan');
	}
	public function tambah_pelanggan()
	{
		$data = array(
			'nm_pel' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'no_tlpon' => $this->input->post('no_hp'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'email' => $this->input->post('email')
		);
		$this->db->insert('pelanggan', $data);
		redirect('Admin/cPelanggan');
	}
	public function hapus_pelanggan($id)
	{
		$this->db->where('id_pelanggan', $id);
		$this->db->delete('pelanggan');
		redirect('Admin/cPelanggan');
	}
}

/* End of file cAnalisis_member.php */
