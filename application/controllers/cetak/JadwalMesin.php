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
	public function lihat_72($id)
	{
		$query = $this->jm->get_lihat_72($id);
		$data = array(
			'judul' => 'Lihat Mesin 72',
			'jm' => $query->result(),
		);
		// check_already_login_cetak();
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
	public function tambah_spk_72($id)
	{
		// $query = $this->dc->get_dc($id);
		// $data = array(
		// 	$data['judul'] = 'Jadwal Mesin Cetak';
		// 	'dc' => $query->result(),
		// );
		$query = $this->jm->get_tambah_spk_72($id);
		$data = array(
			'judul' => 'Jadwal Mesin Cetak',
			'jm' => $query->result(),
		);
		// check_already_login_cetak();
		
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_72/mesin72-tambah-spk',$data);
	}
	public function proses_tambah_72()
	{
		if(isset($_POST['add'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->jm->add_spk_72($inputan);
				if($this->db->affected_rows() > 0){
					echo "<script> alert('Data Berhasil Ditambahkan'); </script>";
				}
				echo "<script>window.location='".site_url('cetak/jadwalmesin/jadwal_72')."'; </script>"; 
		} else if(isset($_POST['edit'])){ 
			$inputan = $this->input->post(null, TRUE);			
			$this->jm->edit($inputan);
				if($this->db->affected_rows() > 0){					
					// echo "<script> alert('Data Berhasil Diubah'); </script>";
				}
				echo "<script>window.location='".site_url('cetak/jadwal_mesin/mesin_72/jadwalmesin-72')."'; </script>"; 
		}
		
		
	}

}
