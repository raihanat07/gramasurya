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
            <input type="text" name="id_order"  value="<?php echo $row->id_order; ?>" hidden>
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

                <form action="<?=site_url('pracetak/laporan/proses')?>" method="post"> 
                    <div class="row" align="center">
                        <div class="col">
                            <input class="form-check-input" type="checkbox" value="Imposisi Cover" disabled <?php echo $row->imposisi_status == "imposisi cover" || $row->imposisi_status == "imposisi" ?  "checked" : "" ?>>
                            <label class="form-check-label" for="flexCheckDefault">Imposisi Cover</label>
                        </div>
                        <div class="col"> 
                            <input class="form-check-input" type="checkbox" value="Imposisi Isi" disabled <?php echo $row->imposisi_status == "imposisi isi" || $row->imposisi_status == "imposisi" ?  "checked" : "" ?>>
                            <label class="form-check-label" for="flexCheckDefault">Imposisi Isi</label>
                        </div>
                        <div class="col">    
                            <input class="form-check-input" type="checkbox" value="CTCP Cover" disabled <?php echo $row->ctcp_status == "ctcp cover" || $row->ctcp_status == "ctcp" ?  "checked" : "" ?>>
                            <label class="form-check-label" for="flexCheckDefault">CTCP Cover</label>
                        </div>
                        <div class="col"> 
                            <input class="form-check-input" type="checkbox" value="CTCP Isi" disabled  <?php echo $row->ctcp_status == "ctcp isi" || $row->ctcp_status == "ctcp" ?  "checked" : "" ?>>
                            <label class="form-check-label" for="flexCheckDefault">CTCP Isi</label>
                        </div>                    
                        <div class="col">                    
                            <input  type="text" name="status_laporan_pracetak" value="" hidden>
                            <input class="form-check-input" type="checkbox" name="status_laporan_pracetak" value="pracetak" <?php echo $row->so_status == "pracetak" ?  "checked" : "" ?> disabled>
                            <label class="form-check-label" for="flexCheckDefault">Pracetak</label>
                        </div>
                    </div>
                    <hr>

                    <!-- LABEL -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card" style="padding:30px;">
                                <div class="row">
                                    <label>Tanggal Imposisi cover</label>
                                </div>
                                <div class="row" align="center">   
                                    <p align="center"><?= date('d-m-Y', strtotime( $row->cover1tglimposisi1)); ?></p>
                                </div>
                                <div class="row">
                                    <label>Tanggal Imposisi isi</label>
                                </div>
                                <div class="row" align="center">
                                    <p align="center"><?= date('d-m-Y', strtotime( $row->isi1tglimposisi1)); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="padding:10px;">
                                <!-- LABEL -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card border bg-info">
                                            <div class="card-header text-center">
                                                COVER
                                            </div>
                                        </div>
                                    </div>
                                    <?php if($row->isi1plat1 != 0) { ?>
                                    <div class="col-md-6">
                                        <div class="card border bg-info">
                                            <div class="card-header text-center">
                                                ISI
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-body p-3 mb-2 bg-light text-dark">
                                            <div class="row" align="center">
                                                <div class="col-md-4"><br>Mesin</div>
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col">Plat</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">Keluar</div>
                                                        <div class="col">Gagal</div>
                                                    </div>
                                                </div>
                                            </div><hr>
                                            <div class="row" align="center">
                                                <div class="col-md-4"><?=$row->cover1mesin1;?></div>
                                                <div class="col-md-4"><?= $row->cover1plat1+$row->cover1plat2+$row->cover1plat3; ?></div>
                                                <div class="col-md-4"><?= $row->jumlahplategagalcover1; ?></div>
                                            </div><br>
                                            <?php if($row->cover2plat1 != 0) { ?>
                                            <div class="row" align="center">
                                                <div class="col-md-4"><?=$row->cover2mesin1;?></div>
                                                <div class="col-md-4"><?= $row->cover2plat1+$row->cover2plat2+$row->cover2plat3; ?></div>
                                                <div class="col-md-4"><?= $row->jumlahplategagalcover2; ?></div>
                                            </div><br>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body p-3 mb-2 bg-light text-dark">
                                            <div class="row" align="center">
                                                <div class="col-md-4"><br>Mesin</div>
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col">Plat</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">Keluar</div>
                                                        <div class="col">Gagal</div>
                                                    </div>
                                                </div>
                                            </div><hr>
                                            <div class="row" align="center">
                                                <div class="col-md-4"><?=$row->isi1mesin1;?></div>
                                                <div class="col-md-4"><?= $row->isi1plat1+$row->isi1plat2+$row->isi1plat3; ?></div>
                                                <div class="col-md-4"><?= $row->jumlahplategagalisi1; ?></div>
                                            </div><br>
                                            <?php if($row->isi2plat1 != 0) { ?>
                                            <div class="row" align="center">
                                                <div class="col-md-4"><?=$row->isi2mesin1;?></div>
                                                <div class="col-md-4"><?= $row->isi2plat1+$row->isi2plat2+$row->isi2plat3; ?></div>
                                                <div class="col-md-4"><?= $row->jumlahplategagalisi2; ?></div>
                                            </div><br>
                                            <?php } if($row->isi3plat1 != 0) { ?>
                                            <div class="row" align="center">
                                                <div class="col-md-4"><?=$row->isi3mesin1;?></div>
                                                <div class="col-md-4"><?= $row->isi3plat1+$row->isi3plat2+$row->isi3plat3; ?></div>
                                                <div class="col-md-4"><?= $row->jumlahplategagalisi3; ?></div>
                                            </div><br>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="padding:30px;">
                                <div class="row">
                                    <label>Tanggal out CTCP cover</label>
                                </div>
                                <div class="row" align="center">
                                    <p align="center"><?= date('d-m-Y', strtotime( $row->cover1tglctcp1)); ?></p>
                                </div>
                                <div class="row">
                                    <label>Tanggal out CTCP isi</label>
                                </div>
                                <div class="row" align="center">
                                    <p align="center"><?= date('d-m-Y', strtotime( $row->isi1tglctcp1)); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <?php } ?> 
                
                <br>
                <div class="row" align="right">
                    <div class="col-md-12">
                        <button type="submit" name="edit" class="btn btn-success">Simpan</button>
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