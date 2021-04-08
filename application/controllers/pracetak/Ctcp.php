<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctcp extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'CTCP';
		$this->template->load('pracetak/template','pracetak/ctcp/ctcp',$data);
	}
	public function edit_ctcp()
	{
		$data['judul'] = 'Edit Ctcp Pracetak';
		$this->template->load('pracetak/template','pracetak/ctcp/ctcp-edit', $data);
	}
	public function lihat_ctcp()
	{
		$data['judul'] = 'Lihat Ctcp Pracetak';
		$this->template->load('pracetak/template','pracetak/ctcp/ctcp-lihat', $data);
	}
}
