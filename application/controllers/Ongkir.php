<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Ongkir extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_ongkir');
	}

	// List all your items
	public function index()
	{
		$this->form_validation->set_rules('nama', 'Nama Kecamatan', 'required|is_unique[kecamatan.nm_kecamatan]', array(
			'required' => '%s Mohon Untuk diisi!!!',
			'is_unique' => '%s Nama Kecamatan Sudah ada!!!'
		));
		$this->form_validation->set_rules('ongkir', 'Biaya Ongkos Pengiriman', 'required', array(
			'required' => '%s Mohon Untuk diisi!!!'
		));


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Data Biaya Ongkos Pengiriman',
				'kecamatan' => $this->m_ongkir->kecamatan(),
				'isi' => 'backend/ongkir/v_kecamatan'
			);
			$this->load->view('backend/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'nm_kecamatan' => $this->input->post('nama'),
				'kode' => 1,
				'ongkir' => $this->input->post('ongkir'),
			);
			$this->m_ongkir->add($data);
			$this->session->set_flashdata('pesan', 'Data berhasil di tambahkan!!!');
			redirect('ongkir', 'refresh');
		}
	}

	//Update one item
	public function update($id_kecamatan = NULL)
	{
		$this->form_validation->set_rules('nama', 'Nama Kecamatan', 'required|is_unique[kecamatan.nm_kecamatan]', array(
			'required' => '%s Mohon Untuk diisi!!!',
			'is_unique' => '%s Nama Kecamatan Sudah ada!!!'
		));
		$this->form_validation->set_rules('ongkir', 'Biaya Ongkos Pengiriman', 'required', array(
			'required' => '%s Mohon Untuk diisi!!!'
		));


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Data Biaya Ongkos Pengiriman',
				'kecamatan' => $this->m_ongkir->detail_kecamatan($id_kecamatan),
				'isi' => 'backend/ongkir/v_edit'
			);
			$this->load->view('backend/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'id_kecamatan' => $id_kecamatan,
				'nm_kecamatan' => $this->input->post('nama'),
				'ongkir' => $this->input->post('ongkir'),
			);
			$this->m_ongkir->update($data);
			$this->session->set_flashdata('pesan', 'Data berhasil di tambahkan!!!');
			redirect('ongkir');
		}
	}

	//Delete one item
	public function delete($id_kecamatan = NULL)
	{
		$data = array(
			'id_kecamatan' => $id_kecamatan,
		);
		$this->m_ongkir->delete($data);
		$this->session->set_flashdata('pesan', 'Ongkir Berhasil Dihapus');
		redirect('ongkir', 'refresh');
	}
}

/* End of file Ongkir.php */
