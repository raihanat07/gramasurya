<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OperatorFA extends CI_Controller {

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
			'judul' => 'Operator FP',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/operator_fa/finishing_akhir',$data);
	}
	public function jadwal_op_jahit()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Operator FP',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/operator_fa/jahit/data_jahit_op',$data);
	}
	public function edit_op_jahit()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Operator FP',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/operator_fa/jahit/edit_jahit_op',$data);
	}
}
