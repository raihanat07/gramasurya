<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imposisi_m extends CI_Model {

	public function get($id = null)
    {
        $this->db->select(
            'order.id_order as id_order, order.tanggal_masuk as tanggal_masuk, order.deadline as deadline, order.nama_pemesan as nama_pemesan,  order.nama_orderan as nama_orderan, order.ukuran as ukuran, order.halaman as halaman, order.oplag as oplag, order.so_status as so_status, 
            finishing.finishing_akhir_bending as bending, finishing.finishing_akhir_hard_cover as hard_cover, finishing.finishing_akhir_jahit_benang as jahit_benang, finishing.finishing_akhir_jahit_kawat as jahit_kawat, finishing.finishing_akhir_pond as pond, finishing.finishing_akhir_spiral as spiral',
        );
        $this->db->from('order');
        $this->db->join('finishing','finishing.id_order = order.id_order');
        if($id != null){
            $this->db->where('id_order', $id);
        }
        $query = $this->db->get();
        return $query;   
    }

}