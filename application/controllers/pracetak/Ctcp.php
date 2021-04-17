<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctcp extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Ctcp_m', 'ctcp');
    }

	public function index()
	{	
		check_not_login();
		$query = $this->ctcp->get();
		$data = array(
			'judul' => 'Ctcp',
			'ctcp' => $query->result(),
		);	
		$this->template->load('pracetak/template','pracetak/ctcp/ctcp',$data);
	}

	public function tambah_ctcp()
	{		
		if(isset($_POST['tambah_ctcp'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->imposisi->tambah_ctcp($inputan);
		} else if(isset($_POST['edit'])){
			echo"edit";
		}
		if($this->db->affected_rows() > 0){
			echo "<script> alert('Data Berhasil Ditambahkan'); </script>";
		}
		echo "<script>window.location='".site_url('pracetak/ctcp/index')."'; </script>"; 
	
	}

	public function edit_ctcp($id)
	{
		check_not_login();
		$query = $this->ctcp->get_lihat($id);
		$data = array(
			'judul' => 'Edit Ctcp',
			'ctcp' => $query->result(),
		);		
		$this->template->load('pracetak/template','pracetak/ctcp/ctcp-edit',$data);		
	}

	public function lihat_ctcp()
	{
		$data['judul'] = 'Lihat Ctcp Pracetak';
		$this->template->load('pracetak/template','pracetak/ctcp/ctcp-lihat', $data);
	}
}
