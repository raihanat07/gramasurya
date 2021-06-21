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
            mesin_72.jenis_cetakan as jenis_cetakan,
            
            spk.id_spk as id_spk,
            spk.tanggal_buat_spk as tanggal_buat_spk,
            spk.ukuran_potong as ukuran_potong,
            spk.jumlah_cetak as jumlah_cetak,
            spk.1muka_fc_bw_warna as 1muka_fc_bw_warna,
            spk.2muka_fc_fc-bw_bw-bw as 2muka_fc_fc-bw_bw-bw,
            spk.2muka_blk as 2muka_blk,
            spk.2muka_blg as 2muka_blg,
            spk.keterangan_spk as keterangan_spk
            ',
        );
        $this->db->from('order');
        $this->db->join('mesin_72','mesin_72.id_order = order.id_order','left');
        $this->db->join('spk','spk.id_order = order.id_order','left');
        $this->db->where('mesin_72.tanggal_pelaksanaan !=', '0000-00-00');  
        $this->db->order_by('mesin_72.tanggal_pelaksanaan', 'asc');      
        $query = $this->db->get();
        return $query;  
    }

    public function get_tambah_spk_72($id)
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

            ctcp_cover_1 as ctcp_cover_1,
            ctcp_isi_1 as ctcp_isi_1,
            plat_cover_1 as plat_cover_1,
            plat_isi_1 as plat_isi_1,
            ctcp_cover_2 as ctcp_cover_2,
            ctcp_isi_2 as ctcp_isi_2,
            plat_cover_2 as plat_cover_2,
            plat_isi_2 as plat_isi_2,
            ctcp_cover_3 as ctcp_cover_3,
            ctcp_isi_3 as ctcp_isi_3,
            plat_cover_3 as plat_cover_3,
            plat_isi_3 as plat_isi_3,        
               
            jenis_kertas_cover_1 as jenis_kertas_cover_1,
            jenis_kertas_isi_1 as jenis_kertas_isi_1,
            ukuran_plano_cover_1 as ukuran_plano_cover_1,
            ukuran_plano_isi_1  as ukuran_plano_isi_1,
            jumlah_kertas_cover_1 as jumlah_kertas_cover_1,
            jumlah_kertas_isi_1 as jumlah_kertas_isi_1,
            jenis_kertas_cover_2 as jenis_kertas_cover_2,
            jenis_kertas_isi_2 as jenis_kertas_isi_2,
            ukuran_plano_cover_2 as ukuran_plano_cover_2,
            ukuran_plano_isi_2 as ukuran_plano_isi_2,
            jumlah_kertas_cover_2 as jumlah_kertas_cover_2,
            jumlah_kertas_isi_2 as jumlah_kertas_isi_2,
            jenis_kertas_cover_3 as jenis_kertas_cover_3,
            jenis_kertas_isi_3 as jenis_kertas_isi_3,
            ukuran_plano_cover_3 as ukuran_plano_cover_3,
            ukuran_plano_isi_3 as ukuran_plano_isi_3,
            jumlah_kertas_cover_3 as jumlah_kertas_cover_3,
            jumlah_kertas_isi_3 as jumlah_kertas_isi_3,
            
            imposisi.total_plat_cover as total_plat_cover, 
            imposisi.total_plat_isi as total_plat_isi, 

            potong_cover_1 as potong_cover_1,
            potong_isi_1 as potong_isi_1,
            potong_cover_2 as potong_cover_2,
            potong_isi_2 as potong_isi_2,
            potong_cover_3 as potong_cover_3,
            potong_isi_3 as potong_isi_3,
            potong_isi_4 as potong_isi_4,
            
            mesin_cover_1 as mesin_cover_1,
            mesin_isi_1 as mesin_isi_1,
            warna_cover_1 as warna_cover_1,
            warna_isi_1 as warna_isi_1,
            insit_cover_1 as insit_cover_1,
            insit_isi_1 as insit_isi_1,
            mesin_cover_2 as mesin_cover_2,
            mesin_isi_2 as mesin_isi_2,
            warna_cover_2 as warna_cover_2,
            warna_isi_2 as warna_isi_2,
            insit_cover_2 as insit_cover_2,
            insit_isi_2 as insit_isi_2,
            mesin_cover_3 as mesin_cover_3,
            mesin_isi_3 as mesin_isi_3,
            warna_cover_3 as warna_cover_3,
            warna_isi_3 as warna_isi_3,
            insit_cover_3 as insit_cover_3,
            insit_isi_3 as insit_isi_3,
            keterangan_cetak_cover as keterangan_cetak_cover,
            keterangan_cetak_isi as keterangan_cetak_isi,

            finishing_cover_doff as doff,
            finishing_cover_emboss as emboss,
            finishing_cover_glossy as glossy,
            finishing_cover_hotprint as hotprint,
            finishing_cover_spot_uvi as spot_uvi,
            finishing_cover_uvi as uvi,
            finishing_isi_lipat as lipat,
            finishing_isi_susun as susun,
            finishing_akhir_bending as bending, 
            finishing_akhir_hard_cover as hard_cover, 
            finishing_akhir_jahit_benang as jahit_benang, 
            finishing_akhir_jahit_kawat as jahit_kawat, 
            finishing_akhir_pond as pond, 
            finishing_akhir_klem as klem,
            finishing_akhir_spiral as spiral', 
        );
        $this->db->from('order');
        $this->db->join('mesin_72','mesin_72.id_order = order.id_order','left');
        $this->db->join('finishing','finishing.id_order = order.id_order'); 
        $this->db->join('ctcp as ct','ct.id_order = order.id_order'); 
        $this->db->join('kertas as ke','ke.id_order = order.id_order'); 
        $this->db->join('imposisi','imposisi.id_order = order.id_order');
        $this->db->join('potong as po','po.id_order = order.id_order');  
        $this->db->join('cetak as ce','ce.id_order = order.id_order');         
        $this->db->where('mesin_72.tanggal_pelaksanaan !=', null);  
        $this->db->order_by('id_order', 'desc');    
        $this->db->where('mesin_72.id_mesin_72', $id);    
        $query = $this->db->get();
        return $query;  
    }
    
    public function add_spk_72($data){
        $tambah_spk = array(
            'id_mesin_72' => $data['id_mesin_72'],
            'tanggal_buat_spk' => $data['tanggal_buat_spk'],
            'ukuran_potong' => $data['ukuran_potong'],
            'jumlah_cetak' => $data['jumlah_cetak'],
            '1muka_fc_bw_warna' => $data['1muka_fc_bw_warna'],
            '2muka_fc_fc-bw_bw-bw' => $data['2muka_fc_fc-bw_bw-bw'],
            '2muka_blk'=> $data['2muka_blk'],
            '2muka_blg' => $data['2muka_blg'],
            'keterangan_spk' => $data['keterangan_spk'],
        );
        $this->db->insert('spk',$tambah_spk);
    }
    public function edit_spk_72($data){
        $edit_spk = array(
            'tanggal_buat_spk' => $data['tanggal_buat_spk'],
            'ukuran_potong' => $data['ukuran_potong'],
            'jumlah_cetak' => $data['jumlah_cetak'],
            '1muka_fc_bw_warna' => $data['1muka_fc_bw_warna'],
            '2muka_fc_fc-bw_bw-bw' => $data['2muka_fc_fc-bw_bw-bw'],
            '2muka_blk'=> $data['2muka_blk'],
            '2muka_blg' => $data['2muka_blg'],
            'keterangan_spk' => $data['keterangan_spk'],
        );
        $this->db->set($edit_spk);
        $this->db->where('id_order',$data['id_order']);
        $this->db->update('spk');
    }
    public function get_lihat_72($id)
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

            ctcp_cover_1 as ctcp_cover_1,
            ctcp_isi_1 as ctcp_isi_1,
            plat_cover_1 as plat_cover_1,
            plat_isi_1 as plat_isi_1,
            ctcp_cover_2 as ctcp_cover_2,
            ctcp_isi_2 as ctcp_isi_2,
            plat_cover_2 as plat_cover_2,
            plat_isi_2 as plat_isi_2,
            ctcp_cover_3 as ctcp_cover_3,
            ctcp_isi_3 as ctcp_isi_3,
            plat_cover_3 as plat_cover_3,
            plat_isi_3 as plat_isi_3,        
               
            jenis_kertas_cover_1 as jenis_kertas_cover_1,
            jenis_kertas_isi_1 as jenis_kertas_isi_1,
            ukuran_plano_cover_1 as ukuran_plano_cover_1,
            ukuran_plano_isi_1  as ukuran_plano_isi_1,
            jumlah_kertas_cover_1 as jumlah_kertas_cover_1,
            jumlah_kertas_isi_1 as jumlah_kertas_isi_1,
            jenis_kertas_cover_2 as jenis_kertas_cover_2,
            jenis_kertas_isi_2 as jenis_kertas_isi_2,
            ukuran_plano_cover_2 as ukuran_plano_cover_2,
            ukuran_plano_isi_2 as ukuran_plano_isi_2,
            jumlah_kertas_cover_2 as jumlah_kertas_cover_2,
            jumlah_kertas_isi_2 as jumlah_kertas_isi_2,
            jenis_kertas_cover_3 as jenis_kertas_cover_3,
            jenis_kertas_isi_3 as jenis_kertas_isi_3,
            ukuran_plano_cover_3 as ukuran_plano_cover_3,
            ukuran_plano_isi_3 as ukuran_plano_isi_3,
            jumlah_kertas_cover_3 as jumlah_kertas_cover_3,
            jumlah_kertas_isi_3 as jumlah_kertas_isi_3,
            
            potong_cover_1 as potong_cover_1,
            potong_isi_1 as potong_isi_1,
            potong_cover_2 as potong_cover_2,
            potong_isi_2 as potong_isi_2,
            potong_cover_3 as potong_cover_3,
            potong_isi_3 as potong_isi_3,
            potong_isi_4 as potong_isi_4,
            
            mesin_cover_1 as mesin_cover_1,
            mesin_isi_1 as mesin_isi_1,
            warna_cover_1 as warna_cover_1,
            warna_isi_1 as warna_isi_1,
            insit_cover_1 as insit_cover_1,
            insit_isi_1 as insit_isi_1,
            mesin_cover_2 as mesin_cover_2,
            mesin_isi_2 as mesin_isi_2,
            warna_cover_2 as warna_cover_2,
            warna_isi_2 as warna_isi_2,
            insit_cover_2 as insit_cover_2,
            insit_isi_2 as insit_isi_2,
            mesin_cover_3 as mesin_cover_3,
            mesin_isi_3 as mesin_isi_3,
            warna_cover_3 as warna_cover_3,
            warna_isi_3 as warna_isi_3,
            insit_cover_3 as insit_cover_3,
            insit_isi_3 as insit_isi_3,
            keterangan_cetak_cover as keterangan_cetak_cover,
            keterangan_cetak_isi as keterangan_cetak_isi,

            finishing_cover_doff as doff,
            finishing_cover_emboss as emboss,
            finishing_cover_glossy as glossy,
            finishing_cover_hotprint as hotprint,
            finishing_cover_spot_uvi as spot_uvi,
            finishing_cover_uvi as uvi,
            finishing_isi_lipat as lipat,
            finishing_isi_susun as susun,
            finishing_akhir_bending as bending, 
            finishing_akhir_hard_cover as hard_cover, 
            finishing_akhir_jahit_benang as jahit_benang, 
            finishing_akhir_jahit_kawat as jahit_kawat, 
            finishing_akhir_pond as pond, 
            finishing_akhir_klem as klem,
            finishing_akhir_spiral as spiral,
            
            id_spk as id_spk,
            tanggal_buat_spk as tanggal_buat_spk,
            ukuran_potong as ukuran_potong,
            jumlah_cetak as jumlah_cetak,
            1muka_fc_bw_warna as 1muka_fc_bw_warna,
            2muka_fc_fc-bw_bw-bw as 2muka_fc_fc-bw_bw-bw,
            2muka_blk as 2muka_blk,
            2muka_blg as 2muka_blg,
            keterangan_spk as keterangan_spk',  
        );
        $this->db->from('order');
        $this->db->join('mesin_72','mesin_72.id_order = order.id_order','left');
        $this->db->join('finishing','finishing.id_order = order.id_order');
        $this->db->join('spk','spk.id_order = order.id_order');  
        $this->db->join('ctcp as ct','ct.id_order = order.id_order'); 
        $this->db->join('kertas as ke','ke.id_order = order.id_order'); 
        $this->db->join('potong as po','po.id_order = order.id_order'); 
        $this->db->join('cetak as ce','ce.id_order = order.id_order');         
        $this->db->where('mesin_72.tanggal_pelaksanaan !=', '0000-00-00');  
        $this->db->order_by('id_order', 'desc');    
        $this->db->where('mesin_72.id_mesin_72', $id);
        $query = $this->db->get();
        
        return $query;  
    }


}