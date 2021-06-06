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
	}


    public function jadwal_fp()
	{
		// check_already_login_finishing();
		$query = $this->fp->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/jadwal_fp',$data);
	}
	
	// MESIN MBO
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

	// MESIN SHOE
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

	// LAMINASI
    public function jadwal_fp_laminasi()
	{
		// check_already_login_finishing();
		$query = $this->fp->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/jadwal-fp-laminasi',$data);
	}
    public function tambah_jadwal_fp_laminasi()
	{
		// check_already_login_finishing();
		$query = $this->fp->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/tambah-jadwal-fp-laminasi',$data);
	}
    public function edit_jadwal_fp_laminasi()
	{
		// check_already_login_finishing();
		$query = $this->fp->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/edit-jadwal-fp-laminasi',$data);
	}
    public function lihat_jadwal_fp_laminasi()
	{
		// check_already_login_finishing();
		$query = $this->fp->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/lihat-jadwal-fp-laminasi',$data);
	}

	// SUSUN
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

	// SUB
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
