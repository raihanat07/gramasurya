<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spk extends CI_Controller {

	public function index()
	{
		// check_already_login_cetak();
		$data['judul'] = 'SPK Cetak';
		$this->template->load('cetak/template','cetak/spk_cetak/spkcetak',$data);
	}
	public function lihat_spk()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Lihat SPK Cetak';
		$this->template->load('cetak/template','cetak/spk_cetak/spkcetak-lihat',$data);
	}
	public function edit_spk()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Edit SPK Cetak';
		$this->template->load('cetak/template','cetak/spk_cetak/spkcetak-edit',$data);
	}
	public function buat_spk()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Tambah SPK Mesin Cetak';
		$this->template->load('cetak/template','cetak/spk_cetak/spkcetak-tambah',$data);
	}

}
