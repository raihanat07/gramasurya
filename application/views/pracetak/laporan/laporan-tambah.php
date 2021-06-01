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
                    <div class="col-md-4">
                        <br>Nomor SO
                        <br><label class="form-label"><?= $row->nomor_so; ?></label>
                    </div>
                    <div class="col-md-4">
                        <br>Nama Pemesan
                        <br><label class="form-label"><?= $row->nama_pemesan; ?></label>
                    </div>
                    <div class="col-md-4">
                        <br>Halaman
                        <br><label class="form-label"><?= $row->halaman; ?></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <br>Tanggal Masuk
                        <br><label class="form-label"><?= $row->tanggal_masuk; ?></label>
                    </div>
                    <div class="col-md-4">
                        <br>Nama Orderan
                        <br><label class="form-label"><?= $row->nama_orderan; ?></label>
                    </div>
                    <div class="col-md-4">
                        <br>Oplag
                        <br><label class="form-label"><?= $row->oplag; ?></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <br>Deadline
                        <br><label class="form-label"><?= $row->deadline; ?></label>
                    </div>
                    <div class="col-md-4">
                        <br>Ukuran
                        <br><label class="form-label"><?= $row->ukuran; ?></label>
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
                </div><br>
                <hr><br>

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
                        <button type="submit" name="add" class="btn btn-success">Simpan</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </div>
                </div>
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