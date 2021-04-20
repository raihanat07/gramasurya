<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_m extends CI_Model {

	public function get($id = null)
    {
        $this->db->select(
            'order.nomor_so as nomor_so, order.tanggal_masuk as tanggal_masuk, order.deadline as deadline, order.nama_pemesan as nama_pemesan,  order.nama_orderan as nama_orderan, order.ukuran as ukuran, order.halaman as halaman, order.oplag as oplag, order.so_status as so_status, 
            finishing.finishing_akhir_bending as bending, finishing.finishing_akhir_hard_cover as hard_cover, finishing.finishing_akhir_jahit_benang as jahit_benang, finishing.finishing_akhir_jahit_kawat as jahit_kawat, finishing.finishing_akhir_pond as pond, finishing.finishing_akhir_spiral as spiral, finishing.finishing_akhir_klem as klem',
        );
        $this->db->from('order');
        $this->db->join('finishing','finishing.id_order = order.id_order');
        // $this->db->join('imposisi','imposisi.id_order = order.id_order');
        if($id != null){
            $this->db->where('order.id_order', $id);
        }
        $query = $this->db->get();
        return $query;   
    }

    public function get_lihat($id = null)
    {
        $this->db->select(
            'order.id_order as id_order,
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
            data_ctcp.tanggal_out_ctcp_isi2 as tanggal_out_isi',
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

    public function get_lihatctcp($id = null)
    {
        $this->db->select(
            'order.id_order as id_order, order.tanggal_masuk as tanggal_masuk, order.deadline as deadline, order.nama_pemesan as nama_pemesan,  order.nama_orderan as nama_orderan, order.ukuran as ukuran, order.halaman as halaman, order.oplag as oplag, order.so_status as so_status, 
            finishing.finishing_akhir_bending as bending, finishing.finishing_akhir_hard_cover as hard_cover, finishing.finishing_akhir_jahit_benang as jahit_benang, finishing.finishing_akhir_jahit_kawat as jahit_kawat, finishing.finishing_akhir_pond as pond, finishing.finishing_akhir_spiral as spiral,
            imposisi.id_order as nomor_so, 
            imposisi.id_imposisi as id_imposisi, 
            imposisi.namaoperator1 as namaoperator1, 
            imposisi.namaoperator2 as namaoperator2, 
            imposisi.total_plat_cover as total_plat_cover, 
            imposisi.total_plat_isi as total_plat_isi, 
            imposisi.cover1mesin1 as cover1mesin1, 
            imposisi.jumlahplatecover1 as jumlahplatecover1,
            imposisi.cover1plat1 as cover1plat1,
            imposisi.cover1plat2 as cover1plat2,
            imposisi.cover1plat3 as cover1plat3,
            imposisi.cover1set1 as cover1set1,
            imposisi.cover1set2 as cover1set2,
            imposisi.cover1set3 as cover1set3, 
            imposisi.cover1up1 as cover1up1,
            imposisi.cover1up2 as cover1up2,
            imposisi.cover1up3 as cover1up3, 
            imposisi.cover1lbrcetak1 as cover1lbrcetak1,
            imposisi.cover1lbrcetak2 as cover1lbrcetak2,
            imposisi.cover1lbrcetak3 as cover1lbrcetak3,
            imposisi.cover1warna1 as cover1warna1,
            imposisi.cover1warna2 as cover1warna2,
            imposisi.cover1warna3 as cover1warna3,
            imposisi.cover1status1 as cover1status1,
            imposisi.cover1status2 as cover1status2,
            imposisi.cover1status3 as cover1status3,
            imposisi.cover1keterangan1 as cover1keterangan1,
            imposisi.cover1keterangan2 as cover1keterangan2,
            imposisi.cover1keterangan3 as cover1keterangan3, 
            imposisi.cover2mesin1 as cover2mesin1,
            imposisi.jumlahplatecover2 as jumlahplatecover2,
            imposisi.cover2plat1 as cover2plat1,
            imposisi.cover2plat2 as cover2plat2,
            imposisi.cover2plat3 as cover2plat3,
            imposisi.cover2set1 as cover2set1,
            imposisi.cover2set2 as cover2set2, 
            imposisi.cover2set3 as cover2set3,
            imposisi.cover2up1 as cover2up1, 
            imposisi.cover2up2 as cover2up2,
            imposisi.cover2up3 as cover2up3,
            imposisi.cover2lbrcetak1 as cover2lbrcetak1,
            imposisi.cover2lbrcetak2 as cover2lbrcetak2,
            imposisi.cover2lbrcetak3 as cover2lbrcetak3,
            imposisi.cover2warna1 as cover2warna1,
            imposisi.cover2warna2 as cover2warna2,
            imposisi.cover2warna3 as cover2warna3,
            imposisi.cover2status1 as cover2status1,
            imposisi.cover2status2 as cover2status2,
            imposisi.cover2status3 as cover2status3,
            imposisi.cover2keterangan1 as cover2keterangan1,
            imposisi.cover2keterangan2 as cover2keterangan2,
            imposisi.cover2keterangan3 as cover2keterangan3,
            imposisi.isi1mesin1 as isi1mesin1,
            imposisi.jumlahplateisi1 as jumlahplateisi1,
            imposisi.isi1plat1 as isi1plat1,
            imposisi.isi1plat2 as isi1plat2,
            imposisi.isi1plat3 as isi1plat3,
            imposisi.isi1set1 as isi1set1,
            imposisi.isi1set2 as isi1set2,
            imposisi.isi1set3 as isi1set3,
            imposisi.isi1up1 as isi1up1,
            imposisi.isi1up2 as isi1up2,
            imposisi.isi1up3 as isi1up3,
            imposisi.isi1lbrcetak1 as isi1lbrcetak1,
            imposisi.isi1lbrcetak2 as isi1lbrcetak2,
            imposisi.isi1lbrcetak3 as isi1lbrcetak3,
            imposisi.isi1warna1 as isi1warna1,
            imposisi.isi1warna2 as isi1warna2,
            imposisi.isi1warna3 as isi1warna3,
            imposisi.isi1status1 as isi1status1,
            imposisi.isi1status2 as isi1status2,
            imposisi.isi1status3 as isi1status3,
            imposisi.isi1keterangan1 as isi1keterangan1,
            imposisi.isi1keterangan2 as isi1keterangan2,
            imposisi.isi1keterangan3 as isi1keterangan3,
            imposisi.isi2mesin1 as isi2mesin1, 
            imposisi.jumlahplateisi2 as jumlahplateisi2, 
            imposisi.isi2plat1 as isi2plat1, 
            imposisi.isi2plat2 as isi2plat2,
            imposisi.isi2plat3 as isi2plat3,
            imposisi.isi2set1 as isi2set1, 
            imposisi.isi2set2 as isi2set2, 
            imposisi.isi2set3 as isi2set3, 
            imposisi.isi2up1 as isi2up1,
            imposisi.isi2up2 as isi2up2,
            imposisi.isi2up3 as isi2up3,
            imposisi.isi2lbrcetak1 as isi2lbrcetak1,
            imposisi.isi2lbrcetak2 as isi2lbrcetak2,
            imposisi.isi2lbrcetak3 as isi2lbrcetak3,
            imposisi.isi2warna1 as isi2warna1,
            imposisi.isi2warna2 as isi2warna2,
            imposisi.isi2warna3 as isi2warna3,
            imposisi.isi2status1 as isi2status1, 
            imposisi.isi2status2 as isi2status2,
            imposisi.isi2status3 as isi2status3,
            imposisi.isi2keterangan1 as isi2keterangan1,
            imposisi.isi2keterangan2 as isi2keterangan2,
            imposisi.isi2keterangan3 as isi2keterangan3,
            imposisi.isi3mesin1 as isi3mesin1,
            imposisi.jumlahplateisi3 as jumlahplateisi3,
            imposisi.isi3plat1 as isi3plat1, 
            imposisi.isi3plat2 as isi3plat2,
            imposisi.isi3plat3 as isi3plat3, 
            imposisi.isi3set1 as isi3set1,
            imposisi.isi3set2 as isi3set2,
            imposisi.isi3set3 as isi3set3,
            imposisi.isi3up1 as isi3up1,
            imposisi.isi3up2 as isi3up2,
            imposisi.isi3up3 as isi3up3,
            imposisi.isi3lbrcetak1 as isi3lbrcetak1,
            imposisi.isi3lbrcetak2 as isi3lbrcetak2,
            imposisi.isi3lbrcetak3 as isi3lbrcetak3,
            imposisi.isi3warna1 as isi3warna1,
            imposisi.isi3warna2 as isi3warna2,
            imposisi.isi3warna3 as isi3warna3, 
            imposisi.isi3status1 as isi3status1,
            imposisi.isi3status2 as isi3status2,
            imposisi.isi3status3 as isi3status3,
            imposisi.isi3keterangan1 as isi3keterangan1,
            imposisi.isi3keterangan2 as isi3keterangan2,
            imposisi.isi3keterangan3 as isi3keterangan3, 
            imposisi.tanggal_imposisi_cover as tanggal_imposisi_cover,
            imposisi.tanggal_imposisi_isi as tanggal_imposisi_isi, 
            imposisi.catatan_imposisi as catatan_imposisi,
            
            data_ctcp.status_ctcp_cover as status_ctcp_cover,
            data_ctcp.status_ctcp_isi as status_ctcp_isi,
            data_ctcp.plate_gagal1 as plate_gagal1,
            data_ctcp.plate_gagal2 as plate_gagal2,
            data_ctcp.plate_gagal3 as plate_gagal3,
            data_ctcp.mesin_gagal1 as mesin_gagal1,
            data_ctcp.mesin_gagal2 as mesin_gagal2,
            data_ctcp.mesin_gagal3 as mesin_gagal3,
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

    // public function get_impo($id = null)
    // {
    //     $this->db->select(
    //         'oimposisi.id_order as nomor_so, 
    //         imposisi.id_imposisi as id_imposisi, 
    //         imposisi.namaoperator1 as namaoperator1, 
    //         imposisi.namaoperator2 as namaoperator2, 
    //         imposisi.total_plat_cover as total_plat_cover, 
    //         imposisi.total_plat_isi as total_plat_isi, 
    //         imposisi.cover1mesin1 as cover1mesin1, 
    //         imposisi.jumlahplatecover1 as jumlahplatecover1,
    //         imposisi.cover1plat1 as cover1plat1,
    //         imposisi.cover1plat2 as cover1plat2,
    //         imposisi.cover1plat3 as cover1plat3,
    //         imposisi.cover1set1 as cover1set1,
    //         imposisi.cover1set2 as cover1set2,
    //         imposisi.cover1set3 as cover1set3, 
    //         imposisi.cover1up1 as cover1up1,
    //         imposisi.cover1up2 as cover1up2,
    //         imposisi.cover1up3 as cover1up3, 
    //         imposisi.cover1lbrcetak1 as cover1lbrcetak1,
    //         imposisi.cover1lbrcetak2 as cover1lbrcetak2,
    //         imposisi.cover1lbrcetak3 as cover1lbrcetak3,
    //         imposisi.cover1warna1 as cover1warna1,
    //         imposisi.cover1warna2 as cover1warna2,
    //         imposisi.cover1warna3 as cover1warna3,
    //         imposisi.cover1status1 as cover1status1,
    //         imposisi.cover1status2 as cover1status2,
    //         imposisi.cover1status3 as cover1status3,
    //         imposisi.cover1keterangan1 as cover1keterangan1,
    //         imposisi.cover1keterangan2 as cover1keterangan2,
    //         imposisi.cover1keterangan3 as cover1keterangan3, 
    //         imposisi.cover2mesin1 as cover2mesin1,
    //         imposisi.jumlahplatecover2 as jumlahplatecover2,
    //         imposisi.cover2plat1 as cover2plat1,
    //         imposisi.cover2plat2 as cover2plat2,
    //         imposisi.cover2plat3 as cover2plat3,
    //         imposisi.cover2set1 as cover2set1,
    //         imposisi.cover2set2 as cover2set2, 
    //         imposisi.cover2set3 as cover2set3,
    //         imposisi.cover2up1 as cover2up1, 
    //         imposisi.cover2up2 as cover2up2,
    //         imposisi.cover2up3 as cover2up3,
    //         imposisi.cover2lbrcetak1 as cover2lbrcetak1,
    //         imposisi.cover2lbrcetak2 as cover2lbrcetak2,
    //         imposisi.cover2lbrcetak3 as cover2lbrcetak3,
    //         imposisi.cover2warna1 as cover2warna1,
    //         imposisi.cover2warna2 as cover2warna2,
    //         imposisi.cover2warna3 as cover2warna3,
    //         imposisi.cover2status1 as cover2status1,
    //         imposisi.cover2status2 as cover2status2,
    //         imposisi.cover2status3 as cover2status3,
    //         imposisi.cover2keterangan1 as cover2keterangan1,
    //         imposisi.cover2keterangan2 as cover2keterangan2,
    //         imposisi.cover2keterangan3 as cover2keterangan3,
    //         imposisi.isi1mesin1 as isi1mesin1,
    //         imposisi.jumlahplateisi1 as jumlahplateisi1,
    //         imposisi.isi1plat1 as isi1plat1,
    //         imposisi.isi1plat2 as isi1plat2,
    //         imposisi.isi1plat3 as isi1plat3,
    //         imposisi.isi1set1 as isi1set1,
    //         imposisi.isi1set2 as isi1set2,
    //         imposisi.isi1set3 as isi1set3,
    //         imposisi.isi1up1 as isi1up1,
    //         imposisi.isi1up2 as isi1up2,
    //         imposisi.isi1up3 as isi1up3,
    //         imposisi.isi1lbrcetak1 as isi1lbrcetak1,
    //         imposisi.isi1lbrcetak2 as isi1lbrcetak2,
    //         imposisi.isi1lbrcetak3 as isi1lbrcetak3,
    //         imposisi.isi1warna1 as isi1warna1,
    //         imposisi.isi1warna2 as isi1warna2,
    //         imposisi.isi1warna3 as isi1warna3,
    //         imposisi.isi1status1 as isi1status1,
    //         imposisi.isi1status2 as isi1status2,
    //         imposisi.isi1status3 as isi1status3,
    //         imposisi.isi1keterangan1 as isi1keterangan1,
    //         imposisi.isi1keterangan2 as isi1keterangan2,
    //         imposisi.isi1keterangan3 as isi1keterangan3,
    //         imposisi.isi2mesin1 as isi2mesin1, 
    //         imposisi.jumlahplateisi2 as jumlahplateisi2, 
    //         imposisi.isi2plat1 as isi2plat1, 
    //         imposisi.isi2plat2 as isi2plat2,
    //         imposisi.isi2plat3 as isi2plat3,
    //         imposisi.isi2set1 as isi2set1, 
    //         imposisi.isi2set2 as isi2set2, 
    //         imposisi.isi2set3 as isi2set3, 
    //         imposisi.isi2up1 as isi2up1,
    //         imposisi.isi2up2 as isi2up2,
    //         imposisi.isi2up3 as isi2up3,
    //         imposisi.isi2lbrcetak1 as isi2lbrcetak1,
    //         imposisi.isi2lbrcetak2 as isi2lbrcetak2,
    //         imposisi.isi2lbrcetak3 as isi2lbrcetak3,
    //         imposisi.isi2warna1 as isi2warna1,
    //         imposisi.isi2warna2 as isi2warna2,
    //         imposisi.isi2warna3 as isi2warna3,
    //         imposisi.isi2status1 as isi2status1, 
    //         imposisi.isi2status2 as isi2status2,
    //         imposisi.isi2status3 as isi2status3,
    //         imposisi.isi2keterangan1 as isi2keterangan1,
    //         imposisi.isi2keterangan2 as isi2keterangan2,
    //         imposisi.isi2keterangan3 as isi2keterangan3,
    //         imposisi.isi3mesin1 as isi3mesin1,
    //         imposisi.jumlahplateisi3 as jumlahplateisi3,
    //         imposisi.isi3plat1 as isi3plat1, 
    //         imposisi.isi3plat2 as isi3plat2,
    //         imposisi.isi3plat3 as isi3plat3, 
    //         imposisi.isi3set1 as isi3set1,
    //         imposisi.isi3set2 as isi3set2,
    //         imposisi.isi3set3 as isi3set3,
    //         imposisi.isi3up1 as isi3up1,
    //         imposisi.isi3up2 as isi3up2,
    //         imposisi.isi3up3 as isi3up3,
    //         imposisi.isi3lbrcetak1 as isi3lbrcetak1,
    //         imposisi.isi3lbrcetak2 as isi3lbrcetak2,
    //         imposisi.isi3lbrcetak3 as isi3lbrcetak3,
    //         imposisi.isi3warna1 as isi3warna1,
    //         imposisi.isi3warna2 as isi3warna2,
    //         imposisi.isi3warna3 as isi3warna3, 
    //         imposisi.isi3status1 as isi3status1,
    //         imposisi.isi3status2 as isi3status2,
    //         imposisi.isi3status3 as isi3status3,
    //         imposisi.isi3keterangan1 as isi3keterangan1,
    //         imposisi.isi3keterangan2 as isi3keterangan2,
    //         imposisi.isi3keterangan3 as isi3keterangan3, 
    //         imposisi.tanggal_imposisi_cover as tanggal_imposisi_cover,
    //         imposisi.tanggal_imposisi_isi as tanggal_imposisi_isi, 
    //         imposisi.catatan_imposisi as catatan_imposisi',
    //     );
    //     $this->db->from('imposisi');
    //     // $this->db->join('finishing','finishing.id_order = order.id_order');
    //     // $this->db->join('imposisi','imposisi.id_order = order.id_order');
    //     if($id != null){
    //         $this->db->where('id_imposisi', $id);
    //     }
    //     $query = $this->db->get();
    //     return $query;          
    // }

    public function tambah_laporan($data)
	{
            $tambah_laporan = array(
                'id_order' =>$data['id_order'],
                // 'id_data_ctcp' =>$data['id_data_ctcp'],
                'status_ctcp_cover' =>$data['status_ctcp_cover'],
                'status_ctcp_isi' =>$data['status_ctcp_isi'],
                'plate_gagal1' =>$data['plate_gagal1'],
                'plate_gagal2' =>$data['plate_gagal2'],
                'plate_gagal3' =>$data['plate_gagal3'],
                // 'status_imposisi_cover' =>$data['jumlah_kertas_cover_1'],
                // 'status_imposisi_isi' =>$data['jumlah_kertas_isi_1'],
                'mesin_gagal1' =>$data['mesin_gagal1'],
                'mesin_gagal2' =>$data['mesin_gagal2'],
                'mesin_gagal3' =>$data['mesin_gagal3'],
                'tanggal_out_ctcp_cover' =>$data['tanggal_out_ctcp_cover'],
                'tanggal_out_ctcp_isi1' =>$data['tanggal_out_ctcp_cover'],
                'tanggal_out_ctcp_isi2' =>$data['tanggal_out_ctcp_cover']        
            );
            
            $this->db->insert('laporan_pracetak',$tambah_laporan);
    }

}    