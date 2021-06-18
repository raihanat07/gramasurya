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
	public function jadwal_72()
	{
		
		$query = $this->jm->get_jadwal_72();
		$data = array(
			'judul' => 'Jadwal Mesin Cetak',
			'jm' => $query->result(),
		);
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_72/jadwalmesin-72',$data);
	}
	public function lihat_72()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Jadwal Mesin Cetak';
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_72/jadwalmesin-72-lihat',$data);
	}
	public function edit_72()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Jadwal Mesin Cetak';
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_72/jadwalmesin-72-edit',$data);
	}
	public function print_72()
	{
		
		$data['judul'] = 'Jadwal Mesin Cetak';
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_72/jadwalmesin-72-print',$data);		
	}
	public function tambah_spk_72()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Jadwal Mesin Cetak';
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_72/mesin72-tambah-spk',$data);
	}

}
