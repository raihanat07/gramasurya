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
	
	
}
