<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finishing extends CI_Controller {

	public function index()
	{
		// check_already_login_finishing();
		$data['judul'] = 'Finishing';
		$this->template->load('finishing/template','finishing/finishing',$data);
	}

}