<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelamar extends CI_Controller  
{
	public function index()
	{

	}


	public function registrasi()
	{
		if(! empty($_FILES['foto_ijazah']['name'])) {
			$foto_ijazah = $this->_uploadImage('foto_ijazah');
		} else {
			$foto_ijazah = 'default.png';
		}
		if(! empty($_FILES['foto_pelamar']['name'])) {
			$foto_pelamar = $this->_uploadImage('foto_pelamar');
		} else {
			$foto_pelamar = 'default.png';
		}
		$data = [
			'username'			=> $this->input->post('username',true),
			'password'			=> password_hash($this->input->post('password'),PASSWORD_DEFAULT),
			'nama_lengkap'		=> $this->input->post('nama',true),
			'tgl_lahir'			=> $this->input->post('tgl_lahir',true),
			'agama'				=> $this->input->post('agama',true),
			'kewarganegaraan'	=> $this->input->post('kewarganegaraan',true),
			'jenjang_pendidikan'=> $this->input->post('jenjang_pendidikan',true),
			'pas_foto_ijazah'	=> $foto_ijazah,
			'umur'				=> $this->input->post('umur',true),
			'status'			=> $this->input->post('status',true),
			'jenis_kelamin'		=> $this->input->post('jk',true),
			'alamat_lengkap'	=> $this->input->post('alamat',true),
			'no_hp'				=> $this->input->post('no_hp',true),
			'pas_foto'			=> $foto_pelamar,
			'tanggal'			=> date('Y-m-d'),
		];

		$this->db->insert('registrasi',$data);

		alertsuccess('message','Berhasil registrasi, silahkan login dengan akun yang baru anda buat');
		redirect('page/login');

	}
 
	private function _uploadImage($name)
	 {
	    $config['upload_path']          = './assets/img/pelamar/';
	    $config['allowed_types']        = 'gif|jpg|png';
	    $config['file_name']            = time().uniqid();
	    $config['overwrite']			= true;
	    $config['max_size']             = 1024; // 1MB

	    $this->load->library('upload', $config);

	    if ($this->upload->do_upload($name)) { 
	      $filename =  $this->upload->data("file_name");
	    } else {
	      $filename = 'default.png';
	    }
	    $data = [
	      'image' => $filename,
	    ];

	    return $filename;
  	}

}