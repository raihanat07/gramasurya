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
	
	// MESIN LAMINASI
    public function tambah_jadwal_fp_laminasi()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/tambah_jadwal_fp_laminasi',$data);
	}
    public function lihat_jadwal_fp_laminasi()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/lihat_jadwal_fp_laminasi',$data);
	}

	// MESIN SHOE
    public function jadwal_fp_shoe()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/jadwal_fp_shoe',$data);
	}
    public function tambah_jadwal_fp_shoe()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_proses/tambah_jadwal_fp_shoe',$data);
	}	
	
}
