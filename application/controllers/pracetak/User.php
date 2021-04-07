<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->model('user_m');
		$data['row'] = $this->user_m->get();
		$data['judul'] = 'User';
		$this->template->load('pracetak/template','pracetak/user/user',$data );
	}
	
	public function tambah_user()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('level', 'Level', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[password]',
			array('matches' => '%s tidak sesuai dengan password')
		);
		$this->form_validation->set_message('required', '%s masih kosong');

		if ($this->form_validation->run() == FALSE)
		{
			$data['judul'] = 'Tambah User';
			$this->template->load('pracetak/template','pracetak/user/tambah_user', $data );
		}
		else
		{
				echo "berhasil";
		}
		
	}
	
}
