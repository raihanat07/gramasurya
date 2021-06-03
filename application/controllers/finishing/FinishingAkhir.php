<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FinishingAkhir extends CI_Controller {

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
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/finishing_akhir',$data);
	}
    public function mesin_kategori1()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir Mesin Finishing',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/mesin_kategori1',$data);
	}
    public function mesin_kalender()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir Mesin Kalender',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/mesin_kalender',$data);
	}
    public function jadwal_fa()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/jadwal_fa',$data);
	}
    public function tambah_jadwal_fa()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/tambah-jadwal-fa',$data);
	}
    public function edit_jadwal_fa()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa',$data);
	}
    public function lihat_jadwal_fa()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/lihat-jadwal-fa',$data);
	}

	// BINDING
    public function jadwal_fa_binding()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/jadwal_fa_binding',$data);
	}
    public function tambah_jadwal_fa_binding()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/tambah-jadwal-fa-binding',$data);
	}
    public function edit_jadwal_fa_binding()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa-binding',$data);
	}
    public function lihat_jadwal_fa_binding()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/lihat-jadwal-fa-binding',$data);
	}

	// HARDCOVER
    public function jadwal_fa_hardcover()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/jadwal_fa_hardcover',$data);
	}
    public function tambah_jadwal_fa_hardcover()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/tambah-jadwal-fa-hardcover',$data);
	}
    public function edit_jadwal_fa_hardcover()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa-hardcover',$data);
	}
    public function lihat_jadwal_fa_hardcover()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/lihat-jadwal-fa-hardcover',$data);
	}
	
	// JAHIT
    public function jadwal_fa_jahit()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/jadwal_fa_jahit',$data);
	}
    public function tambah_jadwal_fa_jahit()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/tambah-jadwal-fa-jahit',$data);
	}
    public function edit_jadwal_fa_jahit()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa-jahit',$data);
	}
    public function lihat_jadwal_fa_jahit()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/lihat-jadwal-fa-jahit',$data);
	}

	// POTONG
    public function jadwal_fa_potong()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/jadwal_fa_potong',$data);
	}
    public function tambah_jadwal_fa_potong()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/tambah-jadwal-fa-potong',$data);
	}
    public function edit_jadwal_fa_potong()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa-potong',$data);
	}
    public function lihat_jadwal_fa_potong()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/lihat-jadwal-fa-potong',$data);
	}

	// SUB
    public function jadwal_fa_sub()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/jadwal_fa_sub',$data);
	}
    public function tambah_jadwal_fa_sub()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/tambah-jadwal-fa-sub',$data);
	}
    public function edit_jadwal_fa_sub()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa-sub',$data);
	}
    public function lihat_jadwal_fa_sub()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/lihat-jadwal-fa-sub',$data);
	}

	// SPIRAL
    public function jadwal_fa_spiral()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/jadwal_fa_spiral',$data);
	}
    public function tambah_jadwal_fa_spiral()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/tambah-jadwal-fa-spiral',$data);
	}
    public function edit_jadwal_fa_spiral()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa-spiral',$data);
	}
    public function lihat_jadwal_fa_spiral()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/lihat-jadwal-fa-spiral',$data);
	}

	// KLEMSENG
    public function jadwal_fa_klemseng()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/jadwal_fa_klemseng',$data);
	}
    public function tambah_jadwal_fa_klemseng()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/tambah-jadwal-fa-klemseng',$data);
	}
    public function edit_jadwal_fa_klemseng()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/edit-jadwal-fa-klemseng',$data);
	}
    public function lihat_jadwal_fa_klemseng()
	{
		// check_already_login_finishing();
		$query = $this->so->get();
		$data = array(
			'judul' => 'Finishing Akhir',
			'so' => $query->result(),
		);		
		$this->template->load('finishing/template','finishing/finishing_akhir/lihat-jadwal-fa-klemseng',$data);
	}
}
