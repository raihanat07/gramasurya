<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratOrder_m extends CI_Model {

	// public function get($id = null)
    // {
    //     $this->db->select('nomor_so, tanggal_masuk, nama_pemesan, deadline, nama_orderan, so_cu, status');
    //     $this->db->from('orderan');
    //     if($id != null){
    //         $this->db->where('id_order', $id);
    //     }
    //     $query = $this->db->get();
    //     return $query;
    // }

	public function add($data)
	{
        // tambah bagian surat order        
		// $tambah_so = array(            
        //     'nama_pemesan' =>$data['nama_pemesan'],
        //     'so_cu' =>$data['so_cu'],
        //     'ukuran' =>$data['ukuran'],
        //     'kode_pemesan' =>$data['kode_pemesan'],
        //     'tanggal_masuk' =>$data['tanggal_masuk'],
        //     'oplag' =>$data['oplag'],
        //     'pemesan_pdk' =>$data['pemesan_pdk'],
        //     'nego' =>$data['nego'],
        //     'satuan' =>$data['satuan'],
        //     'kode_order' =>$data['kode_order'],
        //     'deadline' =>$data['deadline'],
        //     'hal' =>$data['hal'],
        //     'nama_orderan' =>$data['nama_orderan'],
        //     'so_status' =>'marketing',
        //     'fc' =>$data['fc'],
        //     'nama_orderan_pendek' =>$data['nama_orderan_pendek'],
        //     'no_so' =>$data['surat_order'],
        //     'bw' =>$data['bw'],
        //     'hal_2' =>$data['hal_2'],
        //     'so_keterangan' =>$data['keterangan']
        // );
        // $this->db->insert('order',$tambah_so);

        // // tambah bagian ctcp
        $tambah_ctcp = array(
            'ctcp_cover_1' =>$data['ctcp_cover_1'],
            'ctcp_isi_1' =>$data['ctcp_isi_1'],
            'plat_cover_1' =>$data['plat_cover_1'],
            'plat_isi_1' =>$data['plat_isi_1'],
            'ctcp_cover_2' =>$data['ctcp_cover_2'],
            'ctcp_isi_2' =>$data['ctcp_isi_2'],
            'plat_cover_2' =>$data['plat_cover_2'],
            'plat_isi_2' =>$data['plat_isi_2'],
            'ctcp_cover_3' =>$data['ctcp_cover_3'],
            'ctcp_isi_3' =>$data['ctcp_isi_3'],
            'plat_cover_3' =>$data['plat_cover_3'],
            'plat_isi_3' =>$data['plat_isi_3']
        );
        $this->db->insert('ctcp',$tambah_ctcp);

        // // tambah bagian kertas
        // $tambah_kertas = array(
        //     'kertas_cover_1' =>$data['kertas_cover_1'],
        //     'kertas_isi_1' =>$data['kertas_isi_1'],
        //     'ukuran_kertas_cover_1' =>$data['ukuran_kertas_cover_1'],
        //     'ukuran_kertas_isi_1' =>$data['ukuran_kertas_isi_1'],
        //     'jumlah_kertas_cover_1' =>$data['jumlah_kertas_cover_1'],
        //     'jumlah_kertas_isi_1' =>$data['jumlah_kertas_isi_1'],
        //     'kertas_cover_2' =>$data['kertas_cover_2'],
        //     'kertas_isi_2' =>$data['kertas_isi_2'],
        //     'ukuran_kertas_cover_2' =>$data['ukuran_kertas_cover_2'],
        //     'ukuran_kertas_isi_2' =>$data['ukuran_kertas_isi_2'],
        //     'jumlah_kertas_cover_2' =>$data['jumlah_kertas_cover_2'],
        //     'jumlah_kertas_isi_2' =>$data['jumlah_kertas_isi_2'],
        //     'kertas_cover_3' =>$data['kertas_cover_3'],
        //     'kertas_isi_3' =>$data['kertas_isi_3'],
        //     'ukuran_kertas_cover_3' =>$data['ukuran_kertas_cover_3'],
        //     'ukuran_kertas_isi_3' =>$data['ukuran_kertas_isi_3'],
        //     'jumlah_kertas_cover_3' =>$data['jumlah_kertas_cover_3'],
        //     'jumlah_kertas_isi_3' =>$data['jumlah_kertas_isi_3']
        // );
        // $this->db->insert('kertas',$tambah_kertas);

        // // tambah bagian cetak
        // $tambah_cetak = array(
        //     'mesin_cover_1' =>$data['mesin_cover_1'],
        //     'cetak_isi_1' =>$data['cetak_isi_1'],
        //     'warna_cover_1' =>$data['warna_cover_1'],
        //     'warna_isi_1' =>$data['warna_isi_1'],
        //     'insit_cover_1' =>$data['insit_cover_1'],
        //     'warna_cetak_1' =>$data['warna_cetak_1'],
        //     'insit_isi_2' =>$data['insit_isi_2'],
        //     'mesin_cover_2' =>$data['mesin_cover_2'],
        //     'cetak_isi_2' =>$data['cetak_isi_2'],
        //     'warna_cover_2' =>$data['warna_cover_2'],
        //     'warna_isi_2' =>$data['warna_isi_2'],
        //     'insit_cover_2' =>$data['insit_cover_2'],
        //     'warna_cetak_2' =>$data['warna_cetak_2'],
        //     'insit_isi_2' =>$data['insit_isi_2'],
        //     'mesin_cover_3' =>$data['mesin_cover_3'],
        //     'cetak_isi_3' =>$data['cetak_isi_3'],
        //     'warna_cover_3' =>$data['warna_cover_3'],
        //     'warna_isi_3' =>$data['warna_isi_3'],
        //     'insit_cover_3' =>$data['insit_cover_3'],
        //     'warna_cetak_3' =>$data['warna_cetak_3'],
        //     'insit_isi_3' =>$data['insit_isi_3']
        // );
        // $this->db->insert('cetak',$tambah_cetak);

        // // tambah bagian finishing
        // $tambah_finishing = array(
        //     'finishing_cover_doff' =>$data['finishing_cover_doff'],
        //     'finishing_cover_emboss' =>$data['finishing_cover_emboss'],
        //     'finishing_cover_glossy' =>$data['finishing_cover_glossy'],
        //     'finishing_cover_hot_print' =>$data['finishing_cover_hot_print'],
        //     'finishing_cover_spot' =>$data['finishing_cover_spot'],
        //     'finishing_cover_uvi' =>$data['finishing_cover_uvi'],
        //     'finishing_isi_lipat' =>$data['finishing_isi_lipat'],
        //     'finishing_isi_susun' =>$data['finishing_isi_susun'],
        //     'finishing_akhir_bending' =>$data['finishing_akhir_bending'],
        //     'finishing_akhir_hard_cover' =>$data['finishing_akhir_hard_cover'],
        //     'finishing_akhir_jahit_benang' =>$data['finishing_akhir_jahit_benang'],
        //     'finishing_akhir_jahit_kawat' =>$data['finishing_akhir_jahit_kawat'],
        //     'finishing_akhir_pond' =>$data['finishing_akhir_pond'],
        //     'finishing_akhir_spiral' =>$data['finishing_akhir_spiral'],
        //     'keterangan_finishing_cover' =>$data['keterangan_finishing_cover'],
        //     'keterangan_finishing_isi' =>$data['keterangan_finishing_isi'],
        //     'keterangan_finishing_akhir' =>$data['keterangan_finishing_akhir']
        // );
        // $this->db->insert('cetak',$tambah_finishing);
    }

	

}