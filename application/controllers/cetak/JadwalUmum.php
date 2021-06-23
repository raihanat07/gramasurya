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

	// public function index()
	// {
	// 	// check_already_login_finishing();
	// 	$query = $this->ju->get();
	// 	$data = array(
	// 		'judul' => 'Jadwal Umum Cetak ',
	// 		'ju' => $query->result(),
	// 	);		

	// 	// ini dia 		
	// 	$nilai = 0;					
	// 	$nilai_mesin = 0;
	// 	$nilai_jadwal =0;

	// 	$mesin_72 = 0;
		
	// 	$banding_id=null;

	// 	$tanggal_laminasi = "";

	// 	$id_jadwal_laminasi_max = 0;

	// 	foreach($data["ju"] as $s => $row){
					

	// 				$id_order = $row->id_order;
	// 				$banding_id[$nilai] = $id_order;					
	// 				// ambil nilai id order								
					
	// 				// AMBIL TANGGAL TIAP MESIN, NANTI DISIMPAN DIDALAM SEBUAH ARRAY
	// 				// data laminasi
	// 					$ambil_72 = $this->ju->ambil_data_mesin72($id_order)->result();
	// 					foreach($ambil_72 as $ju) {		
	// 						if($ju->tanggal_pelaksanaan != null and $ju->tanggal_pelaksanaan != "0000-00-00" and $ju->tanggal_pelaksanaan != $mesin_72[$nilai_mesin-1]){	
	// 							$tanggal_pelaksanaan .= $ju->tanggal_pelaksanaan.", <br>";
	// 						}
	// 						// if($sq->id_jadwal_laminasi > $id_jadwal_laminasi_max){
	// 						// 	$id_jadwal_laminasi_max = $sq->id_jadwal_laminasi;
	// 						// }
							
	// 						$mesin_72[$nilai_mesin] = $ju->tanggal_pelaksanaan;										
	// 						$nilai_mesin++;
	// 					}$nilai_mesin = 0;
											

	// 			if($banding_id[$nilai] != $banding_id[$nilai-1]){
	// 				$data["tanggal_pelaksanaan"][$nilai] = $tanggal_pelaksanaan;						 					

	// 				$nilai++;	
	// 			}  						 					
				
	// 			// // menangkap nilai id jadwal terkecil
	// 			// $data["id_jadwal_laminasi_max"][$nilai_jadwal] = $id_jadwal_laminasi_max;

	// 			// // reset nilai yang akan di foreaach
	// 			// $tanggal_laminasi = "";		

	// 			// $id_jadwal_laminasi_max = 0;
				
	// 			$nilai_jadwal++;
					
	// 	}
	// 		// var_dump($data["id_jadwal_mbo_max"]);die;
	// 		// var_dump($data["tanggal_mbo"]);
	// 		// die;


	// 	$this->template->load('cetak/template','cetak/jadwal_umum',$data);
	// }

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
		if(isset($_POST['add72'])){							
			$inputan = $this->input->post(null, TRUE);
			
			

			if($inputan["target_72"] !=null){
				$inputan["druk_72"] = $inputan["target_72"] * $inputan["oplag"];
			}
			

			$this->ju->tambah_ju72($inputan);							
			// $this->ctcp->status_umum($inputan);						
				echo "<script> alert('Data Berhasil Ditambahkan'); </script>";		
				echo "<script>window.location='".site_url('cetak/jadwalumum')."'; </script>";

		} else if(isset($_POST['add74a'])){							
			$inputan = $this->input->post(null, TRUE);
			
			
			
			if($inputan["target_74a"] !=null){
				$inputan["druk_74a"] = $inputan["target_74a"] * $inputan["oplag"];
			}

			$this->ju->tambah_ju74a($inputan);							
			// $this->ctcp->status_umum($inputan);						
				echo "<script> alert('Data Berhasil Ditambahkan'); </script>";		
				echo "<script>window.location='".site_url('cetak/jadwalumum')."'; </script>";

		}  else if(isset($_POST['add74b'])){							
			$inputan = $this->input->post(null, TRUE);

			
			if($inputan["target_74b"] !=null){
				$inputan["druk_74b"] = $inputan["target_74b"] * $inputan["oplag"];
			}

			$this->ju->tambah_ju74b($inputan);							
			// $this->ctcp->status_umum($inputan);						
				echo "<script> alert('Data Berhasil Ditambahkan'); </script>";		
				echo "<script>window.location='".site_url('cetak/jadwalumum')."'; </script>";

		}else if(isset($_POST['add102a'])){							
			$inputan = $this->input->post(null, TRUE);

			
			if($inputan["target_102a"] !=null){
				$inputan["druk_102a"] = $inputan["target_102a"] * $inputan["oplag"];
			}

			$this->ju->tambah_ju102a($inputan);							
			// $this->ctcp->status_umum($inputan);						
				echo "<script> alert('Data Berhasil Ditambahkan'); </script>";		
				echo "<script>window.location='".site_url('cetak/jadwalumum')."'; </script>";

		}else if(isset($_POST['add102b'])){							
			$inputan = $this->input->post(null, TRUE);

			
			if($inputan["target_102b"] !=null){
				$inputan["druk_102b"] = $inputan["target_102b"] * $inputan["oplag"];
			}

			$this->ju->tambah_ju102b($inputan);							
			// $this->ctcp->status_umum($inputan);						
				echo "<script> alert('Data Berhasil Ditambahkan'); </script>";		
				echo "<script>window.location='".site_url('cetak/jadwalumum')."'; </script>";

		}else if(isset($_POST['addtokko'])){							
			$inputan = $this->input->post(null, TRUE);

			
			if($inputan["target_tokko"] !=null){
				$inputan["druk_tokko"] = $inputan["target_tokko"] * $inputan["oplag"];
			}

			$this->ju->tambah_jutokko($inputan);							
			// $this->ctcp->status_umum($inputan);						
				echo "<script> alert('Data Berhasil Ditambahkan'); </script>";		
				echo "<script>window.location='".site_url('cetak/jadwalumum')."'; </script>";

		}else if(isset($_POST['edit'])){ 
			$inputan = $this->input->post(null, TRUE);

			
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
