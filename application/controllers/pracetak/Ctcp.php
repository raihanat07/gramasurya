<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctcp extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'CTCP';
		$this->template->load('pracetak/template','pracetak/ctcp',$data);
	}
}
