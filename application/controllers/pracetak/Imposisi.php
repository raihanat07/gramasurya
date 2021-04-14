<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imposisi extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Imposisi_m', 'imposisi');
    }

	public function index()
	{	
		check_not_login();
		$query = $this->imposisi->get();
		$data = array(
			'judul' => 'Imposisi',
			'imposisi' => $query->result(),
		);	
		$this->template->load('pracetak/template','pracetak/imposisi/imposisi',$data);
	}
	public function edit_imposisi($id)
	{	
			$query = $this->imposisi_m->get($id);
			if($query->num_rows() > 0 ){
				$data['row'] = $query->row();
				$data['judul'] = 'Edit Imposisi';
				$this->template->load('pracetak/template','pracetak/imposisi/imposisi-edit', $data );	
			}else{
				echo "<script>alert('Data Tidak Ditemukan');";
				echo "window.location='".site_url('pracetak/Imposisi/index')."';</script>";
			}
				
			$post = $this->input->post(null, TRUE);
			$this->user_m->edit_user($post);
			if($this->db->affected_rows() > 0){
				echo "<script>alert('Data Berhasil Disimpan');</script>";
			}
			echo "<script>window.location='".site_url('pracetak/User/index')."';</script>";

		
	}

	public function lihat_imposisi()
	{
		$data['judul'] = 'Lihat Imposisi Pracetak';
		$this->template->load('pracetak/template','pracetak/imposisi/imposisi-lihat', $data);
	}


}
