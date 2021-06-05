<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DisplayCetak_m extends CI_Model {

    public function get()
    {
        $this->db->select(
            'order.id_order as id_order, order.nomor_so as nomor_so, order.tanggal_masuk as tanggal_masuk, order.deadline as deadline, order.nama_pemesan as nama_pemesan,  order.nama_orderan as nama_orderan, order.ukuran as ukuran, order.halaman as halaman, order.oplag as oplag, order.so_status as so_status, 
            finishing.finishing_akhir_bending as bending, finishing.finishing_akhir_hard_cover as hard_cover, finishing.finishing_akhir_jahit_benang as jahit_benang, finishing.finishing_akhir_jahit_kawat as jahit_kawat, finishing.finishing_akhir_pond as pond, finishing.finishing_akhir_klem as klem,finishing.finishing_akhir_spiral as spiral,display_cetak.id_display_cetak as id_display_cetak',
        );
        $this->db->from('order');
        $this->db->join('finishing','finishing.id_order = order.id_order','left');
        $this->db->join('display_cetak','display_cetak.id_order = order.id_order','left');
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

    public function get_dc($id)
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
            
            display_cetak.id_display_cetak as id_display_cetak,
            display_cetak.mesin_cover_1 as mesin_cover_1,
            display_cetak.tanggal_cetak_cover1 as tanggal_cetak_cover1,
            display_cetak.tanggal_out_cetak_cover1 as tanggal_out_cetak_cover1,
            display_cetak.jumlah_kertas_cover1 as jumlah_kertas_cover1,
            display_cetak.hasil_kertas_cover1 as hasil_kertas_cover1,
            display_cetak.ukuran_potong_cover1 as ukuran_potong_cover1,
            display_cetak.suborder_in_cetak_cover1 as suborder_in_cetak_cover1,
            display_cetak.suborder_out_cetak_cover1 as suborder_out_cetak_cover1,

            display_cetak.mesin_cover_2 as mesin_cover_2,
            display_cetak.tanggal_cetak_cover2 as tanggal_cetak_cover2,
            display_cetak.tanggal_out_cetak_cover2 as tanggal_out_cetak_cover2,
            display_cetak.jumlah_kertas_cover2 as jumlah_kertas_cover2,
            display_cetak.hasil_kertas_cover2 as hasil_kertas_cover2,
            display_cetak.ukuran_potong_cover2 as ukuran_potong_cover2,
            display_cetak.suborder_in_cetak_cover2 as suborder_in_cetak_cover2,
            display_cetak.suborder_out_cetak_cover2 as suborder_out_cetak_cover2,

            display_cetak.mesin_cover_3 as mesin_cover_3,
            display_cetak.tanggal_cetak_cover3 as tanggal_cetak_cover3,
            display_cetak.tanggal_out_cetak_cover3 as tanggal_out_cetak_cover3,
            display_cetak.jumlah_kertas_cover3 as jumlah_kertas_cover3,
            display_cetak.hasil_kertas_cover3 as hasil_kertas_cover3,
            display_cetak.ukuran_potong_cover3 as ukuran_potong_cover3,
            display_cetak.suborder_in_cetak_cover3 as suborder_in_cetak_cover3,
            display_cetak.suborder_out_cetak_cover3 as suborder_out_cetak_cover3,

            display_cetak.mesin_isi_1 as mesin_isi_1,
            display_cetak.tanggal_cetak_isi1 as tanggal_cetak_isi1,
            display_cetak.tanggal_out_cetak_isi1 as tanggal_out_cetak_isi1,
            display_cetak.jumlah_kertas_isi1 as jumlah_kertas_isi1,
            display_cetak.hasil_kertas_isi1 as hasil_kertas_isi1,
            display_cetak.ukuran_potong_isi1 as ukuran_potong_isi1,
            display_cetak.suborder_in_cetak_isi1 as suborder_in_cetak_isi1,
            display_cetak.suborder_out_cetak_isi1 as suborder_out_cetak_isi1,

            display_cetak.mesin_isi_2 as mesin_isi_2,
            display_cetak.tanggal_cetak_isi2 as tanggal_cetak_isi2,
            display_cetak.tanggal_out_cetak_isi2 as tanggal_out_cetak_isi2,
            display_cetak.jumlah_kertas_isi2 as jumlah_kertas_isi2,
            display_cetak.hasil_kertas_isi2 as hasil_kertas_isi2,
            display_cetak.ukuran_potong_isi2 as ukuran_potong_isi2,
            display_cetak.suborder_in_cetak_isi2 as suborder_in_cetak_isi2,
            display_cetak.suborder_out_cetak_isi2 as suborder_out_cetak_isi2,

            display_cetak.mesin_isi_3 as mesin_isi_3,
            display_cetak.tanggal_cetak_isi3 as tanggal_cetak_isi3,
            display_cetak.tanggal_out_cetak_isi3 as tanggal_out_cetak_isi3,
            display_cetak.jumlah_kertas_isi3 as jumlah_kertas_isi3,
            display_cetak.hasil_kertas_isi3 as hasil_kertas_isi3,
            display_cetak.ukuran_potong_isi3 as ukuran_potong_isi3,
            display_cetak.suborder_in_cetak_isi3 as suborder_in_cetak_isi3,
            display_cetak.suborder_out_cetak_isi3 as suborder_out_cetak_isi3,

            ',
        );
        $this->db->from('order');
        $this->db->join('finishing','finishing.id_order = order.id_order','left');
        $this->db->join('display_cetak','display_cetak.id_order = order.id_order','left');
        $this->db->order_by('id_order', 'desc');    
        $query = $this->db->get();
        return $query;   
    }

    public function edit_dc($data)
	{
            $edit_dc = array(                                                
                'mesin_cover_1' =>$data['mesin_cover_1'],
                'tanggal_cetak_cover1' =>$data['tanggal_cetak_cover1'],
                'tanggal_out_cetak_cover1' =>$data['tanggal_out_cetak_cover1'],
                'jumlah_kertas_cover1' =>$data['jumlah_kertas_cover1'],                
                'hasil_kertas_cover1' =>$data['hasil_kertas_cover1'],
                'ukuran_potong_cover1' =>$data['ukuran_potong_cover1'],
                'suborder_in_cetak_cover1' =>$data['suborder_in_cetak_cover1'],
                'suborder_out_cetak_cover1' =>$data['suborder_out_cetak_cover1'],
                'mesin_cover_2' =>$data['mesin_cover_2'],
                'tanggal_cetak_cover2' =>$data['tanggal_cetak_cover2'],
                'tanggal_out_cetak_cover2' =>$data['tanggal_out_cetak_cover2'],
                'jumlah_kertas_cover2' =>$data['jumlah_kertas_cover2'],
                'hasil_kertas_cover2' =>$data['hasil_kertas_cover2'],
                'ukuran_potong_cover2' =>$data['ukuran_potong_cover2'],
                'suborder_in_cetak_cover2' =>$data['suborder_in_cetak_cover2'],
                'suborder_out_cetak_cover2' =>$data['suborder_out_cetak_cover2'],
                'mesin_cover_3' =>$data['mesin_cover_3'],
                'tanggal_cetak_cover3' =>$data['tanggal_cetak_cover3'],
                'tanggal_out_cetak_cover3' =>$data['tanggal_out_cetak_cover3'],
                'jumlah_kertas_cover3' =>$data['jumlah_kertas_cover3'],
                'hasil_kertas_cover3' =>$data['hasil_kertas_cover3'],
                'ukuran_potong_cover3' =>$data['ukuran_potong_cover3'],
                'suborder_in_cetak_cover3' =>$data['suborder_in_cetak_cover3'],
                'suborder_out_cetak_cover3' =>$data['suborder_out_cetak_cover3'],
                'mesin_isi_1' =>$data['mesin_isi_1'],
                'tanggal_cetak_isi1' =>$data['tanggal_cetak_isi1'],
                'tanggal_out_cetak_isi1' =>$data['tanggal_out_cetak_isi1'],
                'jumlah_kertas_isi1' =>$data['jumlah_kertas_isi1'],                
                'hasil_kertas_isi1' =>$data['hasil_kertas_isi1'],
                'ukuran_potong_isi1' =>$data['ukuran_potong_isi1'],
                'suborder_in_cetak_isi1' =>$data['suborder_in_cetak_isi1'],
                'suborder_out_cetak_isi1' =>$data['suborder_out_cetak_isi1'],
                'mesin_isi_2' =>$data['mesin_isi_2'],
                'tanggal_cetak_isi2' =>$data['tanggal_cetak_isi2'],
                'tanggal_out_cetak_isi2' =>$data['tanggal_out_cetak_isi2'],
                'jumlah_kertas_isi2' =>$data['jumlah_kertas_isi2'],
                'hasil_kertas_isi2' =>$data['hasil_kertas_isi2'],
                'ukuran_potong_isi2' =>$data['ukuran_potong_isi2'],
                'suborder_in_cetak_isi2' =>$data['suborder_in_cetak_isi2'],
                'suborder_out_cetak_isi2' =>$data['suborder_out_cetak_isi2'],
                'mesin_isi_3' =>$data['mesin_isi_3'],
                'tanggal_cetak_isi3' =>$data['tanggal_cetak_isi3'],
                'tanggal_out_cetak_isi3' =>$data['tanggal_out_cetak_isi3'],
                'jumlah_kertas_isi3' =>$data['jumlah_kertas_isi3'],
                'hasil_kertas_isi3' =>$data['hasil_kertas_isi3'],
                'ukuran_potong_isi3' =>$data['ukuran_potong_isi3'],
                'suborder_in_cetak_isi3' =>$data['suborder_in_cetak_isi3'],
                'suborder_out_cetak_isi3' =>$data['suborder_out_cetak_isi3'],
                'total_kertas' =>$data['total_kertas']


                
            );
            
        $this->db->set($edit_dc);
        $this->db->where('id_order',$data['id_order']);
        $this->db->update('display_cetak');            
    }

    public function tambah_dc($data)
	{
            $tambah_dc = array(         
                'id_order' =>$data['id_order'],                                                                       
                'mesin_cover_1' =>$data['mesin_cover_1'],
                'tanggal_cetak_cover1' =>$data['tanggal_cetak_cover1'],
                'tanggal_out_cetak_cover1' =>$data['tanggal_out_cetak_cover1'],
                'jumlah_kertas_cover1' =>$data['jumlah_kertas_cover1'],                
                'hasil_kertas_cover1' =>$data['hasil_kertas_cover1'],
                'ukuran_potong_cover1' =>$data['ukuran_potong_cover1'],
                'suborder_in_cetak_cover1' =>$data['suborder_in_cetak_cover1'],
                'suborder_out_cetak_cover1' =>$data['suborder_out_cetak_cover1'],
                'mesin_cover_2' =>$data['mesin_cover_2'],
                'tanggal_cetak_cover2' =>$data['tanggal_cetak_cover2'],
                'tanggal_out_cetak_cover2' =>$data['tanggal_out_cetak_cover2'],
                'jumlah_kertas_cover2' =>$data['jumlah_kertas_cover2'],
                'hasil_kertas_cover2' =>$data['hasil_kertas_cover2'],
                'ukuran_potong_cover2' =>$data['ukuran_potong_cover2'],
                'suborder_in_cetak_cover2' =>$data['suborder_in_cetak_cover2'],
                'suborder_out_cetak_cover2' =>$data['suborder_out_cetak_cover2'],
                'mesin_cover_3' =>$data['mesin_cover_3'],
                'tanggal_cetak_cover3' =>$data['tanggal_cetak_cover3'],
                'tanggal_out_cetak_cover3' =>$data['tanggal_out_cetak_cover3'],
                'jumlah_kertas_cover3' =>$data['jumlah_kertas_cover3'],
                'hasil_kertas_cover3' =>$data['hasil_kertas_cover3'],
                'ukuran_potong_cover3' =>$data['ukuran_potong_cover3'],
                'suborder_in_cetak_cover3' =>$data['suborder_in_cetak_cover3'],
                'suborder_out_cetak_cover3' =>$data['suborder_out_cetak_cover3'],
                'mesin_isi_1' =>$data['mesin_isi_1'],
                'tanggal_cetak_isi1' =>$data['tanggal_cetak_isi1'],
                'tanggal_out_cetak_isi1' =>$data['tanggal_out_cetak_isi1'],
                'jumlah_kertas_isi1' =>$data['jumlah_kertas_isi1'],                
                'hasil_kertas_isi1' =>$data['hasil_kertas_isi1'],
                'ukuran_potong_isi1' =>$data['ukuran_potong_isi1'],
                'suborder_in_cetak_isi1' =>$data['suborder_in_cetak_isi1'],
                'suborder_out_cetak_isi1' =>$data['suborder_out_cetak_isi1'],
                'mesin_isi_2' =>$data['mesin_isi_2'],
                'tanggal_cetak_isi2' =>$data['tanggal_cetak_isi2'],
                'tanggal_out_cetak_isi2' =>$data['tanggal_out_cetak_isi2'],
                'jumlah_kertas_isi2' =>$data['jumlah_kertas_isi2'],
                'hasil_kertas_isi2' =>$data['hasil_kertas_isi2'],
                'ukuran_potong_isi2' =>$data['ukuran_potong_isi2'],
                'suborder_in_cetak_isi2' =>$data['suborder_in_cetak_isi2'],
                'suborder_out_cetak_isi2' =>$data['suborder_out_cetak_isi2'],
                'mesin_isi_3' =>$data['mesin_isi_3'],
                'tanggal_cetak_isi3' =>$data['tanggal_cetak_isi3'],
                'tanggal_out_cetak_isi3' =>$data['tanggal_out_cetak_isi3'],
                'jumlah_kertas_isi3' =>$data['jumlah_kertas_isi3'],
                'hasil_kertas_isi3' =>$data['hasil_kertas_isi3'],
                'ukuran_potong_isi3' =>$data['ukuran_potong_isi3'],
                'suborder_in_cetak_isi3' =>$data['suborder_in_cetak_isi3'],
                'suborder_out_cetak_isi3' =>$data['suborder_out_cetak_isi3'],
                // 'total_kertas' =>$data['total_kertas']

                
            );
            $this->db->insert('display_cetak',$tambah_dc);
         
    }

}