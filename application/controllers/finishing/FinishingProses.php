<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FinishingProses extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('SuratOrder_m', 'so');
    }
	public function index()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/finishing_proses',$data);
	}
    public function jadwal_fp()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/jadwal_fp',$data);
	}
	
	// MESIN SHOE
    public function tambah_jadwal_fp_shoe()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/tambah-jadwal-fp-shoe',$data);
	}
    public function edit_jadwal_fp_shoe()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/edit-jadwal-fp-shoe',$data);
	}
    public function lihat_jadwal_fp_shoe()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/lihat-jadwal-fp-shoe',$data);
	}

	// LAMINASI
    public function tambah_jadwal_fp_laminasi()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/tambah-jadwal-fp-laminasi',$data);
	}
    public function edit_jadwal_fp_laminasi()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/edit-jadwal-fp-laminasi',$data);
	}
    public function lihat_jadwal_fp_laminasi()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/lihat-jadwal-fp-laminasi',$data);
	}

	// SUSUN
    public function tambah_jadwal_fp_susun()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/tambah-jadwal-fp-susun',$data);
	}
    public function edit_jadwal_fp_susun()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/edit-jadwal-fp-susun',$data);
	}
    public function lihat_jadwal_fp_susun()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/lihat-jadwal-fp-susun',$data);
	}

	// SUB
    public function tambah_jadwal_fp_sub()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/tambah-jadwal-fp-sub',$data);
	}
    public function edit_jadwal_fp_sub()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/edit-jadwal-fp-sub',$data);
	}
    public function lihat_jadwal_fp_sub()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/lihat-jadwal-fp-sub',$data);
	}
	
}
