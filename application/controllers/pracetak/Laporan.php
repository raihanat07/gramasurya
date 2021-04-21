<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Laporan_m', 'laporan');
    }

	public function index()
	{
		check_not_login();
		$query = $this->laporan->get();
		$data = array(
			'judul' => 'Laporan',
			'laporan' => $query->result(),
		);	
		$this->template->load('pracetak/template','pracetak/laporan/laporan',$data);
	}

	public function edit_laporan()
	{
		check_not_login();
		$query = $this->laporan->get_lihatlaporan();
		$data = array(
			'judul' => 'Edit Laporan',
			'laporan' => $query->result(),
		);	
		$this->template->load('pracetak/template','pracetak/laporan/laporan-edit',$data);
	}

	public function tambah_laporan()
	{
		check_not_login();
		$query = $this->laporan->get_lihat();
		$data = array(
			'judul' => 'Tambah Laporan',
			'laporan' => $query->result(),
		);	
		$this->template->load('pracetak/template','pracetak/laporan/laporan-tambah',$data);
	}

	public function lihat_laporan()
	{
		check_not_login();
		$query = $this->laporan->get_lihatlaporan();
		$data = array(
			'judul' => 'Lihat Laporan',
			'laporan' => $query->result(),
		);	
		$this->template->load('pracetak/template','pracetak/laporan/laporan-lihat',$data);
	}

	public function proses()
	{		
		if(isset($_POST['add'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->laporan->tambah_laporan($inputan);
				if($this->db->affected_rows() > 0){
					echo "<script> alert('Data Berhasil Ditambahkan'); </script>";
				}
				echo "<script>window.location='".site_url('pracetak/laporan')."'; </script>"; 
		} else if(isset($_POST['edit'])){ 
			$inputan = $this->input->post(null, TRUE);			
			$this->laporan->edit_laporan($inputan);
				if($this->db->affected_rows() > 0){					
					echo "<script> alert('Data Berhasil Diubah'); </script>";
				}
				echo "<script>window.location='".site_url('pracetak/laporan')."'; </script>"; 
		}	
	}
}
