<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QualityControl extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		check_finishing();
        $this->load->model('QualityControl_m', 'qc');
    }
	public function index()
	{
		// check_already_login_finishing();
		$query = $this->qc->get();
		$data = array(
			'judul' => 'Quality Control',
			'qc' => $query->result(),
		);		
		$this->load->model('FinishingAkhir_m');

		
		// ini dia 		
		$nilai = 0;										
		
		$banding_id[-1]=null;

		$total_binding = 0;
		$total_jahit = 0;
		$total_hardcover = 0;
	

		foreach($data["qc"] as $s => $row){
					

					$id_order = $row->id_order;
					$banding_id[$nilai] = $id_order;					
					// ambil nilai id order								
					
					// AMBIL TANGGAL TIAP MESIN, NANTI DISIMPAN DIDALAM SEBUAH ARRAY
					// data binding
						$ambil_binding = $this->FinishingAkhir_m->ambilIDOrder_binding($id_order)->result();						
						foreach($ambil_binding as $sq) {																					
								$total_binding += $sq->hasil_1;
								$total_binding += $sq->hasil_2;
								$total_binding += $sq->hasil_3;
								$total_binding += $sq->hasil_4;					
						}
						

					// data jahit
						$ambil_jahit = $this->FinishingAkhir_m->ambilIDOrder_jahit($id_order)->result();						
						foreach($ambil_jahit as $sq) {																					
								$total_jahit += $sq->hasil_1;
								$total_jahit += $sq->hasil_2;
								$total_jahit += $sq->hasil_3;
								$total_jahit += $sq->hasil_4;					
						}

					// data hardcover
						$ambil_hardcover = $this->FinishingAkhir_m->ambilIDOrder_hardcover($id_order)->result();						
						foreach($ambil_hardcover as $sq) {																					
								$total_hardcover += $sq->hasil_1;
								$total_hardcover += $sq->hasil_2;
								$total_hardcover += $sq->hasil_3;
								$total_hardcover += $sq->hasil_4;					
						}
											
						// var_dump($banding_id[$nilai]);
						
				if($banding_id[$nilai] != $banding_id[$nilai-1]){
					$data["total_binding"][$nilai] = $total_binding;					
					$data["total_jahit"][$nilai] = $total_jahit;					 					
					$data["total_hardcover"][$nilai] = $total_hardcover;
					// var_dump($data["tanggal_binding"]);
					$nilai++;	
				}  						 											

				// reset nilai yang akan di foreaach
				$total_binding = 0;
				$total_jahit = 0;																	
				$total_hardcover = 0;	
				// echo"<br><br><br><br><br><br><br><br><br><br>";
					
		}

		// var_dump($data["tanggal_jahit"]);die;
					   		

		



		$this->template->load('finishing/template','finishing/quality_control/quality_control',$data);
	}	

	public function proses()
	{		
		if(isset($_POST['edit'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->qc->proses_edit_qc($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
				echo "<script>window.location='".site_url('finishing/QualityControl/')."'; </script>"; 
		}
		if(isset($_POST['add'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->qc->proses_tambah_qc($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan'); </script>";				
				echo "<script>window.location='".site_url('finishing/QualityControl/')."'; </script>"; 
		}
	}

	public function lihat_qc($id)
	{
		// check_already_login_finishing();
		$query = $this->qc->lihat_qc($id);
		$data = array(
			'judul' => 'Quality Control',
			'qc' => $query->result(),
		);		

		$this->load->model('FinishingAkhir_m');

		// total binding
		$id_order = $data['qc'][0]->id_order;
		$ambil = $this->FinishingAkhir_m->ambilIDOrder_binding($id_order)->result();		
		$total_binding=0;		
		foreach($ambil as $sq) {					 
			 $total_binding += $sq->hasil_1;
			 $total_binding += $sq->hasil_2;
			 $total_binding += $sq->hasil_3;
			 $total_binding += $sq->hasil_4;
		} 		
		$data['total_binding'] = $total_binding;
		
		// total jahit
		$id_order = $data['qc'][0]->id_order;
		$ambil = $this->FinishingAkhir_m->ambilIDOrder_jahit($id_order)->result();		
		$total_jahit=0;		
		foreach($ambil as $sq) {					 
			 $total_jahit += $sq->hasil_1;
			 $total_jahit += $sq->hasil_2;
			 $total_jahit += $sq->hasil_3;
			 $total_jahit += $sq->hasil_4;
		} 		
		$data['total_jahit'] = $total_jahit;		
		
		// total hardcover
		$id_order = $data['qc'][0]->id_order;
		$ambil = $this->FinishingAkhir_m->ambilIDOrder_hardcover($id_order)->result();		
		$total_hardcover=0;		
		foreach($ambil as $sq) {					 
			 $total_hardcover += $sq->hasil_1;
			 $total_hardcover += $sq->hasil_2;
			 $total_hardcover += $sq->hasil_3;
			 $total_hardcover += $sq->hasil_4;
		} 		
		$data['total_hardcover'] = $total_hardcover;	

		$this->template->load('finishing/template','finishing/quality_control/lihat_qc',$data);
	}




	
}
