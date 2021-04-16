<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JadwalUmum extends CI_Controller {

	public function index()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Jadwal Umum Cetak';
		$this->template->load('cetak/template','cetak/jadwal_umum/jadwalumum',$data);
	}
	public function lihat_ju()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Lihat Jadwal Umum';
		$this->template->load('cetak/template','cetak/jadwal_umum/jadwalumum-lihat',$data);
	}
	public function edit_ju()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Edit Jadwal Umum';
		$this->template->load('cetak/template','cetak/jadwal_umum/jadwalumum-edit',$data);
	}

}
