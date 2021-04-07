<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imposisi extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Imposisi';
		$this->template->load('pracetak/template','pracetak/imposisi/imposisi',$data);
	}
	public function edit_imposisi()
	{
		$data['judul'] = 'Edit Imposisi Pracetak';
		$this->template->load('pracetak/template','pracetak/imposisi/imposisi-edit', $data);
		
	}
}
