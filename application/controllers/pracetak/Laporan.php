<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Laporan';
		$this->template->load('pracetak/template','pracetak/laporan/laporan',$data);
	}
	public function edit_laporan()
	{
		$data['judul'] = 'Edit Laporan Pracetak';
		$this->template->load('pracetak/template','pracetak/laporan/laporan-edit', $data);
		
	}
}
