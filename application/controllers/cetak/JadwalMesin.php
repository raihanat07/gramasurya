<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JadwalMesin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('JadwalMesin_m', 'jm');
    }

	public function index()
	{
		// check_already_login_cetak();
		$data['judul'] = 'Jadwal Mesin Cetak';
		$this->template->load('cetak/template','cetak/jadwal_mesin/jadwalmesin',$data);
	}
	public function jadwal_72()
	{
		
		$query = $this->jm->get_jadwal_72();
		$data = array(
			'judul' => 'Jadwal Mesin Cetak',
			'jm' => $query->result(),
		);
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_72/jadwalmesin-72',$data);
	}

	public function jadwal_74a()
	{
		
		$query = $this->jm->get_jadwal_74a();
		$data = array(
			'judul' => 'Jadwal Mesin Cetak',
			'jm' => $query->result(),
		);
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_74a/jadwalmesin-74a',$data);
	}

	public function jadwal_74b()
	{
		
		$query = $this->jm->get_jadwal_74b();
		$data = array(
			'judul' => 'Jadwal Mesin Cetak',
			'jm' => $query->result(),
		);
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_74b/jadwalmesin-74b',$data);
	}

	public function jadwal_102a()
	{
		
		$query = $this->jm->get_jadwal_102a();
		$data = array(
			'judul' => 'Jadwal Mesin Cetak',
			'jm' => $query->result(),
		);
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_102a/jadwalmesin-102a',$data);
	}

	public function jadwal_102b()
	{
		
		$query = $this->jm->get_jadwal_102b();
		$data = array(
			'judul' => 'Jadwal Mesin Cetak',
			'jm' => $query->result(),
		);
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_102b/jadwalmesin-102b',$data);
	}

	public function jadwal_tokko()
	{
		
		$query = $this->jm->get_jadwal_tokko();
		$data = array(
			'judul' => 'Jadwal Mesin Cetak',
			'jm' => $query->result(),
		);
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_tokko/jadwalmesin-tokko',$data);
	}

	
	public function lihat_72($id)
	{
		$query = $this->jm->get_lihat_72($id);
		$data = array(
			'judul' => 'Lihat Mesin 72',
			'jm' => $query->result(),
		);
		// check_already_login_cetak();
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_72/jadwalmesin-72-lihat',$data);
	}

	public function lihat_74a($id)
	{
		$query = $this->jm->get_lihat_74a($id);
		$data = array(
			'judul' => 'Lihat Mesin 74a',
			'jm' => $query->result(),
		);
		// check_already_login_cetak();
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_74a/jadwalmesin-74a-lihat',$data);
	}

	public function lihat_74b($id)
	{
		$query = $this->jm->get_lihat_74b($id);
		$data = array(
			'judul' => 'Lihat Mesin 74b',
			'jm' => $query->result(),
		);
		// check_already_login_cetak();
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_74b/jadwalmesin-74b-lihat',$data);
	}

	public function lihat_102a($id)
	{
		$query = $this->jm->get_lihat_102a($id);
		$data = array(
			'judul' => 'Lihat Mesin 102a',
			'jm' => $query->result(),
		);
		// check_already_login_cetak();
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_102a/jadwalmesin-102a-lihat',$data);
	}

	public function lihat_102b($id)
	{
		$query = $this->jm->get_lihat_102b($id);
		$data = array(
			'judul' => 'Lihat Mesin 102b',
			'jm' => $query->result(),
		);
		// check_already_login_cetak();
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_102b/jadwalmesin-102b-lihat',$data);
	}

	public function lihat_tokko($id)
	{
		$query = $this->jm->get_lihat_tokko($id);
		$data = array(
			'judul' => 'Lihat Mesin Tokko',
			'jm' => $query->result(),
		);
		// check_already_login_cetak();
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_tokko/jadwalmesin-tokko-lihat',$data);
	}

	public function edit_72($id)
	{
		$query = $this->jm->get_tambah_spk_72($id);
		$data = array(
			'judul' => 'Jadwal Mesin Cetak',
			'jm' => $query->result(),
		);
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_72/jadwalmesin-72-edit',$data);
	}

	public function edit_74a($id)
	{
		$query = $this->jm->get_tambah_spk_74a($id);
		$data = array(
			'judul' => 'Jadwal Mesin Cetak',
			'jm' => $query->result(),
		);
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_74a/jadwalmesin-74a-edit',$data);
	}

	public function edit_74b($id)
	{
		$query = $this->jm->get_tambah_spk_74b($id);
		$data = array(
			'judul' => 'Jadwal Mesin Cetak',
			'jm' => $query->result(),
		);
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_74b/jadwalmesin-74b-edit',$data);
	}

	public function edit_102a($id)
	{
		$query = $this->jm->get_tambah_spk_102a($id);
		$data = array(
			'judul' => 'Jadwal Mesin Cetak',
			'jm' => $query->result(),
		);
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_102a/jadwalmesin-102a-edit',$data);
	}

	public function edit_102b($id)
	{
		$query = $this->jm->get_tambah_spk_102b($id);
		$data = array(
			'judul' => 'Jadwal Mesin Cetak',
			'jm' => $query->result(),
		);
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_102b/jadwalmesin-102b-edit',$data);
	}

	public function edit_tokko($id)
	{
		$query = $this->jm->get_tambah_spk_tokko($id);
		$data = array(
			'judul' => 'Jadwal Mesin Cetak',
			'jm' => $query->result(),
		);
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_tokko/jadwalmesin-tokko-edit',$data);
	}


	// public function edit_jadwal_74a($id){
	// 	if(isset($_POST['edit'])){ 
	// 		$inputan = $this->input->post(null, TRUE);	
	// 		if($inputan["target_74a"] !=null){
	// 			$inputan["druk_74a"] = $inputan["target_74a"] * $inputan["oplag"];
	// 		}
	// 		$this->jm->edit_jm74a($inputan);							
	// 		// $this->dc->status_umum($inputan);						
	// 			echo "<script> alert('Data Berhasil Diubah'); </script>";		
	// 			echo "<script>window.location='".site_url('cetak/jadwalmesin/jadwal_74a')."'; </script>";
	// 	}	
	// }

	public function print_72()
	{
		
		$data['judul'] = 'Jadwal Mesin Cetak';
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_72/jadwalmesin-72-print',$data);		
	}
	public function edit_spk_72($id)
	{
		// check_already_login_cetak();
		$query = $this->jm->get_lihat_spk_72($id);
		$data = array(
			'judul' => 'Jadwal Mesin Cetak',
			'jm' => $query->result(),
		);
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_72/mesin72-edit-spk',$data);
	}
	public function edit_spk_74a($id)
	{
		// check_already_login_cetak();
		$query = $this->jm->get_lihat_spk_74a($id);
		$data = array(
			'judul' => 'Jadwal Mesin Cetak',
			'jm' => $query->result(),
		);
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_74a/mesin74a-edit-spk',$data);
	}
	public function edit_spk_74b($id)
	{
		// check_already_login_cetak();
		$query = $this->jm->get_lihat_spk_74b($id);
		$data = array(
			'judul' => 'Jadwal Mesin Cetak',
			'jm' => $query->result(),
		);
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_74b/mesin74b-edit-spk',$data);
	}
	public function edit_spk_102a($id)
	{
		// check_already_login_cetak();
		$query = $this->jm->get_lihat_spk_102a($id);
		$data = array(
			'judul' => 'Jadwal Mesin Cetak',
			'jm' => $query->result(),
		);
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_102a/mesin102a-edit-spk',$data);
	}
	public function edit_spk_102b($id)
	{
		// check_already_login_cetak();
		$query = $this->jm->get_lihat_spk_102b($id);
		$data = array(
			'judul' => 'Jadwal Mesin Cetak',
			'jm' => $query->result(),
		);
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_102b/mesin102b-edit-spk',$data);
	}
	public function edit_spk_tokko($id)
	{
		// check_already_login_cetak();
		$query = $this->jm->get_lihat_spk_tokko($id);
		$data = array(
			'judul' => 'Jadwal Mesin Cetak',
			'jm' => $query->result(),
		);
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_tokko/mesintokko-edit-spk',$data);
	}
	
	public function tambah_spk_72($id)
	{
		// $query = $this->dc->get_dc($id);
		// $data = array(
		// 	$data['judul'] = 'Jadwal Mesin Cetak';
		// 	'dc' => $query->result(),
		// );
		$query = $this->jm->get_tambah_spk_72($id);
		$data = array(
			'judul' => 'Jadwal Mesin Cetak',
			'jm' => $query->result(),
		);
		// check_already_login_cetak();
		
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_72/mesin72-tambah-spk',$data);
	}

	public function tambah_spk_74a($id)
	{
		// $query = $this->dc->get_dc($id);
		// $data = array(
		// 	$data['judul'] = 'Jadwal Mesin Cetak';
		// 	'dc' => $query->result(),
		// );
		$query = $this->jm->get_tambah_spk_74a($id);
		$data = array(
			'judul' => 'Jadwal Mesin Cetak',
			'jm' => $query->result(),
		);
		// check_already_login_cetak();
		
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_74a/mesin74a-tambah-spk',$data);
	}

	public function tambah_spk_74b($id)
	{
		// $query = $this->dc->get_dc($id);
		// $data = array(
		// 	$data['judul'] = 'Jadwal Mesin Cetak';
		// 	'dc' => $query->result(),
		// );
		$query = $this->jm->get_tambah_spk_74b($id);
		$data = array(
			'judul' => 'Jadwal Mesin Cetak',
			'jm' => $query->result(),
		);
		// check_already_login_cetak();
		
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_74b/mesin74b-tambah-spk',$data);
	}

	public function tambah_spk_102a($id)
	{
		// $query = $this->dc->get_dc($id);
		// $data = array(
		// 	$data['judul'] = 'Jadwal Mesin Cetak';
		// 	'dc' => $query->result(),
		// );
		$query = $this->jm->get_tambah_spk_102a($id);
		$data = array(
			'judul' => 'Jadwal Mesin Cetak',
			'jm' => $query->result(),
		);
		// check_already_login_cetak();
		
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_102a/mesin102a-tambah-spk',$data);
	}

	public function tambah_spk_102b($id)
	{
		// $query = $this->dc->get_dc($id);
		// $data = array(
		// 	$data['judul'] = 'Jadwal Mesin Cetak';
		// 	'dc' => $query->result(),
		// );
		$query = $this->jm->get_tambah_spk_102b($id);
		$data = array(
			'judul' => 'Jadwal Mesin Cetak',
			'jm' => $query->result(),
		);
		// check_already_login_cetak();
		
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_102b/mesin102b-tambah-spk',$data);
	}

	public function tambah_spk_tokko($id)
	{
		// $query = $this->dc->get_dc($id);
		// $data = array(
		// 	$data['judul'] = 'Jadwal Mesin Cetak';
		// 	'dc' => $query->result(),
		// );
		$query = $this->jm->get_tambah_spk_tokko($id);
		$data = array(
			'judul' => 'Jadwal Mesin Cetak',
			'jm' => $query->result(),
		);
		// check_already_login_cetak();
		
		$this->template->load('cetak/template','cetak/jadwal_mesin/mesin_tokko/mesintokko-tambah-spk',$data);
	}

	public function edit_jadwal_72(){
		if(isset($_POST['edit'])){ 
			$inputan = $this->input->post(null, TRUE);	
			if($inputan["target_72"] !=null){
				$inputan["druk_72"] = $inputan["target_72"] * $inputan["oplag"];
			}
			$this->jm->edit_jm($inputan);							
			// $this->dc->status_umum($inputan);						
				echo "<script> alert('Data Berhasil Diubah'); </script>";		
				echo "<script>window.location='".site_url('cetak/jadwalmesin/jadwal_72')."'; </script>";
		}	
	}

	public function edit_jadwal_74a(){
		if(isset($_POST['edit'])){ 
			$inputan = $this->input->post(null, TRUE);	
			if($inputan["target_74a"] !=null){
				$inputan["druk_74a"] = $inputan["target_74a"] * $inputan["oplag"];
			}
			$this->jm->edit_jm74a($inputan);							
			// $this->dc->status_umum($inputan);						
				echo "<script> alert('Data Berhasil Diubah'); </script>";		
				echo "<script>window.location='".site_url('cetak/jadwalmesin/jadwal_74a')."'; </script>";
		}	
	}

	public function edit_jadwal_74b(){
		if(isset($_POST['edit'])){ 
			$inputan = $this->input->post(null, TRUE);	
			if($inputan["target_74b"] !=null){
				$inputan["druk_74b"] = $inputan["target_74b"] * $inputan["oplag"];
			}
			$this->jm->edit_jm74b($inputan);							
			// $this->dc->status_umum($inputan);						
				echo "<script> alert('Data Berhasil Diubah'); </script>";		
				echo "<script>window.location='".site_url('cetak/jadwalmesin/jadwal_74b')."'; </script>";
		}	
	}

	public function edit_jadwal_102a(){
		if(isset($_POST['edit'])){ 
			$inputan = $this->input->post(null, TRUE);	
			if($inputan["target_102a"] !=null){
				$inputan["druk_102a"] = $inputan["target_102a"] * $inputan["oplag"];
			}
			$this->jm->edit_jm102a($inputan);							
			// $this->dc->status_umum($inputan);						
				echo "<script> alert('Data Berhasil Diubah'); </script>";		
				echo "<script>window.location='".site_url('cetak/jadwalmesin/jadwal_102a')."'; </script>";
		}	
	}

	public function edit_jadwal_102b(){
		if(isset($_POST['edit'])){ 
			$inputan = $this->input->post(null, TRUE);	
			if($inputan["target_102b"] !=null){
				$inputan["druk_102b"] = $inputan["target_102b"] * $inputan["oplag"];
			}
			$this->jm->edit_jm102b($inputan);							
			// $this->dc->status_umum($inputan);						
				echo "<script> alert('Data Berhasil Diubah'); </script>";		
				echo "<script>window.location='".site_url('cetak/jadwalmesin/jadwal_102b')."'; </script>";
		}	
	}

	public function edit_jadwal_tokko(){
		if(isset($_POST['edit'])){ 
			$inputan = $this->input->post(null, TRUE);	
			if($inputan["target_tokko"] !=null){
				$inputan["druk_tokko"] = $inputan["target_tokko"] * $inputan["oplag"];
			}
			$this->jm->edit_jmtokko($inputan);							
			// $this->dc->status_umum($inputan);						
				echo "<script> alert('Data Berhasil Diubah'); </script>";		
				echo "<script>window.location='".site_url('cetak/jadwalmesin/jadwal_tokko')."'; </script>";
		}	
	}

	public function proses()
	{
		if(isset($_POST['addspk72'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->jm->add_spk_72($inputan);
				if($this->db->affected_rows() > 0){
					echo "<script> alert('Data Berhasil Ditambahkan'); </script>";
				}
				echo "<script>window.location='".site_url('cetak/jadwalmesin/jadwal_72')."'; </script>"; 
		} else if(isset($_POST['addspk74a'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->jm->add_spk_74a($inputan);
				if($this->db->affected_rows() > 0){
					echo "<script> alert('Data Berhasil Ditambahkan'); </script>";
				}
				echo "<script>window.location='".site_url('cetak/jadwalmesin/jadwal_74a')."'; </script>"; 
		}else if(isset($_POST['addspk74b'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->jm->add_spk_74b($inputan);
				if($this->db->affected_rows() > 0){
					echo "<script> alert('Data Berhasil Ditambahkan'); </script>";
				}
				echo "<script>window.location='".site_url('cetak/jadwalmesin/jadwal_74b')."'; </script>"; 
		}else if(isset($_POST['addspk102a'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->jm->add_spk_102a($inputan);
				if($this->db->affected_rows() > 0){
					echo "<script> alert('Data Berhasil Ditambahkan'); </script>";
				}
				echo "<script>window.location='".site_url('cetak/jadwalmesin/jadwal_102a')."'; </script>"; 
		}else if(isset($_POST['addspk102b'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->jm->add_spk_102b($inputan);
				if($this->db->affected_rows() > 0){
					echo "<script> alert('Data Berhasil Ditambahkan'); </script>";
				}
				echo "<script>window.location='".site_url('cetak/jadwalmesin/jadwal_102b')."'; </script>"; 
		}else if(isset($_POST['addspktokko'])){							
			$inputan = $this->input->post(null, TRUE);
			$this->jm->add_spk_tokko($inputan);
				if($this->db->affected_rows() > 0){
					echo "<script> alert('Data Berhasil Ditambahkan'); </script>";
				}
				echo "<script>window.location='".site_url('cetak/jadwalmesin/jadwal_tokko')."'; </script>"; 
		}else if(isset($_POST['editspk72'])){ 
			$inputan = $this->input->post(null, TRUE);			
			$this->jm->edit_spk_72($inputan);
				if($this->db->affected_rows() > 0){					
					echo "<script> alert('Data Berhasil Diubah'); </script>";
				}
				echo "<script>window.location='".site_url('cetak/jadwalmesin/jadwal_72')."'; </script>"; 
		} else if(isset($_POST['editspk74a'])){ 
			$inputan = $this->input->post(null, TRUE);			
			$this->jm->edit_spk_74a($inputan);
				if($this->db->affected_rows() > 0){					
					echo "<script> alert('Data Berhasil Diubah'); </script>";
				}
				echo "<script>window.location='".site_url('cetak/jadwalmesin/jadwal_74a')."'; </script>"; 
		}else if(isset($_POST['editspk74b'])){ 
			$inputan = $this->input->post(null, TRUE);			
			$this->jm->edit_spk_74b($inputan);
				if($this->db->affected_rows() > 0){					
					echo "<script> alert('Data Berhasil Diubah'); </script>";
				}
				echo "<script>window.location='".site_url('cetak/jadwalmesin/jadwal_74b')."'; </script>"; 
		}else if(isset($_POST['editspk102a'])){ 
			$inputan = $this->input->post(null, TRUE);			
			$this->jm->edit_spk_102a($inputan);
				if($this->db->affected_rows() > 0){					
					echo "<script> alert('Data Berhasil Diubah'); </script>";
				}
				echo "<script>window.location='".site_url('cetak/jadwalmesin/jadwal_102a')."'; </script>"; 
		}else if(isset($_POST['editspk102b'])){ 
			$inputan = $this->input->post(null, TRUE);			
			$this->jm->edit_spk_102b($inputan);
				if($this->db->affected_rows() > 0){					
					echo "<script> alert('Data Berhasil Diubah'); </script>";
				}
				echo "<script>window.location='".site_url('cetak/jadwalmesin/jadwal_102b')."'; </script>"; 
		}else if(isset($_POST['editspktokko'])){ 
			$inputan = $this->input->post(null, TRUE);			
			$this->jm->edit_spk_tokko($inputan);
				if($this->db->affected_rows() > 0){					
					echo "<script> alert('Data Berhasil Diubah'); </script>";
				}
				echo "<script>window.location='".site_url('cetak/jadwalmesin/jadwal_tokko')."'; </script>"; 
		}
		
		
	}

}
