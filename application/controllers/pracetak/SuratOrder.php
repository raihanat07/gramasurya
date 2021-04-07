<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratOrder extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('SuratOrder_m', 'so');
    }

	public function index()
	{
		$data['judul'] = 'Surat Order Pracetak';
		$this->template->load('pracetak/template','pracetak/so_pracetak/suratorder',$data);
	}

	public function tambah_so()
	{
		$data['judul'] = 'Tambah SO Pracetak';
		$this->template->load('pracetak/template','pracetak/so_pracetak/suratorder-tambah', $data);
		
	}

	public function proses()
	{
		if(isset($_POST['add'])){
			$inputan = $this->input->post(null, TRUE);
			$this->so->add($inputan);
		} else if(isset($_POST['edit'])){
			echo"edit";
		}	
		redirect('buku');
	}
	
	

}
