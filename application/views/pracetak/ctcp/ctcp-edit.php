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
            <form action="<?=site_url('')?>" method="post">        
                <div class="row">
                <?php foreach($ctcp as $s => $row) {?>  
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
                    <div class="col-md-2">
                        <br><input type="text" class="form-control" name="finishing_akhir" placeholder="Finishing Akhir" required>
                    </div>
                </div>
                <br><hr><br>
                <div class="row">
                    <div class="col-md-3" align="center">
                        <label class="form-label">Nama Operator</label>
                    </div>
                    <div class="col-md-3">
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
                            <input class="form-check-input" type="checkbox" value="CTCP Cover">
                            <label class="form-check-label" for="flexCheckDefault">CTCP Cover</label><br>
                            <input class="form-check-input" type="checkbox" value="Khusus">
                            <label class="form-check-label" for="flexCheckDefault">Khusus</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Total Plat Isi</label>
                    </div>
                    <div class="col-md-1">
                        <input type="number" class="form-control" name="total_plat_cover" required>
                    </div>
                    <div class="col-md-3" align="left">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Imposisi isi">
                            <label class="form-check-label" for="flexCheckDefault">Imposisi Isi</label><br>
                            <input class="form-check-input" type="checkbox" value="CTCP isi">
                            <label class="form-check-label" for="flexCheckDefault">CTCP Isi</label>
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
                                <div class="col-md-3" align="center">
                                    <label class="form-label">Mesin</label>
                                </div>
                                <div class="col-md-3">
                                    <select name="cover1mesin1" class="form-select form-control" disabled>
                                        <option disabled selected></option>
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
                                    <input type="number" class="form-control" name="jumlahplatecover1" disabled>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label">Rincian CTCP</label>
                                        </div>
                                    </div>
                                    <div class="row" align="center">
                                        <div class="col">
                                            <label class="form-label">Plate</label>
                                            <input type="number" class="form-control" name="cover1plat1" disabled><br>
                                            <input type="number" class="form-control" name="cover1plat2" disabled><br>
                                            <input type="number" class="form-control" name="cover1plat3" disabled>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Set</label>
                                            <input class="form-control" name="cover1set1" value="p/w" disabled><br>
                                            <input class="form-control" name="cover1set2" value="p/w" disabled><br>
                                            <input class="form-control" name="cover1set3" value="p/w" disabled>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Lbr.Cetak</label>
                                            <input class="form-control" name="cover1lbrcetak1" value="s/2" disabled=""><br>
                                            <input class="form-control" name="cover1lbrcetak2" value="s/2" disabled=""><br>
                                            <input class="form-control" name="cover1lbrcetak3" value="s/2" disabled="">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Up</label>
                                            <input type="number" class="form-control" name="cover1up1" disabled><br>
                                            <input type="number" class="form-control" name="cover1up2" disabled><br>
                                            <input type="number" class="form-control" name="cover1up3" disabled>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Warna</label>
                                            <input type="number" class="form-control" name="cover1warna1" disabled><br>
                                            <input type="number" class="form-control" name="cover1warna2" disabled><br>
                                            <input type="number" class="form-control" name="cover1warna3" disabled>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Status</label>
                                            <select name="cover1status1" class="form-select form-control">
                                        <option disabled selected></option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                            </select><br>
                                            <select name="cover1status2" class="form-select form-control">
                                        <option disabled selected></option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                            </select><br>
                                            <select name="cover1status3" class="form-select form-control">
                                        <option disabled selected></option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Keterangan</label>
                                            <input type="text" class="form-control" name="cover1keterangan1" disabled><br>
                                            <input type="text" class="form-control" name="cover1keterangan2" disabled><br>
                                            <input type="text" class="form-control" name="cover1keterangan3" disabled>
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
                                    <select name="isi1mesin1" class="form-select form-control" disabled>
                                        <option disabled selected></option>
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
                                    <input type="number" class="form-control" name="jumlahplateisi1" disabled>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label">Rincian CTCP</label>
                                        </div>
                                    </div>
                                    <div class="row" align="center">
                                        <div class="col">
                                            <label class="form-label">Plate</label>
                                            <input type="number" class="form-control" name="isi1plat1" disabled><br>
                                            <input type="number" class="form-control" name="isi1plat2" disabled><br>
                                            <input type="number" class="form-control" name="isi1plat3" disabled>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Set</label>
                                            <input class="form-control" name="isi1set1" value="p/w" disabled><br>
                                            <input class="form-control" name="isi1set2" value="p/w" disabled><br>
                                            <input class="form-control" name="isi1set3" value="p/w" disabled>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Lbr.Cetak</label>
                                            <input class="form-control" name="isi1lbrcetak1" value="s/2" disabled=""><br>
                                            <input class="form-control" name="isi1lbrcetak2" value="s/2" disabled=""><br>
                                            <input class="form-control" name="isi1lbrcetak3" value="s/2" disabled="">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Up</label>
                                            <input type="number" class="form-control" name="isi1up1" disabled><br>
                                            <input type="number" class="form-control" name="isi1up2" disabled><br>
                                            <input type="number" class="form-control" name="isi1up3" disabled>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Warna</label>
                                            <input type="number" class="form-control" name="isi1warna1" disabled><br>
                                            <input type="number" class="form-control" name="isi1warna2" disabled><br>
                                            <input type="number" class="form-control" name="isi1warna3" disabled>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Status</label>
                                            <select name="isi1status1" class="form-select form-control">
                                        <option disabled selected></option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                            </select><br>
                                            <select name="isi1status2" class="form-select form-control">
                                        <option disabled selected></option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                            </select><br>
                                            <select name="isi1status3" class="form-select form-control">
                                        <option disabled selected></option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Keterangan</label>
                                            <input type="text" class="form-control" name="isi1keterangan1" disabled><br>
                                            <input type="text" class="form-control" name="isi1keterangan2" disabled><br>
                                            <input type="text" class="form-control" name="isi1keterangan3" disabled>
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
                                <div class="col-md-3" align="center">
                                    <label class="form-label">Mesin</label>
                                </div>
                                <div class="col-md-3">
                                    <select name="cover2mesin1" class="form-select form-control">
                                        <option disabled selected></option>
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
                                            <label class="form-label">Rincian CTCP</label>
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
                                            <input class="form-control" name="cover2set1" value="p/w" disabled><br>
                                            <input class="form-control" name="cover2set2" value="p/w" disabled><br>
                                            <input class="form-control" name="cover2set3" value="p/w" disabled>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Lbr.Cetak</label>
                                            <input class="form-control" name="cover2lbrcetak1" value="s/2" disabled=""><br>
                                            <input class="form-control" name="cover2lbrcetak2" value="s/2" disabled=""><br>
                                            <input class="form-control" name="cover2lbrcetak3" value="s/2" disabled="">
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
                                        <option disabled selected></option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                            </select><br>
                                            <select name="cover2status2" class="form-select form-control">
                                        <option disabled selected></option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                            </select><br>
                                            <select name="cover2status3" class="form-select form-control">
                                        <option disabled selected></option>
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
                                        <option disabled selected></option>
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
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label">Rincian CTCP</label>
                                        </div>
                                    </div>
                                    <div class="row" align="center">
                                        <div class="col">
                                            <label class="form-label">Plate</label>
                                            <input type="number" class="form-control" name="isi2plat1"><br>
                                            <input type="number" class="form-control" name="isi2plat2"><br>
                                            <input type="number" class="form-control" name="isi2plat3">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Set</label>
                                            <input class="form-control" name="isi2set1" value="p/w" disabled><br>
                                            <input class="form-control" name="isi2set2" value="p/w" disabled><br>
                                            <input class="form-control" name="isi2set3" value="p/w" disabled>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Lbr.Cetak</label>
                                            <input class="form-control" name="isi2lbrcetak1" value="s/2" disabled=""><br>
                                            <input class="form-control" name="isi2lbrcetak2" value="s/2" disabled=""><br>
                                            <input class="form-control" name="isi2lbrcetak3" value="s/2" disabled="">
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
                                        <option disabled selected></option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                            </select><br>
                                            <select name="isi2status2" class="form-select form-control">
                                        <option disabled selected></option>
                                                <option value="GP">GP</option>
                                                <option value="BLK">BLK</option>
                                                <option value="BLG">BLG</option>
                                            </select><br>
                                            <select name="isi2status3" class="form-select form-control">
                                        <option disabled selected></option>
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
                </div>
                <?php } ?>
                </form>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col">
                                <div class="card-body p-3 mb-2 bg-light text-dark">
                                    <br><br>
                                    <form action="<?=site_url('pracetak/ctcp/tambah_ctcp')?>" method="post">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label">Tanggal Out CTCP Cover</label>
                                            <br>
                                            <input type="hidden" name="id_order" value="<?=$row->id_order?>">
                                            <input type="date" class="form-control" name="tanggal_out_ctcp_cover" required>
                                            <br><label class="form-label">Tanggal Out CTCP Isi</label>
                                            <div class="row">
                                                <div class="col-md-3">Ke 1 </div>
                                                <div class="col-md-9"><input type="date" class="form-control" name="tanggal_out_ctcp_isi1" required></div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-3">Ke 2 </div>
                                                <div class="col-md-9"><input type="date" class="form-control" name="tanggal_out_ctcp_isi1" required></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row" align="center">
                                                <div class="col-md-12">
                                                    <label class="form-label">Plate Gagal</label>
                                                </div>
                                            </div><br>
                                            <div class="row" align="center">
                                                <div class="col-md-6">
                                                    Plate
                                                </div>
                                                <div class="col-md-6">
                                                    Mesin
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="number" class="form-control" name="plate_gagal1" required>
                                                </div>
                                                <div class="col-md-6">
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
                                                <div class="col-md-6">
                                                    <input type="number" class="form-control" name="plate_gagal2" required>
                                                </div>
                                                <div class="col-md-6">
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
                                                <div class="col-md-6">
                                                    <input type="number" class="form-control" name="plate_gagal3" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <select name="mesin_gagal3" class="form-select form-control">
                                                        <option ></option>
                                                        <option value="102">102</option>
                                                        <option value="74">74</option>
                                                        <option value="72">72</option>
                                                        <option value="Tokko">Tokko</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                        <div class="col-md-4">
                                            <textarea name="catatan_imposisi" class="form-control" placeholder="catatan" name="catatan_imposisi" style="height: 240px;"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-6" align="left">
                                <button type="submit" name="tambah_ctcp" class="btn btn-success">Simpan</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                            <div class="col-md-6" align="right">
                                <a href="<?=site_url()?>pracetak/Ctcp" class="btn btn-default">Print</a>
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
                            <div class="col">
                                <div class="card-body p-3 mb-2 bg-light text-dark">
                                    <div class="row">
                                        <div class="col-md-3" align="center">
                                            <label class="form-label">Mesin</label>
                                        </div>
                                        <div class="col-md-3">
                                            <select name="isi3mesin1" class="form-select form-control">
                                                <option disabled selected></option>
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
                                                    <label class="form-label">Rincian CTCP</label>
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
                                                    <input class="form-control" name="isi3set1" value="p/w" disabled><br>
                                                    <input class="form-control" name="isi3set2" value="p/w" disabled><br>
                                                    <input class="form-control" name="isi3set3" value="p/w" disabled>
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Lbr.Cetak</label>
                                                    <input class="form-control" name="isi3lbrcetak1" value="s/2" disabled=""><br>
                                                    <input class="form-control" name="isi3lbrcetak2" value="s/2" disabled=""><br>
                                                    <input class="form-control" name="isi3lbrcetak3" value="s/2" disabled="">
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
                                                <option disabled selected></option>
                                                        <option value="GP">GP</option>
                                                        <option value="BLK">BLK</option>
                                                        <option value="BLG">BLG</option>
                                                    </select><br>
                                                    <select name="isi3status2" class="form-select form-control">
                                                <option disabled selected></option>
                                                        <option value="GP">GP</option>
                                                        <option value="BLK">BLK</option>
                                                        <option value="BLG">BLG</option>
                                                    </select><br>
                                                    <select name="isi3status3" class="form-select form-control">
                                                <option disabled selected></option>
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