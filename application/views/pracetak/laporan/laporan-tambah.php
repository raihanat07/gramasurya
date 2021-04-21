<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <a href="<?=site_url()?>pracetak/Laporan" class="btn btn-warning btn-lg">
                    <i class="fa fa-chevron-left" style="font-size:18px"></i> KEMBALI
                </a>
            </div>
            <div class="col-sm-6" align="right">
                <a href="<?=site_url()?>pracetak/Laporan" class="btn btn-success btn-lg">
                    PRINT
                </a>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
    <div class="card-header">
        <!-- <label>SO</label> -->
        <h3 class="card-title">Data Imposisi</h3>
        

        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
        <!-- <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button> -->
        </div>
    </div>
    <div class="card-body">
        <div class="card-body">
        <?php foreach($laporan as $s => $row) {?>  
                <div class="row">
                    <div class="col-md-2" align="right">
                        <br><label class="form-label">Nomor SO</label>
                    </div>
                    <div class="col-md-2">
                        <br><input type="text" class="form-control" name="nomor_so" value="<?=$row->nomor_so?>" placeholder="Masukan Nomor SO" required>
                    </div>
                    <div class="col-md-2" align="right">
                        <br><label class="form-label">Nama Pemesan</label>
                    </div>
                    <div class="col-md-2">
                        <br><input type="text" class="form-control" name="nama_pemesan" value="<?=$row->nama_pemesan?>" placeholder="Masukan Nama Pemesan" required>
                    </div>
                    <div class="col-md-2" align="right">
                        <br><label class="form-label">Halaman</label>
                    </div>
                    <div class="col-md-2">
                        <br><input type="text" class="form-control" name="halaman" value="<?=$row->halaman?>" placeholder="Masukan Hal" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2" align="right">
                        <br><label class="form-label">Tanggal Masuk</label>
                    </div>
                    <div class="col-md-2">
                        <br><input type="date" class="form-control" name="tanggal_masuk" value="<?=$row->tanggal_masuk?>" placeholder="Tanggal Masuk" required>
                    </div>
                    <div class="col-md-2" align="right">
                        <br><label class="form-label">Nama Orderan</label>
                    </div>
                    <div class="col-md-2">
                        <br><input type="text" class="form-control" name="nama_orderan" value="<?=$row->nama_orderan?>" placeholder="Masukan Orderan" required>
                    </div>
                    <div class="col-md-2" align="right">
                        <br><label class="form-label">Oplag</label>
                    </div>
                    <div class="col-md-2">
                        <br><input type="number" class="form-control" name="oplag" value="<?=$row->oplag?>" placeholder="Masukan Oplag" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2" align="right">
                        <br><label class="form-label">Deadline</label>
                    </div>
                    <div class="col-md-2">
                        <br><input type="date" class="form-control" name="deadline" value="<?=$row->deadline?>" placeholder="Deadline" required>
                    </div>
                    <div class="col-md-2" align="right">
                        <br><label class="form-label">Ukuran</label>
                    </div>
                    <div class="col-md-2">
                        <br><input type="text" class="form-control" name="ukuran" value="<?=$row->ukuran?>" placeholder="Masukan Ukuran" required>
                    </div>
                    <div class="col-md-2" align="right">
                        <br><label class="form-label">Finishing Akhir</label>
                    </div>
                    <div class="col-md-4">
                    <br>Finsihing Akhir
                    <br><label class="form-label">
                    <?php 
                  $finishing = "";
                  if($row->bending != null){
                    $finishing .= "bending, ";
                  }
                  if($row->hard_cover != null){
                    $finishing .= 'hard cover, ';
                  }   
                  if($row->jahit_benang != null){
                    $finishing .= 'jahit benang, ';
                  } 
                  if($row->jahit_kawat != null){
                    $finishing .= 'jahit kawat, ';
                  }    
                  if($row->pond != null){
                    $finishing .= 'pond, ';
                  }   
                  if($row->spiral != null){
                    $finishing .= 'Spiral, ';
                  }
                  $finishing = rtrim($finishing, ", ");
                  echo $finishing;
                  ?>
                    </label>
                </div>
                </div>
                <br><hr><br>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="row card-body">
                                <div class="col-md-12">
                                    <label class="form-label">Tanggal Imposisi Cover</label>
                                    <br><input type="date" class="form-control" name="tanggal_imposisi_cover" value="<?=$row->ukuran?>" required>
                                    <br><label class="form-label">Tanggal Imposisi Isi</label>
                                    <br><input type="date" class="form-control" name="tanggal_imposisi_isi" value="<?=$row->ukuran?>" required>
                                </div>
                            </div>
                        </div>
                        <form action="<?=site_url('pracetak/ctcp/tambah_ctcp')?>" method="post">
                        <div class="card">
                            <div class="row card-body">
                                <div class="col-md-12">
                                    <div class="row card-body">
                                        <div class="col-md-6">
                                            <input class="form-check-input" type="checkbox" value="Imposisi Cover">
                                            <label class="form-check-label" for="flexCheckDefault">Imposisi Cover</label><br>
                                            <input class="form-check-input" type="checkbox" value="CTCP Cover">
                                            <label class="form-check-label" for="flexCheckDefault">CTCP Cover</label><br>
                                            <input class="form-check-input" type="checkbox" value="Khusus">
                                            <label class="form-check-label" for="flexCheckDefault">Khusus</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input class="form-check-input" type="checkbox" value="Imposisi Isi"  >
                                            <label class="form-check-label" for="flexCheckDefault">Imposisi Isi</label><br>
                                            <input class="form-check-input" type="checkbox" value="CTCP Cover">
                                            <label class="form-check-label" for="flexCheckDefault">CTCP Cover</label><br>
                                            <form action="<?=site_url('pracetak/laporan/proses')?>" method="post">
                                            <input class="form-check-input" type="checkbox" value="Pracetak" >
                                            <label class="form-check-label" for="flexCheckDefault">Pracetak</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="row card-body">
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card border bg-info">
                                                <div class="card-header text-center">
                                                    Plate Keluar Cover
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="card-body p-3 mb-2 bg-light text-dark">
                                                <div class="row">
                                                    <div class="col-md-6" align="center">
                                                        <label class="form-label">Plate</label>
                                                    </div>
                                                    <div class="col-md-6" align="center">
                                                        <label class="form-label">Mesin</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" align="center">
                                                        <input type="number" class="form-control" name="plate_1_keluar_cover">
                                                    </div>
                                                    <div class="col-md-6" align="center">
                                                        <select name="mesin_1_keluar_cover" class="form-select form-control">
                                                            <option></option>
                                                            <option value="102">102</option>
                                                            <option value="74">74</option>
                                                            <option value="72">72</option>
                                                            <option value="Tokko">Tokko</option>
                                                        </select>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-6" align="center">
                                                        <input type="number" class="form-control" name="plate_2_keluar_cover">
                                                    </div>
                                                    <div class="col-md-6" align="center">
                                                        <select name="mesin_2_keluar_cover" class="form-select form-control">
                                                            <option></option>
                                                            <option value="102">102</option>
                                                            <option value="74">74</option>
                                                            <option value="72">72</option>
                                                            <option value="Tokko">Tokko</option>
                                                        </select>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-6" align="center">
                                                        <input type="number" class="form-control" name="plate_3_keluar_cover">
                                                    </div>
                                                    <div class="col-md-6" align="center">
                                                        <select name="mesin_3_keluar_cover" class="form-select form-control">
                                                            <option></option>
                                                            <option value="102">102</option>
                                                            <option value="74">74</option>
                                                            <option value="72">72</option>
                                                            <option value="Tokko">Tokko</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><div class="col-md-4">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card border bg-info">
                                                <div class="card-header text-center">
                                                    Plate Keluar Isi
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="card-body p-3 mb-2 bg-light text-dark">
                                                <div class="row">
                                                    <div class="col-md-6" align="center">
                                                        <label class="form-label">Plate</label>
                                                    </div>
                                                    <div class="col-md-6" align="center">
                                                        <label class="form-label">Mesin</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" align="center">
                                                        <input type="number" class="form-control" name="plate_1_keluar_isi">
                                                    </div>
                                                    <div class="col-md-6" align="center">
                                                        <select name="mesin_1_keluar_isi" class="form-select form-control">
                                                            <option></option>
                                                            <option value="102">102</option>
                                                            <option value="74">74</option>
                                                            <option value="72">72</option>
                                                            <option value="Tokko">Tokko</option>
                                                        </select>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-6" align="center">
                                                        <input type="number" class="form-control" name="plate_2_keluar_isi">
                                                    </div>
                                                    <div class="col-md-6" align="center">
                                                        <select name="mesin_2_keluar_isi" class="form-select form-control">
                                                            <option></option>
                                                            <option value="102">102</option>
                                                            <option value="74">74</option>
                                                            <option value="72">72</option>
                                                            <option value="Tokko">Tokko</option>
                                                        </select>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-6" align="center">
                                                        <input type="number" class="form-control" name="plate_3_keluar_isi">
                                                    </div>
                                                    <div class="col-md-6" align="center">
                                                        <select name="mesin_3_keluar_isi" class="form-select form-control">
                                                            <option></option>
                                                            <option value="102">102</option>
                                                            <option value="74">74</option>
                                                            <option value="72">72</option>
                                                            <option value="Tokko">Tokko</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card border bg-info">
                                                <div class="card-header text-center">
                                                    Plate Keluar Gagal
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="card-body p-3 mb-2 bg-light text-dark">
                                                <div class="row">
                                                    <div class="col-md-6" align="center">
                                                        <label class="form-label">Plate</label>
                                                    </div>
                                                    <div class="col-md-6" align="center">
                                                        <label class="form-label">Mesin</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" align="center">
                                                        <input type="number" class="form-control" name="plate_gagal1">
                                                    </div>
                                                    <div class="col-md-6" align="center">
                                                        <select name="mesin_gagal1" class="form-select form-control">
                                                            <option></option>
                                                            <option value="102">102</option>
                                                            <option value="74">74</option>
                                                            <option value="72">72</option>
                                                            <option value="Tokko">Tokko</option>
                                                        </select>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-6" align="center">
                                                        <input type="number" class="form-control" name="plate_gagal2">
                                                    </div>
                                                    <div class="col-md-6" align="center">
                                                        <select name="mesin_gagal2" class="form-select form-control">
                                                            <option></option>
                                                            <option value="102">102</option>
                                                            <option value="74">74</option>
                                                            <option value="72">72</option>
                                                            <option value="Tokko">Tokko</option>
                                                        </select>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-6" align="center">
                                                        <input type="number" class="form-control" name="plate_gagal3">
                                                    </div>
                                                    <div class="col-md-6" align="center">
                                                        <select name="mesin_gagal3" class="form-select form-control">
                                                            <option></option>
                                                            <option value="102">102</option>
                                                            <option value="74">74</option>
                                                            <option value="72">72</option>
                                                            <option value="Tokko">Tokko</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="row card-body">
                                <div class="col-md-12">
                                    <label class="form-label">Tanggal Out CTCP Cover</label>
                                    <br><input type="date" class="form-control" name="tanggal_out_ctcp_cover" value="<?=$row->tanggal_out_ctcp_cover?>" required>
                                    <br><label class="form-label">Tanggal Out CTCP Isi</label>
                                </div>
                            </div>
                            <div class="row card-body">
                                <div class="col-md-3">Ke 1 </div>
                                <div class="col-md-9"><input type="date" class="form-control" name="tanggal_out_ctcp_isi1" value="<?=$row->tanggal_out_ctcp_isi1?>" required></div>
                            </div><br>
                            <div class="row card-body">
                                <div class="col-md-3">Ke 2 </div>
                                <div class="col-md-9"><input type="date" class="form-control" name="tanggal_out_ctcp_isi2" value="<?=$row->tanggal_out_ctcp_isi2?>" required></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?> 

                <br><hr><br>
                <div class="row" align="center">
                    <div class="col-md-3">
                        <label>Stok Plate 102</label>
                        <label>2000</label>
                    </div>
                    <div class="col-md-3">
                        <label>Stok Plate 74</label>
                        <label>4500</label>
                    </div>
                    <div class="col-md-3">
                        <label>Stok Plate 72</label>
                        <label>1000</label>
                    </div>
                    <div class="col-md-3">
                        <label>Stok Plate Paper Plate</label>
                        <label>500</label>
                    </div>
                </div>
                <br><hr><br>
                <div class="row" align="center">
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col">
                                <label>Kasi Pengadaan</label>
                            </div>
                        </div>
                        <div class="row" style="height: 100px;"></div>
                        <div class="row">
                            <div class="col-md-2"><label>(</label></div>
                            <div class="col-md-8"></div>
                            <div class="col-md-2"><label>)</label></div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col">
                                <label>Adm. 2 Pracetak</label>
                            </div>
                        </div>
                        <div class="row" style="height: 100px;"></div>
                        <div class="row">
                            <div class="col-md-2"><label>(</label></div>
                            <div class="col-md-8"></div>
                            <div class="col-md-2"><label>)</label></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col">
                                <label>Kasi Pracetak</label>
                            </div>
                        </div>
                        <div class="row" style="height: 100px;"></div>
                        <div class="row">
                            <div class="col-md-2"><label>(</label></div>
                            <div class="col-md-8"></div>
                            <div class="col-md-2"><label>)</label></div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row" align="right">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </div>
                </div>
               
        </div>
    </div>
    <!-- /.card-body -->
    <!-- <div class="card-footer">
        Footer
    </div> -->
    <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->