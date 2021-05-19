<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FinishingAkhir extends CI_Controller {

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
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/finishing_akhir',$data);
	}
    public function jadwal_fa()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/jadwal_fa',$data);
	}

	// MESIN BINDING
    public function jadwal_fa_binding()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/jadwal_fa_binding',$data);
	}
    public function tambah_jadwal_fa_binding()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/tambah_jadwal_fa_binding',$data);
	}
    public function lihat_jadwal_fa_binding()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/lihat_jadwal_fa_binding',$data);
	}
	
}
