<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?=site_url()?>pracetak/Ctcp" class="btn btn-warning btn-lg">
                <i class="fa fa-chevron-left" style="font-size:18px"></i> KEMBALI
                </a>
              </li>
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li> -->
            </ol>
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
        <h3 class="card-title">Data CTCP</h3>
        

        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
        <!-- <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button> -->
        </div>
    </div>
    <div class="card-body">
        <div class="card-body">
        <?php foreach($ctcp as $s => $row) {?>  
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
                    <br>anggal Masuk
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
                        if($row->klem != null){
                            $finishing .= 'klem, ';
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
            <form action="<?=site_url('pracetak/ctcp/proses')?>" method="post">             
                <div class="row">
                    <div class="col-md-3" align="center">
                        <label class="form-label">Nama Operator</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="namaoperator1" value="<?=$row->namaoperator1?>" required>
                    </div>
                    <div class="col-md-3" align="center">
                        <label class="form-label">Nama Operator</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="namaoperator2" value="<?=$row->namaoperator2?>">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-2">
                        <label class="form-label">Total Plat Cover<br>
                        <label class="form-label">Total Plat Gagal Cover</label>
                    </div>
                    <div class="col-md-1">
                        <?=$row->total_plat_cover?><br>
                        <?=$row->total_plat_gagal_cover?>
                        <!-- <?=$row->total_plat_cover?>  TEMPAT UNTUK VARIABEL TOTAL PLAT GAGAL COVER -->

                        <!-- VARIBEL INPUTAN TOTAL PLAT COVER DAN ISI BUKAN INPUTAN MANUAL, MELAINKAN HASIL PERJUMLAHAN DARI PLAT COVER DAN PLAT ISI, TETAP DI TAMPILKAN MENGGUNAKAN TAG LABEL -->
                    </div>
                    <div class="col-md-3" align="left">
                        <div class="form-check">
                            <input type="text" name="status_imposisi_cover" value="" hidden>
                            <input class="form-check-input" type="checkbox" name="status_imposisi_cover" value="imposisi cover" disabled <?php echo $row->imposisi_status == "imposisi cover" || $row->imposisi_status == "imposisi" ?  "checked" : "" ?>>
                            <label class="form-check-label" for="flexCheckDefault">Imposisi Cover</label><br>                            
                        </div>

                        <div class="form-check">
                            <input type="text" name="status_ctcp_cover" value="" hidden>
                            <input class="form-check-input" type="checkbox" name="status_ctcp_cover" value="ctcp cover" <?php echo $row->ctcp_status == "ctcp cover" || $row->ctcp_status == "ctcp" ?  "checked" : "" ?>>
                            <label class="form-check-label" for="flexCheckDefault">CTCP Cover</label><br>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Total Plat Isi<br>
                        <label class="form-label">Total Plat Gagal Isi</label>
                    </div>
                    <div class="col-md-1">
                        <?=$row->total_plat_isi?><br>
                        <?=$row->total_plat_gagal_isi?>
                        <!-- <?=$row->total_plat_isi?>  TEMPAT UNTUK VARIABEL TOTAL PLAT GAGAL ISI -->
                        

                        <!-- VARIBEL INPUTAN TOTAL PLAT COVER DAN ISI BUKAN INPUTAN MANUAL, MELAINKAN HASIL PERJUMLAHAN DARI PLAT COVER DAN PLAT ISI, TETAP DI TAMPILKAN MENGGUNAKAN TAG LABEL -->
                    </div>
                    <div class="col-md-3" align="left">
                        <div class="form-check">
                            <input type="text" name="status_imposisi_isi" value="" hidden>
                            <input class="form-check-input" type="checkbox" name="status_imposisi_isi" value="imposisi isi" disabled <?php echo $row->imposisi_status == "imposisi isi" || $row->imposisi_status == "imposisi" ?  "checked" : "" ?>>
                            <label class="form-check-label" for="flexCheckDefault">Imposisi Isi</label><br>                            
                        </div>
                        
                        <div class="form-check">
                            <input type="text" name="status_ctcp_isi" value="" hidden>
                            <input class="form-check-input" type="checkbox" name="status_ctcp_isi" value="ctcp isi" <?php echo $row->ctcp_status == "ctcp isi" || $row->ctcp_status == "ctcp" ?  "checked" : "" ?>>
                            <label class="form-check-label" for="flexCheckDefault">CTCP Isi</label><br>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card border bg-success">
                            <div class="card-header text-center">
                                CTCP COVER 1
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border bg-info">
                        <div class="card-header text-center">
                            CTCP ISI 1
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-body p-3 mb-2 bg-light text-dark">
                            <div class="row">
                                <div class="col" align="center">
                                    <label class="form-label">Mesin</label>
                                </div>
                                <div class="col">
                                    <?php  echo $row->cover1mesin1 != "-" ?   $row->cover1mesin1  : '-' ?>
                                </div>
                                <div class="col" align="center">
                                    <label class="form-label">Plate</label>
                                </div>
                                <div class="col">
                                    <?= $row->jumlahplatecover1; ?>
                                </div>
                                <div class="col" align="center">
                                    <label class="form-label">Plate Gagal</label>
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" name="jumlahplategagalcover1" value="<?= $row->jumlahplategagalcover1; ?>">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label">Rincian Ctcp</label>
                                        </div>
                                    </div>
                                    <div class="row" align="center">
                                        <div class="col">
                                            <label class="form-label">Plate</label><br><br>
                                            <?= $row->cover1plat1; ?><br><br>
                                            <?= $row->cover1plat2; ?><br><br>
                                            <?= $row->cover1plat3; ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Set</label><br><br>
                                            <?= $row->cover1set1; ?><br><br>
                                            <?= $row->cover1set2; ?><br><br>
                                            <?= $row->cover1set3; ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Lbr.Cetak</label><br><br>
                                            <?= $row->cover1lbrcetak1; ?><br><br>
                                            <?= $row->cover1lbrcetak2; ?><br><br>
                                            <?= $row->cover1lbrcetak3; ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Up</label><br><br>
                                            <?= $row->cover1up1; ?><br><br>
                                            <?= $row->cover1up2; ?><br><br>
                                            <?= $row->cover1up3; ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Warna</label><br><br>
                                            <?= $row->cover1warna1; ?><br><br>
                                            <?= $row->cover1warna2; ?><br><br>
                                            <?= $row->cover1warna3; ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Proses</label><br><br>
                                            <?php  echo $row->cover1status1 != "-" ?   $row->cover1status1  : '-' ?><br><br>
                                            <?php  echo $row->cover1status2 != "-" ?   $row->cover1status2  : '-' ?><br><br>
                                            <?php  echo $row->cover1status3 != "-" ?   $row->cover1status3  : '-' ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Keterangan</label><br><br>
                                            <?= $row->cover1keterangan1; ?><br><br>
                                            <?= $row->cover1keterangan2; ?><br><br>
                                            <?= $row->cover1keterangan3; ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Tgl. Imposisi</label><br>
                                            <!-- <?= $row->cover1tglimposisi1; ?> -->dari db<br><br>
                                            <!-- <?= $row->cover1tglimposisi2; ?> -->dari db<br><br>
                                            <!-- <?= $row->cover1tglimposisi3; ?> -->dari db
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Tgl. CTCP</label><br><br>
                                            <input type="date" class="form-control" name="cover1tglctcp1"><br>
                                            <input type="date" class="form-control" name="cover1tglctcp2"><br>
                                            <input type="date" class="form-control" name="cover1tglctcp3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body p-3 mb-2 bg-light text-dark">
                            <div class="row">
                                <div class="col-md-2" align="center">
                                    <label class="form-label">Mesin</label>
                                </div>
                                <div class="col-md-2">
                                    <?php  echo $row->isi1mesin1 != "-" ?   $row->isi1mesin1  : '-' ?>
                                </div>
                                <div class="col-md-2" align="center">
                                    <label class="form-label">Plate</label>
                                </div>
                                <div class="col-md-2">
                                    <?= $row->jumlahplateisi1; ?>
                                </div>
                                <div class="col-md-2" align="center">
                                    <label class="form-label">Plate Gagal</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" class="form-control" name="jumlahplategagalisi1" value="<?= $row->jumlahplategagalisi1; ?>">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label">Rincian Ctcp</label>
                                        </div>
                                    </div>
                                    <div class="row" align="center">
                                        <div class="col">
                                            <label class="form-label">Plate</label><br><br>
                                            <?= $row->isi1plat1; ?><br><br>
                                            <?= $row->isi1plat2; ?><br><br>
                                            <?= $row->isi1plat3; ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Set</label><br><br>
                                            <?= $row->isi1set1; ?><br><br>
                                            <?= $row->isi1set2; ?><br><br>
                                            <?= $row->isi1set3; ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Lbr.Cetak</label><br><br>
                                            <?= $row->isi1lbrcetak1; ?><br><br>
                                            <?= $row->isi1lbrcetak2; ?><br><br>
                                            <?= $row->isi1lbrcetak3; ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Up</label><br><br>
                                            <?= $row->isi1up1; ?><br><br>
                                            <?= $row->isi1up2; ?><br><br>
                                            <?= $row->isi1up3; ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Warna</label><br><br>
                                            <?= $row->isi1warna1; ?><br><br>
                                            <?= $row->isi1warna2; ?><br><br>
                                            <?= $row->isi1warna3; ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Proses</label><br><br>
                                            <?php  echo $row->isi1status1 != "-" ?   $row->isi1status1  : '-' ?><br><br>
                                            <?php  echo $row->isi1status2 != "-" ?   $row->isi1status2  : '-' ?><br><br>
                                            <?php  echo $row->isi1status3 != "-" ?   $row->isi1status3  : '-' ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Keterangan</label><br><br>
                                            <?= $row->isi1keterangan1; ?><br><br>
                                            <?= $row->isi1keterangan2; ?><br><br>
                                            <?= $row->isi1keterangan3; ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Tgl. Imposisi</label><br>
                                            <!-- <?= $row->cover1tglimposisi1; ?> -->dari db<br><br>
                                            <!-- <?= $row->cover1tglimposisi2; ?> -->dari db<br><br>
                                            <!-- <?= $row->cover1tglimposisi3; ?> -->dari db
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Tgl. CTCP</label><br><br>
                                            <input type="date" class="form-control" name="isi1tglctcp1"><br>
                                            <input type="date" class="form-control" name="isi1tglctcp2"><br>
                                            <input type="date" class="form-control" name="isi1tglctcp3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card border bg-success">
                            <div class="card-header text-center">
                                CTCP COVER 2
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border bg-info">
                        <div class="card-header text-center">
                            CTCP ISI 2
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-body p-3 mb-2 bg-light text-dark">
                            <div class="row">
                                <div class="col-md-2" align="center">
                                    <label class="form-label">Mesin</label>
                                </div>
                                <div class="col-md-2">
                                    <?php  echo $row->cover2mesin1 != "-" ?   $row->cover2mesin1  : '-' ?>
                                </div>
                                <div class="col-md-2" align="center">
                                    <label class="form-label">Plate</label>
                                </div>
                                <div class="col-md-2">
                                    <?= $row->jumlahplatecover2; ?>
                                </div>
                                <div class="col-md-2" align="center">
                                    <label class="form-label">Plate Gagal</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" class="form-control" name="jumlahplategagalcover2" value="<?= $row->jumlahplategagalcover2; ?>">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label">Rincian Ctcp</label>
                                        </div>
                                    </div>
                                    <div class="row" align="center">
                                        <div class="col">
                                            <label class="form-label">Plate</label><br><br>
                                            <?= $row->cover2plat1; ?><br><br>
                                            <?= $row->cover2plat2; ?><br><br>
                                            <?= $row->cover2plat3; ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Set</label><br><br>
                                            <?= $row->cover2set1; ?><br><br>
                                            <?= $row->cover2set2; ?><br><br>
                                            <?= $row->cover2set3; ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Lbr.Cetak</label><br><br>
                                            <?= $row->cover2lbrcetak1; ?><br><br>
                                            <?= $row->cover2lbrcetak2; ?><br><br>
                                            <?= $row->cover2lbrcetak3; ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Up</label><br><br>
                                            <?= $row->cover2up1; ?><br><br>
                                            <?= $row->cover2up2; ?><br><br>
                                            <?= $row->cover2up3; ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Warna</label><br><br>
                                            <?= $row->cover2warna1; ?><br><br>
                                            <?= $row->cover2warna2; ?><br><br>
                                            <?= $row->cover2warna3; ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Proses</label><br><br>
                                            <?php  echo $row->cover2status1 != "-" ?   $row->cover2status1  : '-' ?><br><br>
                                            <?php  echo $row->cover2status2 != "-" ?   $row->cover2status2  : '-' ?><br><br>
                                            <?php  echo $row->cover2status3 != "-" ?   $row->cover2status3  : '-' ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Keterangan</label><br><br>
                                            <?= $row->cover2keterangan1; ?><br><br>
                                            <?= $row->cover2keterangan2; ?><br><br>
                                            <?= $row->cover2keterangan3; ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Tgl. Imposisi</label><br>
                                            <!-- <?= $row->cover1tglimposisi1; ?> -->dari db<br><br>
                                            <!-- <?= $row->cover1tglimposisi2; ?> -->dari db<br><br>
                                            <!-- <?= $row->cover1tglimposisi3; ?> -->dari db
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Tgl. CTCP</label><br><br>
                                            <input type="date" class="form-control" name="cover2tglctcp1"><br>
                                            <input type="date" class="form-control" name="cover2tglctcp2"><br>
                                            <input type="date" class="form-control" name="cover2tglctcp3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body p-3 mb-2 bg-light text-dark">
                            <div class="row">
                                <div class="col-md-2" align="center">
                                    <label class="form-label">Mesin</label>
                                </div>
                                <div class="col-md-2">
                                    <?php  echo $row->isi2mesin1 != "-" ?   $row->isi2mesin1  : '-' ?>
                                </div>
                                <div class="col-md-2" align="center">
                                    <label class="form-label">Plate</label>
                                </div>
                                <div class="col-md-2">
                                    <?= $row->jumlahplateisi2; ?>
                                </div>
                                <div class="col-md-2" align="center">
                                    <label class="form-label">Plate Gagal</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" class="form-control" name="jumlahplategagalisi2" value="<?= $row->jumlahplategagalisi2; ?>">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label">Rincian Ctcp</label>
                                        </div>
                                    </div>
                                    <div class="row" align="center">
                                        <div class="col">
                                            <label class="form-label">Plate</label><br><br>
                                            <?= $row->isi2plat1; ?><br><br>
                                            <?= $row->isi2plat2; ?><br><br>
                                            <?= $row->isi2plat3; ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Set</label><br><br>
                                            <?= $row->isi2set1; ?><br><br>
                                            <?= $row->isi2set2; ?><br><br>
                                            <?= $row->isi2set3; ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Lbr.Cetak</label><br><br>
                                            <?= $row->isi2lbrcetak1; ?><br><br>
                                            <?= $row->isi2lbrcetak2; ?><br><br>
                                            <?= $row->isi2lbrcetak3; ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Up</label><br><br>
                                            <?= $row->isi2up1; ?><br><br>
                                            <?= $row->isi2up2; ?><br><br>
                                            <?= $row->isi2up3; ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Warna</label><br><br>
                                            <?= $row->isi2warna1; ?><br><br>
                                            <?= $row->isi2warna2; ?><br><br>
                                            <?= $row->isi2warna3; ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Proses</label><br><br>
                                            <?php  echo $row->isi2status1 != "-" ?   $row->isi2status1  : '-' ?><br><br>
                                            <?php  echo $row->isi2status2 != "-" ?   $row->isi2status2  : '-' ?><br><br>
                                            <?php  echo $row->isi2status3 != "-" ?   $row->isi2status3  : '-' ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Keterangan</label>
                                            <?= $row->isi2keterangan1; ?><br><br>
                                            <?= $row->isi2keterangan2; ?><br><br>
                                            <?= $row->isi2keterangan3; ?>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Tgl. Imposisi</label><br>
                                            <!-- <?= $row->cover1tglimposisi1; ?> -->dari db<br><br>
                                            <!-- <?= $row->cover1tglimposisi2; ?> -->dari db<br><br>
                                            <!-- <?= $row->cover1tglimposisi3; ?> -->dari db
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Tgl. CTCP</label><br><br>
                                            <input type="date" class="form-control" name="isi2tglctcp1"><br>
                                            <input type="date" class="form-control" name="isi2tglctcp2"><br>
                                            <input type="date" class="form-control" name="isi2tglctcp3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col">
                                <div class="card-body p-3 mb-2 bg-light text-dark">
                                    <br><br>                                    
                                    <div class="row">
                                        <!-- <div class="col-md-6">
                                            <label class="form-label">Tanggal Out CTCP Cover</label>
                                            <br>
                                            <input type="text" name="id_order" value="<?=$row->id_order?>" hidden>
                                            <input type="date" class="form-control" name="tanggal_out_ctcp_cover" value="<?= $row->tanggal_out_ctcp_cover; ?>">
                                            <br><label class="form-label">Tanggal Out CTCP Isi</label>
                                            <div class="row">
                                                <div class="col-md-3">Ke 1 </div>
                                                <div class="col-md-9"><input type="date" class="form-control" name="tanggal_out_ctcp_isi1" value="<?= $row->tanggal_out_ctcp_isi1; ?>"></div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-3">Ke 2 </div>
                                                <div class="col-md-9"><input type="date" class="form-control" name="tanggal_out_ctcp_isi2" value="<?= $row->tanggal_out_ctcp_isi2; ?>"></div>
                                            </div>
                                        </div> -->
                                        <div class="col-md-12" >
                                            <textarea name="catatan_imposisi" class="form-control" placeholder="catatan" style="height: 240px;" disabled><?= $row->catatan_imposisi; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-6" align="left">
                                <button type="submit" name="edit" class="btn btn-success">Simpan</button>
                            </div>
                            <div class="col-md-6" align="right">
                                <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col">
                                <div class="card border bg-info">
                                    <div class="card-header text-center">
                                        CTCP ISI 3
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body p-3 mb-2 bg-light text-dark">
                                    <div class="row">
                                        <div class="col-md-2" align="center">
                                            <label class="form-label">Mesin</label>
                                        </div>
                                        <div class="col-md-2">
                                            <?php  echo $row->isi3mesin1 != "-" ?   $row->isi3mesin1  : '-' ?>
                                        </div>
                                        <div class="col-md-2" align="center">
                                            <label class="form-label">Plate</label>
                                        </div>
                                        <div class="col-md-2">
                                            <?= $row->jumlahplateisi3; ?>
                                        </div>
                                        <div class="col-md-2" align="center">
                                            <label class="form-label">Plate Gagal</label>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="number" class="form-control" name="jumlahplategagalisi3" value="<?= $row->jumlahplategagalisi3; ?>">
                                        </div>
                                    </div><br>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-label">Rincian Ctcp</label>
                                            </div>
                                        </div>
                                        <div class="row" align="center">
                                                <div class="col">
                                                    <label class="form-label">Plate</label><br><br>
                                                    <?= $row->isi3plat1; ?><br><br>
                                                    <?= $row->isi3plat2; ?><br><br>
                                                    <?= $row->isi3plat3; ?>
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Set</label><br><br>
                                                    <?= $row->isi3set1; ?><br><br>
                                                    <?= $row->isi3set2; ?><br><br>
                                                    <?= $row->isi3set3; ?>
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Lbr.Cetak</label><br><br>
                                                    <?= $row->isi3lbrcetak1; ?><br><br>
                                                    <?= $row->isi3lbrcetak2; ?><br><br><br>
                                                    <?= $row->isi3lbrcetak3; ?>
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Up</label><br><br>
                                                    <?= $row->isi3up1; ?><br><br>
                                                    <?= $row->isi3up2; ?><br><br>
                                                    <?= $row->isi3up3; ?>
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Warna</label><br><br>
                                                    <?= $row->isi3warna1; ?><br><br>
                                                    <?= $row->isi3warna2; ?><br><br>
                                                    <?= $row->isi3warna3; ?>
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Proses</label><br><br>
                                                    <?php  echo $row->isi3status1 != "-" ?   $row->isi3status1  : '-' ?><br><br>
                                                    <?php  echo $row->isi3status2 != "-" ?   $row->isi3status2  : '-' ?><br><br>
                                                    <?php  echo $row->isi3status3 != "-" ?   $row->isi3status3  : '-' ?>
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Keterangan</label><br><br>
                                                    <?= $row->isi3keterangan1; ?><br><br>
                                                    <?= $row->isi3keterangan2; ?><br><br>
                                                    <?= $row->isi3keterangan3; ?>
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Tgl. Imposisi</label><br>
                                                    <!-- <?= $row->cover1tglimposisi1; ?> -->dari db<br><br>
                                                    <!-- <?= $row->cover1tglimposisi2; ?> -->dari db<br><br>
                                                    <!-- <?= $row->cover1tglimposisi3; ?> -->dari db
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Tgl. CTCP</label><br><br>
                                                    <input type="date" class="form-control" name="isi3tglctcp1"><br>
                                                    <input type="date" class="form-control" name="isi3tglctcp2"><br>
                                                    <input type="date" class="form-control" name="isi3tglctcp3">
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
            <?php } ?>
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
<!-- /.content