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
			'judul' => 'Operator Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/op-fp',$data);
	}

	// MESIN LAMINASI
	public function jadwal_op_laminasi()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/laminasi/op-fp-laminasi',$data);
	}
	public function edit_op_laminasi()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/laminasi/op-fp-tambah-laminasi',$data);
	}

	// MESIN MBO
	public function jadwal_op_mbo()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/mbo/op-fp-mbo',$data);
	}
	public function edit_op_mbo()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/mbo/op-fp-tambah-mbo',$data);
	}

	// MESIN SHOE
	public function jadwal_op_shoe()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/shoe/op-fp-shoe',$data);
	}
	public function edit_op_shoe()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/shoe/op-fp-tambah-shoe',$data);
	}

	// MESIN SUSUN
	public function jadwal_op_susun()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/susun/op-fp-susun',$data);
	}
	public function edit_op_susun()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/susun/op-fp-tambah-susun',$data);
	}

	// SUB
	public function jadwal_op_sub()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/sub/op-fp-sub',$data);
	}
	public function edit_op_sub()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/sub/op-fp-tambah-sub',$data);
	}
}
