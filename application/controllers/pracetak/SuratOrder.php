<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratOrder extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Surat Order Pracetak';
		$this->template->load('pracetak/template','pracetak/suratorder',$data);
	}
}
