<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_auth');
	}


	public function user_login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == TRUE) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->user_login->login($username, $password);
		} else {
			$data = array(
				'title' => 'Login User',
			);
			$this->load->view('backend/v_login', $data, FALSE);
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('level');
		$this->session->set_flashdata('success', 'Anda Berhasil LogOut!');
		redirect('auth/user_login');
	}
}

/* End of file cLogin.php */
