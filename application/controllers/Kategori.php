<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('m_kategori');
	}

	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'Data Kategori Produk',
			'kategori' => $this->m_kategori->kategori(),
			'isi' => 'backend/kategori/v_kategori'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	// Add a new item
	public function add()
	{
		$this->form_validation->set_rules('nama_kategori', 'Kategori Produk', 'required', array('required' => '%s Mohon Untuk Diisi'));
		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/kategori';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']  = '5000';
			$this->upload->initialize($config);
			$field_name = "img";
			if (!$this->upload->do_upload($field_name)) {
				$data = array(
					'title' => 'Tambah Kategori',
					'error_upload' => $this->upload->display_errors(),
					'isi' => 'backend/kategori/v_add'
				);
				$this->load->view('backend/v_wrapper', $data, FALSE);
			} else {
				$upload_data = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/kategori' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = array(
					'nama_kategori' => $this->input->post('nama_kategori'),
					'img' => $upload_data['uploads']['file_name'],
				);
				$this->m_kategori->add($data);
				$this->session->set_flashdata('pesan', 'Kategori Berhasil Ditambah');
				redirect('kategori');
			}
		}
		$data = array(
			'title' => 'Tambah Kategori',
			'isi' => 'backend/kategori/v_add'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	//Update one item
	public function update($id_kategori = NULL)
	{
		$this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required', array('required' => '%s Mohon Untuk Diisi'));
		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/kategori';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']  = '5000';
			$this->upload->initialize($config);
			$field_name = "gambar";
			if (!$this->upload->do_upload($field_name)) {
				$data = array(
					'title' => 'Edit Kategori',
					'kategori' => $this->m_kategori->detail_kategori($id_kategori),
					'error_upload' => $this->upload->display_errors(),
					'isi' => 'backend/kategori/v_edit'
				);
				$this->load->view('backend/v_wrapper', $data, FALSE);
			} else {
				//hapus gambar dari folder
				$kategori = $this->m_kategori->detail_kategori($id_kategori);
				if ($kategori->img !== "") {
					unlink('./assets/kategori/' . $kategori->img);
				}
				$upload_data = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/kategori/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = array(
					'id_kategori' => $id_kategori,
					'nama_kategori' => $this->input->post('nama_kategori'),
					'img' => $upload_data['uploads']['file_name'],
				);
				$this->m_kategori->update($data);
				$this->session->set_flashdata('pesan', 'Kategori Berhasil Ditambah');
				redirect('kategori');
			}
			$data = array(
				'id_kategori' => $id_kategori,
				'nama_kategori' => $this->input->post('nama_kategori'),
			);
			$this->m_kategori->update($data);
			$this->session->set_flashdata('pesan', 'Kategori Berhasil Ditambah');
			redirect('kategori');
		}
		$data = array(
			'title' => 'Edit Kategori',
			'kategori' => $this->m_kategori->detail_kategori($id_kategori),
			'isi' => 'backend/kategori/v_edit'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	//Delete one item
	public function delete($id_kategori = NULL)
	{
		//hapus dari folder
		$kategori = $this->m_kategori->detail_kategori($id_kategori);
		if ($kategori->img !== "") {
			unlink('./assets/kategori/' . $kategori->img);
		}
		$data = array(
			'id_kategori' => $id_kategori,
		);
		$this->m_kategori->delete($data);
		$this->session->set_flashdata('pesan', 'Kategori Berhasil Dihapus');
		redirect('kategori');
	}
}

/* End of file Controllername.php */
