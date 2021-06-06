<?php
defined('BASEPATH') OR exit('No direct script access allowed');

error_reporting(0);

class FinishingProses_m extends CI_Model {

	public function get($id = null)
    {
        $this->db->select(
            'order.id_order as id_order, order.nomor_so as nomor_so, order.tanggal_masuk as tanggal_masuk, order.deadline as deadline, order.nama_pemesan as nama_pemesan,  order.nama_orderan as nama_orderan, order.ukuran as ukuran, order.halaman as halaman, order.oplag as oplag, order.so_status as so_status,

            finishing.finishing_akhir_bending as bending, finishing.finishing_akhir_hard_cover as hard_cover, finishing.finishing_akhir_jahit_benang as jahit_benang, finishing.finishing_akhir_jahit_kawat as jahit_kawat, finishing.finishing_akhir_pond as pond, finishing.finishing_akhir_spiral as spiral,finishing.finishing_akhir_klem as klem,
            
            finishing.finishing_cover_uvi as uvi,finishing.finishing_cover_glossy as glossy,finishing.finishing_cover_doff as doff,

            
            laminasi.tanggal_pelaksanaan_laminasi as tanggal_laminasi,    
            laminasi.keterangan_jadwal_fp_laminasi as keterangan_laminasi,
            mbo.tanggal_pelaksanaan_mesin_mbo as tanggal_mbo,
            mbo.keterangan_jadwal_fp_mbo as keterangan_mbo,
            shoe.tanggal_pelaksanaan_mesin_shoe as tanggal_shoe,
            shoe.keterangan_jadwal_fp_shoe as keterangan_shoe,
            susun.tanggal_pelaksanaan_mesin_susun as tanggal_susun,
            susun.keterangan_jadwal_fp_susun as keterangan_susun,
            sub_proses.tanggal_pelaksanaan_sub_proses as tanggal_sub_proses,
            sub_proses.keterangan_jadwal_sub_proses as keterangan_sub_proses,
        ',      
        );   

        $this->db->from('order');                
        $this->db->join('finishing','finishing.id_order = order.id_order');

        $this->db->join('laminasi','laminasi.id_order = order.id_order','left');
        $this->db->join('mbo','mbo.id_order = order.id_order','left');
        $this->db->join('shoe','shoe.id_order = order.id_order','left');
        $this->db->join('susun','susun.id_order = order.id_order','left');
        $this->db->join('sub_proses','sub_proses.id_order = order.id_order','left');
        
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
    
}