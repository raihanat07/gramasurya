	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JadwalUmum extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('JadwalUmum_m', 'ju');
    }

	public function index()
	{
		$query = $this->ju->get();
		$data = array(
			'judul' => 'Jadwal Umum Cetak',
			'ju' => $query->result(),
		);
		$this->template->load('cetak/template','cetak/jadwal_umum/jadwalumum',$data);
	}
	public function lihat_ju()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Jadwal Umum Cetak';
		$this->template->load('cetak/template','cetak/jadwal_umum/jadwalumum-lihat',$data);
	}
	public function edit_ju()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Jadwal Umum Cetak';
		$this->template->load('cetak/template','cetak/jadwal_umum/jadwalumum-edit',$data);
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

			if($inputan["target_72"] !=null){
				$inputan["druk_72"] = $inputan["target_72"] * $inputan["oplag"];
			}
			if($inputan["target_74a"] !=null){
				$inputan["druk_74a"] = $inputan["target_74a"] * $inputan["oplag"];
			}

			$this->ju->tambah_ju($inputan);							
			// $this->ctcp->status_umum($inputan);						
				echo "<script> alert('Data Berhasil Ditambahkan'); </script>";		
				echo "<script>window.location='".site_url('cetak/jadwalumum')."'; </script>";

		} else if(isset($_POST['edit'])){ 
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
			
			if($inputan["target_72"] !=null){
				$inputan["druk_72"] = $inputan["target_72"] * $inputan["oplag"];
			}
			if($inputan["target_74a"] !=null){
				$inputan["druk_74a"] = $inputan["target_74a"] * $inputan["oplag"];
			}
			$this->ju->edit_ju($inputan);							
			// $this->dc->status_umum($inputan);						
				echo "<script> alert('Data Berhasil Diubah'); </script>";		
				echo "<script>window.location='".site_url('cetak/jadwalumum')."'; </script>";
		}	
	}

}
