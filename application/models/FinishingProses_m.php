<?php
defined('BASEPATH') OR exit('No direct script access allowed');

error_reporting(0);

class FinishingProses_m extends CI_Model {
// finishing proses
	public function get($id = null)
    {
        $this->db->select(
            'order.id_order as id_order, order.nomor_so as nomor_so, order.tanggal_masuk as tanggal_masuk, order.deadline as deadline, order.nama_pemesan as nama_pemesan,  order.nama_orderan as nama_orderan, order.ukuran as ukuran, order.halaman as halaman, order.oplag as oplag, order.so_status as so_status,

            finishing.finishing_akhir_bending as bending, finishing.finishing_akhir_hard_cover as hard_cover, finishing.finishing_akhir_jahit_benang as jahit_benang, finishing.finishing_akhir_jahit_kawat as jahit_kawat, finishing.finishing_akhir_pond as pond, finishing.finishing_akhir_spiral as spiral,finishing.finishing_akhir_klem as klem,
            
            finishing.finishing_cover_uvi as uvi,finishing.finishing_cover_glossy as glossy,finishing.finishing_cover_doff as doff,    

            laminasi.tanggal_pelaksanaan_laminasi as tanggal_laminasi,     
            mbo.tanggal_pelaksanaan_mesin_mbo as tanggal_mbo,            
            shoe.tanggal_pelaksanaan_mesin_shoe as tanggal_shoe,            
            susun.tanggal_pelaksanaan_mesin_susun as tanggal_susun,            
            sub_proses.tanggal_pelaksanaan_sub_proses as tanggal_sub_proses,            

            laminasi.id_laminasi as id_laminasi,
            laminasi.id_jadwal_laminasi as id_jadwal_laminasi,
            laminasi.tanggal_pelaksanaan_laminasi as tanggal_pelaksanaan_laminasi,
            laminasi.keterangan_jadwal_fp_laminasi as keterangan_jadwal_fp_laminasi,
            
            mbo.id_mbo as id_mbo,
            mbo.id_jadwal_mbo as id_jadwal_mbo,
            mbo.tanggal_pelaksanaan_mesin_mbo as tanggal_pelaksanaan_mesin_mbo,   
            mbo.keterangan_jadwal_fp_mbo as keterangan_jadwal_fp_mbo,                   
            mbo.lipat_lembar_1 as mbo_lipat_lembar_1,   
            mbo.lipat_lembar_2 as mbo_lipat_lembar_2,   
            mbo.lipat_lembar_3 as mbo_lipat_lembar_3,   
            mbo.lipat_lembar_4 as mbo_lipat_lembar_4,   
            mbo.lipat_lembar_5 as mbo_lipat_lembar_5,   
            mbo.lipat_lembar_6 as mbo_lipat_lembar_6,   
            mbo.lipat_lembar_7 as mbo_lipat_lembar_7,   
            mbo.lipat_lembar_8 as mbo_lipat_lembar_8,   
            mbo.lipat_lembar_9 as mbo_lipat_lembar_9,   
            mbo.lipat_lembar_10 as mbo_lipat_lembar_10,   
            mbo.lipat_lembar_11 as mbo_lipat_lembar_11,   
            mbo.lipat_lembar_12 as mbo_lipat_lembar_12,   
            mbo.lipat_lembar_13 as mbo_lipat_lembar_13,   
            mbo.lipat_lembar_14 as mbo_lipat_lembar_14,   
            mbo.lipat_lembar_15 as mbo_lipat_lembar_15,   
            mbo.lipat_lembar_16 as mbo_lipat_lembar_16,   
            mbo.lipat_lembar_17 as mbo_lipat_lembar_17,   
            mbo.lipat_lembar_18 as mbo_lipat_lembar_18,   
            mbo.lipat_lembar_19 as mbo_lipat_lembar_19,   
            mbo.lipat_lembar_20 as mbo_lipat_lembar_20, 

            shoe.id_shoe as id_shoe,
            shoe.id_jadwal_shoe as id_jadwal_shoe,
            shoe.tanggal_pelaksanaan_mesin_shoe as tanggal_pelaksanaan_mesin_shoe,   
            shoe.keterangan_jadwal_fp_shoe as keterangan_jadwal_fp_shoe,                   
            shoe.lipat_lembar_1 as shoe_lipat_lembar_1,   
            shoe.lipat_lembar_2 as shoe_lipat_lembar_2,   
            shoe.lipat_lembar_3 as shoe_lipat_lembar_3,   
            shoe.lipat_lembar_4 as shoe_lipat_lembar_4,   
            shoe.lipat_lembar_5 as shoe_lipat_lembar_5,   
            shoe.lipat_lembar_6 as shoe_lipat_lembar_6,   
            shoe.lipat_lembar_7 as shoe_lipat_lembar_7,   
            shoe.lipat_lembar_8 as shoe_lipat_lembar_8,   
            shoe.lipat_lembar_9 as shoe_lipat_lembar_9,   
            shoe.lipat_lembar_10 as shoe_lipat_lembar_10,   
            shoe.lipat_lembar_11 as shoe_lipat_lembar_11,   
            shoe.lipat_lembar_12 as shoe_lipat_lembar_12,   
            shoe.lipat_lembar_13 as shoe_lipat_lembar_13,   
            shoe.lipat_lembar_14 as shoe_lipat_lembar_14,   
            shoe.lipat_lembar_15 as shoe_lipat_lembar_15,   
            shoe.lipat_lembar_16 as shoe_lipat_lembar_16,   
            shoe.lipat_lembar_17 as shoe_lipat_lembar_17,   
            shoe.lipat_lembar_18 as shoe_lipat_lembar_18,   
            shoe.lipat_lembar_19 as shoe_lipat_lembar_19,   
            shoe.lipat_lembar_20 as shoe_lipat_lembar_20,   
            
            susun.id_susun as id_susun,
            susun.id_jadwal_susun as id_jadwal_susun,
            susun.tanggal_pelaksanaan_mesin_susun as tanggal_pelaksanaan_mesin_susun,   
            susun.keterangan_jadwal_fp_susun as keterangan_jadwal_fp_susun, 

            sub_proses.id_sub as id_sub_proses,
            sub_proses.id_jadwal_sub as id_jadwal_sub_proses,
            sub_proses.tanggal_pelaksanaan_sub_proses as tanggal_pelaksanaan_sub_proses,   
            sub_proses.keterangan_jadwal_sub_proses as keterangan_jadwal_sub_proses,                
            sub_proses.jenis_sub_lipat as jenis_sub_lipat,  
            sub_proses.jenis_sub_susun_gabung as jenis_sub_susun_gabung,  
            sub_proses.jenis_sub_laminasi as jenis_sub_laminasi',      
        );           

        $this->db->from('order');                
        $this->db->join('finishing','finishing.id_order = order.id_order');
        $this->db->join('laminasi','laminasi.id_order = order.id_order','left');
        $this->db->join('mbo','mbo.id_order = order.id_order','left');
        $this->db->join('shoe','shoe.id_order = order.id_order','left');
        $this->db->join('susun','susun.id_order = order.id_order','left');
        $this->db->join('sub_proses','sub_proses.id_order = order.id_order','left');

        $this->db->where('laminasi.id_jadwal_laminasi ', 0);        
        $this->db->where('mbo.id_jadwal_mbo ', 0);
        $this->db->where('shoe.id_jadwal_shoe ', 0);
        $this->db->where('susun.id_jadwal_susun ', 0);
        $this->db->where('sub_proses.id_jadwal_sub ', 0);

        $this->db->or_where('laminasi.id_jadwal_laminasi ', null);        
        $this->db->or_where('mbo.id_jadwal_mbo ', null);
        $this->db->or_where('shoe.id_jadwal_shoe ', null);
        $this->db->or_where('susun.id_jadwal_susun ', null);
        $this->db->or_where('sub_proses.id_jadwal_sub ', null);
        

        $this->db->order_by('order.id_order', 'desc');
        // $this->db->where_in('imposisi.imposisi_status', $status_impo);
              

               
        $query = $this->db->get();
        return $query; 
}

    public function tambah_fp($data)
	{
            $tambah_laminasi = array(
                'id_order' =>$data['id_order'],               
                'tanggal_pelaksanaan_laminasi' =>$data['tanggal_pelaksanaan_laminasi'],   
                'keterangan_jadwal_fp_laminasi' =>$data['keterangan_jadwal_fp_laminasi'],                
            );            
            $this->db->insert('laminasi',$tambah_laminasi);

            $tambah_mbo = array(
                'id_order' =>$data['id_order'],               
                'tanggal_pelaksanaan_mesin_mbo' =>$data['tanggal_pelaksanaan_mesin_mbo'],   
                'keterangan_jadwal_fp_mbo' =>$data['keterangan_jadwal_fp_mbo'],                   
                'lipat_lembar_1' =>$data['mbo_lipat_lembar_1'],   
                'lipat_lembar_2' =>$data['mbo_lipat_lembar_2'],   
                'lipat_lembar_3' =>$data['mbo_lipat_lembar_3'],   
                'lipat_lembar_4' =>$data['mbo_lipat_lembar_4'],   
                'lipat_lembar_5' =>$data['mbo_lipat_lembar_5'],   
                'lipat_lembar_6' =>$data['mbo_lipat_lembar_6'],   
                'lipat_lembar_7' =>$data['mbo_lipat_lembar_7'],   
                'lipat_lembar_8' =>$data['mbo_lipat_lembar_8'],   
                'lipat_lembar_9' =>$data['mbo_lipat_lembar_9'],   
                'lipat_lembar_10' =>$data['mbo_lipat_lembar_10'],   
                'lipat_lembar_11' =>$data['mbo_lipat_lembar_11'],   
                'lipat_lembar_12' =>$data['mbo_lipat_lembar_12'],   
                'lipat_lembar_13' =>$data['mbo_lipat_lembar_13'],   
                'lipat_lembar_14' =>$data['mbo_lipat_lembar_14'],   
                'lipat_lembar_15' =>$data['mbo_lipat_lembar_15'],   
                'lipat_lembar_16' =>$data['mbo_lipat_lembar_16'],   
                'lipat_lembar_17' =>$data['mbo_lipat_lembar_17'],   
                'lipat_lembar_18' =>$data['mbo_lipat_lembar_18'],   
                'lipat_lembar_19' =>$data['mbo_lipat_lembar_19'],   
                'lipat_lembar_20' =>$data['mbo_lipat_lembar_20'],                                                
            );            
            $this->db->insert('mbo',$tambah_mbo);

            $tambah_shoe = array(
                'id_order' =>$data['id_order'],               
                'tanggal_pelaksanaan_mesin_shoe' =>$data['tanggal_pelaksanaan_mesin_shoe'],   
                'keterangan_jadwal_fp_shoe' =>$data['keterangan_jadwal_fp_shoe'],                   
                'lipat_lembar_1' =>$data['shoe_lipat_lembar_1'],   
                'lipat_lembar_2' =>$data['shoe_lipat_lembar_2'],   
                'lipat_lembar_3' =>$data['shoe_lipat_lembar_3'],   
                'lipat_lembar_4' =>$data['shoe_lipat_lembar_4'],   
                'lipat_lembar_5' =>$data['shoe_lipat_lembar_5'],   
                'lipat_lembar_6' =>$data['shoe_lipat_lembar_6'],   
                'lipat_lembar_7' =>$data['shoe_lipat_lembar_7'],   
                'lipat_lembar_8' =>$data['shoe_lipat_lembar_8'],   
                'lipat_lembar_9' =>$data['shoe_lipat_lembar_9'],   
                'lipat_lembar_10' =>$data['shoe_lipat_lembar_10'],   
                'lipat_lembar_11' =>$data['shoe_lipat_lembar_11'],   
                'lipat_lembar_12' =>$data['shoe_lipat_lembar_12'],   
                'lipat_lembar_13' =>$data['shoe_lipat_lembar_13'],   
                'lipat_lembar_14' =>$data['shoe_lipat_lembar_14'],   
                'lipat_lembar_15' =>$data['shoe_lipat_lembar_15'],   
                'lipat_lembar_16' =>$data['shoe_lipat_lembar_16'],   
                'lipat_lembar_17' =>$data['shoe_lipat_lembar_17'],   
                'lipat_lembar_18' =>$data['shoe_lipat_lembar_18'],   
                'lipat_lembar_19' =>$data['shoe_lipat_lembar_19'],   
                'lipat_lembar_20' =>$data['shoe_lipat_lembar_20'],                                                
            );            
            $this->db->insert('shoe',$tambah_shoe);
            
            $tambah_susun = array(
                'id_order' =>$data['id_order'],               
                'tanggal_pelaksanaan_mesin_susun' =>$data['tanggal_pelaksanaan_mesin_susun'],   
                'keterangan_jadwal_fp_susun' =>$data['keterangan_jadwal_fp_susun'],                
            );            
            $this->db->insert('susun',$tambah_susun);

            $tambah_sub_fp = array(
                'id_order' =>$data['id_order'],               
                'tanggal_pelaksanaan_sub_proses' =>$data['tanggal_pelaksanaan_sub_proses'],   
                'keterangan_jadwal_sub_proses' =>$data['keterangan_jadwal_sub_proses'],                
                'jenis_sub_lipat' =>$data['jenis_sub_lipat'],  
                'jenis_sub_susun_gabung' =>$data['jenis_sub_susun_gabung'],  
                'jenis_sub_laminasi' =>$data['jenis_sub_laminasi'],                 
            );            
            $this->db->insert('sub_proses',$tambah_sub_fp);
}

    public function edit_fp($data)
	{
            $ubah_laminasi = array(
                'id_order' =>$data['id_order'],               
                'tanggal_pelaksanaan_laminasi' =>$data['tanggal_pelaksanaan_laminasi'],   
                'keterangan_jadwal_fp_laminasi' =>$data['keterangan_jadwal_fp_laminasi'],                
            );                        
            $this->db->set($ubah_laminasi);
            $this->db->where('id_laminasi',$data['id_laminasi']);
            $this->db->update('laminasi');  

            $ubah_mbo = array(
                'id_order' =>$data['id_order'],               
                'tanggal_pelaksanaan_mesin_mbo' =>$data['tanggal_pelaksanaan_mesin_mbo'],   
                'keterangan_jadwal_fp_mbo' =>$data['keterangan_jadwal_fp_mbo'],                   
                'lipat_lembar_1' =>$data['mbo_lipat_lembar_1'],   
                'lipat_lembar_2' =>$data['mbo_lipat_lembar_2'],   
                'lipat_lembar_3' =>$data['mbo_lipat_lembar_3'],   
                'lipat_lembar_4' =>$data['mbo_lipat_lembar_4'],   
                'lipat_lembar_5' =>$data['mbo_lipat_lembar_5'],   
                'lipat_lembar_6' =>$data['mbo_lipat_lembar_6'],   
                'lipat_lembar_7' =>$data['mbo_lipat_lembar_7'],   
                'lipat_lembar_8' =>$data['mbo_lipat_lembar_8'],   
                'lipat_lembar_9' =>$data['mbo_lipat_lembar_9'],   
                'lipat_lembar_10' =>$data['mbo_lipat_lembar_10'],   
                'lipat_lembar_11' =>$data['mbo_lipat_lembar_11'],   
                'lipat_lembar_12' =>$data['mbo_lipat_lembar_12'],   
                'lipat_lembar_13' =>$data['mbo_lipat_lembar_13'],   
                'lipat_lembar_14' =>$data['mbo_lipat_lembar_14'],   
                'lipat_lembar_15' =>$data['mbo_lipat_lembar_15'],   
                'lipat_lembar_16' =>$data['mbo_lipat_lembar_16'],   
                'lipat_lembar_17' =>$data['mbo_lipat_lembar_17'],   
                'lipat_lembar_18' =>$data['mbo_lipat_lembar_18'],   
                'lipat_lembar_19' =>$data['mbo_lipat_lembar_19'],   
                'lipat_lembar_20' =>$data['mbo_lipat_lembar_20'],                                                
            );                        
            $this->db->set($ubah_mbo);
            $this->db->where('id_mbo',$data['id_mbo']);
            $this->db->update('mbo');

            $ubah_shoe = array(
                'id_order' =>$data['id_order'],               
                'tanggal_pelaksanaan_mesin_shoe' =>$data['tanggal_pelaksanaan_mesin_shoe'],   
                'keterangan_jadwal_fp_shoe' =>$data['keterangan_jadwal_fp_shoe'],                   
                'lipat_lembar_1' =>$data['shoe_lipat_lembar_1'],   
                'lipat_lembar_2' =>$data['shoe_lipat_lembar_2'],   
                'lipat_lembar_3' =>$data['shoe_lipat_lembar_3'],   
                'lipat_lembar_4' =>$data['shoe_lipat_lembar_4'],   
                'lipat_lembar_5' =>$data['shoe_lipat_lembar_5'],   
                'lipat_lembar_6' =>$data['shoe_lipat_lembar_6'],   
                'lipat_lembar_7' =>$data['shoe_lipat_lembar_7'],   
                'lipat_lembar_8' =>$data['shoe_lipat_lembar_8'],   
                'lipat_lembar_9' =>$data['shoe_lipat_lembar_9'],   
                'lipat_lembar_10' =>$data['shoe_lipat_lembar_10'],   
                'lipat_lembar_11' =>$data['shoe_lipat_lembar_11'],   
                'lipat_lembar_12' =>$data['shoe_lipat_lembar_12'],   
                'lipat_lembar_13' =>$data['shoe_lipat_lembar_13'],   
                'lipat_lembar_14' =>$data['shoe_lipat_lembar_14'],   
                'lipat_lembar_15' =>$data['shoe_lipat_lembar_15'],   
                'lipat_lembar_16' =>$data['shoe_lipat_lembar_16'],   
                'lipat_lembar_17' =>$data['shoe_lipat_lembar_17'],   
                'lipat_lembar_18' =>$data['shoe_lipat_lembar_18'],   
                'lipat_lembar_19' =>$data['shoe_lipat_lembar_19'],   
                'lipat_lembar_20' =>$data['shoe_lipat_lembar_20'],                                                
            );            
            $this->db->set($ubah_shoe);
            $this->db->where('id_shoe',$data['id_shoe']);
            $this->db->update('shoe');
            
            $ubah_susun = array(
                'id_order' =>$data['id_order'],               
                'tanggal_pelaksanaan_mesin_susun' =>$data['tanggal_pelaksanaan_mesin_susun'],   
                'keterangan_jadwal_fp_susun' =>$data['keterangan_jadwal_fp_susun'],                
            );            
            $this->db->set($ubah_susun);
            $this->db->where('id_susun',$data['id_susun']);
            $this->db->update('susun');

            $ubah_sub_fp = array(
                'id_order' =>$data['id_order'],               
                'tanggal_pelaksanaan_sub_proses' =>$data['tanggal_pelaksanaan_sub_proses'],   
                'keterangan_jadwal_sub_proses' =>$data['keterangan_jadwal_sub_proses'],                
                'jenis_sub_lipat' =>$data['jenis_sub_lipat'],  
                'jenis_sub_susun_gabung' =>$data['jenis_sub_susun_gabung'],  
                'jenis_sub_laminasi' =>$data['jenis_sub_laminasi'],                 
            );            
            $this->db->set($ubah_sub_fp);
            $this->db->where('id_sub',$data['id_sub_proses']);
            $this->db->update('sub_proses');
}
    
//// MESIN LAMINASI
    public function get_jadwal_laminasi()
    {
        $this->db->select('
            order.id_order as id_order,
            order.nomor_so as nomor_so,
            order.tanggal_masuk as tanggal_masuk,
            order.deadline as deadline,
            order.nama_pemesan as nama_pemesan,
            order.nama_orderan as nama_orderan, 
            order.ukuran as ukuran, 
            order.halaman as halaman, 
            order.oplag as oplag, 
            order.so_status as so_status,
            
            laminasi.id_jadwal_laminasi as id_jadwal_laminasi,
            laminasi.status_laminasi as status_laminasi,
            laminasi.id_laminasi as id_laminasi,
            laminasi.hasil_1 as hasil_1,
            laminasi.hasil_2 as hasil_2,            
            laminasi.tanggal_pelaksanaan_laminasi as tanggal_pelaksanaan_laminasi',
            
        );           

        $this->db->from('order');                           
        $this->db->join('laminasi','order.id_order = laminasi.id_order' ); 
        $this->db->where('laminasi.tanggal_pelaksanaan_laminasi !=', '0000-00-00');    
        $this->db->order_by('laminasi.tanggal_pelaksanaan_laminasi', 'asc');        
        
        $query = $this->db->get();
        return $query;  
}
public function ambilIDOrder($id_order)
{
    $this->db->select('
        order.id_order as id_order,
        order.nomor_so as nomor_so,
        order.tanggal_masuk as tanggal_masuk,
        order.deadline as deadline,
        order.nama_pemesan as nama_pemesan,
        order.nama_orderan as nama_orderan, 
        order.ukuran as ukuran, 
        order.halaman as halaman, 
        order.oplag as oplag, 
        order.so_status as so_status,
        
        laminasi.id_jadwal_laminasi as id_jadwal_laminasi,
        laminasi.id_laminasi as id_laminasi,
        laminasi.hasil_1 as hasil_1,
        laminasi.hasil_2 as hasil_2,            
        laminasi.tanggal_pelaksanaan_laminasi as tanggal_pelaksanaan_laminasi',
        
    );           

    $this->db->from('order');                           
    $this->db->join('laminasi','order.id_order = laminasi.id_order' ); 
    $this->db->where('laminasi.tanggal_pelaksanaan_laminasi !=', '0000-00-00');    
    $this->db->where('laminasi.id_order', $id_order);
    $this->db->order_by('laminasi.tanggal_pelaksanaan_laminasi', 'asc');        
    
    $query = $this->db->get();
    return $query;  
}

    public function edit_laminasi($id)
    {
        $this->db->select('
            order.id_order as id_order,
            order.nomor_so as nomor_so,
            order.tanggal_masuk as tanggal_masuk,
            order.deadline as deadline,
            order.nama_pemesan as nama_pemesan,
            order.nama_orderan as nama_orderan, 
            order.ukuran as ukuran, 
            order.halaman as halaman, 
            order.oplag as oplag, 
            order.so_status as so_status,
            finishing.finishing_akhir_bending as bending, finishing.finishing_akhir_hard_cover as hard_cover, finishing.finishing_akhir_jahit_benang as jahit_benang, finishing.finishing_akhir_jahit_kawat as jahit_kawat, finishing.finishing_akhir_pond as pond, finishing.finishing_akhir_spiral as spiral,finishing.finishing_akhir_klem as klem,            
            finishing.finishing_cover_uvi as uvi,finishing.finishing_cover_glossy as glossy,finishing.finishing_cover_doff as doff,

            laminasi.id_laminasi as id_laminasi,
            laminasi.tanggal_pelaksanaan_laminasi as tanggal_pelaksanaan_laminasi,
            
            laminasi.status_laminasi as status_laminasi,
            laminasi.keterangan_jadwal_fp_laminasi as keterangan_jadwal_fp_laminasi,
            laminasi.jenis_laminasi as jenis_laminasi,
            laminasi.tanggal_pengerjaan_1 as tanggal_pengerjaan_1,
            laminasi.hasil_1 as hasil_1,
            laminasi.rejek_1 as rejek_1,
            laminasi.operator_1 as operator_1,
            laminasi.kru_1 as kru_1,
            laminasi.keterangan_1 as keterangan_1,
            laminasi.tanggal_pengerjaan_2 as tanggal_pengerjaan_2,
            laminasi.hasil_2 as hasil_2,
            laminasi.rejek_2 as rejek_2,
            laminasi.operator_2 as operator_2,
            laminasi.kru_2 as kru_2,
            laminasi.keterangan_2 as keterangan_2,                           
            ',
        );           
        // $this->db->select_max('laminasi.id_jadwal_laminasi');
        $this->db->from('order');                           
        $this->db->join('laminasi','order.id_order = laminasi.id_order' ); 
        $this->db->join('finishing','order.id_order = finishing.id_order' ); 
        $this->db->where('laminasi.id_laminasi', $id);       
        
        $query = $this->db->get();
        return $query;  
    }

    public function proses_edit_laminasi($data)
	{
            $ubah_laminasi = array(                                                                         
                'tanggal_pelaksanaan_laminasi' =>$data['tanggal_pelaksanaan_laminasi'],                                     
                'keterangan_jadwal_fp_laminasi' =>$data['keterangan_jadwal_fp_laminasi'],                   
                'tanggal_pengerjaan_1' =>$data['tanggal_pengerjaan_1'],   
                'hasil_1' =>$data['hasil_1'],   
                'rejek_1' =>$data['rejek_1'],   
                'operator_1' =>$data['operator_1'],   
                'kru_1' =>$data['kru_1'],   
                'keterangan_1' =>$data['keterangan_1'],   
                'tanggal_pengerjaan_2' =>$data['tanggal_pengerjaan_2'],   
                'hasil_2' =>$data['hasil_2'],   
                'rejek_2' =>$data['rejek_2'],   
                'operator_2' =>$data['operator_2'],   
                'kru_2' =>$data['kru_2'],   
                'keterangan_2' =>$data['keterangan_2'],                   

            );                        
            $this->db->set($ubah_laminasi);
            $this->db->where('id_laminasi',$data['id_laminasi']);
            $this->db->update('laminasi');  

            $ubah_laminasi_khusus = array(                                                                                           
                'status_laminasi' =>$data['status_laminasi'],                   
                'jenis_laminasi' =>$data['jenis_laminasi'],                              
            );                        
            $this->db->set($ubah_laminasi_khusus);
            $this->db->where('id_order',$data['id_order']);
            $this->db->update('laminasi');  

}
    public function proses_tambah_laminasi($data)
	{
            $tambah_jadwal_laminasi = array(                                                                         
                'id_order' =>$data['id_order'],                                   
                'tanggal_pelaksanaan_laminasi' =>$data['tanggal_pelaksanaan_laminasi'],   
                'id_jadwal_laminasi' =>$data['id_jadwal_laminasi'],   
                'status_laminasi' =>$data['status_laminasi'],   
                'keterangan_jadwal_fp_laminasi' =>$data['keterangan_jadwal_fp_laminasi'],   
                'jenis_laminasi' =>$data['jenis_laminasi'],   
                'tanggal_pengerjaan_1' =>$data['tanggal_pengerjaan_1'],   
                'hasil_1' =>$data['hasil_1'],   
                'rejek_1' =>$data['rejek_1'],   
                'operator_1' =>$data['operator_1'],   
                'kru_1' =>$data['kru_1'],   
                'keterangan_1' =>$data['keterangan_1'],   
                'tanggal_pengerjaan_2' =>$data['tanggal_pengerjaan_2'],   
                'hasil_2' =>$data['hasil_2'],   
                'rejek_2' =>$data['rejek_2'],   
                'operator_2' =>$data['operator_2'],   
                'kru_2' =>$data['kru_2'],   
                'keterangan_2' =>$data['keterangan_2'],                   

            );                                                          
            $this->db->insert('laminasi',$tambah_jadwal_laminasi);

}





}