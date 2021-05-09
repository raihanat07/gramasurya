<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JadwalMesin extends CI_Controller {

	public function index()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Jadwal Mesin Cetak';
		$this->template->load('cetak/template','cetak/jadwal_mesin/jadwalmesin',$data);
	}
	public function lihat_jm()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Lihat Jadwal Mesin Cetak';
		$this->template->load('cetak/template','cetak/jadwal_mesin/jadwalmesin-lihat',$data);
	}
	public function edit_jm()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Edit Jadwal Mesin Cetak';
		$this->template->load('cetak/template','cetak/jadwal_mesin/jadwalmesin-edit',$data);
	}

}
