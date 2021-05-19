<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QualityControl extends CI_Controller {

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
			'judul' => 'Quality Control',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/quality_control/quality_control',$data);
	}
	public function tambah_qc()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Quality Control',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/quality_control/tambah_qc',$data);
	}
	public function lihat_qc()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Quality Control',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/quality_control/lihat_qc',$data);
	}
	
}
