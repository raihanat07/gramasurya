<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Direksi extends CI_Controller {

	// public function __construct()
    // {	
    //     parent::__construct();
	// 	check_not_login();
    //     $this->load->model('Direksi_m', 'd');
    // }

	public function Direksi()
	{
		check_not_login();
		$data['judul'] = 'Direksi';
		$this->template->load('direksi/template',$data );
	}


	
	
	

}
