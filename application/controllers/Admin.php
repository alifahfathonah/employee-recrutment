<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function login()
	{
		$this->template->load('template','page/admin/login');
	}

	public function auth()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('admin_login',['username' => $username])->row();

		if($user) {
			if(password_verify($password, $user->password)) {
				$data = [
					'username' 	=> $user->username,
					'role'	=> 'admin'
				];
				$this->session->set_userdata($data);

				redirect('admin/test');
			} else {
				alerterror('message','Password salah');
				redirect('admin/login');
			}
		} else {
			alerterror('message','Username tidak ditemukan');
			redirect('admin/login');
		}
	}

}