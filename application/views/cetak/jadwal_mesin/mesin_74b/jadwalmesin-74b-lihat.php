<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>CETAK</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
        <?php foreach($jm as $s => $row) {?> 
          <h3 class="card-title coba">SPK ORDER [<label><?= $row->nomor_so; ?></label>]</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <br>Tanggal Buat SPK
                <br><label class="form-label"><?= $row->tanggal_buat_spk; ?></label>
              </div>
              <div class="col-md-4">
                <br>Tanggal Masuk
                <br><label class="form-label"><?= $row->tanggal_masuk; ?></label>
              </div>
              <div class="col-md-4">
                <br>Deadline
                <br><label class="form-label"><?= $row->deadline; ?></label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <br>Nama Pemesan
                <br><label class="form-label"><?= $row->nama_pemesan; ?></label>
              </div>
              <div class="col-md-4">
                <br>Nama Orderan
                <br><label class="form-label"><?= $row->nama_orderan; ?></label>
              </div>
              <div class="col-md-4">
                <br>Jenis Cetakan
                <br><label class="form-label"><?= $row->jenis_cetakan; ?></label>
              </div>
            </div>
          

            <div class="card" style="background: #A9A9A9">
              <div class="row" align="center">
                <div class="col-md-4">
                  <div class="card-header text-center">
                    <b>SPK CETAK</b>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card-header text-center">
                    <b>SPK KERTAS DAN POTONG</b>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card-header text-center">
                    <b>WARNA DAN PROSES CETAK</b>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="row" style="background: #8683FC;border-radius: 3px;padding-top: 5px;">
                  <div class="col-md-1"></div>
                  <div class="col-sm-5">
                    Mesin Cetak
                  </div>
                  <div class="col-md-6">
                    <label><?= $row->nama_mesin; ?></label>
                  </div>
                </div>
                <div class="row" style="padding-top: 5px;">
                  <div class="col-md-1"></div>
                  <div class="col-sm-5">
                    Ukuran Kertas
                  </div>
                  <div class="col-md-6">
                    <label>dari db</label>
                  </div>
                </div>
                <div class="row" style="padding-top: 5px;">
                  <div class="col-md-1"></div>
                  <div class="col-sm-5">
                    Jumlah Plate
                  </div>
                  <div class="col-md-6">
                    <label><?php if($row->jenis_cetakan == "Cover"){?> 
                    <?=$row->total_plat_cover;?>
                    <?php } else if ($row->jenis_cetakan == "Isi"){?>
                    <?= $row->total_plat_isi;?>
                    <?php } ?></label>
                  </div>
                </div>
                <div class="row" style="background: #8683FC;border-radius: 3px;padding-top: 5px;">
                  <div class="col-md-1"></div>
                  <div class="col-sm-5">
                    Jumlah Cetak
                  </div>
                  <div class="col-md-6">
                    <label><?= $row->jumlah_cetak; ?></label>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row" style="padding-top: 5px;">
                  <div class="col-md-1"></div>
                  <div class="col-sm-5">
                    Jenis Kertas
                  </div>
                  <div class="col-md-6">
                    <label>
                    <?php if($row->jenis_cetakan == "Cover"){ ?>
                  <?php echo $row->jenis_kertas_cover_1!=null && $row->jenis_kertas_cover_1!='-'? "".$row->jenis_kertas_cover_1."<br>": "" ?>
                  <?php echo $row->jenis_kertas_cover_2!=null && $row->jenis_kertas_cover_2!='-'? "".$row->jenis_kertas_cover_2."<br>": "" ?>
                  <?php echo $row->jenis_kertas_cover_3!=null && $row->jenis_kertas_cover_3!='-'? "".$row->jenis_kertas_cover_3."<br>": "" ?>
                  <?php } else if ($row->jenis_cetakan == "Isi"){?>
                    <?php echo $row->jenis_kertas_isi_1!=null && $row->jenis_kertas_isi_1!='-'? "".$row->jenis_kertas_isi_1."<br>": "" ?>
                    <?php echo $row->jenis_kertas_isi_2!=null && $row->jenis_kertas_isi_2!='-'? "".$row->jenis_kertas_isi_2."<br>": "" ?>
                    <?php echo $row->jenis_kertas_isi_3!=null && $row->jenis_kertas_isi_3!='-'? "".$row->jenis_kertas_isi_3."<br>": "" ?>
                  <?php } ?></label>
                  </div>
                </div>
                <div class="row" style="padding-top: 5px;">
                  <div class="col-md-1"></div>
                  <div class="col-sm-5">
                    Ukuran Plano
                  </div>
                  <div class="col-md-6">
                    <label><?= $row->ukuran; ?></label>
                  </div>
                </div>
                <div class="row" style="background: #8683FC;border-radius: 3px;padding-top: 5px;">
                  <div class="col-md-1"></div>
                  <div class="col-sm-5">
                    Model Potongan
                  </div>
                  <div class="col-md-6">
                    <label>
                    <?php if($row->jenis_cetakan == "Cover"){?> 
                    <?php echo $row->potong_cover_1!=null? "potong 1 : ".$row->potong_cover_1."<br>": "" ?>
                    <?php echo $row->potong_cover_2!=null? "potong 2 : ".$row->potong_cover_2."<br>": "" ?>
                    <?php echo $row->potong_cover_3!=null? "potong 3 : ".$row->potong_cover_3."<br>": "" ?>
                    <?php } else if ($row->jenis_cetakan == "Isi"){?>
                    <?php echo $row->potong_isi_1!=null? "potong 1 : ".$row->potong_isi_1."<br>": "" ?>
                    <?php echo $row->potong_isi_2!=null? "potong 2 : ".$row->potong_isi_2."<br>": "" ?>
                    <?php echo $row->potong_isi_3!=null? "potong 3 : ".$row->potong_isi_3."<br>": "" ?>
                    <?php echo $row->potong_isi_4!=null? "potong 4 : ".$row->potong_isi_4."<br>": "" ?>
                    <?php } ?></label>
                  </div>
                </div>
                <div class="row" style="padding-top: 5px;">
                  <div class="col-md-1"></div>
                  <div class="col-sm-5">
                    Jumlah Kertas
                  </div>
                  <div class="col-md-6">
                    <label><?php if($row->jenis_cetakan == "Cover"){?> 
                    <?php echo $row->jumlah_kertas_cover_1!=null && $row->jumlah_kertas_cover_1!='-'? " ".$row->jumlah_kertas_cover_1."<br>": "" ?>
                    <?php echo $row->jumlah_kertas_cover_2!=null && $row->jumlah_kertas_cover_2!='-'? " ".$row->jumlah_kertas_cover_2."<br>": "" ?>
                    <?php echo $row->jumlah_kertas_cover_3!=null && $row->jumlah_kertas_cover_3!='-'? " ".$row->jumlah_kertas_cover_3."<br>": "" ?>
                    <?php } else if ($row->jenis_cetakan == "Isi"){?>
                      <?php echo $row->jumlah_kertas_isi_1!=null && $row->jumlah_kertas_isi_1!='-'? " ".$row->jumlah_kertas_isi_1."<br>": "" ?>
                      <?php echo $row->jumlah_kertas_isi_2!=null && $row->jumlah_kertas_isi_2!='-'? " ".$row->jumlah_kertas_isi_2."<br>": "" ?>
                      <?php echo $row->jumlah_kertas_isi_3!=null && $row->jumlah_kertas_isi_3!='-'? " ".$row->jumlah_kertas_isi_3."<br>": "" ?>
                    <?php } ?></label>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row" style="padding-top: 5px;">
                  <div class="col-md-1"></div>
                  <div class="col-md-11">
                    <label>dari db</label>
                  </div>
                </div>
              </div>
            </div><br>

            <div class="card" style="background: #A9A9A9">
              <div class="row" align="center">
                <div class="col">
                  <div class="card-header text-center">
                    <b>KETERANGAN</b>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <textarea class="form-control" name="keterangan_spk" placeholder="Keterangan" style="min-height: 250px;" disabled></textarea>
              </div>
            </div><br>

            <div class="row" align="center" style="height: 150px;">
              <div class="col-md-4">
                <br>Operator Cetak
              </div>
              <div class="col-md-4">
                <br>Kasi Cetak
              </div>
              <div class="col-md-4">
                Menyetujui<br>Manajer Produksi
              </div>
            </div><br>
            <div class="row" align="center">
              <div class="col-md-1">(</div>
              <div class="col-md-2"></div>
              <div class="col-md-1">)</div>
              
              <div class="col-md-1">(</div>
              <div class="col-md-2"></div>
              <div class="col-md-1">)</div>

              <div class="col-md-1">(</div>
              <div class="col-md-2"></div>
              <div class="col-md-1">)</div>
            </div><br>
            
            <div class="row" align="right">
              <div class="col">
                <a href="<?=site_url('cetak/JadwalMesin/print_jm')?>" class="btn btn-default">Print</a>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <!-- <div class="card-footer">
          Footer
        </div> -->
        <!-- /.card-footer-->
        <?php } ?>
      </div>
      <!-- /.card -->
     
    </section>
    <!-- /.content -->