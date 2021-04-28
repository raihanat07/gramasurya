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
			'judul' => 'CTCP',
			'ctcp' => $query->result(),
		);	
		$this->template->load('pracetak/template','pracetak/ctcp/ctcp',$data);
	}

	public function tambah_ctcp($id)
	{
		check_not_login();
		$query = $this->ctcp->get_lihat($id);
		$data = array(
			'judul' => 'Tambah Ctcp Pracetak',
			'ctcp' => $query->result(),
		);		
		$this->template->load('pracetak/template','pracetak/ctcp/ctcp-tambah',$data);		
	}


	public function edit_ctcp($id)
	{
		check_not_login();
		$query = $this->ctcp->get_lihatctcp($id);
		$data = array(
			'judul' => 'Edit Ctcp Pracetak',
			'ctcp' => $query->result(),
		);		
		$this->template->load('pracetak/template','pracetak/ctcp/ctcp-edit',$data);		
	}

	public function lihat_ctcp($id)
	{
		check_not_login();
		$query = $this->ctcp->get_lihatctcp($id);
		$data = array(
			'judul' => 'Lihat Ctcp Pracetak',
			'ctcp' => $query->result(),
		);		
		$this->template->load('pracetak/template','pracetak/ctcp/ctcp-lihat',$data);		
	}

	public function proses()
	{		
		if(isset($_POST['add'])){							
			$inputan = $this->input->post(null, TRUE);

			$inputan['status_order'] = "imposisi";
			if($inputan['status_ctcp_cover'] !=null && $inputan['status_ctcp_isi'] !=null){
					$inputan['status_order'] = "ctcp";
					$inputan['ctcp_status'] = "ctcp";
			}
			else if($inputan['status_ctcp_cover'] !=null ){				
				$inputan['ctcp_status'] = "ctcp cover";
			}
			else if($inputan['status_ctcp_isi'] !=null ){				
				$inputan['ctcp_status'] = "ctcp isi";
			}
			else
				$inputan['ctcp_status'] = "";

			$this->ctcp->tambah_ctcp($inputan);							
			$this->ctcp->status_umum($inputan);						
				echo "<script> alert('Data Berhasil Ditambahkan'); </script>";		
				echo "<script>window.location='".site_url('pracetak/ctcp')."'; </script>";

		} else if(isset($_POST['edit'])){ 
			$inputan = $this->input->post(null, TRUE);

			$inputan['status_order'] = "imposisi";
			if($inputan['status_ctcp_cover'] !=null && $inputan['status_ctcp_isi'] !=null){
					$inputan['status_order'] = "ctcp";
					$inputan['ctcp_status'] = "ctcp";
			}
			else if($inputan['status_ctcp_cover'] !=null ){				
				$inputan['ctcp_status'] = "ctcp cover";
			}
			else if($inputan['status_ctcp_isi'] !=null ){				
				$inputan['ctcp_status'] = "ctcp isi";
			}
			else
				$inputan['ctcp_status'] = "";

			$this->ctcp->edit_ctcp($inputan);							
			$this->ctcp->status_umum($inputan);						
				echo "<script> alert('Data Berhasil Diubah'); </script>";		
				echo "<script>window.location='".site_url('pracetak/ctcp')."'; </script>";
		}	
	}
}
