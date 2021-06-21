<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FinishingAkhir extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		check_finishing();
        $this->load->model('FinishingAkhir_m', 'fa');
    }
	// public function index()
	// {
	// 	// check_already_login_finishing();
	// 	$query = $this->fa->get();
	// 	$data = array(
	// 		'judul' => 'Finishing Akhir',
	// 		'fa' => $query->result(),
	// 	);		
	// 	$this->template->load('finishing/template','finishing/finishing_akhir/finishing_akhir',$data);
	// }
    public function mesin_kategori1()
	{
		// check_already_login_finishing();
		$query = $this->fa->get();
		$data = array(
			'judul' => 'Finishing Akhir Mesin Finishing',
			'fa' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/mesin_kategori1',$data);
	}
    public function mesin_kalender()
	{
		// check_already_login_finishing();
		$query = $this->fa->get();
		$data = array(
			'judul' => 'Finishing Akhir Mesin Kalender',
			'fa' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/mesin_kalender',$data);
	}
    // public function jadwal_fa()
	// {
	// 	// check_already_login_finishing();
	// 	$query = $this->fa->get();
	// 	$data = array(
	// 		'judul' => 'Finishing Akhir',
	// 		'fa' => $query->result(),
	// 	);		
	// 	$this->template->load('finishing/template','finishing/finishing_akhir/jadwal_fa',$data);
	// }
    public function tambah_jadwal_fa()
	{
		// check_already_login_finishing();
		$query = $this->fa->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'fa' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/tambah-jadwal-fa',$data);
	}
    public function edit_jadwal_fa()
	{
		// check_already_login_finishing();
		$query = $this->fa->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'fa' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa',$data);
	}
    public function lihat_jadwal_fa()
	{
		// check_already_login_finishing();
		$query = $this->fa->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'fa' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/lihat-jadwal-fa',$data);
}
	public function proses_fa()
	{
		if(isset($_POST['add'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->fa->tambah_fa($inputan);								
		}
		if(isset($_POST['edit'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->fa->edit_fa($inputan);								
		}		
		

		echo "<script> alert('Data Berhasil Ditambahkan'); </script>";				
		echo "<script>window.location='".site_url('finishing/FinishingAkhir/mesin_kategori1')."'; </script>"; 


}

public function proses_fa_kalender()
	{
		if(isset($_POST['add'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->fa->tambah_fa_kalender($inputan);								
		}
		if(isset($_POST['edit'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->fa->edit_fa_kalender($inputan);								
		}			
		

		echo "<script> alert('Data Berhasil Ditambahkan'); </script>";				
		echo "<script>window.location='".site_url('finishing/FinishingAkhir/mesin_kalender')."'; </script>"; 


}



	// MESIN BINDING
    public function jadwal_fa_binding()
	{
		// check_already_login_finishing();
		$query = $this->fa->get_jadwal_binding();
		$data = array(
			'judul' => 'Finishing Akhir Mesin Finishing',
			'fa' => $query->result(),
		);		

		$jadwal_max = 0;		

		foreach($data["fa"] as $s => $row){
			// var_dump($row->id_order);

			$id_order = $row->id_order;
			$ambil = $this->fa->ambil_data_binding($id_order)->result();
			// var_dump($id_order);						

			foreach($ambil as $sq) {				
				if($sq->id_jadwal_binding > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_binding;
				}				
			}	
			$data["id_jadwal_max"][] = $jadwal_max;	
			$jadwal_max = 0;			   		

		}

		$this->template->load('finishing/template','finishing/finishing_akhir/jadwal_fa_binding',$data);
}
	public function edit_jadwal_fa_binding($id)
	{
		// check_already_login_finishing();
			$query = $this->fa->edit_binding($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Finishing',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_binding($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_binding > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_binding;
				}
				$tampung_jadwal[] = $sq->id_jadwal_binding;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;
		
		$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa-binding',$data);
	}
    public function tambah_jadwal_fa_binding($id)
	{
		// check_already_login_finishing();
		$query = $this->fa->edit_binding($id);
		$data = array(
			'judul' => 'Finishing Akhir Mesin Finishing',
			'fa' => $query->result(),
		);	
		$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_binding($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_binding > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_binding;
				}
				$tampung_jadwal[] = $sq->id_jadwal_binding;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;
		
		$this->template->load('finishing/template','finishing/finishing_akhir/tambah-jadwal-fa-binding',$data);
	}    
    public function lihat_jadwal_fa_binding($id)
	{
		// check_already_login_finishing();
		$query = $this->fa->edit_binding($id);
		$data = array(
			'judul' => 'Finishing Akhir Mesin Finishing',
			'fa' => $query->result(),
		);		

		$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_binding($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_binding > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_binding;
				}
				$tampung_jadwal[] = $sq->id_jadwal_binding;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

		$this->template->load('finishing/template','finishing/finishing_akhir/lihat-jadwal-fa-binding',$data);
	}
	public function proses_binding()
	{				
		if(isset($_POST['edit'])){							
			$inputan = $this->input->post(null, TRUE);


		// $jumlah_mesin = 0;
        // $jumlah_selesai = 0;
        // $inputan["status_umum"] = "cetak";

        // if($inputan["tanggal_pelaksanaan_binding"] !=0){
        //   $jumlah_mesin +=1;
        //   if($inputan["status_binding"] == "binding"){            
        //     $jumlah_selesai +=1;
        //   }                      
        // }

        // // if($inputan["tanggal_pelaksanaan_hardcover"] !=0){
		// // 	$jumlah_mesin +=1;
		// // 	if($inputan["status_hardcover"] == hardcover){            
		// // 	  $jumlah_selesai +=1;
		// // 	}                      
		// // }
        
        //   if($jumlah_selesai == $jumlah_mesin and $jumlah_selesai !=0){
        //     $inputan["status_umum"] = "finishing proses";
        //   }     
		//   $this->fp->status_umum($inputan);	     

			$this->fa->proses_edit_binding($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
				echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_binding')."'; </script>"; 
		}	

		if(isset($_POST['add'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->fa->proses_tambah_binding($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
				echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_binding')."'; </script>"; 
		}	
			
}

// MESIN HARDCOVER
	public function jadwal_fa_hardcover()
	{
		// check_already_login_finishing();
		$query = $this->fa->get_jadwal_hardcover();
		$data = array(
			'judul' => 'Finishing Akhir Mesin Finishing',
			'fa' => $query->result(),
		);
				
		$jadwal_max = 0;		

		foreach($data["fa"] as $s => $row){
			// var_dump($row->id_order);

			$id_order = $row->id_order;
			$ambil = $this->fa->ambil_data_hardcover($id_order)->result();
			// var_dump($id_order);						

			foreach($ambil as $sq) {				
				if($sq->id_jadwal_hardcover > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_hardcover;
				}				
			}	
			$data["id_jadwal_max"][] = $jadwal_max;	
			$jadwal_max = 0;			   		

		}
		
		$this->template->load('finishing/template','finishing/finishing_akhir/jadwal_fa_hardcover',$data);
}
	public function edit_jadwal_fa_hardcover($id)
	{
		// check_already_login_finishing();
		$query = $this->fa->edit_hardcover($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Finishing',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;			
			$ambil = $this->fa->ambilIDOrder_hardcover($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_hardcover > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_hardcover;
				}
				$tampung_jadwal[] = $sq->id_jadwal_hardcover;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

		$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa-hardcover',$data);
}
    public function tambah_jadwal_fa_hardcover($id)
	{
		// check_already_login_finishing();
		$query = $this->fa->edit_hardcover($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Finishing',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_hardcover($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_hardcover > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_hardcover;
				}
				$tampung_jadwal[] = $sq->id_jadwal_hardcover;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

		$this->template->load('finishing/template','finishing/finishing_akhir/tambah-jadwal-fa-hardcover',$data);
	}    
    public function lihat_jadwal_fa_hardcover($id)
	{
		// check_already_login_finishing();
		$query = $this->fa->edit_hardcover($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Finishing',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_hardcover($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_hardcover > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_hardcover;
				}
				$tampung_jadwal[] = $sq->id_jadwal_hardcover;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

		$this->template->load('finishing/template','finishing/finishing_akhir/lihat-jadwal-fa-hardcover',$data);
}
	public function proses_hardcover()
	{				
		if(isset($_POST['edit'])){							
			$inputan = $this->input->post(null, TRUE);

			$this->fa->proses_edit_hardcover($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
				echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_hardcover')."'; </script>"; 
		}
		if(isset($_POST['add'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->fa->proses_tambah_hardcover($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
				echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_hardcover')."'; </script>"; 
		}			
}
	
//// MESIN jahit
public function jadwal_fa_jahit()
{
	// check_already_login_finishing();
	$query = $this->fa->get_jadwal_jahit();
		$data = array(
			'judul' => 'Finishing Akhir Mesin Finishing',
			'fa' => $query->result(),
		);		

		$jadwal_max = 0;		

		foreach($data["fa"] as $s => $row){
			// var_dump($row->id_order);

			$id_order = $row->id_order;
			$ambil = $this->fa->ambil_data_jahit($id_order)->result();
			// var_dump($id_order);						

			foreach($ambil as $sq) {				
				if($sq->id_jadwal_jahit > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_jahit;
				}				
			}	
			$data["id_jadwal_max"][] = $jadwal_max;	
			$jadwal_max = 0;			   		

		}

	$this->template->load('finishing/template','finishing/finishing_akhir/jadwal_fa_jahit',$data);
}
public function edit_jadwal_fa_jahit($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_jahit($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Finishing',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_jahit($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_jahit > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_jahit;
				}
				$tampung_jadwal[] = $sq->id_jadwal_jahit;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

	$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa-jahit',$data);
}
public function tambah_jadwal_fa_jahit($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_jahit($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Finishing',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_jahit($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_jahit > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_jahit;
				}
				$tampung_jadwal[] = $sq->id_jadwal_jahit;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

	$this->template->load('finishing/template','finishing/finishing_akhir/tambah-jadwal-fa-jahit',$data);
}    
public function lihat_jadwal_fa_jahit($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_jahit($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Finishing',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_jahit($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_jahit > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_jahit;
				}
				$tampung_jadwal[] = $sq->id_jadwal_jahit;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

	$this->template->load('finishing/template','finishing/finishing_akhir/lihat-jadwal-fa-jahit',$data);
}
public function proses_jahit()
{				
	if(isset($_POST['edit'])){							
		$inputan = $this->input->post(null, TRUE);

		$this->fa->proses_edit_jahit($inputan);				
			echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_jahit')."'; </script>"; 
	}
	if(isset($_POST['add'])){							
		$inputan = $this->input->post(null, TRUE);
		$this->fa->proses_tambah_jahit($inputan);				
			echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_jahit')."'; </script>"; 
	}			
}

//// MESIN fa_potong
public function jadwal_fa_potong()
{
	// check_already_login_finishing();
	$query = $this->fa->get_jadwal_fa_potong();
		$data = array(
			'judul' => 'Finishing Akhir Mesin Finishing',
			'fa' => $query->result(),
		);		

		$jadwal_max = 0;		

		foreach($data["fa"] as $s => $row){
			// var_dump($row->id_order);

			$id_order = $row->id_order;
			$ambil = $this->fa->ambil_data_fa_potong($id_order)->result();
			// var_dump($id_order);						

			foreach($ambil as $sq) {				
				if($sq->id_jadwal_fa_potong > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_fa_potong;
				}				
			}	
			$data["id_jadwal_max"][] = $jadwal_max;	
			$jadwal_max = 0;			   		

		}

	$this->template->load('finishing/template','finishing/finishing_akhir/jadwal_fa_potong',$data);
}
public function edit_jadwal_fa_potong($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_fa_potong($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Finishing',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_fa_potong($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_fa_potong > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_fa_potong;
				}
				$tampung_jadwal[] = $sq->id_jadwal_fa_potong;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

	$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa-potong',$data);
}
public function tambah_jadwal_fa_potong($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_fa_potong($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Finishing',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_fa_potong($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_fa_potong > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_fa_potong;
				}
				$tampung_jadwal[] = $sq->id_jadwal_fa_potong;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

	$this->template->load('finishing/template','finishing/finishing_akhir/tambah-jadwal-fa-potong',$data);
}    
public function lihat_jadwal_fa_potong($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_fa_potong($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Finishing',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_fa_potong($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_fa_potong > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_fa_potong;
				}
				$tampung_jadwal[] = $sq->id_jadwal_fa_potong;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

	$this->template->load('finishing/template','finishing/finishing_akhir/lihat-jadwal-fa-potong',$data);
}
public function proses_fa_potong()
{				
	if(isset($_POST['edit'])){							
		$inputan = $this->input->post(null, TRUE);

		$this->fa->proses_edit_fa_potong($inputan);				
			echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_potong')."'; </script>"; 
	}
	if(isset($_POST['add'])){							
		$inputan = $this->input->post(null, TRUE);
		$this->fa->proses_tambah_fa_potong($inputan);				
			echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_potong')."'; </script>"; 
	}			
}

//// MESIN sub
public function jadwal_fa_sub()
{
	// check_already_login_finishing();
	$query = $this->fa->get_jadwal_sub();
		$data = array(
			'judul' => 'Finishing Akhir Mesin Finishing',
			'fa' => $query->result(),
		);		

		$jadwal_max = 0;		

		foreach($data["fa"] as $s => $row){
			// var_dump($row->id_order);

			$id_order = $row->id_order;
			$ambil = $this->fa->ambil_data_sub($id_order)->result();
			// var_dump($id_order);						

			foreach($ambil as $sq) {				
				if($sq->id_jadwal_sub > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_sub;
				}				
			}	
			$data["id_jadwal_max"][] = $jadwal_max;	
			$jadwal_max = 0;			   		

		}
			
	$this->template->load('finishing/template','finishing/finishing_akhir/jadwal_fa_sub',$data);
}
public function edit_jadwal_fa_sub($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_sub($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Finishing',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_sub($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;			
			foreach($ambil as $sq) {
				if($sq->id_jadwal_sub > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_sub;
				}
				$tampung_jadwal[] = $sq->id_jadwal_sub;
				$total_1 += $sq->hasil;			
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;		

	$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa-sub',$data);
}
public function tambah_jadwal_fa_sub($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_sub($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Finishing',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_sub($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;			
			foreach($ambil as $sq) {
				if($sq->id_jadwal_sub > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_sub;
				}
				$tampung_jadwal[] = $sq->id_jadwal_sub;
				$total_1 += $sq->hasil;			
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;	

	$this->template->load('finishing/template','finishing/finishing_akhir/tambah-jadwal-fa-sub',$data);
}    
public function lihat_jadwal_fa_sub($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_sub($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Finishing',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;
			$ambil = $this->fa->ambilIDOrder_sub($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;			
			foreach($ambil as $sq) {
				if($sq->id_jadwal_sub > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_sub;
				}
				$tampung_jadwal[] = $sq->id_jadwal_sub;
				$total_1 += $sq->hasil;			
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;	

	$this->template->load('finishing/template','finishing/finishing_akhir/lihat-jadwal-fa-sub',$data);
}
public function proses_sub()
{				
	if(isset($_POST['edit'])){							
		$inputan = $this->input->post(null, TRUE);

		$this->fa->proses_edit_sub($inputan);				
			echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_sub')."'; </script>"; 
	}		
	
	if(isset($_POST['add'])){							
		$inputan = $this->input->post(null, TRUE);
		$this->fa->proses_tambah_sub($inputan);				
			echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_sub')."'; </script>"; 
	}	
}

	
//// MESIN spiral
public function jadwal_fa_spiral()
{
	// check_already_login_finishing();
	$query = $this->fa->get_jadwal_spiral();
	$data = array(
		'judul' => 'Finishing Akhir Mesin Kalender',
		'fa' => $query->result(),
	);		
	$this->template->load('finishing/template','finishing/finishing_akhir/jadwal_fa_spiral',$data);
}
public function edit_jadwal_fa_spiral($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_spiral($id);
	$data = array(
		'judul' => 'Finishing Akhir Mesin Kalender',
		'fa' => $query->result(),
	);		
	$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa-spiral',$data);
}
public function tambah_jadwal_fa_spiral()
{
	// check_already_login_finishing();
	$query = $this->fa->get();
	$data = array(
		'judul' => 'Finishing Akhir Mesin Kalender',
		'fa' => $query->result(),
	);		
	$this->template->load('finishing/template','finishing/finishing_akhir/tambah-jadwal-fa-spiral',$data);
}    
public function lihat_jadwal_fa_spiral($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_spiral($id);
	$data = array(
		'judul' => 'Finishing Akhir Mesin Kalender',
		'fa' => $query->result(),
	);		
	$this->template->load('finishing/template','finishing/finishing_akhir/lihat-jadwal-fa-spiral',$data);
}
public function proses_spiral()
{				
	if(isset($_POST['edit'])){							
		$inputan = $this->input->post(null, TRUE);

		$this->fa->proses_edit_spiral($inputan);				
			echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_spiral')."'; </script>"; 
	}		
}

	
//// MESIN klemseng
public function jadwal_fa_klemseng()
{
	// check_already_login_finishing();
	$query = $this->fa->get_jadwal_klemseng();
		$data = array(
			'judul' => 'Finishing Akhir Mesin Kalender',
			'fa' => $query->result(),
		);
				
		$jadwal_max = 0;		

		foreach($data["fa"] as $s => $row){
			// var_dump($row->id_order);

			$id_order = $row->id_order;
			$ambil = $this->fa->ambil_data_klemseng($id_order)->result();
			// var_dump($id_order);						

			foreach($ambil as $sq) {				
				if($sq->id_jadwal_klemseng > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_klemseng;
				}				
			}	
			$data["id_jadwal_max"][] = $jadwal_max;	
			$jadwal_max = 0;			   		

		}

	$this->template->load('finishing/template','finishing/finishing_akhir/jadwal_fa_klemseng',$data);
}
public function edit_jadwal_fa_klemseng($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_klemseng($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Kalender',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;			
			$ambil = $this->fa->ambilIDOrder_klemseng($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_klemseng > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_klemseng;
				}
				$tampung_jadwal[] = $sq->id_jadwal_klemseng;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

	$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa-klemseng',$data);
}
public function tambah_jadwal_fa_klemseng($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_klemseng($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Kalender',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;			
			$ambil = $this->fa->ambilIDOrder_klemseng($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_klemseng > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_klemseng;
				}
				$tampung_jadwal[] = $sq->id_jadwal_klemseng;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

	$this->template->load('finishing/template','finishing/finishing_akhir/tambah-jadwal-fa-klemseng',$data);
}    
public function lihat_jadwal_fa_klemseng($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_klemseng($id);		
			$data = array(
				'judul' => 'Finishing Akhir Mesin Kalender',
				'fa' => $query->result(),
			);	
			$id_order = $data['fa'][0]->id_order;			
			$ambil = $this->fa->ambilIDOrder_klemseng($id_order)->result();
	
			$jadwal_max = 0;
			$tampung_jadwal = [];
			$total_1=0;
			$total_2=0;
			$total_3=0;
			$total_4=0;
			foreach($ambil as $sq) {
				if($sq->id_jadwal_klemseng > $jadwal_max) {
					$jadwal_max = $sq->id_jadwal_klemseng;
				}
				$tampung_jadwal[] = $sq->id_jadwal_klemseng;
				$total_1 += $sq->hasil_1;
				$total_2 += $sq->hasil_2;
				$total_3 += $sq->hasil_3;
				$total_4 += $sq->hasil_4;
			}
	
			$data['jadwal_max'] = $jadwal_max;
			$data['tampung_jadwal'] = $tampung_jadwal;
			$data['total_1'] = $total_1;
			$data['total_2'] = $total_2;
			$data['total_3'] = $total_3;
			$data['total_4'] = $total_4;

	$this->template->load('finishing/template','finishing/finishing_akhir/lihat-jadwal-fa-klemseng',$data);
}
public function proses_klemseng()
{				
	if(isset($_POST['edit'])){							
		$inputan = $this->input->post(null, TRUE);

		$this->fa->proses_edit_klemseng($inputan);				
			echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_klemseng')."'; </script>"; 
	}	
	if(isset($_POST['add'])){							
		$inputan = $this->input->post(null, TRUE);
		$this->fa->proses_tambah_klemseng($inputan);				
			echo "<script> alert('Data Berhasil Ditambahkan/Diubah'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_klemseng')."'; </script>"; 
	}			
}



// hapus binding
	public function hapus_binding($id)
	{		
		$data_id = explode("-" , $id);

		// data 0 = id_mesin, data 1 = id_order
		$jumlah_id = 0;
				$ambil = $this->fa->ambilIDOrder_binding($data_id[1])->result();
				foreach($ambil as $d){
					$jumlah_id+=1;
				}				
		if($jumlah_id >1){
				$this->fa->hapus_binding($data_id[0]);
				echo "<script> alert('Data Berhasil Dihapus'); </script>";				
				echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_binding')."'; </script>"; 
		}else{
				$this->fa->hapus_binding_update($data_id[1]);
				echo "<script> alert('Data Berhasil Dihapus'); </script>";				
				echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_binding')."'; </script>"; 
		}
}

// hapus hardcover
public function hapus_hardcover($id)
{		
	$data_id = explode("-" , $id);

	// data 0 = id_mesin, data 1 = id_order
	$jumlah_id = 0;
			$ambil = $this->fa->ambilIDOrder_hardcover($data_id[1])->result();
			foreach($ambil as $d){
				$jumlah_id+=1;
			}				
	if($jumlah_id >1){
			$this->fa->hapus_hardcover($data_id[0]);
			echo "<script> alert('Data Berhasil Dihapus'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_hardcover')."'; </script>"; 
	}else{
			$this->fa->hapus_hardcover_update($data_id[1]);
			echo "<script> alert('Data Berhasil Dihapus'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_hardcover')."'; </script>"; 
	}
}

// hapus jahit
public function hapus_jahit($id)
{		
	$data_id = explode("-" , $id);

	// data 0 = id_mesin, data 1 = id_order
	$jumlah_id = 0;
			$ambil = $this->fa->ambilIDOrder_jahit($data_id[1])->result();
			foreach($ambil as $d){
				$jumlah_id+=1;
			}				
	if($jumlah_id >1){
			$this->fa->hapus_jahit($data_id[0]);
			echo "<script> alert('Data Berhasil Dihapus'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_jahit')."'; </script>"; 
	}else{
			$this->fa->hapus_jahit_update($data_id[1]);
			echo "<script> alert('Data Berhasil Dihapus'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_jahit')."'; </script>"; 
	}
}

// hapus fa_potong
public function hapus_potong($id)
{		
	$data_id = explode("-" , $id);

	// data 0 = id_mesin, data 1 = id_order
	$jumlah_id = 0;
			$ambil = $this->fa->ambilIDOrder_fa_potong($data_id[1])->result();
			foreach($ambil as $d){
				$jumlah_id+=1;
			}				
	if($jumlah_id >1){
			$this->fa->hapus_fa_potong($data_id[0]);
			echo "<script> alert('Data Berhasil Dihapus'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_potong')."'; </script>"; 
	}else{
			$this->fa->hapus_fa_potong_update($data_id[1]);
			echo "<script> alert('Data Berhasil Dihapus'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_potong')."'; </script>"; 
	}
}

// hapus sub
public function hapus_sub($id)
{		
	$data_id = explode("-" , $id);

	// data 0 = id_mesin, data 1 = id_order
	$jumlah_id = 0;
			$ambil = $this->fa->ambilIDOrder_sub($data_id[1])->result();
			foreach($ambil as $d){
				$jumlah_id+=1;
			}				
	if($jumlah_id >1){
			$this->fa->hapus_sub($data_id[0]);
			echo "<script> alert('Data Berhasil Dihapus'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_sub')."'; </script>"; 
	}else{
			$this->fa->hapus_sub_update($data_id[1]);
			echo "<script> alert('Data Berhasil Dihapus'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_sub')."'; </script>"; 
	}
}

// hapus klemseng
public function hapus_klemseng($id)
{		
	$data_id = explode("-" , $id);

	// data 0 = id_mesin, data 1 = id_order
	$jumlah_id = 0;
			$ambil = $this->fa->ambilIDOrder_klemseng($data_id[1])->result();
			foreach($ambil as $d){
				$jumlah_id+=1;
			}				
	if($jumlah_id >1){
			$this->fa->hapus_klemseng($data_id[0]);
			echo "<script> alert('Data Berhasil Dihapus'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_klemseng')."'; </script>"; 
	}else{
			$this->fa->hapus_klemseng_update($data_id[1]);
			echo "<script> alert('Data Berhasil Dihapus'); </script>";				
			echo "<script>window.location='".site_url('finishing/FinishingAkhir/jadwal_fa_klemseng')."'; </script>"; 
	}
}





}
