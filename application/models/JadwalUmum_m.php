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
            
            mesin_72.id_mesin_72 as id_mesin_72,
            mesin_72.nama_mesin as nama_mesin,
            mesin_72.tanggal_pelaksanaan as tanggal_pelaksanaan,
            mesin_72.operator as operator,
            mesin_72.target as target,
            mesin_72.druk as druk,
            mesin_72.total_kertas as total_kertas,
            mesin_72.set as set,
            mesin_72.jenis_cetakan as jenis_cetakan,
            
            mesin_74_a.id_mesin_74a as id_mesin_74a,
            mesin_74_a.nama_mesin as nama_mesin_74a,
            mesin_74_a.tanggal_pelaksanaan as tanggal_pelaksanaan_74a,
            mesin_74_a.operator as operator_74a,
            mesin_74_a.target as target_74a,
            mesin_74_a.druk as druk_74a,
            mesin_74_a.total_kertas as total_kertas_74a,
            mesin_74_a.set as set_74a,
            mesin_74_a.jenis_cetakan as jenis_cetakan_74a',
        );

        $this->db->from('order');
        $this->db->join('finishing','finishing.id_order = order.id_order','left');
        $this->db->join('mesin_72','mesin_72.id_order = order.id_order','left');
        $this->db->join('mesin_74_a','mesin_74_a.id_order = order.id_order','left');
        $this->db->order_by('id_order', 'desc');    
        $query = $this->db->get();
        return $query; 
    }

    public function tambah_ju($data)
	{
            $tambah_ju = array(         
                'id_order' =>$data['id_order'],                                                                       
                'tanggal_pelaksanaan' =>$data['tanggal_pelaksanaan_72'],
                'operator' =>$data['operator_72'],
                'target' =>$data['target_72'],
                'nama_mesin' =>$data['nama_mesin_72'],
                'druk' =>$data['druk_72'],
                'total_kertas' =>$data['kertas_72'],
                'set' =>$data['set_72'],
                'jenis_cetakan' =>$data['jenis_cetakan_72']            
            );
            $this->db->insert('mesin_72',$tambah_ju);
            
            $tambah_74a = array(         
                'id_order' =>$data['id_order'],                                                                       
                'tanggal_pelaksanaan' =>$data['tanggal_pelaksanaan_74a'],
                'operator' =>$data['operator_74a'],
                'target' =>$data['target_74a'],
                'nama_mesin' =>$data['nama_mesin_74a'],
                'druk' =>$data['druk_74a'],
                'total_kertas' =>$data['kertas_74a'],
                'set' =>$data['set_74a'],
                'jenis_cetakan' =>$data['jenis_cetakan_74a']            
            );
            $this->db->insert('mesin_74_a',$tambah_74a);
    }

    public function edit_ju($data)
	{
            $edit_ju = array(         
                'id_order' =>$data['id_order'],
                'tanggal_pelaksanaan' =>$data['tanggal_pelaksanaan_72'],
                'operator' =>$data['operator_72'],
                'target' =>$data['target_72'],
                'nama_mesin' =>$data['nama_mesin_72'],
                'druk' =>$data['druk_72'],
                'total_kertas' =>$data['kertas_72'],
                'set' =>$data['set_72'],
                'jenis_cetakan' =>$data['jenis_cetakan_72']  
                               
            );
            $this->db->set($edit_ju);
            $this->db->where('id_order',$data['id_order']);
            $this->db->update('mesin_72');

            $edit_74a = array(         
                'id_order' =>$data['id_order'],                                                                       
                'tanggal_pelaksanaan' =>$data['tanggal_pelaksanaan_74a'],
                'operator' =>$data['operator_74a'],
                'target' =>$data['target_74a'],
                'nama_mesin' =>$data['nama_mesin_74a'],
                'druk' =>$data['druk_74a'],
                'total_kertas' =>$data['kertas_74a'],
                'set' =>$data['set_74a'],
                'jenis_cetakan' =>$data['jenis_cetakan_74a']            
            );
            $this->db->set($edit_74a);
            $this->db->where('id_order',$data['id_order']);
            $this->db->update('mesin_74_a');    
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