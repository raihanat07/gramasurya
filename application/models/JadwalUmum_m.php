<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JadwalUmum_m extends CI_Model {

    public function get()
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

            finishing.finishing_akhir_bending as bending, 
            finishing.finishing_akhir_hard_cover as hard_cover, 
            finishing.finishing_akhir_jahit_benang as jahit_benang, 
            finishing.finishing_akhir_jahit_kawat as jahit_kawat, 
            finishing.finishing_akhir_pond as pond,
            finishing.finishing_akhir_klem as klem, 
            finishing.finishing_akhir_spiral as spiral,
            
            jadwal_cetak.id_jadwal_cetak as id_jadwal_cetak,
            jadwal_cetak.mesin_cover as mesin_cover,
            jadwal_cetak.tanggal_pelaksanaan_cover as tanggal_pelaksanaan_cover,
            jadwal_cetak.operator_cover as operator_cover,
            jadwal_cetak.target_cover as target_cover,
            jadwal_cetak.druk_cover as druk_cover,
            jadwal_cetak.mesin_isi as mesin_isi,
            jadwal_cetak.tanggal_pelaksanaan_isi as tanggal_pelaksanaan_isi,
            jadwal_cetak.operator_isi as operator_isi,
            jadwal_cetak.target_isi as target_isi,
            jadwal_cetak.druk_isi as druk_isi,
            jadwal_cetak.total_kertas as total_kertas,',
        );

        $this->db->from('order');
        $this->db->join('finishing','finishing.id_order = order.id_order','left');
        $this->db->join('jadwal_cetak','jadwal_cetak.id_order = order.id_order','left');
        $this->db->order_by('id_order', 'desc');    
        $query = $this->db->get();
        return $query; 
    }

    public function tambah_ju($data)
	{
            $tambah_ju = array(         
                'id_order' =>$data['id_order'],                                                                       
                'mesin_cover' =>$data['mesin_cover'],
                'tanggal_pelaksanaan_cover' =>$data['tanggal_pelaksanaan_cover'],
                'operator_cover' =>$data['operator_cover'],
                'target_cover' =>$data['target_cover'],
                'druk_cover' =>$data['druk_cover'],
                'mesin_isi' =>$data['mesin_isi'],
                'tanggal_pelaksanaan_isi' =>$data['tanggal_pelaksanaan_isi'],
                'operator_isi' =>$data['operator_isi'],
                'target_isi' =>$data['target_isi']
                // 'druk_isi' =>$data['druk_isi']
                               
            );
            $this->db->insert('jadwal_cetak',$tambah_ju);
         
    }

    // public function get()
    // {
    //     $this->db->select(
    //         'order.id_order as id_order,
    //         order.nomor_so as nomor_so,
    //         order.tanggal_masuk as tanggal_masuk,
    //         order.deadline as deadline,
    //         order.nama_pemesan as nama_pemesan,
    //         order.nama_orderan as nama_orderan,
    //         order.ukuran as ukuran,
    //         order.halaman as halaman,
    //         order.oplag as oplag,
    //         order.so_status as so_status,

    //         finishing.finishing_akhir_bending as bending,
    //         finishing.finishing_akhir_hard_cover as hard_cover,
    //         finishing.finishing_akhir_jahit_benang as jahit_benang,
    //         finishing.finishing_akhir_jahit_kawat as jahit_kawat,
    //         finishing.finishing_akhir_pond as pond,
    //         finishing.finishing_akhir_klem as klem,
    //         finishing.finishing_akhir_spiral as spiral,

    //         jadwal_cetak.id_jadwal_cetak as id_jadwal_cetak,
    //         jadwal_cetak.mesin_cover as mesin_cover,
    //         jadwal_cetak.tanggal_pelaksanaan_cover as tanggal_pelaksanaan_cover,
    //         jadwal_cetak.operator_cover as operator_cover,
    //         jadwal_cetak.target_cover as target_cover,
    //         jadwal_cetak.druk_cover as druk_cover,
    //         jadwal_cetak.mesin_isi as mesin_isi,
    //         jadwal_cetak.tanggal_pelaksanaan_isi as tanggal_pelaksanaan_isi,
    //         jadwal_cetak.operator_isi as operator_isi,
    //         jadwal_cetak.target_isi as target_isi,
    //         jadwal_cetak.druk_isi as druk_isi,
    //         jadwal_cetak.total_kertas as total_kertas,

    //         ',
    //     );
    //     // $this->db->from('order');
    //     // $this->db->join('finishing','finishing.id_order = order.id_order','left');
    //     // $this->db->join('display_cetak','display_cetak.id_order = order.id_order','left');
    //     // $this->db->order_by('id_order', 'desc');    
    //     // $query = $this->db->get($id);
    //     // return $query;
        
    //     $this->db->from('order');
    //     $this->db->join('finishing','finishing.id_order = order.id_order');
    //     $this->db->join('jadwal_cetak','jadwal_cetak.id_order = order.id_order');
    //     if($id != null){
    //         $this->db->where('order.id_order', $id);
    //     }
    //     $query = $this->db->get();
    //     return $query;
    // }

    

}