<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <a href="<?=site_url()?>pracetak/Laporan" class="btn btn-warning btn-lg">
                    <i class="fa fa-chevron-left" style="font-size:18px"></i> KEMBALI
                </a>
            </div>
            <!-- <div class="col-sm-6" align="right">
                <a href="<?=site_url()?>pracetak/Laporan" class="btn btn-success btn-lg">
                    PRINT
                </a>
            </div>
            <div class="col-sm-6" align="right">
                <a href="<?=site_url()?>pracetak/Laporan" class="btn btn-success btn-lg">
                    PRINT
                </a>
            </div> -->
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
     <form action="<?=site_url('pracetak/laporan/proses')?>" method="post">
        <div class="card-body">
        <?php foreach($laporan as $s => $row) {?>
           
                <div class="row">
                    <div class="col-md-4">
                        <br>Nomor SO
                        <br><label class="form-label"><?=$row->nomor_so?></label>
                    </div>
                    <div class="col-md-4">
                        <br>Nama Pemesan
                        <br><label class="form-label"><?=$row->nama_pemesan?></label>
                    </div>
                    <div class="col-md-4">
                        <br>Halaman
                        <br><label class="form-label"><?=$row->halaman?></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <br>Tanggal Masuk
                        <br><label class="form-label"><?=$row->tanggal_masuk?></label>
                    </div>
                    <div class="col-md-4">
                        <br>Nama Orderan
                        <br><label class="form-label"><?=$row->nama_orderan?></label>
                    </div>
                    <div class="col-md-4">
                        <br>Oplag
                        <br><label class="form-label"><?=$row->oplag?></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <br>Deadline
                        <br><label class="form-label"><?=$row->deadline?></label>
                    </div>
                    <div class="col-md-4">
                        <br>Ukuran
                        <br><label class="form-label"><?=$row->ukuran?></label>
                    </div>
                    <div class="col-md-4">
                        <br>Finsihing Akhir<br>
                        <label class="form-label">
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
                                    Tanggal Imposisi Cover
                                    <br><label><?=$row->tanggal_imposisi_cover?></label>
                                    <br>Tanggal Imposisi Isi
                                    <br><label><?=$row->tanggal_imposisi_isi?></label>
                                </div>
                            </div>
                        </div>
                        <form action="<?=site_url('pracetak/ctcp/tambah_ctcp')?>" method="post">
                        <div class="card">
                            <div class="row card-body">
                                <div class="col-md-12">
                                    <div class="row card-body">
                                        <div class="col-md-6">
                                            <input class="form-check-input" type="checkbox" value="Imposisi Cover" disabled>
                                            <label class="form-check-label" for="flexCheckDefault">Imposisi Cover</label><br>
                                            <input class="form-check-input" type="checkbox" value="CTCP Cover" disabled>
                                            <label class="form-check-label" for="flexCheckDefault">CTCP Cover</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input class="form-check-input" type="checkbox" value="Imposisi Isi" disabled>
                                            <label class="form-check-label" for="flexCheckDefault">Imposisi Isi</label><br>
                                            <input class="form-check-input" type="checkbox" value="CTCP Cover" disabled>
                                            <label class="form-check-label" for="flexCheckDefault">CTCP Cover</label><br>
                                            <input  type="text" name="status_laporan_pracetak" value="ctcp" hidden>
                                            <input class="form-check-input" type="checkbox" name="status_laporan_pracetak" value="pracetak" <?php echo $row->so_status == "pracetak" ?  "checked" : "" ?>  disabled>
                                            <label class="form-check-label" for="flexCheckDefault">Pracetak</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- PLAT KELUAR -->
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card border bg-info">
                                                    <div class="card-header text-center">
                                                        Plate Keluar Isi
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card border bg-info">
                                                    <div class="card-header text-center">
                                                        Cover
                                                    </div>
                                                </div>
                                            </div><br>
                                            <div class="col-md-6">
                                                <div class="card border bg-info">
                                                    <div class="card-header text-center">
                                                        Isi
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="row">
                                        <!-- PLAT GAGAL COVER -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6 text-center"><br>Plate</div>
                                                <div class="col-md-6 text-center"><br>Mesin</div>
                                            </div><hr>
                                            <div class="row" align="center">
                                                <div class="col-md-6"><label><?=$row->jumlahplatecover1?></label></div>
                                                <div class="col-md-6"><label><?php  echo $row->cover1mesin1 != "-" ?   $row->cover1mesin1  : '-' ?></label></div>
                                            </div><br>
                                            <div class="row" align="center">
                                                <div class="col-md-6"><label><?=$row->jumlahplatecover2?></label></div>
                                                <div class="col-md-6"><label><?php  echo $row->cover2mesin1 != "-" ?   $row->cover2mesin1  : '-' ?></label></div>
                                            </div>
                                        </div>
                                        <!-- PLAT GAGAL COVER -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6 text-center"><br>Plate</div>
                                                <div class="col-md-6 text-center"><br>Mesin</div>
                                            </div><hr>
                                            <div class="row" align="center">
                                                <div class="col-md-6"><label><?=$row->jumlahplateisi1?></label></div>
                                                <div class="col-md-6"><label><?php  echo $row->isi1mesin1 != "-" ?   $row->isi1mesin1  : '-' ?></label></div>
                                            </div><br>
                                            <div class="row" align="center">
                                                <div class="col-md-6"><label><?=$row->jumlahplateisi2?></label></div>
                                                <div class="col-md-6"><label><?php  echo $row->isi2mesin1 != "-" ?   $row->isi2mesin1  : '-' ?></label></div>
                                            </div><br>
                                            <div class="row" align="center">
                                                <div class="col-md-6"><label><?=$row->jumlahplateisi3?></label></div>
                                                <div class="col-md-6"><label><?php  echo $row->isi3mesin1 != "-" ?   $row->isi3mesin1  : '-' ?></label></div>
                                            </div>
                                        </div>
                                    </div><br>                                           
                                </div>
                            </div>
                        </div>
                        <!-- PLAT GAGAL -->
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card border bg-info">
                                                    <div class="card-header text-center">
                                                        Plate Keluar Gagal Isi
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card border bg-info">
                                                    <div class="card-header text-center">
                                                        Cover
                                                    </div>
                                                </div>
                                            </div><br>
                                            <div class="col-md-6">
                                                <div class="card border bg-info">
                                                    <div class="card-header text-center">
                                                        Isi
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="row">
                                        <!-- PLAT GAGAL COVER -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6 text-center"><br>Plate</div>
                                                <div class="col-md-6 text-center"><br>Mesin</div>
                                            </div><hr>
                                            <div class="row" align="center">
                                                <div class="col-md-6"><label><?=$row->jumlahplategagalcover1?></label></div>
                                                <div class="col-md-6"><label><?php  echo $row->cover1mesin1 != "-" ?   $row->cover1mesin1  : '-' ?></label></div>
                                            </div><br>
                                            <div class="row" align="center">
                                                <div class="col-md-6"><label><?=$row->jumlahplategagalcover2?></label></div>
                                                <div class="col-md-6"><label><?php  echo $row->cover2mesin1 != "-" ?   $row->cover2mesin1  : '-' ?></label></div>
                                            </div>
                                        </div>
                                        <!-- PLAT GAGAL COVER -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6 text-center"><br>Plate</div>
                                                <div class="col-md-6 text-center"><br>Mesin</div>
                                            </div><hr>
                                            <div class="row" align="center">
                                                <div class="col-md-6"><label><?=$row->jumlahplategagalisi1?></label></div>
                                                <div class="col-md-6"><label><?php  echo $row->isi1mesin1 != "-" ?   $row->isi1mesin1  : '-' ?></label></div>
                                            </div><br>
                                            <div class="row" align="center">
                                                <div class="col-md-6"><label><?=$row->jumlahplategagalisi2?></label></div>
                                                <div class="col-md-6"><label><?php  echo $row->isi2mesin1 != "-" ?   $row->isi2mesin1  : '-' ?></label></div>
                                            </div><br>
                                            <div class="row" align="center">
                                                <div class="col-md-6"><label><?=$row->jumlahplategagalisi3?></label></div>
                                                <div class="col-md-6"><label><?php  echo $row->isi3mesin1 != "-" ?   $row->isi3mesin1  : '-' ?></label></div>
                                            </div>
                                        </div>
                                    </div><br>                                           
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        Tanggal Out CTCP Cover
                                        <br><label><?=$row->tanggal_out_ctcp_cover?></label><br>
                                        <br>Tanggal Out CTCP Isi<br>
                                    </div>
                                </div>
                                <div class="row" align="center">
                                    <div class="col-md-3">Ke 1</div>
                                    <div class="col"><label><?=$row->tanggal_out_ctcp_isi1?></label></div>
                                </div>
                                <div class="row" align="center">
                                    <div class="col-md-3">Ke 2</div>
                                    <div class="col"><label><?=$row->tanggal_out_ctcp_isi2?></label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?> 

                <br><hr><br>
                <div class="row" align="center">
                    <div class="col-md-3">
                        <label>Stok Plate 102</label>
                        <!-- <label>2000</label> -->
                    </div>
                    <div class="col-md-3">
                        <label>Stok Plate 74</label>
                        <!-- <label>4500</label> -->
                    </div>
                    <div class="col-md-3">
                        <label>Stok Plate 72</label>
                        <!-- <label>1000</label> -->
                    </div>
                    <div class="col-md-3">
                        <label>Stok Plate Paper Plate</label>
                        <!-- <label>500</label> -->
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
                <div class="col-sm-6" align="left">
                <a href="<?=site_url('pracetak/Laporan/print_laporan/'.$row->id_order)?>" class="btn btn-success btn-lg">
                    PRINT
                </a>
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
<!-- /.content