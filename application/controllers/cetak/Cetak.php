<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

	public function index()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Cetak';
		$this->template->load('cetak/template','cetak/cetak',$data);
	}


}
