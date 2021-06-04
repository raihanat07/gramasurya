<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DisplayCetak_m extends CI_Model {

    public function get()
    {
        $this->db->select(
            'order.id_order as id_order, order.nomor_so as nomor_so, order.tanggal_masuk as tanggal_masuk, order.deadline as deadline, order.nama_pemesan as nama_pemesan,  order.nama_orderan as nama_orderan, order.ukuran as ukuran, order.halaman as halaman, order.oplag as oplag, order.so_status as so_status, 
            finishing.finishing_akhir_bending as bending, finishing.finishing_akhir_hard_cover as hard_cover, finishing.finishing_akhir_jahit_benang as jahit_benang, finishing.finishing_akhir_jahit_kawat as jahit_kawat, finishing.finishing_akhir_pond as pond, finishing.finishing_akhir_klem as klem,finishing.finishing_akhir_spiral as spiral'
        );
        $this->db->from('order');
        $this->db->join('finishing','finishing.id_order = order.id_order');    
        $this->db->order_by('id_order', 'desc');    
        $query = $this->db->get();
        return $query;   
    }

    public function get_lihatdc($id)
    {
        $this->db->select(
            'order.id_order as id_order, order.nomor_so as nomor_so, order.tanggal_masuk as tanggal_masuk, order.deadline as deadline, order.nama_pemesan as nama_pemesan,  order.nama_orderan as nama_orderan, order.ukuran as ukuran, order.halaman as halaman, order.oplag as oplag, order.so_status as so_status, 
            finishing.finishing_akhir_bending as bending, finishing.finishing_akhir_hard_cover as hard_cover, finishing.finishing_akhir_jahit_benang as jahit_benang, finishing.finishing_akhir_jahit_kawat as jahit_kawat, finishing.finishing_akhir_pond as pond,finishing.finishing_akhir_klem as klem, finishing.finishing_akhir_spiral as spiral,',
        );
        // $status_impo = array('imposisi', 'imposisi cover', 'imposisi isi','imposisi khusus');
        // $status_ctcp = array('ctcp', 'ctcp cover', 'ctcp isi','ctcp khusus');
        // $status_umum = array('marketing','imposisi');

        $this->db->from('order');
        $this->db->join('finishing','finishing.id_order = order.id_order');
        $this->db->where('order.id_order',$id);
        // $this->db->where('data_ctcp.ctcp_status', "");
        // $this->db->OR_where('data_ctcp.ctcp_status', null);
        $this->db->order_by('order.id_order', 'desc');
        // $this->db->where_in('imposisi.imposisi_status', $status_impo);              
               
        $query = $this->db->get();
        return $query; 
    }

}