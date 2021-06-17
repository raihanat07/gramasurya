<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JadwalMesin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('JadwalMesin_m', 'jm');
    }

	public function index()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Jadwal Mesin Cetak';
		$this->template->load('cetak/template','cetak/jadwal_mesin/jadwalmesin',$data);
	}
	public function display_jm()
	{
		
		$query = $this->jm->get();
		$data = array(
			'judul' => 'Jadwal Mesin Cetak',
			'jm' => $query->result(),
		);
		$this->template->load('cetak/template','cetak/jadwal_mesin/jadwalmesin-display',$data);
	}
	public function lihat_jm()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Jadwal Mesin Cetak';
		$this->template->load('cetak/template','cetak/jadwal_mesin/jadwalmesin-lihat',$data);
	}
	public function edit_jm()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Jadwal Mesin Cetak';
		$this->template->load('cetak/template','cetak/jadwal_mesin/jadwalmesin-edit',$data);
	}
	public function print_jm()
	{
		
		$data['judul'] = 'Jadwal Mesin Cetak';
		$this->template->load('cetak/template','cetak/jadwal_mesin/jadwalmesin-print',$data);		
	}
	public function tambah_spk()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Jadwal Mesin Cetak';
		$this->template->load('cetak/template','cetak/jadwal_mesin/jadwalmesin-tambah-spk',$data);
	}

}
