<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
	}
	public function index()
	{
		$data = array(
			'title' => 'Indah Jaya Motor',
			'stok' => $this->m_admin->stok_produk(),
			'chatting' => $this->m_admin->chatting(),
			'kritik' => $this->m_admin->kritik_saran(),
			'isi' => 'v_admin'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	public function view_chatting($id)
	{
		$data = array(
			'title' => 'Indah Jaya Motor',
			'id' => $id,
			'chatting' => $this->m_admin->view_chatting($id),
			'isi' => 'backend/chatting/v_chatting'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}
	public function balas($id)
	{
		$data = array(
			'id_pelanggan' => $id,
			'id_user' => '1',
			'admin_send' => $this->input->post('pesan')
		);
		$this->db->insert('chatting', $data);
		redirect('Admin/view_chatting/' . $id);
	}
	public function balas_kritik()
	{
		$data = array(
			'id_pelanggan' => '1',
			'id_user' => $this->session->userdata('id'),
			'jawab_kritik' => $this->input->post('balas')
		);
		$this->db->insert('kritik_saran', $data);
		redirect('Admin');
	}
}
