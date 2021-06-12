<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OperatorFP extends CI_Controller {

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
		$this->template->load('finishing/template','finishing/operator_fp/finishing_proses_op',$data);
	}
	public function jadwal_op_laminasi()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Operator FP',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/laminasi/data_laminasi_op',$data);
	}
	public function edit_op_laminasi()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Operator FP',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/laminasi/edit_laminasi_op',$data);
	}
}
