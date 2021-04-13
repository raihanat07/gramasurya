<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DisplayUmum extends CI_Controller {

	public function index()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Display Umum Cetak';
		$this->template->load('cetak/template','cetak/display_umum/displayumum',$data);
	}
	public function lihat_du()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Lihat Display Umum';
		$this->template->load('cetak/template','cetak/display_umum/displayumum-lihat',$data);
	}

}
