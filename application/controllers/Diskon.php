<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Diskon extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_diskon');
		$this->load->model('m_produk');
	}
	public function index()
	{
		$data = array(
			'title' => 'Data diskon',
			'diskon' => $this->m_diskon->diskon(),
			'isi' => 'backend/diskon/v_diskon'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$this->form_validation->set_rules('produk', 'Produk', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('harga', 'Harga Sebelumnya', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('nama_diskon', 'Nama Diskon', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('diskon', 'Besar Diskon', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('tgl', 'Tanggal Selesai', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('level', 'Level Member', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Tambah Diskon',
				'produk' => $this->m_produk->produk(),
				'isi' => 'backend/diskon/v_add'
			);
			$this->load->view('backend/v_wrapper', $data, FALSE);
		} else {
			$id_produk = $this->input->post('produk');
			$level = $this->input->post('level');
			$data = array(
				'nama_diskon' => $this->input->post('nama_diskon'),
				'tgl_selesai' => $this->input->post('tgl'),
				'diskon' => $this->input->post('diskon')
			);
			$this->m_diskon->update($id_produk, $level, $data);
			$this->session->set_flashdata('success', 'Data Diskon Berhasil Ditambahkan!');
			redirect('diskon');
		}
	}
	public function update($id = null)
	{
		$this->form_validation->set_rules('produk', 'Produk', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('harga', 'Harga Sebelumnya', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('nama_diskon', 'Nama Diskon', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('diskon', 'Besar Diskon', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('tgl', 'Tanggal Selesai', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('level', 'Level Member', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Edit Diskon',
				'produk' => $this->m_produk->produk(),
				'diskon' => $this->m_diskon->detail_diskon($id),
				'isi' => 'backend/diskon/v_edit'
			);
			$this->load->view('backend/v_wrapper', $data, FALSE);
		} else {
			$id_produk = $this->input->post('produk');
			$level = $this->input->post('level');
			$data = array(
				'nama_diskon' => $this->input->post('nama_diskon'),
				'tgl_selesai' => $this->input->post('tgl'),
				'diskon' => $this->input->post('diskon')
			);
			$this->m_diskon->update($id_produk, $level, $data);
			$this->session->set_flashdata('success', 'Data Diskon Berhasil Ditambahkan!');
			redirect('diskon');
		}
	}
	public function delete($id)
	{
		$data = array(
			'nama_diskon' => '0',
			'tgl_selesai' => '0',
			'diskon' => '0'
		);
		$this->m_diskon->delete($id, $data);
		$this->session->set_flashdata('success', 'Data Diskon Berhasil Dihapus!');
		redirect('diskon');
	}
}
