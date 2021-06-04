<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DisplayCetak extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('DisplayCetak_m', 'dc');
    }

	public function index()
	{
		// check_already_login_cetak();
		$query = $this->dc->get();
		$data = array(
			'judul' => 'Display Cetak',
			'dc' => $query->result(),
		);
		// $data['judul'] = 'Display Cetak';
		$this->template->load('cetak/template','cetak/display_cetak/displaycetak',$data);
	}
	public function lihat_dc($id)
	{
		// check_already_login_cetak();
		$query = $this->dc->get_lihatdc($id);
		$data = array(
			'judul' => 'Lihat Display Cetak',
			'dc' => $query->result(),
		);
		$this->template->load('cetak/template','cetak/display_cetak/displaycetak-lihat',$data);
	}
	
	public function edit_dc($id)
	{
		$query = $this->dc->get_edit($id);
		$data = array(
			'judul' => 'Edit Display Cetak',
			'dc' => $query->result(),
		);			
		$this->template->load('cetak/template','cetak/display_cetak/displaycetak-edit',$data);
	}

}
