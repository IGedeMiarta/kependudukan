<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('auth/auth_header');
			$this->load->view('auth/login');
			$this->load->view('auth/auth_footer');
		} else {
			$this->_login();
		}
	}
	private function _login()
	{

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['username' => $username])->row_array();
		//jika user ada
		if ($user) {
			//cek password
			$data1 = password_verify($password, $user['password']);
			if (password_verify($password, $user['password'])) {

				if ($user['role'] == 1) {
					$data = [
						'username' => $user['username'],
						'status' => 'login_admin'
					];
					$this->session->set_userdata($data);
					redirect('admin');
				} else if ($user['role'] == 2) {
					$data = [
						'username' => $user['username'],
						'status' => 'login_petugas'
					];
					$this->session->set_userdata($data);
					redirect('petugas');
				}
			} else {
				$this->session->set_flashdata('messege', '<div class="alert alert-danger" role="alert">Password Salah</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('messege', '<div class="alert alert-danger" role="alert">Username Belum Terdaftar!</div>');
			redirect('auth');
		}
	}

	public function registration()
	{


		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
			'is_unique' => 'Username Sudah Terdaftar!'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
			'matches' => 'Password tidak cocok!',
			'min_length' => 'Password terlalu pendek!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]');

		if ($this->form_validation->run() == false) {
			$this->load->view('auth/auth_header');
			$this->load->view('auth/registration');
			$this->load->view('auth/auth_footer');
		} else {
			$nama = $this->input->post('name', true);
			$username = $this->input->post('username', true);
			$data = [
				'nama' => $nama,
				'username' => $username,
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role' => 1
			];
			$this->db->insert('user', $data);
			$this->session->set_flashdata('messege', '<div class="alert alert-success" role="alert">Akun Anda Sudah dibuat, silahkan login</div>');
			redirect('auth');
		}
	}



	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->unset_userdata('keyword');
		$this->session->unset_userdata('id_login');


		$this->session->set_flashdata('messege', '<div class="alert alert-danger" role="alert">Anda Sudah Logout</div>');
		redirect('login');
	}
}