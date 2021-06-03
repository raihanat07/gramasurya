<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DisplayUmum extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('SuratOrder_m', 'so');
    }

	public function index()
	{
		// check_already_login_cetak();
		$query = $this->so->get();
		// $data['judul'] = 'Display Umum Cetak';
		$data = array(
			'judul' => 'Display Umum Cetak',
			'so' => $query->result(),
		);
		$this->template->load('cetak/template','cetak/display_umum/displayumum',$data);
	}
	public function lihat_du()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Display Umum';
		$this->template->load('cetak/template','cetak/display_umum/displayumum-lihat',$data);
	}

}
