<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?=site_url()?>pracetak/Imposisi" class="btn btn-warning btn-lg">
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
                            
            <?php foreach($imposisi as $s => $row) {?>  
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
                <?php } ?>

            <form action="<?=site_url('pracetak/imposisi/proses')?>" method="post">
            <input type="text" name="id_order"  value="<?php echo $row->id_order; ?>" hidden>
                <div class="row">
                    <div class="col-md-3" align="center">
                        <label class="form-label">Nama Operator</label>
                    </div>
                    <div class="col-md-3">
                      <input type="hidden" name="nomor_so" value="<?=$row->id_order?>">
                        <input type="text" class="form-control" name="namaoperator1" required>
                    </div>
                    <div class="col-md-3" align="center">
                        <label class="form-label">Nama Operator</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="namaoperator2" required>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-2">
                        <label class="form-label">Total Plat Cover</label>
                    </div>
                    <div class="col-md-1">
                        <input type="number" class="form-control" name="total_plat_cover" required>
                    </div>
                    <div class="col-md-3" align="left">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Imposisi Cover">
                            <label class="form-check-label" for="flexCheckDefault">Imposisi Cover</label><br>
                            <input class="form-check-input" type="checkbox" value="Khusus">
                            <label class="form-check-label" for="flexCheckDefault">Khusus</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Total Plat Isi</label>
                    </div>
                    <div class="col-md-1">
                        <input type="number" class="form-control" name="total_plat_isi" required>
                    </div>
                    <div class="col-md-3" align="left">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Imposisi Isi">
                            <label class="form-check-label" for="flexCheckDefault">Imposisi Isi</label>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card border bg-success">
                            <div class="card-header text-center">
                                IMPOSISI COVER 1
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border bg-info">
                        <div class="card-header text-center">
                            IMPOSISI ISI 1
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-body p-3 mb-2 bg-light text-dark">
                            <div class="row">
                                <div class="col-md-3" align="center">
                                    <label class="form-label">Mesin</label>
                                </div>
                                <div class="col-md-3">
                                    <select name="cover1mesin1" class="form-select form-control">
                                        <option ></option>
                                        <option value="102">102</option>
                                        <option value="74">74</option>
                                        <option value="72">72</option>
                                        <option value="Tokko">Tokko</option>
                                    </select>
                                </div>
                                <div class="col-md-3" align="center">
                                    <label class="form-label">Plate</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="jumlahplatecover1">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label">Rincian Imposisi</label>
                                        </div>
                                    </div>
                                    <div class="row" align="center">
                                        <div class="col">
                                            <label class="form-label">Plate</label>
                                            <input type="number" class="form-control" name="cover1plat1"><br>
                                            <input type="number" class="form-control" name="cover1plat2"><br>
                                            <input type="number" class="form-control" name="cover1plat3">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Set</label>
                                            <input class="form-control" name="cover1set1" ><br>
                                            <input class="form-control" name="cover1set2" ><br>
                                            <input class="form-control" name="cover1set3" >
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Lbr.Cetak</label>
                                            <input class="form-control" name="cover1lbrcetak1" ><br>
                                            <input class="form-control" name="cover1lbrcetak2" ><br>
                                            <input class="form-control" name="cover1lbrcetak3" >
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Up</label>
                                            <input type="number" class="form-control" name="cover1up1"><br>
                                            <input type="number" class="form-control" name="cover1up2"><br>
                                            <input type="number" class="form-control" name="cover1up3">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Warna</label>
                                            <input type="number" class="form-control" name="cover1warna1"><br>
                                            <input type="number" class="form-control" name="cover1warna2"><br>
                                            <input type="number" class="form-control" name="cover1warna3">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Status</label>
                                            <select name="cover1status1" class="form-select form-control">
                                        <option ></option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                            </select><br>
                                            <select name="cover1status2" class="form-select form-control">
                                        <option  ></option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                            </select><br>
                                            <select name="cover1status3" class="form-select form-control">
                                        <option  ></option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Keterangan</label>
                                            <input type="text" class="form-control" name="cover1keterangan1"><br>
                                            <input type="text" class="form-control" name="cover1keterangan2"><br>
                                            <input type="text" class="form-control" name="cover1keterangan3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body p-3 mb-2 bg-light text-dark">
                            <div class="row">
                                <div class="col-md-3" align="center">
                                    <label class="form-label">Mesin</label>
                                </div>
                                <div class="col-md-3">
                                    <select name="isi1mesin1" class="form-select form-control">
                                        <option  ></option>
                                        <option value="102">102</option>
                                        <option value="74">74</option>
                                        <option value="72">72</option>
                                        <option value="Tokko">Tokko</option>
                                    </select>
                                </div>
                                <div class="col-md-3" align="center">
                                    <label class="form-label">Plate</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="jumlahplateisi1">
                                </div>
                            </div><br>
                            <div class="row" align="center">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label">Rincian Imposisi</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label class="form-label">Plate</label>
                                            <input type="number" class="form-control" name="isi1plat1"><br>
                                            <input type="number" class="form-control" name="isi1plat2"><br>
                                            <input type="number" class="form-control" name="isi1plat3">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Set</label>
                                            <input class="form-control" name="isi1set1" ><br>
                                            <input class="form-control" name="isi1set2" ><br>
                                            <input class="form-control" name="isi1set3" >
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Lbr.Cetak</label>
                                            <input class="form-control" name="isi1lbrcetak1" ><br>
                                            <input class="form-control" name="isi1lbrcetak2" ><br>
                                            <input class="form-control" name="isi1lbrcetak3" >
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Up</label>
                                            <input type="number" class="form-control" name="isi1up1"><br>
                                            <input type="number" class="form-control" name="isi1up2"><br>
                                            <input type="number" class="form-control" name="isi1up3">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Warna</label>
                                            <input type="number" class="form-control" name="isi1warna1"><br>
                                            <input type="number" class="form-control" name="isi1warna2"><br>
                                            <input type="number" class="form-control" name="isi1warna3">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Status</label>
                                            <select name="isi1status1" class="form-select form-control">
                                        <option  ></option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                            </select><br>
                                            <select name="isi1status2" class="form-select form-control">
                                        <option  ></option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                            </select><br>
                                            <select name="isi1status3" class="form-select form-control">
                                        <option  ></option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Keterangan</label>
                                            <input type="text" class="form-control" name="isi1keterangan1"><br>
                                            <input type="text" class="form-control" name="isi1keterangan2"><br>
                                            <input type="text" class="form-control" name="isi1keterangan3">
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
                                IMPOSISI COVER 2
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border bg-info">
                        <div class="card-header text-center">
                            IMPOSISI ISI 2
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-body p-3 mb-2 bg-light text-dark">
                            <div class="row">
                                <div class="col-md-3" align="center">
                                    <label class="form-label">Mesin</label>
                                </div>
                                <div class="col-md-3">
                                    <select name="cover2mesin1" class="form-select form-control">
                                        <option  ></option>
                                        <option value="102">102</option>
                                        <option value="74">74</option>
                                        <option value="72">72</option>
                                        <option value="Tokko">Tokko</option>
                                    </select>
                                </div>
                                <div class="col-md-3" align="center">
                                    <label class="form-label">Plate</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="jumlahplatecover2">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label">Rincian Imposisi</label>
                                        </div>
                                    </div>
                                    <div class="row" align="center">
                                        <div class="col">
                                            <label class="form-label">Plate</label>
                                            <input type="number" class="form-control" name="cover2plat1"><br>
                                            <input type="number" class="form-control" name="cover2plat2"><br>
                                            <input type="number" class="form-control" name="cover2plat3">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Set</label>
                                            <input class="form-control" name="cover2set1" ><br>
                                            <input class="form-control" name="cover2set2" ><br>
                                            <input class="form-control" name="cover2set3" >
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Lbr.Cetak</label>
                                            <input class="form-control" name="cover2lbrcetak1" ><br>
                                            <input class="form-control" name="cover2lbrcetak2" ><br>
                                            <input class="form-control" name="cover2lbrcetak3" >
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Up</label>
                                            <input type="number" class="form-control" name="cover2up1"><br>
                                            <input type="number" class="form-control" name="cover2up2"><br>
                                            <input type="number" class="form-control" name="cover2up3">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Warna</label>
                                            <input type="number" class="form-control" name="cover2warna1"><br>
                                            <input type="number" class="form-control" name="cover2warna2"><br>
                                            <input type="number" class="form-control" name="cover2warna3">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Status</label>
                                            <select name="cover2status1" class="form-select form-control">
                                        <option  ></option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                            </select><br>
                                            <select name="cover2status2" class="form-select form-control">
                                        <option  ></option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                            </select><br>
                                            <select name="cover2status3" class="form-select form-control">
                                        <option  ></option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Keterangan</label>
                                            <input type="text" class="form-control" name="cover2keterangan1"><br>
                                            <input type="text" class="form-control" name="cover2keterangan2"><br>
                                            <input type="text" class="form-control" name="cover2keterangan3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body p-3 mb-2 bg-light text-dark">
                            <div class="row">
                                <div class="col-md-3" align="center">
                                    <label class="form-label">Mesin</label>
                                </div>
                                <div class="col-md-3">
                                    <select name="isi2mesin1" class="form-select form-control">
                                        <option  ></option>
                                        <option value="102">102</option>
                                        <option value="74">74</option>
                                        <option value="72">72</option>
                                        <option value="Tokko">Tokko</option>
                                    </select>
                                </div>
                                <div class="col-md-3" align="center">
                                    <label class="form-label">Plate</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="jumlahplateisi2">
                                </div>
                            </div><br>
                            <div class="row" align="center">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label">Rincian Imposisi</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label class="form-label">Plate</label>
                                            <input type="number" class="form-control" name="isi2plat1"><br>
                                            <input type="number" class="form-control" name="isi2plat2"><br>
                                            <input type="number" class="form-control" name="isi2plat3">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Set</label>
                                            <input class="form-control" name="isi2set1" ><br>
                                            <input class="form-control" name="isi2set2" ><br>
                                            <input class="form-control" name="isi2set3" >
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Lbr.Cetak</label>
                                            <input class="form-control" name="isi2lbrcetak1" ><br>
                                            <input class="form-control" name="isi2lbrcetak2" ><br>
                                            <input class="form-control" name="isi2lbrcetak3" >
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Up</label>
                                            <input type="number" class="form-control" name="isi2up1"><br>
                                            <input type="number" class="form-control" name="isi2up2"><br>
                                            <input type="number" class="form-control" name="isi2up3">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Warna</label>
                                            <input type="number" class="form-control" name="isi2warna1"><br>
                                            <input type="number" class="form-control" name="isi2warna2"><br>
                                            <input type="number" class="form-control" name="isi2warna3">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Status</label>
                                            <select name="isi2status1" class="form-select form-control">
                                        <option  ></option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                            </select><br>
                                            <select name="isi2status2" class="form-select form-control">
                                        <option  ></option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                            </select><br>
                                            <select name="isi2status3" class="form-select form-control">
                                        <option  ></option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Keterangan</label>
                                            <input type="text" class="form-control" name="isi2keterangan1"><br>
                                            <input type="text" class="form-control" name="isi2keterangan2"><br>
                                            <input type="text" class="form-control" name="isi2keterangan3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col">
                                <div class="card-body p-3 mb-2 bg-light text-dark">
                                    <br><br><div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label">Tanggal Imposisi Cover</label>
                                            <br><input type="date" class="form-control" name="tanggal_imposisi_cover" required>
                                            <br><label class="form-label">Tanggal Imposisi Isi</label>
                                            <br><input type="date" class="form-control" name="tanggal_imposisi_isi" required>
                                        </div>
                                        <div class="col-md-6">
                                            <br><textarea class="form-control" placeholder="catatan" name="catatan_imposisi" style="height: 150px;"></textarea>
                                        </div>
                                    </div><br><br>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-6" align="left">
                                <button type="submit" name="add" class="btn btn-success">Simpan</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                            <div class="col-md-6" align="right">
                                <a href="<?=site_url()?>pracetak/Imposisi" class="btn btn-default">Print</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col">
                                <div class="card border bg-info">
                                    <div class="card-header text-center">
                                        IMPOSISI ISI 3
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card-body p-3 mb-2 bg-light text-dark">
                                    <div class="row">
                                        <div class="col-md-3" align="center">
                                            <label class="form-label">Mesin</label>
                                        </div>
                                        <div class="col-md-3">
                                            <select name="isi3mesin1" class="form-select form-control">
                                                <option  ></option>
                                                <option value="102">102</option>
                                                <option value="74">74</option>
                                                <option value="72">72</option>
                                                <option value="Tokko">Tokko</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3" align="center">
                                            <label class="form-label">Plate</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="number" class="form-control" name="jumlahplateisi3">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class="form-label">Rincian Imposisi</label>
                                                </div>
                                            </div>
                                            <div class="row" align="center">
                                                <div class="col">
                                                    <label class="form-label">Plate</label>
                                                    <input type="number" class="form-control" name="isi3plat1"><br>
                                                    <input type="number" class="form-control" name="isi3plat2"><br>
                                                    <input type="number" class="form-control" name="isi3plat3">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Set</label>
                                                    <input class="form-control" name="isi3set1" ><br>
                                                    <input class="form-control" name="isi3set2" ><br>
                                                    <input class="form-control" name="isi3set3" >
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Lbr.Cetak</label>
                                                    <input class="form-control" name="isi3lbrcetak1" ><br>
                                                    <input class="form-control" name="isi3lbrcetak2" ><br>
                                                    <input class="form-control" name="isi3lbrcetak3" >
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Up</label>
                                                    <input type="number" class="form-control" name="isi3up1"><br>
                                                    <input type="number" class="form-control" name="isi3up2"><br>
                                                    <input type="number" class="form-control" name="isi3up3">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Warna</label>
                                                    <input type="number" class="form-control" name="isi3warna1"><br>
                                                    <input type="number" class="form-control" name="isi3warna2"><br>
                                                    <input type="number" class="form-control" name="isi3warna3">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Status</label>
                                                    <select name="isi3status1" class="form-select form-control">
                                                <option  ></option>
                                                        <option value="GP">GP</option>
                                                        <option value="BLK">BLK</option>
                                                        <option value="BLG">BLG</option>
                                                    </select><br>
                                                    <select name="isi3status2" class="form-select form-control">
                                                <option  ></option>
                                                        <option value="GP">GP</option>
                                                        <option value="BLK">BLK</option>
                                                        <option value="BLG">BLG</option>
                                                    </select><br>
                                                    <select name="isi3status3" class="form-select form-control">
                                                <option  ></option>
                                                        <option value="GP">GP</option>
                                                        <option value="BLK">BLK</option>
                                                        <option value="BLG">BLG</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Keterangan</label>
                                                    <input type="text" class="form-control" name="isi3keterangan1"><br>
                                                    <input type="text" class="form-control" name="isi3keterangan2"><br>
                                                    <input type="text" class="form-control" name="isi3keterangan3">
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