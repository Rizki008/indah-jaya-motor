<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('m_kategori');
		$this->load->model('m_produk');
	}

	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'Data Kategori Produk',
			'produk' => $this->m_produk->produk(),
			'isi' => 'backend/produk/v_produk'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	// Add a new item
	public function add()
	{
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required', array('pesan' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('id_kategori', 'Nama Kategori', 'required', array('pesan' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('tipe', 'Tipe', 'required', array('pesan' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('harga', 'Harga', 'required', array('pesan' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('stok', 'Stok', 'required', array('pesan' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', array('pesan' => '%s Mohon Untuk Diisi!!!'));
		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/produk';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']  = '5000';
			$this->upload->initialize($config);
			$field_name = "gambar";
			if (!$this->upload->do_upload($field_name)) {
				$data = array(
					'title' => 'Tambah produk',
					'kategori' => $this->m_kategori->kategori(),
					'error_upload' => $this->upload->display_errors(),
					'isi' => 'backend/produk/v_add'
				);
				$this->load->view('backend/v_wrapper', $data, FALSE);
			} else {
				$upload_data = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/produk' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = array(
					'id_produk' => $this->input->post('id_produk'),
					'nama_produk' => $this->input->post('nama_produk'),
					'id_kategori' => $this->input->post('id_kategori'),
					'harga' => $this->input->post('harga'),
					'tipe' => $this->input->post('tipe'),
					'stok' => $this->input->post('stok'),
					'deskripsi' => $this->input->post('deskripsi'),
					'gambar' => $upload_data['uploads']['file_name'],
				);
				$this->m_produk->add($data);

				//memasukkan data diskon
				for ($i = 1; $i <= 3; $i++) {
					$diskon = array(
						'id_produk' => $this->input->post('id_produk'),
						'nama_diskon' => '0',
						'diskon' => '0',
						'tgl_selesai' => '0',
						'member' => $i
					);
					$this->m_produk->diskon($diskon);
				}

				$this->session->set_flashdata('pesan', 'produk Berhasil Ditambah');
				redirect('produk');
			}
		}
		$data = array(
			'title' => 'Tambah produk',
			'kategori' => $this->m_kategori->kategori(),
			'isi' => 'backend/produk/v_add'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	//Update one item
	public function update($id_produk = NULL)
	{
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required', array('pesan' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('id_kategori', 'Nama Kategori', 'required', array('pesan' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('tipe', 'Tipe', 'required', array('pesan' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('harga', 'Harga', 'required', array('pesan' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('stok', 'Stok', 'required', array('pesan' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', array('pesan' => '%s Mohon Untuk Diisi!!!'));
		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/produk';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']  = '5000';
			$this->upload->initialize($config);
			$field_name = "gambar";
			if (!$this->upload->do_upload($field_name)) {
				$data = array(
					'title' => 'Edit produk',
					'produk' => $this->m_produk->detail_produk($id_produk),
					'kategori' => $this->m_kategori->kategori(),
					'error_upload' => $this->upload->display_errors(),
					'isi' => 'backend/produk/v_edit'
				);
				$this->load->view('backend/v_wrapper', $data, FALSE);
			} else {
				//hapus gambar dari folder
				$produk = $this->m_produk->detail_produk($id_produk);
				if ($produk->gambar !== "") {
					unlink('./assets/produk/' . $produk->gambar);
				}
				$upload_data = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/produk/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = array(
					'id_produk' => $id_produk,
					'nama_produk' => $this->input->post('nama_produk'),
					'id_kategori' => $this->input->post('id_kategori'),
					'harga' => $this->input->post('harga'),
					'tipe' => $this->input->post('tipe'),
					'stok' => $this->input->post('stok'),
					'deskripsi' => $this->input->post('deskripsi'),
					'gambar' => $upload_data['uploads']['file_name'],
				);
				$this->m_produk->update($data);
				$this->session->set_flashdata('pesan', 'produk Berhasil Ditambah');
				redirect('produk');
			}
			$data = array(
				'id_produk' => $id_produk,
				'nama_produk' => $this->input->post('nama_produk'),
				'id_kategori' => $this->input->post('id_kategori'),
				'harga' => $this->input->post('harga'),
				'tipe' => $this->input->post('tipe'),
				'stok' => $this->input->post('stok'),
				'deskripsi' => $this->input->post('deskripsi'),
			);
			$this->m_produk->update($data);
			$this->session->set_flashdata('pesan', 'produk Berhasil Ditambah');
			redirect('produk');
		}
		$data = array(
			'title' => 'Edit produk',
			'kategori' => $this->m_kategori->kategori(),
			'produk' => $this->m_produk->detail_produk($id_produk),
			'isi' => 'backend/produk/v_edit'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	//Delete one item
	public function delete($id_produk = NULL)
	{
		//hapus dari folder
		$produk = $this->m_produk->detail_produk($id_produk);
		if ($produk->gambar !== "") {
			unlink('./assets/produk/' . $produk->gambar);
		}
		$data = array(
			'id_produk' => $id_produk,
		);
		$this->m_produk->delete($data);
		$this->session->set_flashdata('pesan', 'produk Berhasil Dihapus');
		redirect('produk');
	}
}

/* End of file Controllername.php */
