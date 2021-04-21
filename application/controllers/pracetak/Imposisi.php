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
		//  var_dump($query->result_array()[0]['id_order']);
		//  die;
		$this->template->load('pracetak/template','pracetak/imposisi/imposisi',$data);
	}

	public function tambah_imposisi($id)
	{
		check_not_login();
		$query = $this->imposisi->tampil_tambah_imposisi($id);
		$data = array(
			'judul' => 'Tambah Imposisi',
			'imposisi' => $query->result(),
		);		
		$this->template->load('pracetak/template','pracetak/imposisi/imposisi-tambah',$data);		
	}

	public function print_imposisi($id)
	{
		check_not_login();
		$query = $this->imposisi->get_lihat($id);
		$data = array(
			'judul' => 'Print Imposisi',
			'imposisi' => $query->result(),
		);		
		$this->template->load('pracetak/template','pracetak/imposisi/imposisi-print',$data);		
	}
	

	public function lihat_imposisi($id)
	{
		check_not_login();
		$query = $this->imposisi->get_lihat($id);
		$data = array(
			'judul' => 'Lihat Imposisi Pracetak',
			'imposisi' => $query->result(),
		);		
		$this->template->load('pracetak/template','pracetak/imposisi/imposisi-lihat',$data);		
	}

	public function edit_imposisi($id)
	{

		$query = $this->imposisi->get_lihat($id);
		$data = array(
			'judul' => 'Edit Imposisi Pracetak',
			'imposisi' => $query->result(),
		);		
		$this->template->load('pracetak/template','pracetak/imposisi/imposisi-edit',$data);		
	}


	
	public function proses()
	{		
		if(isset($_POST['add'])){							
			$inputan = $this->input->post(null, TRUE);
						
			$inputan['status_order'] = "marketing";
			if($inputan['status_imposisi_khusus'] != null){
					$inputan['status_order'] = "imposisi";
					$inputan['imposisi_status'] = "imposisi khusus";
			}
			else if($inputan['status_imposisi_cover'] !=null && $inputan['status_imposisi_isi'] !=null){
					$inputan['status_order'] = "imposisi";
					$inputan['imposisi_status'] = "imposisi";
			}
			else if($inputan['status_imposisi_cover'] !=null ){				
				$inputan['imposisi_status'] = "imposisi cover";
			}
			else if($inputan['status_imposisi_isi'] !=null ){				
				$inputan['imposisi_status'] = "imposisi isi";
			}
			else
				$inputan['imposisi_status'] = "";

			$this->imposisi->tambah_imposisi($inputan);							
			$this->imposisi->status_umum($inputan);						
				echo "<script> alert('Data Berhasil Ditambahkan'); </script>";		
				echo "<script>window.location='".site_url('pracetak/imposisi')."'; </script>";
		} 
		else if(isset($_POST['edit'])){ 
			$inputan = $this->input->post(null, TRUE);	
			
			$inputan['status_order'] = "marketing";
			if($inputan['status_imposisi_khusus'] != null){
					$inputan['status_order'] = "imposisi";
					$inputan['imposisi_status'] = "imposisi khusus";
			}
			else if($inputan['status_imposisi_cover'] !=null && $inputan['status_imposisi_isi'] !=null){
					$inputan['status_order'] = "imposisi";
					$inputan['imposisi_status'] = "imposisi";
			}
			else if($inputan['status_imposisi_cover'] !=null ){				
				$inputan['imposisi_status'] = "imposisi cover";
			}
			else if($inputan['status_imposisi_isi'] !=null ){				
				$inputan['imposisi_status'] = "imposisi isi";
			}
			else
				$inputan['imposisi_status'] = "";
			
			$this->imposisi->edit_imposisi($inputan);
			$this->imposisi->status_umum($inputan);						
				echo "<script> alert('Data Berhasil Diubah'); </script>";		
				echo "<script>window.location='".site_url('pracetak/imposisi')."'; </script>";; 					
		}
		
	
	}

}
