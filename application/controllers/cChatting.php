<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cChatting extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mChatting');
	}
	public function index()
	{

		$this->form_validation->set_rules('message', 'Pesan', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->pelanggan_login->proteksi_halaman();
			$data = array(
				'title' => 'Chatting',
				'chat' => $this->mChatting->chat(),
				'isi' => 'frontend/chatting/v_chatting'
			);
			$this->load->view('frontend/v_wrapper', $data);
		} else {
			$data = array(
				'id_pelanggan' => $this->input->post('id_pelanggan'),
				'id_user' => '1',
				'pelanggan_send' => $this->input->post('message')
			);
			$this->mChatting->pelanggan_send($data);
			redirect('cchatting');
		}
	}
}

/* End of file cChatting.php */
