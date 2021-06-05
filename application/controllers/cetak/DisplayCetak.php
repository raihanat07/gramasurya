<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DisplayCetak extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('DisplayCetak_m', 'dc');
    }

	public function index()
	{
		// check_already_login_cetak();
		$query = $this->dc->get();
		$data = array(
			'judul' => 'Display Cetak',
			'dc' => $query->result(),
		);
		// $data['judul'] = 'Display Cetak';
		$this->template->load('cetak/template','cetak/display_cetak/displaycetak',$data);
	}
	public function lihat_dc($id)
	{
		// check_already_login_cetak();
		$query = $this->dc->get_lihatdc($id);
		$data = array(
			'judul' => 'Display Cetak',
			'dc' => $query->result(),
		);
		$this->template->load('cetak/template','cetak/display_cetak/displaycetak-lihat',$data);
	}
	
	public function edit_dc($id)
	{
		$query = $this->dc->get_lihatdc($id);
		$data = array(
			'judul' => 'Display Cetak Edit',
			'dc' => $query->result(),
		);			
		$this->template->load('cetak/template','cetak/display_cetak/displaycetak-edit',$data);
	}

	public function tambah_dc($id)
	{
		$query = $this->dc->get_lihatdc($id);
		$data = array(
			'judul' => 'Display Cetak Tambah',
			'dc' => $query->result(),
		);			
		$this->template->load('cetak/template','cetak/display_cetak/displaycetak-tambah',$data);
	}
	

	public function proses()
	{		
		if(isset($_POST['add'])){							
			$inputan = $this->input->post(null, TRUE);

			// if($inputan["jumlah_kertas_cover1"] !=null){
			// 	$inputan["total_kertas"] = $inputan["total_kertas"] + $inputan["jumlah_kertas_cover1"];
			// }
			// if($inputan["jumlah_kertas_cover2"] !=null){
			// 	$inputan["total_kertas"] = $inputan["total_kertas"] + $inputan["jumlah_kertas_cover2"];
			// }

			// if($inputan["jumlah_kertas_isi1"] !=null){
			// 	$inputan["total_kertas"] = $inputan["total_kertas"] + $inputan["jumlah_kertas_isi1"];
			// }
			// if($inputan["jumlah_kertas_isi2"] !=null){
			// 	$inputan["total_kertas"] = $inputan["total_kertas"] + $inputan["jumlah_kertas_isi2"];
			// }
			// if($inputan["jumlah_kertas_isi3"] !=null){
			// 	$inputan["total_kertas"] = $inputan["total_kertas"] + $inputan["jumlah_kertas_isi3"];
			// }

			$this->dc->tambah_dc($inputan);							
			// $this->ctcp->status_umum($inputan);						
				echo "<script> alert('Data Berhasil Ditambahkan'); </script>";		
				echo "<script>window.location='".site_url('cetak/displaycetak')."'; </script>";

		} else if(isset($_POST['edit'])){ 
			$inputan = $this->input->post(null, TRUE);

			$this->dc->tambah_dc($inputan);							
			// $this->dc->status_umum($inputan);						
				echo "<script> alert('Data Berhasil Diubah'); </script>";		
				echo "<script>window.location='".site_url('cetak/displaycetak')."'; </script>";
		}	
	}

}
