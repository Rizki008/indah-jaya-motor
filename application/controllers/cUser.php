<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cUser extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mUser');
	}

	public function index()
	{
		$data = array(
			'title' => 'User',
			'user' => $this->mUser->select(),
			'isi' => 'backend/user/user'
		);
		$this->load->view('backend/v_wrapper', $data);
	}
	public function createUser()
	{
		$this->form_validation->set_rules('nama', 'Nama User', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat User', 'required');
		$this->form_validation->set_rules('no_hp', 'No Telepon', 'required|min_length[11]|max_length[13]');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'User',
				'user' => $this->mUser->select(),
				'isi' => 'backend/user/createUser'
			);
			$this->load->view('backend/v_wrapper', $data);
		} else {
			$data = array(
				'nama_user' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('no_hp'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'level_user'  => '1',
			);
			$this->mUser->insert($data);
			$this->session->set_flashdata('success', 'Data User Berhasil Disimpan!');
			redirect('cUser');
		}
	}
	public function update($id)
	{
		$this->form_validation->set_rules('nama', 'Nama User', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat User', 'required');
		$this->form_validation->set_rules('no_hp', 'No Telepon', 'required|min_length[11]|max_length[13]');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'User',
				'user' => $this->mUser->edit($id),
				'isi' => 'backend/user/updateUser'
			);
			$this->load->view('backend/v_wrapper', $data);
		} else {
			$data = array(
				'nama_user' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('no_hp'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'level_user'  => '1',
			);
			$this->mUser->update($id, $data);
			$this->session->set_flashdata('success', 'Data User Berhasil Diperbaharui!');
			redirect('cUser');
		}
	}
	public function delete($id)
	{
		$this->mUser->delete($id);
		$this->session->set_flashdata('success', 'Data User Berhasil Dihapus!');
		redirect('cUser');
	}
}

/* End of file cUser.php */
