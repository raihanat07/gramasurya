<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imposisi extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Imposisi_m', 'imposisi');
    }

	public function index()
	{	
		check_not_login();
		$query = $this->imposisi->get();
		$data = array(
			'judul' => 'Imposisi',
			'imposisi' => $query->result(),
		);	
		$this->template->load('pracetak/template','pracetak/imposisi/imposisi',$data);
	}

	public function edit_imposisi($id)
	{		
		check_not_login();
		$query = $this->imposisi->get($id);
		$data = array(
			'judul' => 'Edit Imposisi',
			'imposisi' => $query->result(),
		);		
		$this->template->load('pracetak/template','pracetak/imposisi/imposisi-edit',$data);		
	}

	public function tambah_imposisi()
	{		
		if(isset($_POST['tambah_imposisi'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->imposisi->tambah_imposisi($inputan);
		} else if(isset($_POST['edit'])){
			echo"edit";
		}
		if($this->db->affected_rows() > 0){
			echo "<script> alert('Data Berhasil Ditambahkan'); </script>";
		}
		echo "<script>window.location='".site_url('pracetak/imposisi/index')."'; </script>"; 
	
	}

	public function lihat_imposisi($id)
	{
		check_not_login();
		$query = $this->imposisi->get_lihat($id);
		$data = array(
			'judul' => 'Edit Imposisi',
			'imposisi' => $query->result(),
		);		
		$this->template->load('pracetak/template','pracetak/imposisi/imposisi-lihat',$data);		
	}

	// public function lihat_imposisi_bawah($id)
	// {

	// 	$query = $this->imposisi->get_lihat_bawah($id);
	// 	$data = array(
	// 		'judul' => 'Edit Imposisi',
	// 		'imposisi' => $query->result(),
	// 	);		
	// 	$this->template->load('pracetak/template','pracetak/imposisi/imposisi-lihat',$data);		
	// }


}
