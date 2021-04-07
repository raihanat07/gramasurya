<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratOrder_m extends CI_Model {

	

	public function add($data)
	{
		$tambah_so = array(
            '' =>$data['nama_pemesan'],
            '' =>$data['so_cu'],
            '' =>$data['ukuran'],
            '' =>$data['kode_pemesan'],
            '' =>$data['tanggal_masuk'],
            '' =>$data['oplag'],
            '' =>$data['pemesan_pdk'],
            '' =>$data['nego'],
            '' =>$data['satuan'],
            '' =>$data['kode_order'],
            '' =>$data['deadline'],
            '' =>$data['hal'],
            '' =>$data['nama_orderan'],
            '' =>$data['status'],
            '' =>$data['fc'],
            '' =>$data['nama_orderan_pendek'],
            '' =>$data['surat_order'],
            '' =>$data['bw'],
            '' =>$data['hal_2'],
            '' =>$data['keterangan'],
        );
        $this->db->insert('tabel_db',$tambah_so);
	}


	

}