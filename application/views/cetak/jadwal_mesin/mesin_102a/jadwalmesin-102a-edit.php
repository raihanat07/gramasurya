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
    <?php foreach($jm as $s => $row) {?>
      <form action="<?=site_url('cetak/JadwalMesin/edit_jadwal_102a')?>" method="post"> 
      <input type="text" name="id_order"  value="<?php echo $row->id_order; ?>" hidden>
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title coba">Cetak, Edit SO [<label><?= $row->nomor_so; ?></label>]</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <div class="row"><br>
                  <div class="col-md-5">No SO</div>
                  <div class="col-md-7"><label class="form-label"><?= $row->nomor_so; ?></label></div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row"><br>
                  <div class="col-md-5">Nama Orderan</div>
                  <div class="col-md-7"><label class="form-label"><?= $row->nama_orderan; ?></label></div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row"><br>
                  <div class="col-md-5">Ukuran</div>
                  <div class="col-md-7"><label class="form-label"><?= $row->ukuran; ?></label></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="row"><br>
                  <div class="col-md-5">Tanggal Masuk</div>
                  <div class="col-md-7"><label class="form-label"><?= $row->tanggal_masuk; ?></label></div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row"><br>
                  <div class="col-md-5">Nama Pemesan</div>
                  <div class="col-md-7"><label class="form-label"><?= $row->nama_pemesan; ?></label></div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row"><br>
                  <div class="col-md-5">Halaman</div>
                  <div class="col-md-7"><label class="form-label"><?= $row->halaman; ?></label></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="row"><br>
                  <div class="col-md-5">Deadline</div>
                  <div class="col-md-7"><label class="form-label"><?= $row->deadline; ?></label></div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row"><br>
                  <div class="col-md-5">Nama Mesin</div>
                  <div class="col-md-7"><label class="form-label"><?=$row->nama_mesin?></label></div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row"><br>
                  <div class="col-md-5">Oplag</div>
                  <input type="hidden" name="oplag" value="<?=$row->oplag?>">
                  <div class="col-md-7"><label class="form-label"><?=$row->oplag?></label></div>
                </div>
              </div>
            </div><br>
            
            <div class="row">
              <div class="col-md-6">
                <label>Tanggal Pelaksanaan</label>
                <input type="date" class="form-control" name="tanggal_pelaksanaan_102a" id="tgl_102a<?= $row->id_order.$row->id_order; ?>" value="<?= $row->tanggal_pelaksanaan; ?>" placeholder="Tanggal Pelaksanaan Cover" >
              </div>
              <div class="col-md-6">
                <label>Nama Operator</label>
                <select id="inputState" class="form-select form-control" name="operator_102a" >
                                    <option value="<?php  echo $row->operator != "-" ?   $row->operator  : '-' ?>"><?php  echo $row->operator != "-" ?   $row->operator  : '-' ?></option>
                                    <option value="Roni/Ariyanto">Roni/Ariyanto</option>
                                    <option value="Anam/Rois">Anam/Rois</option>
                                    <option value="Yono/Bukori">Yono/Bukori (Crew Fajar)</option>
                                    <option value="Natiman/Feri (Crew Fajar)">Natiman/Feri (Crew Fajar)</option>
                                    <option value="Kanang/Yoga">Kanang/Yoga</option>
                                    <option value="Heru/Toro">Heru/Toro</option>
                                    <option value="Nasikin/Agus Tugio">Nasikin/Agus Tugio</option>
                                    <option value="Heri">Heri</option>
                                    <option value="Samiran">Samiran</option>
                                    <option value="-">-</option>
                                  </select>  
              </div>
            </div><br>
            <div class="row">
              <div class="col-md-6">
                <label>Target</label>
                <input type="number" class="form-control" name="target_102a" value="<?= $row->target; ?>" placeholder="Jumlah Target" >
              </div>
              <div class="col-md-6">
                <label>Jenis Lipatan</label>
                <select id="inputState" class="form-select form-control" name="jenis_cetakan_102a" >
                                  <option value="<?php  echo $row->jenis_cetakan != "-" ?   $row->jenis_cetakan  : '-' ?>"><?php  echo $row->jenis_cetakan != "-" ?   $row->jenis_cetakan  : '-' ?>   </option>
                                    <option value="-">-</option>
                                    <option value="Cover">Cover</option>
                                    <option value="Isi">Isi</option>
                                  </select>
              </div>
            </div><br>
            <div class="row">
              <div class="col-md-6">
                <label>Set</label>
                <input type="number" class="form-control" name="set_102a" value="<?= $row->set?>" placeholder="Jumlah set cover" >
              </div>
              <div class="col-md-6">
                <label>Drug</label><br>
                <input type="number" class="form-control" name="druk_102a" hidden>
                <label><?= $row->druk?></label>
              </div>
            </div><br>


            <div class="row" align="right">
              <div class="col">
                <button type="reset" class="btn btn-default">Reset</button>
                <button type="submit" name="edit" class="btn btn-success">Simpan</button>
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
      </form>
      <?php } ?>
    </section>
    <!-- /.content -->