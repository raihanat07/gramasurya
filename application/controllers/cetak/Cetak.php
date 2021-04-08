<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Cetak';
		$this->template->load('cetak/template','cetak/cetak',$data);
	}


}
