<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FinishingProses extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
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
		$this->template->load('finishing/template','finishing/finishing_proses/finishing_proses',$data);
	}
	public function proses_fp()
	{
		if(isset($_POST['add'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->fp->tambah_fp($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan'); </script>";				
				echo "<script>window.location='".site_url('finishing/FinishingProses/')."'; </script>"; 
		}
		if(isset($_POST['edit'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->fp->edit_fp($inputan);				
				echo "<script> alert('Data Berhasil Ditambahkan'); </script>";				
				echo "<script>window.location='".site_url('finishing/FinishingProses/')."'; </script>"; 
		}
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

	   $jadwal_max = $ambil[0]->id_jadal_laminasi;
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

	   $jadwal_max = $ambil[0]->id_jadwal_laminasi;
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

	   $jadwal_max = $ambil[0]->id_jadal_laminasi;
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
		$query = $this->fp->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/jadwal-fp-mbo',$data);
	}
    public function tambah_jadwal_fp_mbo()
	{
		// check_already_login_finishing();
		$query = $this->fp->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/tambah-jadwal-fp-mbo',$data);
	}
    public function edit_jadwal_fp_mbo()
	{
		// check_already_login_finishing();
		$query = $this->fp->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/edit-jadwal-fp-mbo',$data);
	}
    public function lihat_jadwal_fp_mbo()
	{
		// check_already_login_finishing();
		$query = $this->fp->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/lihat-jadwal-fp-mbo',$data);
	}

///// MESIN SHOE
    public function jadwal_fp_shoe()
	{
		// check_already_login_finishing();
		$query = $this->fp->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/jadwal-fp-shoe',$data);
	}
    public function tambah_jadwal_fp_shoe()
	{
		// check_already_login_finishing();
		$query = $this->fp->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/tambah-jadwal-fp-shoe',$data);
	}
    public function edit_jadwal_fp_shoe()
	{
		// check_already_login_finishing();
		$query = $this->fp->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/edit-jadwal-fp-shoe',$data);
	}
    public function lihat_jadwal_fp_shoe()
	{
		// check_already_login_finishing();
		$query = $this->fp->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/lihat-jadwal-fp-shoe',$data);
	}

	
///// MESIN SUSUN
    public function jadwal_fp_susun()
	{
		// check_already_login_finishing();
		$query = $this->fp->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/jadwal-fp-susun',$data);
	}
    public function tambah_jadwal_fp_susun()
	{
		// check_already_login_finishing();
		$query = $this->fp->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/tambah-jadwal-fp-susun',$data);
	}
    public function edit_jadwal_fp_susun()
	{
		// check_already_login_finishing();
		$query = $this->fp->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/edit-jadwal-fp-susun',$data);
	}
    public function lihat_jadwal_fp_susun()
	{
		// check_already_login_finishing();
		$query = $this->fp->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/lihat-jadwal-fp-susun',$data);
	}


//// SUB
    public function jadwal_fp_sub()
	{
		// check_already_login_finishing();
		$query = $this->fp->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/jadwal-fp-sub',$data);
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
    public function edit_jadwal_fp_sub()
	{
		// check_already_login_finishing();
		$query = $this->fp->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/edit-jadwal-fp-sub',$data);
	}
    public function lihat_jadwal_fp_sub()
	{
		// check_already_login_finishing();
		$query = $this->fp->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/lihat-jadwal-fp-sub',$data);
	}
	
}
