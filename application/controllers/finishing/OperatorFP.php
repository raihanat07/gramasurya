<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OperatorFP extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('FinishingProses_m', 'fp');
    }
	public function index()
	{
		// check_already_login_finishing();
		$query = $this->fp->get();
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/op-fp',$data);
	}

	// MESIN LAMINASI
	public function jadwal_op_laminasi()
	{
		// check_already_login_finishing();
		$query = $this->fp->get_jadwal_laminasi();
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/laminasi/op-fp-laminasi',$data);
	}
	public function edit_op_laminasi()
	{
		// check_already_login_finishing();
		$query = $this->fp->get();
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/laminasi/op-fp-tambah-laminasi',$data);
	}

	// MESIN MBO
	public function jadwal_op_mbo()
	{
		// check_already_login_finishing();
		$query = $this->fp->get_jadwal_mbo();
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/mbo/op-fp-mbo',$data);
	}
	public function edit_op_mbo()
	{
		// check_already_login_finishing();
		$query = $this->fp->get();
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/mbo/op-fp-tambah-mbo',$data);
	}

	// MESIN SHOE
	public function jadwal_op_shoe()
	{
		// check_already_login_finishing();
		$query = $this->fp->get_jadwal_shoe();
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/shoe/op-fp-shoe',$data);
	}
	public function edit_op_shoe()
	{
		// check_already_login_finishing();
		$query = $this->fp->get();
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/shoe/op-fp-tambah-shoe',$data);
	}

	// MESIN SUSUN
	public function jadwal_op_susun()
	{
		// check_already_login_finishing();
		$query = $this->fp->get_jadwal_susun();
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/susun/op-fp-susun',$data);
	}
	public function edit_op_susun()
	{
		// check_already_login_finishing();
		$query = $this->fp->get();
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/susun/op-fp-tambah-susun',$data);
	}

	// SUB
	public function jadwal_op_sub()
	{
		// check_already_login_finishing();
		$query = $this->fp->get_jadwal_sub();
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/sub/op-fp-sub',$data);
	}
	public function edit_op_sub()
	{
		// check_already_login_finishing();
		$query = $this->fp->get();
		$data = array(
			'judul' => 'Operator Finishing Proses',
			'fp' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fp/sub/op-fp-tambah-sub',$data);
	}
}
