<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JadwalMesin_m extends CI_Model {

    public function get_jadwal_72()
    {
        $this->db->select(
            'order.id_order as id_order,
            order.nomor_so as nomor_so, 
            order.tanggal_masuk as tanggal_masuk, 
            order.deadline as deadline, 
            order.nama_pemesan as nama_pemesan,  
            order.nama_orderan as nama_orderan, 
            order.ukuran as ukuran, 
            order.halaman as halaman, 
            order.oplag as oplag, 
            order.so_status as so_status, 
        

            mesin_72.id_mesin_72 as id_mesin_72,
            mesin_72.nama_mesin as nama_mesin,
            mesin_72.tanggal_pelaksanaan as tanggal_pelaksanaan,
            mesin_72.operator as operator,
            mesin_72.target as target,
            mesin_72.druk as druk,
            mesin_72.total_kertas as total_kertas,
            mesin_72.set as set,
            mesin_72.jenis_cetakan as jenis_cetakan',
        );
        $this->db->from('order');
        $this->db->join('mesin_72','mesin_72.id_order = order.id_order','left');
        $this->db->where('mesin_72.tanggal_pelaksanaan !=', '0000-00-00');  
        $this->db->order_by('id_order', 'desc');    
        $query = $this->db->get();
        return $query;  
    }


}