<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratOrder extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('SuratOrder_m', 'so');
    }

	public function index()
	{
		// check_not_login();
		// $query = $this->so->get();
		$data = array(
			'judul' => 'Surat Order Pracetak',
			// 'so' => $query->result(),
		);		
		$this->template->load('pracetak/template','pracetak/so_pracetak/suratorder',$data);
	}

	public function tambah_so()
	{
		$data['judul'] = 'Tambah SO Pracetak';
		$this->template->load('pracetak/template','pracetak/so_pracetak/suratorder-tambah', $data);
	}
	public function edit_so()
	{
		$data['judul'] = 'Edit SO Pracetak';
		$this->template->load('pracetak/template','pracetak/so_pracetak/suratorder-edit', $data);
	}
	public function lihat_so()
	{
		$data['judul'] = 'Lihat SO Pracetak';
		$this->template->load('pracetak/template','pracetak/so_pracetak/suratorder-lihat', $data);
	}

	public function proses()
	{
		if(isset($_POST['add'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->so->add($inputan);
		} else if(isset($_POST['edit'])){
			echo"edit";
		}
		if($this->db->affected_rows() > 0){
			echo "<script> alert('Data Berhasil Disimpan'); </script>";
		}
		redirect('pracetak/suratorder');
	}
	
	

}
