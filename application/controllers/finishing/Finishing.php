<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finishing extends CI_Controller {

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
			'judul' => 'Display Umum',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/display_umum/display',$data);
	}

}
