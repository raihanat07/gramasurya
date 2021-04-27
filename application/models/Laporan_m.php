<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_m extends CI_Model {

	public function get()
    {
        $this->db->select(
            'data_ctcp.ctcp_status as ctcp_status,
            order.id_order as id_order, order.nomor_so as nomor_so, laporan_pracetak.id_laporan_pracetak as id_laporan_pracetak, order.tanggal_masuk as tanggal_masuk, order.deadline as deadline, order.nama_pemesan as nama_pemesan,  order.nama_orderan as nama_orderan, order.ukuran as ukuran, order.halaman as halaman, order.oplag as oplag, order.so_status as so_status, 
            finishing.finishing_akhir_bending as bending, finishing.finishing_akhir_hard_cover as hard_cover, finishing.finishing_akhir_jahit_benang as jahit_benang, finishing.finishing_akhir_jahit_kawat as jahit_kawat, finishing.finishing_akhir_pond as pond, finishing.finishing_akhir_spiral as spiral, finishing.finishing_akhir_klem as klem',
        );
        $status_ctcp = array('ctcp cover','ctcp isi');

        $this->db->from('order');
        $this->db->join('data_ctcp','order.id_order = data_ctcp.id_order' );      
        $this->db->join('laporan_pracetak','laporan_pracetak.id_order = data_ctcp.id_order','left');          
        $this->db->join('finishing','finishing.id_order = order.id_order');        
        $this->db->where_in('data_ctcp.ctcp_status',$status_ctcp);
        $this->db->order_by('order.id_order', 'desc');  

        $query = $this->db->get();
        return $query;   
    }

    public function get_lihat($id = null)
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
            finishing.finishing_akhir_spiral as spiral,
             
            imposisi.tanggal_imposisi_cover as tanggal_imposisi_cover,
            imposisi.tanggal_imposisi_isi as tanggal_imposisi_isi, 
            imposisi.catatan_imposisi as catatan_imposisi,
            
            data_ctcp.tanggal_out_ctcp_cover as tanggal_out_ctcp_cover,
            data_ctcp.tanggal_out_ctcp_isi1 as tanggal_out_ctcp_isi1,
            data_ctcp.tanggal_out_ctcp_isi2 as tanggal_out_ctcp_isi2',
        );
        $this->db->from('order');
        $this->db->join('finishing','finishing.id_order = order.id_order');
        $this->db->join('imposisi','imposisi.id_order = order.id_order');
        $this->db->join('data_ctcp','data_ctcp.id_order = order.id_order');
        if($id != null){
            $this->db->where('order.id_order', $id);
        }
        $query = $this->db->get();
        return $query;          
    }

    public function get_lihatlaporan($id = null)
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
            finishing.finishing_akhir_spiral as spiral,
             
            imposisi.tanggal_imposisi_cover as tanggal_imposisi_cover,
            imposisi.tanggal_imposisi_isi as tanggal_imposisi_isi, 
            imposisi.catatan_imposisi as catatan_imposisi,
            
            data_ctcp.tanggal_out_ctcp_cover as tanggal_out_ctcp_cover,
            data_ctcp.tanggal_out_ctcp_isi1 as tanggal_out_ctcp_isi1,
            data_ctcp.tanggal_out_ctcp_isi2 as tanggal_out_ctcp_isi2,
            
            laporan_pracetak.plate_1_keluar_cover as plate_1_keluar_cover,
            laporan_pracetak.plate_2_keluar_cover as plate_2_keluar_cover,
            laporan_pracetak.plate_3_keluar_cover as plate_3_keluar_cover,
            laporan_pracetak.mesin_1_keluar_cover as mesin_1_keluar_cover,
            laporan_pracetak.mesin_2_keluar_cover as mesin_2_keluar_cover,
            laporan_pracetak.mesin_3_keluar_cover as mesin_3_keluar_cover,
            laporan_pracetak.plate_1_keluar_isi as plate_1_keluar_isi,
            laporan_pracetak.plate_2_keluar_isi as plate_2_keluar_isi,
            laporan_pracetak.plate_3_keluar_isi as plate_3_keluar_isi,
            laporan_pracetak.mesin_1_keluar_isi as mesin_1_keluar_isi,
            laporan_pracetak.mesin_2_keluar_isi as mesin_2_keluar_isi,
            laporan_pracetak.mesin_3_keluar_isi as mesin_3_keluar_isi,
            laporan_pracetak.plate_gagal1 as plate_gagal1,
            laporan_pracetak.plate_gagal2 as plate_gagal2,
            laporan_pracetak.plate_gagal3 as plate_gagal3,
            laporan_pracetak.mesin_gagal1 as mesin_gagal1,
            laporan_pracetak.mesin_gagal2 as mesin_gagal2,
            laporan_pracetak.mesin_gagal3 as mesin_gagal3',
            // laporan_pracetak.status_laporan_pracetak as status_laporan_pracetak',
        );
        $this->db->from('order');
        $this->db->join('finishing','finishing.id_order = order.id_order');
        $this->db->join('imposisi','imposisi.id_order = order.id_order');
        $this->db->join('data_ctcp','data_ctcp.id_order = order.id_order');
        $this->db->join('laporan_pracetak','laporan_pracetak.id_order = order.id_order');

        if($id != null){
            $this->db->where('order.id_order', $id);
        }
        $query = $this->db->get();
        return $query;          
    }

    public function tambah_laporan($data)
	{
            $tambah_laporan = array(
                'id_order' =>$data['id_order'],
                // 'id_data_ctcp' =>$data['id_data_ctcp'],
                // 'status_ctcp_cover' =>$data['status_ctcp_cover'],
                // 'status_ctcp_isi' =>$data['status_ctcp_isi'],
                // 'status_laporan_pracetak' =>$data['status_laporan_pracetak'],
                'plate_1_keluar_cover' =>$data['plate_1_keluar_cover'],
                'plate_2_keluar_cover' =>$data['plate_2_keluar_cover'],
                'plate_3_keluar_cover' =>$data['plate_3_keluar_cover'],
                'mesin_1_keluar_cover' =>$data['mesin_1_keluar_cover'],
                'mesin_2_keluar_cover' =>$data['mesin_2_keluar_cover'],
                'mesin_3_keluar_cover' =>$data['mesin_3_keluar_cover'],
                'plate_1_keluar_isi' =>$data['plate_1_keluar_isi'],
                'plate_2_keluar_isi' =>$data['plate_2_keluar_isi'],
                'plate_3_keluar_isi' =>$data['plate_3_keluar_isi'],
                'mesin_1_keluar_isi' =>$data['mesin_1_keluar_isi'],
                'mesin_2_keluar_isi' =>$data['mesin_2_keluar_isi'],
                'mesin_3_keluar_isi' =>$data['mesin_3_keluar_isi'],
                'plate_gagal1' =>$data['plate_gagal1'],
                'plate_gagal2' =>$data['plate_gagal2'],
                'plate_gagal3' =>$data['plate_gagal3'],
                // 'status_imposisi_cover' =>$data['jumlah_kertas_cover_1'],
                // 'status_imposisi_isi' =>$data['jumlah_kertas_isi_1'],
                'mesin_gagal1' =>$data['mesin_gagal1'],
                'mesin_gagal2' =>$data['mesin_gagal2'],
                'mesin_gagal3' =>$data['mesin_gagal3']      
            );
            
            $this->db->insert('laporan_pracetak',$tambah_laporan);

            $ganti_status = array(
                'so_status' =>$data['status_laporan_pracetak'],
            );
            $this->db->set($ganti_status);
            $this->db->where('id_order',$data['id_order']);
            $this->db->update('order');
    }

    public function edit_laporan($data)
	{
            $edit_laporan = array(
                // 'id_order' =>$data['id_order'],
                // 'id_data_ctcp' =>$data['id_data_ctcp'],
                // 'status_ctcp_cover' =>$data['status_ctcp_cover'],
                // 'status_laporan_pracetak' =>$data['status_laporan_pracetak'],
                'plate_1_keluar_cover' =>$data['plate_1_keluar_cover'],
                'plate_2_keluar_cover' =>$data['plate_2_keluar_cover'],
                'plate_3_keluar_cover' =>$data['plate_3_keluar_cover'],
                'mesin_1_keluar_cover' =>$data['mesin_1_keluar_cover'],
                'mesin_2_keluar_cover' =>$data['mesin_2_keluar_cover'],
                'mesin_3_keluar_cover' =>$data['mesin_3_keluar_cover'],
                'plate_1_keluar_isi' =>$data['plate_1_keluar_isi'],
                'plate_2_keluar_isi' =>$data['plate_2_keluar_isi'],
                'plate_3_keluar_isi' =>$data['plate_3_keluar_isi'],
                'mesin_1_keluar_isi' =>$data['mesin_1_keluar_isi'],
                'mesin_2_keluar_isi' =>$data['mesin_2_keluar_isi'],
                'mesin_3_keluar_isi' =>$data['mesin_3_keluar_isi'],
                'plate_gagal1' =>$data['plate_gagal1'],
                'plate_gagal2' =>$data['plate_gagal2'],
                'plate_gagal3' =>$data['plate_gagal3'],
                // 'status_imposisi_cover' =>$data['jumlah_kertas_cover_1'],
                // 'status_imposisi_isi' =>$data['jumlah_kertas_isi_1'],
                'mesin_gagal1' =>$data['mesin_gagal1'],
                'mesin_gagal2' =>$data['mesin_gagal2'],
                'mesin_gagal3' =>$data['mesin_gagal3']      
            );
            $this->db->set($edit_laporan);
            $this->db->where('id_order',$data['id_order']);
            $this->db->update('laporan_pracetak'); 

            $ganti_status = array(
                'so_status' =>$data['status_laporan_pracetak'],
            );
            $this->db->set($ganti_status);
            $this->db->where('id_order',$data['id_order']);
            $this->db->update('order');
    }

}    