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
			'judul' => 'Operator Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/op-fa',$data);
	}

	// MESIN BINDING
	public function jadwal_op_binding()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Operator Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/binding/op-fa-binding',$data);
	}
	public function edit_op_binding()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Operator Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/binding/op-fa-tambah-binding',$data);
	}

	// MESIN POTONG
	public function jadwal_op_potong()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Operator Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/potong/op-fa-potong',$data);
	}
	public function edit_op_potong()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Operator Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/potong/op-fa-tambah-potong',$data);
	}

	// MESIN JAHIT
	public function jadwal_op_jahit()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Operator Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/jahit/op-fa-jahit',$data);
	}
	public function edit_op_jahit()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Operator Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/jahit/op-fa-tambah-jahit',$data);
	}

	// MESIN HARDCOVER
	public function jadwal_op_hardcover()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Operator Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/hardcover/op-fa-hardcover',$data);
	}
	public function edit_op_hardcover()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Operator Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/hardcover/op-fa-tambah-hardcover',$data);
	}

	// MESIN KLEMSENG
	public function jadwal_op_klemseng()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Operator Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/klemseng/op-fa-klemseng',$data);
	}
	public function edit_op_klemseng()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Operator Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/klemseng/op-fa-tambah-klemseng',$data);
	}

	// MESIN SPIRAL
	public function jadwal_op_spiral()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Operator Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/spiral/op-fa-spiral',$data);
	}
	public function edit_op_spiral()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Operator Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/spiral/op-fa-tambah-spiral',$data);
	}

	// SUB
	public function jadwal_op_sub()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Operator Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/sub/op-fa-sub',$data);
	}
	public function edit_op_sub()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Operator Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/operator_fa/sub/op-fa-tambah-sub',$data);
	}
}
