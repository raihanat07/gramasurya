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
		// jika jadwal kosong
		if($inputan["tanggal_pelaksanaan_binding"] == ""){
			$this->fa->hapus_jadwal_binding($inputan);	
		}
		if($inputan["tanggal_pelaksanaan_hardcover"] == ""){
			$this->fa->hapus_jadwal_hardcover($inputan);	
		}
		if($inputan["tanggal_pelaksanaan_jahit"] == ""){
			$this->fa->hapus_jadwal_jahit($inputan);	
		}
		if($inputan["tanggal_pelaksanaan_fa_potong"] == ""){
			$this->fa->hapus_jadwal_fa_potong($inputan);	
		}
		if($inputan["tanggal_pelaksanaan_sub"] == ""){
			$this->fa->hapus_jadwal_sub($inputan);	
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
		// jika jadwal kosong
		if($inputan["tanggal_pelaksanaan_klemseng"] == ""){
			$this->fa->hapus_jadwal_klemseng($inputan);	
		}
		if($inputan["tanggal_pelaksanaan_spiral"] == ""){
			$this->fa->hapus_jadwal_spiral($inputan);	
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
		$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa-binding',$data);
	}
    public function tambah_jadwal_fa_binding()
	{
		// check_already_login_finishing();
		$query = $this->fa->get();
		$data = array(
			'judul' => 'Finishing Akhir Mesin Finishing',
			'fa' => $query->result(),
		);		
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
		$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa-hardcover',$data);
}
    public function tambah_jadwal_fa_hardcover()
	{
		// check_already_login_finishing();
		$query = $this->fa->get();
		$data = array(
			'judul' => 'Finishing Akhir Mesin Finishing',
			'fa' => $query->result(),
		);		
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
	$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa-jahit',$data);
}
public function tambah_jadwal_fa_jahit()
{
	// check_already_login_finishing();
	$query = $this->fa->get();
	$data = array(
		'judul' => 'Finishing Akhir Mesin Finishing',
		'fa' => $query->result(),
	);		
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
	$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa-potong',$data);
}
public function tambah_jadwal_fa_potong()
{
	// check_already_login_finishing();
	$query = $this->fa->get();
	$data = array(
		'judul' => 'Finishing Akhir Mesin Finishing',
		'fa' => $query->result(),
	);		
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
	$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa-sub',$data);
}
public function tambah_jadwal_fa_sub()
{
	// check_already_login_finishing();
	$query = $this->fa->get();
	$data = array(
		'judul' => 'Finishing Akhir Mesin Finishing',
		'fa' => $query->result(),
	);		
	$this->template->load('finishing/template','finishing/finishing_akhir/tambah-jadwal-fa-sub',$data);
}    
public function lihat_jadwal_fa_sub($id)
{
	// check_already_login_finishing();
	$query = $this->fa->edit_sub($id);
	$data = array(
		'judul' => 'FFinishing Akhir Mesin Finishing',
		'fa' => $query->result(),
	);		
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
	$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa-klemseng',$data);
}
public function tambah_jadwal_fa_klemseng()
{
	// check_already_login_finishing();
	$query = $this->fa->get();
	$data = array(
		'judul' => 'Finishing Akhir Mesin Kalender',
		'fa' => $query->result(),
	);		
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
}




}
