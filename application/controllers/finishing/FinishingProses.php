<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FinishingProses extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		check_finishing();
        $this->load->model('FinishingProses_m', 'fp');
    }
	public function index()
	{
		// check_already_login_finishing();
		$query = $this->fp->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);		

		// ini dia 		
		$nilai = 0;					
		$nilai_mesin = 0;
		$laminasi = 0;
		$mbo = 0;
		$shoe = 0;
		$susun = 0;
		$sub = 0;
		
		$banding_id=null;

		$tanggal_laminasi = "";
		$tanggal_mbo = "";
		$tanggal_shoe = "";
		$tanggal_susun = "";
		$tanggal_sub = "";

		foreach($data["fp"] as $s => $row){
					

					$id_order = $row->id_order;
					$banding_id[$nilai] = $id_order;					
					// ambil nilai id order								
					
					// AMBIL TANGGAL TIAP MESIN, NANTI DISIMPAN DIDALAM SEBUAH ARRAY
					// data laminasi
						$ambil_laminasi = $this->fp->ambil_data_fp_laminasi($id_order)->result();
						foreach($ambil_laminasi as $sq) {		
							if($sq->tanggal_laminasi != null and $sq->tanggal_laminasi != "0000-00-00" and $sq->tanggal_laminasi != $laminasi[$nilai_mesin-1]){	
								$tanggal_laminasi .= $sq->tanggal_laminasi.", <br>";
							}													
							
							$laminasi[$nilai_mesin] = $sq->tanggal_laminasi;										
							$nilai_mesin++;
						}$nilai_mesin = 0;
						

					// data mbo
						$ambil_mbo = $this->fp->ambil_data_fp_mbo($id_order)->result();
						foreach($ambil_mbo as $sq) {							
							if($sq->tanggal_mbo != null and $sq->tanggal_mbo != "0000-00-00" and $sq->tanggal_mbo != $mbo[$nilai_mesin-1]){	
								$tanggal_mbo .= $sq->tanggal_mbo.", <br>";
							}															
							$mbo[$nilai_mesin] = $sq->tanggal_mbo;					
							$nilai_mesin++;
						}$nilai_mesin=0;

					// data shoe
					$ambil_shoe = $this->fp->ambil_data_fp_shoe($id_order)->result();
					foreach($ambil_shoe as $sq) {							
						if($sq->tanggal_shoe != null and $sq->tanggal_shoe != "0000-00-00" and $sq->tanggal_shoe != $shoe[$nilai_mesin-1]){	
							$tanggal_shoe .= $sq->tanggal_shoe.", <br>";
						}															
						$shoe[$nilai_mesin] = $sq->tanggal_shoe;					
						$nilai_mesin++;
					}$nilai_mesin=0;

					// data susun
					$ambil_susun = $this->fp->ambil_data_fp_susun($id_order)->result();
					foreach($ambil_susun as $sq) {							
						if($sq->tanggal_susun != null and $sq->tanggal_susun != "0000-00-00" and $sq->tanggal_susun != $susun[$nilai_mesin-1]){	
							$tanggal_susun .= $sq->tanggal_susun.", <br>";
						}															
						$susun[$nilai_mesin] = $sq->tanggal_susun;					
						$nilai_mesin++;
					}$nilai_mesin=0;
											

				if($banding_id[$nilai] != $banding_id[$nilai-1]){
					$data["tanggal_laminasi"][$nilai] = $tanggal_laminasi;					
					$data["tanggal_mbo"][$nilai] = $tanggal_mbo;
					$data["tanggal_shoe"][$nilai] = $tanggal_shoe;
					$data["tanggal_susun"][$nilai] = $tanggal_susun;
					$data["tanggal_sub"][$nilai] = $tanggal_sub;	 
					$nilai++;	
				}  			 					
												
					$tanggal_laminasi = "";
					$tanggal_mbo = "";
					$tanggal_shoe = "";
					$tanggal_susun = "";
					$tanggal_sub = "";																			
					
		}
			// var_dump($data["tanggal_laminasi"]);
			// var_dump($data["tanggal_mbo"]);
			// die;


		$this->template->load('finishing/template','finishing/finishing_proses/finishing_proses',$data);
	}


	public function proses_fp()
	{
		if(isset($_POST['add'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->fp->tambah_fp($inputan);								
		}
		if(isset($_POST['edit'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->fp->edit_fp($inputan);								
		}
		
		if($inputan["tanggal_pelaksanaan_laminasi"] == ""){
			$this->fp->hapus_jadwal_laminasi($inputan);	
		}
		if($inputan["tanggal_pelaksanaan_mesin_shoe"] == ""){
			$this->fp->hapus_jadwal_shoe($inputan);	
		}
		if($inputan["tanggal_pelaksanaan_mesin_mbo"] == ""){
			$this->fp->hapus_jadwal_mbo($inputan);	
		}
		if($inputan["tanggal_pelaksanaan_mesin_susun"] == ""){
			$this->fp->hapus_jadwal_susun($inputan);	
		}
		if($inputan["tanggal_pelaksanaan_sub_proses"] == ""){
			$this->fp->hapus_jadwal_sub($inputan);	
		}

		echo "<script> alert('Data Berhasil Ditambahkan'); </script>";				
		echo "<script>window.location='".site_url('finishing/FinishingProses/')."'; </script>"; 


}






///// MESIN LAMINASI
   public function jadwal_fp_laminasi()
   {
	   // check_already_login_finishing();
	   $query = $this->fp->get_jadwal_laminasi();
	   $data = array(
		   'judul' => 'Finishing Proses',
		   'fp' => $query->result(),
	   );
	   // NANGKAP DATA SE ID ORDER
		// var_dump($data["fp"]);die;
		$tampung_id_jadwal = 0;		
		$jadwal_max = 0;		

		foreach($data["fp"] as $s => $row){
			// var_dump($row->id_order);

			$id_order = $row->id_order;
			$ambil = $this->fp->ambil_data_laminasi($id_order)->result();
			// var_dump($id_order);						

			foreach($ambil as $sq) {				
				if($sq->id_jadwal_laminasi > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_laminasi;
				}				
			}	
			$data["id_jadwal_max"][] = $jadwal_max;	
			$jadwal_max = 0;			   		

		}
		// var_dump($data["id_jadwal_max"]);die;
		
	   
	   $this->template->load('finishing/template','finishing/finishing_proses/jadwal-fp-laminasi',$data);
}


   public function edit_jadwal_fp_laminasi($id)
   {
	   // check_already_login_finishing();
	   $query = $this->fp->edit_laminasi($id);
	   $data = array(
		   'judul' => 'Finishing Proses',
		   'fp' => $query->result(),
	   );
	   $id_order = $data['fp'][0]->id_order;
	   $ambil = $this->fp->ambilIDOrder($id_order)->result();

	   $jadwal_max = 0;
	   $tampung_jadwal = [];
	   $total_1=0;
	   $total_2=0;
	   foreach($ambil as $sq) {
		    if($sq->id_jadwal_laminasi > $jadwal_max) {
				$jadwal_max = $sq->id_jadwal_laminasi;
			}
			$tampung_jadwal[] = $sq->id_jadwal_laminasi;
			$total_1 += $sq->hasil_1;
			$total_2 += $sq->hasil_2;
	   }

	   $data['jadwal_max'] = $jadwal_max;
	   $data['tampung_jadwal'] = $tampung_jadwal;
	   $data['total_1'] = $total_1;
	   $data['total_2'] = $total_2;
	//    var_dump($data);
	//    die;
	//    var_dump($subQuery);
	//    die;
	//    var_dump($data['fp'][0]->id_order);die;

	   $this->template->load('finishing/template','finishing/finishing_proses/edit-jadwal-fp-laminasi',$data);
}
   public function tambah_jadwal_fp_laminasi($id)
   {
	   // check_already_login_finishing();
	   $query = $this->fp->edit_laminasi($id);
	   $data = array(
		   'judul' => 'Finishing Proses',
		   'fp' => $query->result(),
	   );
	   $id_order = $data['fp'][0]->id_order;
	   $ambil = $this->fp->ambilIDOrder($id_order)->result();

	   $jadwal_max = 0;
	   $tampung_jadwal = [];
	   $total_1=0;
	   $total_2=0;
	   foreach($ambil as $sq) {
		    if($sq->id_jadwal_laminasi > $jadwal_max) {
				$jadwal_max = $sq->id_jadwal_laminasi;
			}
			$tampung_jadwal[] = $sq->id_jadwal_laminasi;
			$total_1 += $sq->hasil_1;
			$total_2 += $sq->hasil_2;
	   }

	   $data['jadwal_max'] = $jadwal_max;
	   $data['tampung_jadwal'] = $tampung_jadwal;
	   $data['total_1'] = $total_1;
	   $data['total_2'] = $total_2;
	   
	   $this->template->load('finishing/template','finishing/finishing_proses/tambah-jadwal-fp-laminasi',$data);
}   
   public function lihat_jadwal_fp_laminasi($id)
   {
	   // check_already_login_finishing();
	   $query = $this->fp->edit_laminasi($id);
	   $data = array(
		   'judul' => 'Finishing Proses',
		   'fp' => $query->result(),
	   );
	   $id_order = $data['fp'][0]->id_order;
	   $ambil = $this->fp->ambilIDOrder($id_order)->result();

	   $jadwal_max = 0;
	   $tampung_jadwal = [];
	   $total_1=0;
	   $total_2=0;
	   foreach($ambil as $sq) {
		    if($sq->id_jadwal_laminasi > $jadwal_max) {
				$jadwal_max = $sq->id_jadwal_laminasi;
			}
			$tampung_jadwal[] = $sq->id_jadwal_laminasi;
			$total_1 += $sq->hasil_1;
			$total_2 += $sq->hasil_2;
	   }

	   $data['jadwal_max'] = $jadwal_max;
	   $data['tampung_jadwal'] = $tampung_jadwal;
	   $data['total_1'] = $total_1;
	   $data['total_2'] = $total_2;		


	   $this->template->load('finishing/template','finishing/finishing_proses/lihat-jadwal-fp-laminasi',$data);
}
   public function proses_laminasi()
	{				
		if(isset($_POST['edit'])){							
			$inputan = $this->input->post(null, TRUE);


		// $jumlah_mesin = 0;
        // $jumlah_selesai = 0;
        // $inputan["status_umum"] = "cetak";

        // if($inputan["tanggal_pelaksanaan_laminasi"] !=0){
        //   $jumlah_mesin +=1;
        //   if($inputan["status_laminasi"] == "laminasi"){            
        //     $jumlah_selesai +=1;
        //   }                      
        // }

        // // if($inputan["tanggal_pelaksanaan_mbo"] !=0){
		// // 	$jumlah_mesin +=1;
		// // 	if($inputan["status_mbo"] == mbo){            
		// // 	  $jumlah_selesai +=1;
		// // 	}                      
		// // }
        
        //   if($jumlah_selesai == $jumlah_mesin and $jumlah_selesai !=0){
        //     $inputan["status_umum"] = "finishing proses";
        //   }     
		//   $this->fp->status_umum($inputan);	     

			$this->fp->proses_edit_laminasi($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
				echo "<script>window.location='".site_url('finishing/FinishingProses/jadwal_fp_laminasi')."'; </script>"; 
		}
		if(isset($_POST['add'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->fp->proses_tambah_laminasi($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
				echo "<script>window.location='".site_url('finishing/FinishingProses/jadwal_fp_laminasi')."'; </script>"; 
		}
}


	
///// MESIN MBO
    public function jadwal_fp_mbo()
	{
		// check_already_login_finishing();
		$query = $this->fp->get_jadwal_mbo();
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);		

		$jadwal_max = 0;		

		foreach($data["fp"] as $s => $row){
			// var_dump($row->id_order);

			$id_order = $row->id_order;
			$ambil = $this->fp->ambil_data_mbo($id_order)->result();
			// var_dump($id_order);						

			foreach($ambil as $sq) {				
				if($sq->id_jadwal_mbo > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_mbo;
				}				
			}	
			$data["id_jadwal_max"][] = $jadwal_max;	
			$jadwal_max = 0;			   		

		}

		$this->template->load('finishing/template','finishing/finishing_proses/jadwal-fp-mbo',$data);
	}
	public function edit_jadwal_fp_mbo($id)
	{
		 // check_already_login_finishing();
		 $query = $this->fp->edit_mbo($id);
		 $data = array(
			 'judul' => 'Finishing Proses',
			 'fp' => $query->result(),
		 );
		 $id_order = $data['fp'][0]->id_order;
		 $ambil = $this->fp->ambilIDOrder_mbo($id_order)->result();
  
		 $jadwal_max = 0;
		 $total_keseluruhan = 0;
		 $tampung_jadwal = [];		 		 
		 foreach($ambil as $sq) {
			  if($sq->id_jadwal_mbo > $jadwal_max) {
				  $jadwal_max = $sq->id_jadwal_mbo;
			  }
			  $tampung_jadwal[] = $sq->id_jadwal_mbo;	
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_1;		  			  
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_2;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_3;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_4;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_5;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_6;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_7;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_8;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_9;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_10;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_11;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_12;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_13;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_14;	
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_15;	
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_16;	
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_17;	
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_18;	
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_19;	
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_20;		
		 }
  
		 $data['jadwal_max'] = $jadwal_max;
		 $data['tampung_jadwal'] = $tampung_jadwal;		 		 
		 $data['total_keseluruhan'] = $total_keseluruhan;	
		//  var_dump($data["fp"])	;die;
  
		 $this->template->load('finishing/template','finishing/finishing_proses/edit-jadwal-fp-mbo',$data);
	}
    public function tambah_jadwal_fp_mbo($id)
	{
		 // check_already_login_finishing();
		 $query = $this->fp->edit_mbo($id);
		 $data = array(
			 'judul' => 'Finishing Proses',
			 'fp' => $query->result(),
		 );
		 $id_order = $data['fp'][0]->id_order;
		 $ambil = $this->fp->ambilIDOrder_mbo($id_order)->result();
  
		 $jadwal_max = 0;
		 $total_keseluruhan = 0;
		 $tampung_jadwal = [];		 		 
		 foreach($ambil as $sq) {
			  if($sq->id_jadwal_mbo > $jadwal_max) {
				  $jadwal_max = $sq->id_jadwal_mbo;
			  }
			  $tampung_jadwal[] = $sq->id_jadwal_mbo;	
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_1;		  			  
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_2;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_3;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_4;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_5;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_6;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_7;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_8;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_9;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_10;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_11;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_12;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_13;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_14;	
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_15;	
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_16;	
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_17;	
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_18;	
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_19;	
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_20;		
		 }
  
		 $data['jadwal_max'] = $jadwal_max;
		 $data['tampung_jadwal'] = $tampung_jadwal;		 		 
		 $data['total_keseluruhan'] = $total_keseluruhan;		 	

		$this->template->load('finishing/template','finishing/finishing_proses/tambah-jadwal-fp-mbo',$data);
	}    
    public function lihat_jadwal_fp_mbo($id)
	{
		 // check_already_login_finishing();
		 $query = $this->fp->edit_mbo($id);
		 $data = array(
			 'judul' => 'Finishing Proses',
			 'fp' => $query->result(),
		 );
		 $id_order = $data['fp'][0]->id_order;
		 $ambil = $this->fp->ambilIDOrder_mbo($id_order)->result();
  
		 $jadwal_max = 0;
		 $total_keseluruhan = 0;
		 $tampung_jadwal = [];		 		 
		 foreach($ambil as $sq) {
			  if($sq->id_jadwal_mbo > $jadwal_max) {
				  $jadwal_max = $sq->id_jadwal_mbo;
			  }
			  $tampung_jadwal[] = $sq->id_jadwal_mbo;	
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_1;		  			  
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_2;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_3;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_4;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_5;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_6;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_7;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_8;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_9;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_10;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_11;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_12;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_13;
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_14;	
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_15;	
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_16;	
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_17;	
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_18;	
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_19;	
			  $total_keseluruhan += $sq->hasil_lipatan_lembar_20;		
		 }
  
		 $data['jadwal_max'] = $jadwal_max;
		 $data['tampung_jadwal'] = $tampung_jadwal;		 		 
		 $data['total_keseluruhan'] = $total_keseluruhan;	
		$this->template->load('finishing/template','finishing/finishing_proses/lihat-jadwal-fp-mbo',$data);
	}
	public function proses_mbo()
	{		
		if(isset($_POST['edit'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->fp->proses_edit_mbo($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
				echo "<script>window.location='".site_url('finishing/FinishingProses/jadwal_fp_mbo')."'; </script>"; 
		}
		if(isset($_POST['add'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->fp->proses_tambah_mbo($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan'); </script>";				
				echo "<script>window.location='".site_url('finishing/FinishingProses/jadwal_fp_mbo')."'; </script>"; 
		}
	}

///// MESIN SHOE
public function jadwal_fp_shoe()
{
	// check_already_login_finishing();
	$query = $this->fp->get_jadwal_shoe();
	$data = array(
		'judul' => 'Finishing Proses',
		'fp' => $query->result(),
	);		
	$jadwal_max = 0;		

		foreach($data["fp"] as $s => $row){
			// var_dump($row->id_order);

			$id_order = $row->id_order;
			$ambil = $this->fp->ambil_data_shoe($id_order)->result();
			// var_dump($id_order);						

			foreach($ambil as $sq) {				
				if($sq->id_jadwal_shoe > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_shoe;
				}				
			}	
			$data["id_jadwal_max"][] = $jadwal_max;	
			$jadwal_max = 0;			   		

		}

	$this->template->load('finishing/template','finishing/finishing_proses/jadwal-fp-shoe',$data);
}
public function edit_jadwal_fp_shoe($id)
{
	 // check_already_login_finishing();
	 $query = $this->fp->edit_shoe($id);
	 $data = array(
		 'judul' => 'Finishing Proses',
		 'fp' => $query->result(),
	 );
	 $id_order = $data['fp'][0]->id_order;
	 $ambil = $this->fp->ambilIDOrder_shoe($id_order)->result();

	 $jadwal_max = 0;
	 $total_keseluruhan = 0;
	 $tampung_jadwal = [];		 		 
	 foreach($ambil as $sq) {
		  if($sq->id_jadwal_shoe > $jadwal_max) {
			  $jadwal_max = $sq->id_jadwal_shoe;
		  }
		  $tampung_jadwal[] = $sq->id_jadwal_shoe;	
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_1;		  			  
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_2;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_3;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_4;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_5;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_6;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_7;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_8;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_9;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_10;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_11;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_12;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_13;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_14;	
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_15;	
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_16;	
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_17;	
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_18;	
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_19;	
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_20;		
	 }

	 $data['jadwal_max'] = $jadwal_max;
	 $data['tampung_jadwal'] = $tampung_jadwal;		 		 
	 $data['total_keseluruhan'] = $total_keseluruhan;		

	 $this->template->load('finishing/template','finishing/finishing_proses/edit-jadwal-fp-shoe',$data);
}
public function tambah_jadwal_fp_shoe($id)
{
	 // check_already_login_finishing();
	 $query = $this->fp->edit_shoe($id);
	 $data = array(
		 'judul' => 'Finishing Proses',
		 'fp' => $query->result(),
	 );
	 $id_order = $data['fp'][0]->id_order;
	 $ambil = $this->fp->ambilIDOrder_shoe($id_order)->result();

	 $jadwal_max = 0;
	 $total_keseluruhan = 0;
	 $tampung_jadwal = [];		 		 
	 foreach($ambil as $sq) {
		  if($sq->id_jadwal_shoe > $jadwal_max) {
			  $jadwal_max = $sq->id_jadwal_shoe;
		  }
		  $tampung_jadwal[] = $sq->id_jadwal_shoe;	
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_1;		  			  
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_2;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_3;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_4;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_5;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_6;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_7;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_8;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_9;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_10;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_11;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_12;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_13;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_14;	
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_15;	
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_16;	
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_17;	
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_18;	
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_19;	
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_20;		
	 }

	 $data['jadwal_max'] = $jadwal_max;
	 $data['tampung_jadwal'] = $tampung_jadwal;		 		 
	 $data['total_keseluruhan'] = $total_keseluruhan;		 	

	$this->template->load('finishing/template','finishing/finishing_proses/tambah-jadwal-fp-shoe',$data);
}    
public function lihat_jadwal_fp_shoe($id)
{
	 // check_already_login_finishing();
	 $query = $this->fp->edit_shoe($id);
	 $data = array(
		 'judul' => 'Finishing Proses',
		 'fp' => $query->result(),
	 );
	 $id_order = $data['fp'][0]->id_order;
	 $ambil = $this->fp->ambilIDOrder_shoe($id_order)->result();

	 $jadwal_max = 0;
	 $total_keseluruhan = 0;
	 $tampung_jadwal = [];		 		 
	 foreach($ambil as $sq) {
		  if($sq->id_jadwal_shoe > $jadwal_max) {
			  $jadwal_max = $sq->id_jadwal_shoe;
		  }
		  $tampung_jadwal[] = $sq->id_jadwal_shoe;	
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_1;		  			  
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_2;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_3;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_4;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_5;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_6;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_7;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_8;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_9;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_10;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_11;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_12;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_13;
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_14;	
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_15;	
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_16;	
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_17;	
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_18;	
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_19;	
		  $total_keseluruhan += $sq->hasil_lipatan_lembar_20;		
	 }

	 $data['jadwal_max'] = $jadwal_max;
	 $data['tampung_jadwal'] = $tampung_jadwal;		 		 
	 $data['total_keseluruhan'] = $total_keseluruhan;	
	$this->template->load('finishing/template','finishing/finishing_proses/lihat-jadwal-fp-shoe',$data);
}
public function proses_shoe()
{		
	if(isset($_POST['edit'])){							
		$inputan = $this->input->post(null, TRUE);
		$this->fp->proses_edit_shoe($inputan);				
			echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingProses/jadwal_fp_shoe')."'; </script>"; 
	}
	if(isset($_POST['add'])){							
		$inputan = $this->input->post(null, TRUE);
		$this->fp->proses_tambah_shoe($inputan);				
			echo "<script> alert('Data Berhasil Ditambahkan'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingProses/jadwal_fp_shoe')."'; </script>"; 
	}
}
	
///// MESIN SUSUN
    public function jadwal_fp_susun()
	{
		// check_already_login_finishing();
		$query = $this->fp->get_jadwal_susun();
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);		
		$jadwal_max = 0;		

		foreach($data["fp"] as $s => $row){
			// var_dump($row->id_order);

			$id_order = $row->id_order;
			$ambil = $this->fp->ambil_data_susun($id_order)->result();
			// var_dump($id_order);						

			foreach($ambil as $sq) {				
				if($sq->id_jadwal_susun > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_susun;
				}				
			}	
			$data["id_jadwal_max"][] = $jadwal_max;	
			$jadwal_max = 0;			   		

		}

		$this->template->load('finishing/template','finishing/finishing_proses/jadwal-fp-susun',$data);
}
	public function edit_jadwal_fp_susun($id)
	{
		// check_already_login_finishing();
		$query = $this->fp->edit_susun($id);
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);
		$id_order = $data['fp'][0]->id_order;
		$ambil = $this->fp->ambilIDOrder_susun($id_order)->result();
 
		$jadwal_max = 0;
		$tampung_jadwal = [];
		$total_1=0;
		$total_2=0;
		foreach($ambil as $sq) {
			 if($sq->id_jadwal_susun > $jadwal_max) {
				 $jadwal_max = $sq->id_jadwal_susun;
			 }
			 $tampung_jadwal[] = $sq->id_jadwal_susun;
			 $total_1 += $sq->hasil_1;
			 $total_2 += $sq->hasil_2;
		}
 
		$data['jadwal_max'] = $jadwal_max;
		$data['tampung_jadwal'] = $tampung_jadwal;
		$data['total_1'] = $total_1;
		$data['total_2'] = $total_2;	
			
		$this->template->load('finishing/template','finishing/finishing_proses/edit-jadwal-fp-susun',$data);
}

    public function tambah_jadwal_fp_susun($id)
	{
		// check_already_login_finishing();
		$query = $this->fp->edit_susun($id);
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);
		$id_order = $data['fp'][0]->id_order;
		$ambil = $this->fp->ambilIDOrder_susun($id_order)->result();
 
		$jadwal_max = 0;
		$tampung_jadwal = [];
		$total_1=0;
		$total_2=0;
		foreach($ambil as $sq) {
			 if($sq->id_jadwal_susun > $jadwal_max) {
				 $jadwal_max = $sq->id_jadwal_susun;
			 }
			 $tampung_jadwal[] = $sq->id_jadwal_susun;
			 $total_1 += $sq->hasil_1;
			 $total_2 += $sq->hasil_2;
		}
 
		$data['jadwal_max'] = $jadwal_max;
		$data['tampung_jadwal'] = $tampung_jadwal;
		$data['total_1'] = $total_1;
		$data['total_2'] = $total_2;
		
		$this->template->load('finishing/template','finishing/finishing_proses/tambah-jadwal-fp-susun',$data);
}
   
    public function lihat_jadwal_fp_susun($id)
	{
		// check_already_login_finishing();
		$query = $this->fp->edit_susun($id);
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);
		$id_order = $data['fp'][0]->id_order;
		$ambil = $this->fp->ambilIDOrder_susun($id_order)->result();
 
		$jadwal_max = 0;
		$tampung_jadwal = [];
		$total_1=0;
		$total_2=0;
		foreach($ambil as $sq) {
			 if($sq->id_jadwal_susun > $jadwal_max) {
				 $jadwal_max = $sq->id_jadwal_susun;
			 }
			 $tampung_jadwal[] = $sq->id_jadwal_susun;
			 $total_1 += $sq->hasil_1;
			 $total_2 += $sq->hasil_2;
		}
 
		$data['jadwal_max'] = $jadwal_max;
		$data['tampung_jadwal'] = $tampung_jadwal;
		$data['total_1'] = $total_1;
		$data['total_2'] = $total_2;		
		$this->template->load('finishing/template','finishing/finishing_proses/lihat-jadwal-fp-susun',$data);
}

	public function proses_susun()
	{		
		if(isset($_POST['edit'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->fp->proses_edit_susun($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
				echo "<script>window.location='".site_url('finishing/FinishingProses/jadwal_fp_susun')."'; </script>"; 
		}
		if(isset($_POST['add'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->fp->proses_tambah_susun($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
				echo "<script>window.location='".site_url('finishing/FinishingProses/jadwal_fp_susun')."'; </script>"; 
		}
}



//// MESIN SUB PROSES
    public function jadwal_fp_sub()
	{
		// check_already_login_finishing();
		$query = $this->fp->get_jadwal_sub();
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/jadwal-fp-sub',$data);
}   
    public function edit_jadwal_fp_sub($id)
	{
		// check_already_login_finishing();
		$query = $this->fp->edit_sub($id);
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);
		$id_order = $data['fp'][0]->id_order;
		$ambil = $this->fp->ambilIDOrder_sub($id_order)->result();
 
		$jadwal_max = 0;
		$tampung_jadwal = [];
		$total_1=0;
		$total_2=0;
		foreach($ambil as $sq) {
			 if($sq->id_jadwal_sub > $jadwal_max) {
				 $jadwal_max = $sq->id_jadwal_sub;
			 }
			 $tampung_jadwal[] = $sq->id_jadwal_sub;
			 $total_1 += $sq->hasil_1;
			 $total_2 += $sq->hasil_2;
		}
 
		$data['jadwal_max'] = $jadwal_max;
		$data['tampung_jadwal'] = $tampung_jadwal;
		$data['total_1'] = $total_1;
		$data['total_2'] = $total_2;		
		$this->template->load('finishing/template','finishing/finishing_proses/edit-jadwal-fp-sub',$data);
}
	public function tambah_jadwal_fp_sub()
	{
		// check_already_login_finishing();
		$query = $this->fp->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/tambah-jadwal-fp-sub',$data);
}
    public function lihat_jadwal_fp_sub($id)
	{
		// check_already_login_finishing();
		$query = $this->fp->edit_sub($id);
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);
		$id_order = $data['fp'][0]->id_order;
		$ambil = $this->fp->ambilIDOrder_sub($id_order)->result();
 
		$jadwal_max = 0;
		$tampung_jadwal = [];
		$total_1=0;
		$total_2=0;
		foreach($ambil as $sq) {
			 if($sq->id_jadwal_sub > $jadwal_max) {
				 $jadwal_max = $sq->id_jadwal_sub;
			 }
			 $tampung_jadwal[] = $sq->id_jadwal_sub;
			 $total_1 += $sq->hasil_1;
			 $total_2 += $sq->hasil_2;
		}
 
		$data['jadwal_max'] = $jadwal_max;
		$data['tampung_jadwal'] = $tampung_jadwal;
		$data['total_1'] = $total_1;
		$data['total_2'] = $total_2;	
		$this->template->load('finishing/template','finishing/finishing_proses/lihat-jadwal-fp-sub',$data);
}
	public function proses_sub()
	{		
		if(isset($_POST['edit'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->fp->proses_edit_sub($inputan);	
			
				echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
				echo "<script>window.location='".site_url('finishing/FinishingProses/jadwal_fp_sub')."'; </script>"; 
		}
		if(isset($_POST['add'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->fp->proses_tambah_sub($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
				echo "<script>window.location='".site_url('finishing/FinishingProses/jadwal_fp_sub')."'; </script>"; 
		}
}
	





}
