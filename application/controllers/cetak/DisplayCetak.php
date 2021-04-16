<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DisplayCetak extends CI_Controller {

	public function index()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Display Cetak';
		$this->template->load('cetak/template','cetak/display_cetak/displaycetak',$data);
	}
	public function lihat_dc()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Lihat Display Cetak';
		$this->template->load('cetak/template','cetak/display_cetak/displaycetak-lihat',$data);
	}
	public function edit_dc()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Edit Display Cetak';
		$this->template->load('cetak/template','cetak/display_cetak/displaycetak-edit',$data);
	}

}
