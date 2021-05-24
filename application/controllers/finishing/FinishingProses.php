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
	
	// MESIN MBO DAN MESIN SHOE
    public function tambah_jadwal_fp_ms()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/tambah-jadwal-fp-ms',$data);
	}
    public function edit_jadwal_fp_ms()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/edit-jadwal-fp-ms',$data);
	}
    public function lihat_jadwal_fp_ms()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/lihat-jadwal-fp-ms',$data);
	}

	// SELAIN MESIN MBO DAN MESIN SHOE
    public function tambah_jadwal_fP()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/tambah-jadwal-fp',$data);
	}
    public function edit_jadwal_fp()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/edit-jadwal-fp',$data);
	}
    public function lihat_jadwal_fp()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/lihat-jadwal-fp',$data);
	}
	
}
