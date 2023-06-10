<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prioritas extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('PrioritasCetak_m', 'pc');
    }

        public function index()
    {
        // Ambil data tugas dari model
        $tasks = $this->pc->get();

        // Urutkan tugas berdasarkan halaman terkecil
        usort($tasks, function($a, $b) {
            return $a->halaman - $b->halaman;
        });

        // Muat view dengan template dan kirimkan data tugas
        $view_data = array(
            'judul' => 'Prioritas Cetak',
            'pc' => $tasks, // Menggunakan data tugas yang telah diurutkan
        );

        // Muat view dengan template dan kirimkan data tugas
        $this->template->load('cetak/template', 'cetak/prioritas_cetak/prioritas', $view_data);
    }

    



    //     public function index()
    // {
    //     // Ambil data tugas dari model
    //     $tasks = $this->pc->get();

    //     // Urutkan tugas berdasarkan EDD terlebih dahulu
    //     usort($tasks, function($a, $b) {
    //         $eddComparison = strtotime($a->deadline) - strtotime($b->deadline);
    //         if ($eddComparison != 0) {
    //             return $eddComparison;
    //         } else {
    //             $sptComparison = $a->halaman - $b->halaman;
    //             if ($sptComparison != 0) {
    //                 return $sptComparison;
    //             } else {
    //                 return $a->id_order - $b->id_order; // Prioritas berdasarkan ID tugas jika semua kriteria sama
    //             }
    //         }
    //     });

    //     // Muat view dengan template dan kirimkan data tugas
    //     $view_data = array(
    //         'judul' => 'Prioritas Cetak',
    //         'pc' => $tasks, // Menggunakan data tugas yang telah diurutkan
    //     );

    //     // Muat view dengan template dan kirimkan data tugas
    //     $this->template->load('cetak/template', 'cetak/prioritas_cetak/prioritas', $view_data);
    // }                                               


    //     public function index()
    // {
    //     // Ambil data tugas dari model
    //     $tasks = $this->pc->get();

    //     // Urutkan tugas berdasarkan deadline tercepat dan halaman tersedikit
    //     usort($tasks, function($a, $b) {
    //         $deadlineComparison = strtotime($a->deadline) - strtotime($b->deadline);
    //         if ($deadlineComparison != 0) {
    //             return $deadlineComparison;
    //         } else {
    //             return $a->halaman - $b->halaman;
    //         }
    //     });

    //     // Muat view dengan template dan kirimkan data tugas
    //     $view_data = array(
    //         'judul' => 'Prioritas Cetak',
    //         'pc' => $tasks, // Menggunakan data tugas yang telah diurutkan
    //     );

    //     // Muat view dengan template dan kirimkan data tugas
    //     $this->template->load('cetak/template', 'cetak/prioritas_cetak/prioritas', $view_data);
    // }


    


    


	// public function index()
	// {
	// 	// check_already_login_cetak();
	// 	$query = $this->pc->get();
	// 	$data = array(
	// 		'judul' => 'Prioritas Cetak',
	// 		'pc' => $query->result(),
	// 	);
	// 	// $data['judul'] = 'Display Cetak';
	// 	$this->template->load('cetak/template','cetak/prioritas_cetak/prioritas',$data);
	// }
	public function lihat_dc($id)
	{
		// check_already_login_cetak();
		$query = $this->dc->get_dc($id);
		$data = array(
			'judul' => 'Display Cetak Lihat',
			'dc' => $query->result(),
		);
		$this->template->load('cetak/template','cetak/display_cetak/displaycetak-lihat',$data);
	}
	
	public function edit_dc($id)
	{
		$query = $this->dc->get_dc($id);
		$data = array(
			'judul' => 'Display Cetak Edit',
			'dc' => $query->result(),
		);			
		$this->template->load('cetak/template','cetak/display_cetak/displaycetak-edit',$data);
	}

	public function tambah_dc($id)
	{
		$query = $this->dc->get_tambahdc($id);
		$data = array(
			'judul' => 'Display Cetak Tambah',
			'dc' => $query->result(),
		);			
		$this->template->load('cetak/template','cetak/display_cetak/displaycetak-tambah',$data);
	}
	

	public function proses()
	{		
		if(isset($_POST['add'])){							
			$inputan = $this->input->post(null, TRUE);
			
			$inputan['status_umum'] = "pracetak";
			if($inputan['status_cetak_cover'] !=null && $inputan['status_cetak_isi'] !=null){
					$inputan['status_umum'] = "cetak";
					$inputan['status_cetak'] = "cetak";
			}
			else if($inputan['status_cetak_cover'] !=null ){	
				$inputan['status_umum'] = "cetak";	
				$inputan['status_cetak'] = "cetak cover";

			}
			else if($inputan['status_cetak_isi'] !=null ){	
				$inputan['status_umum'] = "cetak";			
				$inputan['status_cetak'] = "cetak isi";

			}else if($inputan['status_cetak'] !=null ){	
				$inputan['status_umum'] = "cetak";			
				$inputan['status_cetak'] = "cetak";

			}
			else
				$inputan['status_cetak'] = "";

			$this->dc->status_umum($inputan);							
			$this->dc->tambah_dc($inputan);							
			// $this->ctcp->status_umum($inputan);						
				echo "<script> alert('Data Berhasil Ditambahkan'); </script>";		
				echo "<script>window.location='".site_url('cetak/displaycetak')."'; </script>";

		} else if(isset($_POST['edit'])){ 
			$inputan = $this->input->post(null, TRUE);

			$inputan['status_umum'] = "pracetak";
			if($inputan['status_cetak_cover'] !=null && $inputan['status_cetak_isi'] !=null){
					$inputan['status_umum'] = "cetak";
					$inputan['status_cetak'] = "cetak";
			}
			else if($inputan['status_cetak_cover'] !=null ){	
				$inputan['status_umum'] = "cetak";	
				$inputan['status_cetak'] = "cetak cover";

			}
			else if($inputan['status_cetak_isi'] !=null ){	
				$inputan['status_umum'] = "cetak";			
				$inputan['status_cetak'] = "cetak isi";

			}else if($inputan['status_cetak'] !=null ){	
				$inputan['status_umum'] = "cetak";			
				$inputan['status_cetak'] = "cetak";

			}
			else
				$inputan['status_cetak'] = "";

			$this->dc->status_umum($inputan);							
			$this->dc->edit_dc($inputan);							
			// $this->dc->status_umum($inputan);						
				echo "<script> alert('Data Berhasil Diubah'); </script>";		
				echo "<script>window.location='".site_url('cetak/displaycetak')."'; </script>";
		}	
	}

}
