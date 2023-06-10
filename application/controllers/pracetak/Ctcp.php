<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Ctcp extends CI_Controller {

	public function __construct()
    {	
        parent::__construct();
        check_pracetak_ctcp();
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
	public function ctcp_cover()
	{	
		check_not_login();
		$query = $this->ctcp->get_cover();
		$data = array(
			'judul' => 'CTCP Cover',
			'ctcp' => $query->result(),
		);	
		$this->template->load('pracetak/template','pracetak/ctcp/ctcp-cover',$data);
	}
	public function ctcp_isi()
	{	
		check_not_login();
		$query = $this->ctcp->get_isi();
		$data = array(
			'judul' => 'CTCP Isi',
			'ctcp' => $query->result(),
		);	
		$this->template->load('pracetak/template','pracetak/ctcp/ctcp-isi',$data);
	}
	public function filter_haricover()
	{
		check_not_login();
		$hari = $this->input->post('hari');
		$query = $this->ctcp->filter_haricover($hari);
		$data = array(
			'judul' => 'EDD',
			'hari' => $hari,
			'jm' => $query->result(),
		);
		$this->template->load('pracetak/template', 'pracetak/ctcp/jadwal-hari-cover', $data);
	}
	public function filter_hariisi()
	{
		check_not_login();
		$hari = $this->input->post('hari');
		$query = $this->imposisi->filter_hariisi($hari);
		$data = array(
			'judul' => 'EDD',
			'hari' => $hari,
			'jm' => $query->result(),
		);
		$this->template->load('pracetak/template', 'pracetak/ctcp/jadwal-hari-cover', $data);
	}
	public function filter_bulan()
	{
		check_not_login();
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$query = $this->ctcp->filter_bulan($bulan, $tahun);
		$data = array(
			'judul' => 'CTCP',
			'bulan' => $bulan,
			'tahun' => $tahun,
			'ctcp' => $query->result(),
		);	
		$this->template->load('pracetak/template','pracetak/ctcp/ctcp-bulan',$data);
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

	public function print_ctcp($id)
	{
		check_not_login();
		$query = $this->ctcp->get_lihatctcp($id);
		$data = array(
			'judul' => 'Print Ctcp',
			'imposisi' => $query->result(),
		);		
		$this->template->load('pracetak/template','pracetak/ctcp/ctcp-print',$data);		
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

			if($inputan['namaoperatorctcp2'] == null){
				$inputan['namaoperatorctcp2'] = "";
			}

			$inputan['status_order'] = "imposisi";
			if($inputan['status_ctcp_cover'] !=null && $inputan['status_ctcp_isi'] !=null){
					$inputan['status_order'] = "ctcp";
					$inputan['ctcp_status'] = "ctcp";
			}
			else if($inputan['status_ctcp_cover'] !=null ){	
				$inputan['status_order'] = "ctcp";	
				$inputan['ctcp_status'] = "ctcp cover";
			}
			else if($inputan['status_ctcp_isi'] !=null ){	
				$inputan['status_order'] = "ctcp";			
				$inputan['ctcp_status'] = "ctcp isi";
			}
			else
				$inputan['ctcp_status'] = "";
				
			if($inputan["jumlahplategagalcover1"] !=null ){
				$inputan["total_plat_gagal_cover"] = $inputan["total_plat_gagal_cover"] + $inputan["jumlahplategagalcover1"] ;
			}
			if($inputan["jumlahplategagalcover2"] !=null ){
				$inputan["total_plat_gagal_cover"] = $inputan["total_plat_gagal_cover"] + $inputan["jumlahplategagalcover2"] ;
			}

			$inputan["total_plat_gagal_isi"] = 0;
			if($inputan["jumlahplategagalisi1"] !=null ){
				$inputan["total_plat_gagal_isi"] = $inputan["total_plat_gagal_isi"] + $inputan["jumlahplategagalisi1"] ;
			}
			if($inputan["jumlahplategagalisi2"] !=null ){
				$inputan["total_plat_gagal_isi"] = $inputan["total_plat_gagal_isi"] + $inputan["jumlahplategagalisi2"] ;
			}
			if($inputan["jumlahplategagalisi3"] !=null ){
				$inputan["total_plat_gagal_isi"] = $inputan["total_plat_gagal_isi"] + $inputan["jumlahplategagalisi3"] ;
			}

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
				$inputan['status_order'] = "ctcp";		
				$inputan['ctcp_status'] = "ctcp cover";
			}
			else if($inputan['status_ctcp_isi'] !=null ){	
				$inputan['status_order'] = "ctcp";			
				$inputan['ctcp_status'] = "ctcp isi";
			}
			else
				$inputan['ctcp_status'] = "";


			if($inputan["jumlahplategagalcover1"] !=null ){
				$inputan["total_plat_gagal_cover"] = $inputan["total_plat_gagal_cover"] + $inputan["jumlahplategagalcover1"] ;
			}
			if($inputan["jumlahplategagalcover2"] !=null ){
				$inputan["total_plat_gagal_cover"] = $inputan["total_plat_gagal_cover"] + $inputan["jumlahplategagalcover2"] ;
			}
			
			
			if($inputan["jumlahplategagalisi1"] !=null ){
				$inputan["total_plat_gagal_isi"] = $inputan["total_plat_gagal_isi"] + $inputan["jumlahplategagalisi1"] ;
			}
			if($inputan["jumlahplategagalisi2"] !=null ){
				$inputan["total_plat_gagal_isi"] = $inputan["total_plat_gagal_isi"] + $inputan["jumlahplategagalisi2"] ;
			}
			if($inputan["jumlahplategagalisi3"] !=null ){
				$inputan["total_plat_gagal_isi"] = $inputan["total_plat_gagal_isi"] + $inputan["jumlahplategagalisi3"] ;
			}

			$this->ctcp->edit_ctcp($inputan);							
			$this->ctcp->status_umum($inputan);						
				echo "<script> alert('Data Berhasil Diubah'); </script>";		
				echo "<script>window.location='".site_url('pracetak/ctcp')."'; </script>";
		}	
	}
}
