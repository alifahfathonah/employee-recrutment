<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index()
	{
		$this->template->load('template','page/home');
	}

	public function registrasi()
	{
		$this->template->load('template','page/registrasi');
	}

	public function login()
	{
		$this->template->load('template','page/login');
	}

	public function career()
	{
		$this->db->order_by('id' ,'DESC');
		$data['careers'] = $this->db->get('info_loker')->result();
		$this->template->load('template','page/career',$data);
	}

	public function cara_apply()
	{
		$this->template->load('template','page/career/cara_apply');
	}
	
	public function doc_pelamar()
	{
		$this->template->load('template','page/career/doc_pelamar');
	}

	public function klasifikasi()
	{
		$this->template->load('template','page/career/klasifikasi');
	}
}
