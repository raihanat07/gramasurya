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
          <h3 class="card-title coba">Jadwal Umum</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body">
          <table id="table1" class="table table-bordered table-hover" style="font-size: 12px;">
            <thead>
            <tr align="center">
              <td rowspan="2" style="padding-top: 30px;">Nomor SO</td>
              <td rowspan="2" style="padding-top: 30px;">Tanggal Masuk</td>
              <td rowspan="2" style="padding-top: 30px;">Deadline</td>
              <td rowspan="2" style="padding-top: 30px;">Nama Pemesan</td>
              <td rowspan="2" style="padding-top: 30px;">Nama Order</td>
              <td rowspan="2" style="padding-top: 30px;">Ukuran</td>
              <td rowspan="2" style="padding-top: 30px;">Oplag</td>
              <td rowspan="2" style="padding-top: 30px;">Jumlah Kertas</td>
              <td colspan="2">Cover</td>
              <td colspan="2">Isi</td>
              <td rowspan="2" style="padding-top: 30px;">Status</td>
              <td rowspan="2" style="padding-top: 30px;">Actions</td>
            </tr>
            <tr>
              <td>Mesin</td>
              <td>Tanggal</td>
              <td>Mesin</td>
              <td>Tanggal</td>
            </tr>
            </thead>
            <?php foreach($ju as $s => $row) {?>
            <tr>
            <td align="center"><?= $row->nomor_so; ?></td>
              <td><?= $row->tanggal_masuk; ?></td>
              <td style="color: red"><?= $row->deadline; ?></td>
              <td><?= $row->nama_pemesan; ?></td>
              <td><?= $row->nama_orderan; ?></td>
              <td><?= $row->ukuran; ?></td>
              <td><?= $row->oplag; ?></td>
              <td><?= $row->total_kertas; ?></td>

              <?php if($row->mesin_cover !=null) {?>
                <td><?= $row->mesin_cover ?></td>
              <?php } else {?> <td></td> <?php } ?>

              <?php if($row->tanggal_pelaksanaan_cover !=null) {?>
                <td><?= $row->tanggal_pelaksanaan_cover ?></td>
              <?php } else {?> <td></td> <?php } ?>

              <?php if($row->mesin_isi !=null) {?>
                <td><?= $row->mesin_isi ?></td>
              <?php } else {?> <td></td> <?php } ?>

              <?php if($row->tanggal_pelaksanaan_isi !=null) {?>
                <td><?= $row->tanggal_pelaksanaan_isi ?></td>
              <?php } else {?> <td></td> <?php } ?>

              <td><?= $row->so_status; ?></td>
              <td align="center">
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal<?= $row->id_order ?>">
                  <i class="fa fa-plus" style="font-size:14px"></i> JADWAL
                </button>
              </td>
              <?php } ?>
            </tr>
          </table>
          
          <?php foreach($ju as $s => $row) {?>  
          <form action="<?=site_url('cetak/JadwalUmum/proses')?>" method="post">

          <input type="text" name="id_order"  value="<?php echo $row->id_order; ?>" hidden>
  
    
          <div id="myModal<?= $row->id_order ?>" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
              <!-- konten modal-->
              <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                  
                  <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                </div>
                <!-- body modal -->
                <div class="card">
                  <div class="card-header" align="center">
                    <ul class="nav nav-pills row">
                      <li class="nav-item col"><a class="nav-link btn-outline-success active" href="#cover<?= $row->id_order; ?>" data-toggle="tab" style="min-width: 200px;">COVER</a></li>
                      <li class="nav-item col"><a class="nav-link btn-outline-success" href="#isi<?= $row->id_order; ?>" data-toggle="tab" style="min-width: 200px;">ISI</a></li>
                    </ul>
                  </div><!-- /.card-header -->
                  
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="tab-pane active" id="cover<?= $row->id_order; ?>">
                        <h4><label><?= $row->nomor_so; ?></label></h4>
                        <div class="row">
                          <div class="col-sm-6">
                            <br>Tanggal Masuk
                            <br><label><?= $row->tanggal_masuk; ?></label>
                          </div>
                          <div class="col-sm-6" style="color: red;">
                            <br>Deadline
                            <br><label><?= $row->deadline; ?></label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">
                            <br>Nama Pemesan
                            <br><label><?= $row->nama_pemesan; ?></label>
                          </div>
                          <div class="col-sm-4">
                            <br>Nama Order
                            <br><label><?= $row->nama_orderan; ?></label>
                          </div>
                          <div class="col-sm-4">
                            <br>Ukuran
                            <br><label><?= $row->ukuran; ?></label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">
                            <br>Finishing<br>
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
                                if($row->klem != null){
                                  $finishing .= 'Klem, ';
                                }
                                $finishing = rtrim($finishing, ", ");
                                echo $finishing;
                              ?>
                            </label>
                          </div>
                          <div class="col-sm-4">
                            <br>Oplag
                            <br><label><?= $row->oplag; ?></label>
                          </div>
                        </div>
                        <hr><br>
                        <h4><label>Jadwal Cover</label></h4>
                        <div class="row">                        
                          <div class="col-md-6">
                            Tanggal Pelaksanaan<br>
                                <?php if($row->id_jadwal_cetak == null) {?>                                     
                                    <input type="date" class="form-control" name="tanggal_pelaksanaan_cover" placeholder="Tanggal Pelaksanaan Cover" required>
                                <?php }else{ ?>                                  
                                    <input type="date" class="form-control" name="tanggal_pelaksanaan_cover" value="<?= $row->tanggal_pelaksanaan_cover; ?>" placeholder="Tanggal Pelaksanaan Cover" required>
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            Operator<br>
                                <?php if($row->id_jadwal_cetak == null) {?>                                     
                                  <input type="text" class="form-control" name="operator_cover" placeholder="Operator Cover" required>
                                <?php }else{ ?>  
                                  <input type="text" class="form-control" name="operator_cover" value="<?= $row->operator_cover; ?>" placeholder="Operator Cover" required>                                
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Target<br>
                              <?php if($row->id_jadwal_cetak == null) {?>                                     
                                <input type="number" class="form-control" name="target_cover" placeholder="Jumlah Target" required>
                                <?php }else{ ?>  
                                  <input type="number" class="form-control" name="target_cover" value="<?= $row->target_cover; ?>" placeholder="Jumlah Target" required>
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                          
                            <br>Mesin<br>
                            <?php if($row->id_jadwal_cetak == null) {?>                                     
                                  <select id="inputState" class="form-select form-control" name="mesin_cover" >
                                    <option value="-">-</option>
                                    <option value="Oliver 58 2w">Oliver 58 2w</option>
                                    <option value="Oliver 72 1w">Oliver 72 1w</option>
                                    <option value="SM 74 4W - A">SM 74 4W - A</option>
                                    <option value="SM 74 4W - B">SM 74 4W - B</option>
                                    <option value="SM 102 2wP - A">SM 102 2wP - A</option>
                                    <option value="SM 102 2wP - B">SM 102 2wP - B</option>
                                    <option value="Fotocopy">Fotocopy</option>
                                    <option value="Tokko">Tokko</option>
                                    <option value="Print banner">Print banner</option>
                                    <option value="Print digital">Print digital</option>
                                  </select>
                                <?php }else{ ?>                                  
                                  <select id="inputState" class="form-select form-control" name="mesin_cover" >
                                  <option value="<?php  echo $row->mesin_cover != "-" ?   $row->mesin_cover  : '-' ?>"><?php  echo $row->mesin_cover != "-" ?   $row->mesin_cover  : '-' ?>   </option>
                                    <option value="Oliver 58 2w">Oliver 58 2w</option>
                                    <option value="Oliver 72 1w">Oliver 72 1w</option>
                                    <option value="SM 74 4W - A">SM 74 4W - A</option>
                                    <option value="SM 74 4W - B">SM 74 4W - B</option>
                                    <option value="SM 102 2wP - A">SM 102 2wP - A</option>
                                    <option value="SM 102 2wP - B">SM 102 2wP - B</option>
                                    <option value="Fotocopy">Fotocopy</option>
                                    <option value="Tokko">Tokko</option>
                                    <option value="Print banner">Print banner</option>
                                    <option value="Print digital">Print digital</option>
                                    <option value="-">-</option>
                                  </select>
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Druk<br>
                            <!-- <input type="number" class="form-control" name="druk_cover" hidden>
                            <label>otomatis = target * oplag</label> -->
                            <?php if($row->druk_cover !=null) {?>
                              <td><?= $row->druk_cover ?></td>
                            <?php } else {?> 
                              <input type="number" class="form-control" name="druk_cover" hidden>
                              <label>otomatis = target * oplag</label>
                             <?php } ?>
                          </div>
                        </div>
                        <br><hr><br>
                        <div class="row" align="right">
                          <div class="col">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                              <?php if($row->id_jadwal_cetak == null) {?>  
                            <button type="submit" class="btn btn-success" name="add">Publish</button>
                              <?php }else{ ?>
                            <button type="submit" class="btn btn-success" name="edit">Publish</button>
                              <?php } ?>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="isi<?= $row->id_order; ?>">
                        <h4><label><?= $row->nomor_so; ?></label></h4>
                        <div class="row">
                          <div class="col-sm-6">
                            <br>Tanggal Masuk
                            <br><label><?= $row->tanggal_masuk; ?></label>
                          </div>
                          <div class="col-sm-6" style="color: red;">
                            <br>Deadline
                            <br><label><?= $row->deadline; ?></label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">
                            <br>Nama Pemesan
                            <br><label><?= $row->nama_pemesan; ?></label>
                          </div>
                          <div class="col-sm-4">
                            <br>Nama Order
                            <br><label><?= $row->nama_orderan; ?></label>
                          </div>
                          <div class="col-sm-4">
                            <br>Ukuran
                            <br><label><?= $row->ukuran; ?></label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">
                            <br>Finishing<br>
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
                                if($row->klem != null){
                                  $finishing .= 'Klem, ';
                                }
                                $finishing = rtrim($finishing, ", ");
                                echo $finishing;
                              ?>
                            </label>
                          </div>
                          <div class="col-sm-4">
                            <br>Oplag
                            <br><label><?= $row->oplag; ?></label>
                          </div>
                        </div>
                        <hr><br>
                        <h4><label>Jadwal Isi</label></h4>
                        <div class="row">                        
                          <div class="col-md-6">
                            Tanggal Pelaksanaan<br>
                                <?php if($row->id_jadwal_cetak == null) {?>                                     
                                  <input type="date" class="form-control" name="tanggal_pelaksanaan_isi" placeholder="Tanggal Pelaksanaan Isi" required>
                                <?php }else{ ?>                                  
                                    <input type="date" class="form-control" name="tanggal_pelaksanaan_isi" value="<?= $row->tanggal_pelaksanaan_isi; ?>" placeholder="Tanggal Pelaksanaan Cover" required>
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            Operator<br>
                                <?php if($row->id_jadwal_cetak == null) {?>                                     
                                  <input type="text" class="form-control" name="operator_isi" placeholder="Operator Isi" required>
                                <?php }else{ ?>                                  
                                    <input type="text" class="form-control" name="operator_isi" value="<?= $row->operator_isi; ?>" placeholder="Tanggal Pelaksanaan Cover" required>
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Target<br>
                                <?php if($row->id_jadwal_cetak == null) {?>                                     
                                  <input type="number" class="form-control" name="target_isi" placeholder="Jumlah Target" required>
                                <?php }else{ ?>                                  
                                    <input type="number" class="form-control" name="target_isi" value="<?= $row->target_isi; ?>" placeholder="Tanggal Pelaksanaan Cover" required>
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Mesin<br>
                                <?php if($row->id_jadwal_cetak == null) {?>                                     
                                  <select id="inputState" class="form-select form-control" name="mesin_isi" >
                                    <option value="-">-</option>
                                    <option value="Oliver 58 2w">Oliver 58 2w</option>
                                    <option value="Oliver 72 1w">Oliver 72 1w</option>
                                    <option value="SM 74 4W - A">SM 74 4W - A</option>
                                    <option value="SM 74 4W - B">SM 74 4W - B</option>
                                    <option value="SM 102 2wP - A">SM 102 2wP - A</option>
                                    <option value="SM 102 2wP - B">SM 102 2wP - B</option>
                                    <option value="Fotocopy">Fotocopy</option>
                                    <option value="Tokko">Tokko</option>
                                    <option value="Print banner">Print banner</option>
                                    <option value="Print digital">Print digital</option>
                                  </select>
                                <?php }else{ ?>                                  
                                  <select id="inputState" class="form-select form-control" name="mesin_isi" >
                                  <option value="<?php  echo $row->mesin_isi != "-" ?   $row->mesin_isi  : '-' ?>"><?php  echo $row->mesin_isi != "-" ?   $row->mesin_isi  : '-' ?>   </option>
                                    <option value="Oliver 58 2w">Oliver 58 2w</option>
                                    <option value="Oliver 72 1w">Oliver 72 1w</option>
                                    <option value="SM 74 4W - A">SM 74 4W - A</option>
                                    <option value="SM 74 4W - B">SM 74 4W - B</option>
                                    <option value="SM 102 2wP - A">SM 102 2wP - A</option>
                                    <option value="SM 102 2wP - B">SM 102 2wP - B</option>
                                    <option value="Fotocopy">Fotocopy</option>
                                    <option value="Tokko">Tokko</option>
                                    <option value="Print banner">Print banner</option>
                                    <option value="Print digital">Print digital</option>
                                    <option value="-">-</option>
                                  </select>
                                <?php } ?>
                            
                          </div>
                          <div class="col-md-6">
                            <br>Druk<br>
                            <!-- <input type="number" class="form-control" name="druk_isi" hidden>
                            <label>otomatis = target * oplag</label> -->
                            <?php if($row->druk_isi !=null) {?>
                              <td><?= $row->druk_isi ?></td>
                            <?php } else {?> 
                              <input type="number" class="form-control" name="druk_isi" hidden>
                              <label>otomatis = target * oplag</label>
                             <?php } ?>
                          </div>
                        </div>
                        <br><hr><br>
                        <div class="row" align="right">
                          <div class="col">
                          
                            <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                              <?php if($row->id_jadwal_cetak == null) {?>  
                            <button type="submit" class="btn btn-success" name="add">Publish</button>
                              <?php }else{ ?>
                            <button type="submit" class="btn btn-success" name="edit">Publish</button>
                              <?php } ?>
                          </div>
                        </div>
                      </div>
                    </div><br>
                  </div><!-- /.card-body -->
                </div>
                </div>
                </div>
                </div>
                <!-- footer modal -->
                <!-- <div class="modal-footer">
                </div> -->
                </form>
              <?php } ?>  
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