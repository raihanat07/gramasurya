<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratOrder extends CI_Controller {

	public function index()
	{
		check_not_login();
		$data['judul'] = 'Surat Order Pracetak';
		$this->template->load('pracetak/template','pracetak/so_pracetak/suratorder',$data);
	}
	public function tambah_so()
	{
		$data['judul'] = 'Tambah SO Pracetak';
		$this->template->load('pracetak/template','pracetak/so_pracetak/suratorder-tambah', $data);
		
	}

	

}
