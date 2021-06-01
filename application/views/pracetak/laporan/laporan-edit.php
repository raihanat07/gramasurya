<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <a href="<?=site_url()?>pracetak/Laporan" class="btn btn-warning btn-lg">
                    <i class="fa fa-chevron-left" style="font-size:18px"></i> KEMBALI
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
        <h3 class="card-title">Data Laporan</h3>
        

        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
        <!-- <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button> -->
        </div>
    </div>
    <div class="card-body">
     <form action="<?=site_url('pracetak/laporan/proses')?>" method="post">
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
                

                <div class="row" align="center">
                    <div class="col">
                        <input class="form-check-input" type="checkbox" value="Imposisi Cover" disabled>
                        <label class="form-check-label" for="flexCheckDefault">Imposisi Cover</label>
                    </div>
                    <div class="col"> 
                        <input class="form-check-input" type="checkbox" value="Imposisi Isi" disabled>
                        <label class="form-check-label" for="flexCheckDefault">Imposisi Isi</label>
                    </div>
                    <div class="col">    
                        <input class="form-check-input" type="checkbox" value="CTCP Cover" disabled>
                        <label class="form-check-label" for="flexCheckDefault">CTCP Cover</label>
                    </div>
                    <div class="col"> 
                        <input class="form-check-input" type="checkbox" value="CTCP Isi" disabled>
                        <label class="form-check-label" for="flexCheckDefault">CTCP Isi</label>
                    </div>
                    <div class="col"> 
                        <input  type="text" name="status_laporan_pracetak" value="ctcp" hidden>
                        <input class="form-check-input" type="checkbox" name="status_laporan_pracetak" value="pracetak" <?php echo $row->so_status == "pracetak" ?  "checked" : "" ?>>
                        <label class="form-check-label" for="flexCheckDefault">Pracetak</label>
                    </div>
                </div><br>
                <hr><br>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card border bg-info">
                            <div class="card-header text-center">
                                COVER
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border bg-info">
                            <div class="card-header text-center">
                                ISI
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-body p-3 mb-2 bg-light text-dark"><br>
                            <div class="row" align="center">
                                <div class="col-md-6">
                                    <label>MESIN</label>
                                </div>
                                <div class="col-md-6">
                                    dari db
                                </div>
                            </div><hr>
                            <div class="row" align="center">
                                <div class="col-md-4">
                                    <label>Plat Keluar</label>
                                </div>
                                <div class="col-md-4">
                                    <label>Tgl. Imposisi</label>
                                </div>
                                <div class="col-md-4">
                                    <label>Tgl. CTCP</label>
                                </div>
                            </div>
                            <div class="row" align="center">
                                <div class="col-md-4">
                                    <br>dari db<br>
                                    <br>dari db<br>
                                    <br>dari db
                                </div>
                                <div class="col-md-4">
                                    <br>dari db<br>
                                    <br>dari db<br>
                                    <br>dari db
                                </div>
                                <div class="col-md-4">
                                    <br>dari db<br>
                                    <br>dari db<br>
                                    <br>dari db
                                </div>
                            </div><hr>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-5">
                                    <br><b>TOTAL PLAT KELUAR</b>
                                    <br><b>TOTAL PLAT GAGAL</b>
                                </div>
                                <div class="col-md-4" align="center">
                                    <br>dari db
                                    <br>dari db
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-5" align="center">
                                    <hr><b>TOTAL PLAT</b>
                                </div>
                                <div class="col-md-4" align="center">
                                    <hr>dari TPK + TPG
                                </div>
                            </div><br>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body p-3 mb-2 bg-light text-dark"><br>
                            <div class="row" align="center">
                                <div class="col-md-6">
                                    <label>MESIN</label>
                                </div>
                                <div class="col-md-6">
                                    dari db
                                </div>
                            </div><hr>
                            <div class="row" align="center">
                                <div class="col-md-4">
                                    <label>Plat Keluar</label>
                                </div>
                                <div class="col-md-4">
                                    <label>Tgl. Imposisi</label>
                                </div>
                                <div class="col-md-4">
                                    <label>Tgl. CTCP</label>
                                </div>
                            </div>
                            <div class="row" align="center">
                                <div class="col-md-4">
                                    <br>dari db<br>
                                    <br>dari db<br>
                                    <br>dari db
                                </div>
                                <div class="col-md-4">
                                    <br>dari db<br>
                                    <br>dari db<br>
                                    <br>dari db
                                </div>
                                <div class="col-md-4">
                                    <br>dari db<br>
                                    <br>dari db<br>
                                    <br>dari db
                                </div>
                            </div><hr>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-5">
                                    <br><b>TOTAL PLAT KELUAR</b>
                                    <br><b>TOTAL PLAT GAGAL</b>
                                </div>
                                <div class="col-md-4" align="center">
                                    <br>dari db
                                    <br>dari db
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-5" align="center">
                                    <hr><b>TOTAL PLAT</b>
                                </div>
                                <div class="col-md-4" align="center">
                                    <hr>dari TPK + TPG
                                </div>
                            </div><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-body p-3 mb-2 bg-light text-dark"><br>
                            <div class="row" align="center">
                                <div class="col-md-6">
                                    <label>MESIN</label>
                                </div>
                                <div class="col-md-6">
                                    dari db
                                </div>
                            </div><hr>
                            <div class="row" align="center">
                                <div class="col-md-4">
                                    <label>Plat Keluar</label>
                                </div>
                                <div class="col-md-4">
                                    <label>Tgl. Imposisi</label>
                                </div>
                                <div class="col-md-4">
                                    <label>Tgl. CTCP</label>
                                </div>
                            </div>
                            <div class="row" align="center">
                                <div class="col-md-4">
                                    <br>dari db<br>
                                    <br>dari db<br>
                                    <br>dari db
                                </div>
                                <div class="col-md-4">
                                    <br>dari db<br>
                                    <br>dari db<br>
                                    <br>dari db
                                </div>
                                <div class="col-md-4">
                                    <br>dari db<br>
                                    <br>dari db<br>
                                    <br>dari db
                                </div>
                            </div><hr>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-5">
                                    <br><b>TOTAL PLAT KELUAR</b>
                                    <br><b>TOTAL PLAT GAGAL</b>
                                </div>
                                <div class="col-md-4" align="center">
                                    <br>dari db
                                    <br>dari db
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-5" align="center">
                                    <hr><b>TOTAL PLAT</b>
                                </div>
                                <div class="col-md-4" align="center">
                                    <hr>dari TPK + TPG
                                </div>
                            </div><br>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body p-3 mb-2 bg-light text-dark"><br>
                            <div class="row" align="center">
                                <div class="col-md-6">
                                    <label>MESIN</label>
                                </div>
                                <div class="col-md-6">
                                    dari db
                                </div>
                            </div><hr>
                            <div class="row" align="center">
                                <div class="col-md-4">
                                    <label>Plat Keluar</label>
                                </div>
                                <div class="col-md-4">
                                    <label>Tgl. Imposisi</label>
                                </div>
                                <div class="col-md-4">
                                    <label>Tgl. CTCP</label>
                                </div>
                            </div>
                            <div class="row" align="center">
                                <div class="col-md-4">
                                    <br>dari db<br>
                                    <br>dari db<br>
                                    <br>dari db
                                </div>
                                <div class="col-md-4">
                                    <br>dari db<br>
                                    <br>dari db<br>
                                    <br>dari db
                                </div>
                                <div class="col-md-4">
                                    <br>dari db<br>
                                    <br>dari db<br>
                                    <br>dari db
                                </div>
                            </div><hr>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-5">
                                    <br><b>TOTAL PLAT KELUAR</b>
                                    <br><b>TOTAL PLAT GAGAL</b>
                                </div>
                                <div class="col-md-4" align="center">
                                    <br>dari db
                                    <br>dari db
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-5" align="center">
                                    <hr><b>TOTAL PLAT</b>
                                </div>
                                <div class="col-md-4" align="center">
                                    <hr>dari TPK + TPG
                                </div>
                            </div><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row" align="center">
                            <div class="col">
                                <div class="card border bg-info">
                                    <div class="card-header text-center">
                                        RINCIAN PENGGUNAAN PLAT
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3 mb-2 bg-light text-dark"><br>
                            <div class="row" align="center">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-3"><label>102</label></div>
                                        <div class="col-md-3"><label>74</label></div>
                                        <div class="col-md-3"><label>72</label></div>
                                        <div class="col-md-3"><label>TOKKO</label></div>
                                    </div>
                                </div>
                            </div><hr>
                            <div class="row" align="center">
                                <div class="col-md-2"><label>COVER</label></div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-3">dari db</div>
                                        <div class="col-md-3">dari db</div>
                                        <div class="col-md-3">dari db</div>
                                        <div class="col-md-3">dari db</div>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row" align="center">
                                <div class="col-md-2"><label>ISI<label></div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-3">dari db</div>
                                        <div class="col-md-3">dari db</div>
                                        <div class="col-md-3">dari db</div>
                                        <div class="col-md-3">dari db</div>
                                    </div>
                                </div>
                            </div><hr><br>
                            <div class="row" align="center">
                                <div class="col-md-2"><label>TOTAL</label></div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-3">dari db</div>
                                        <div class="col-md-3">dari db</div>
                                        <div class="col-md-3">dari db</div>
                                        <div class="col-md-3">dari db</div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body p-3 mb-2 bg-light text-dark"><br>
                            <div class="row" align="center">
                                <div class="col-md-6">
                                    <label>MESIN</label>
                                </div>
                                <div class="col-md-6">
                                    dari db
                                </div>
                            </div><hr>
                            <div class="row" align="center">
                                <div class="col-md-4">
                                    <label>Plat Keluar</label>
                                </div>
                                <div class="col-md-4">
                                    <label>Tgl. Imposisi</label>
                                </div>
                                <div class="col-md-4">
                                    <label>Tgl. CTCP</label>
                                </div>
                            </div>
                            <div class="row" align="center">
                                <div class="col-md-4">
                                    <br>dari db<br>
                                    <br>dari db<br>
                                    <br>dari db
                                </div>
                                <div class="col-md-4">
                                    <br>dari db<br>
                                    <br>dari db<br>
                                    <br>dari db
                                </div>
                                <div class="col-md-4">
                                    <br>dari db<br>
                                    <br>dari db<br>
                                    <br>dari db
                                </div>
                            </div><hr>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-5">
                                    <br><b>TOTAL PLAT KELUAR</b>
                                    <br><b>TOTAL PLAT GAGAL</b>
                                </div>
                                <div class="col-md-4" align="center">
                                    <br>dari db
                                    <br>dari db
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-5" align="center">
                                    <hr><b>TOTAL PLAT</b>
                                </div>
                                <div class="col-md-4" align="center">
                                    <hr>dari TPK + TPG
                                </div>
                            </div><br>
                        </div>
                    </div>
                </div>
                <?php } ?> 

                <br>
                <div class="row" align="right">
                    <div class="col-md-12">
                        <button type="submit" name="edit" class="btn btn-success">Simpan</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </div>
                </div>                
                <br>  
            </div>
        </form>
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