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
              <!-- <td> </td>
              <td></td>
              <td></td>
              <td></td> -->


              
              <?php if($row->id_mesin_72 !=null) {?>

                  <?php if($row->jenis_cetakan == "Cover") {?>

                    <td><?= $row->nama_mesin ?></td>
                    <td><?= $row->tanggal_pelaksanaan ?></td>

                  <?php } else {?>
                    <td></td>
                    <td></td> 
                    
                  <?php } ?>

                  <?php if($row->jenis_cetakan == "Isi") {?>

                  <td><?= $row->nama_mesin ?></td>
                  <td><?= $row->tanggal_pelaksanaan ?></td>

                  <?php } else {?>
                  <td></td>
                  <td></td> 

                  <?php } ?>
              
              <?php } else if($row->id_mesin_74a !=null) {?>

                  <?php if($row->jenis_cetakan == "Cover") {?>

                    <td><?= $row->nama_mesin ?></td>
                    <td><?= $row->tanggal_pelaksanaan ?></td>

                  <?php } else {?>
                    <td></td>
                    <td></td> 
                    
                  <?php } ?>

                  <?php if($row->jenis_cetakan == "Isi") {?>

                  <td><?= $row->nama_mesin ?></td>
                  <td><?= $row->tanggal_pelaksanaan ?></td>

                  <?php } else {?>
                  <td></td>
                  <td></td> 

                  <?php } ?>
              
              <?php } else {?>

                <td></td>
                <td></td>
                <td></td>
                <td></td>
              
              <?php } ?>
                 

              <!-- <?php if($row->tanggal_pelaksanaan !=null) {?>
                <td><?= $row->tanggal_pelaksanaan ?></td>
              <?php } else {?> <td></td> <?php } ?>

              <?php if($row->mesin_72 !=null) {?>
                <td><?= $row->mesin_72 ?></td>
              <?php } else {?> <td></td> <?php } ?>

              <?php if($row->tanggal_pelaksanaan !=null) {?>
                <td><?= $row->tanggal_pelaksanaan ?></td>
              <?php } else {?> <td></td> <?php } ?> -->

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
          <input type="text" name="id_mesin_72"  value="<?php echo $row->id_mesin_72; ?>" hidden>
          <input type="text" name="id_mesin_74a"  value="<?php echo $row->id_mesin_74a; ?>" hidden>
    
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
                      <li class="nav-item col"><a class="nav-link btn-outline-success active" href="#mesin72<?= $row->id_order; ?>" data-toggle="tab" style="min-width: 100px;">Mesin 72</a></li>
                      <li class="nav-item col"><a class="nav-link btn-outline-success" href="#mesin74a<?= $row->id_order; ?>" data-toggle="tab" style="min-width: 100px;">Mesin 74A</a></li>
                      <li class="nav-item col"><a class="nav-link btn-outline-success" href="#mesin74b<?= $row->id_order; ?>" data-toggle="tab" style="min-width: 100px;">Mesin 74B</a></li>
                      <li class="nav-item col"><a class="nav-link btn-outline-success" href="#mesin102a<?= $row->id_order; ?>" data-toggle="tab" style="min-width: 100px;">Mesin 102A</a></li>
                      <li class="nav-item col"><a class="nav-link btn-outline-success" href="#mesin102b<?= $row->id_order; ?>" data-toggle="tab" style="min-width: 100px;">Mesin 102B</a></li>
                      <li class="nav-item col"><a class="nav-link btn-outline-success" href="#mesintokko<?= $row->id_order; ?>" data-toggle="tab" style="min-width: 100px;">Mesin Tokko</a></li>
                    </ul>
                  </div><!-- /.card-header -->
                  
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="tab-pane active" id="mesin72<?= $row->id_order; ?>">
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
                            <input type="hidden" name="oplag" value="<?=$row->oplag?>">
                          </div>
                          <input type="text" name="nama_mesin_72"  value="mesin72" hidden>
                          <input type="number" name="kertas_72"  value="0" hidden>
                        </div>
                        <hr><br>
                        <h4><label>Jadwal Mesin 72</label></h4>
                        <div class="row">                        
                          <div class="col-md-6">
                            Tanggal Pelaksanaan<br>
                                <?php if($row->id_mesin_72 == null) {?>                                     
                                    <input type="date" class="form-control" name="tanggal_pelaksanaan_72" placeholder="Tanggal Pelaksanaan Cover" id="tgl_72<?= $row->id_order; ?>" >
                                <?php }else{ ?>                                  
                                    <input type="date" class="form-control" name="tanggal_pelaksanaan_72" id="tgl_72<?= $row->id_order.$row->id_order; ?>" value="<?= $row->tanggal_pelaksanaan; ?>" placeholder="Tanggal Pelaksanaan Cover" >
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            Operator<br>
                                <?php if($row->id_mesin_72 == null) {?>
                                  <select id="inputState" class="form-select form-control" name="operator_72" >
                                    <option value="-">-</option>
                                    <option value="Roni/Ariyanto">Roni/Ariyanto</option>
                                    <option value="Anam/Rois">Anam/Rois</option>
                                    <option value="Yono/Bukori">Yono/Bukori (Crew Fajar)</option>
                                    <option value="Natiman/Feri (Crew Fajar)">Natiman/Feri (Crew Fajar)</option>
                                    <option value="Kanang/Yoga">Kanang/Yoga</option>
                                    <option value="Heru/Toro">Heru/Toro</option>
                                    <option value="Nasikin/Agus Tugio">Nasikin/Agus Tugio</option>
                                    <option value="Heri">Heri</option>
                                    <option value="Samiran">Samiran</option>
                                  </select>
                                <?php }else{ ?>  
                                  <select id="inputState" class="form-select form-control" name="operator_72" >
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
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Target<br>
                              <?php if($row->id_mesin_72 == null) {?>                                     
                                <input type="number" class="form-control" name="target_72" placeholder="Jumlah Target" >
                                <?php }else{ ?>  
                                  <input type="number" class="form-control" name="target_72" value="<?= $row->target; ?>" placeholder="Jumlah Target" >
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                          
                            <br>Jenis Lipatan<br>
                            <?php if($row->id_mesin_72 == null) {?>                                     
                                  <select id="inputState" class="form-select form-control" name="jenis_cetakan_72" >
                                    <option value="-">-</option>
                                    <option value="Cover">Cover</option>
                                    <option value="Isi">Isi</option>
                                  </select>
                                <?php }else{ ?>                                  
                                  <select id="inputState" class="form-select form-control" name="jenis_cetakan_72" >
                                  <option value="<?php  echo $row->jenis_cetakan != "-" ?   $row->jenis_cetakan  : '-' ?>"><?php  echo $row->jenis_cetakan != "-" ?   $row->jenis_cetakan  : '-' ?>   </option>
                                    <option value="-">-</option>
                                    <option value="Cover">Cover</option>
                                    <option value="Isi">Isi</option>
                                  </select>
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Set<br>
                                <?php if($row->id_mesin_72 == null) {?>                                     
                                  <input type="number" class="form-control" name="set_72" placeholder="Jumlah Set" >
                                <?php }else{ ?>                                  
                                    <input type="number" class="form-control" name="set_72" value="<?= $row->set?>" placeholder="Jumlah set cover" >
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Druk<br>
                            <!-- <input type="number" class="form-control" name="druk_cover" hidden>
                            <label>otomatis = target * oplag</label> -->
                            <?php if($row->id_mesin_72 == null) {?>
                              <input type="number" class="form-control" name="druk_72" hidden>
                            <?php } else {?> 
                              <input type="number" class="form-control" name="druk_72" hidden>
                              <label><?= $row->druk?></label>
                             <?php } ?>
                          </div>
                        </div>
                        <br><hr><br>
                        <div class="row" align="right">
                          <div class="col">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                              <?php if($row->id_mesin_72 == null) {?>  
                            <button type="submit" class="btn btn-success" name="add">Jadwal</button>
                              <?php }else{ ?>
                            <button type="submit" class="btn btn-success" name="edit">Jadwal</button>
                              <?php } ?>
                          </div>
                        </div>
                      </div>

                      <!--Mesin 74a  -->
                      <div class="tab-pane" id="mesin74a<?= $row->id_order; ?>">
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
                            <input type="hidden" name="oplag" value="<?=$row->oplag?>">
                          </div>
                          <input type="text" name="nama_mesin_74a"  value="mesin74a" hidden>
                          <input type="number" name="kertas_74a"  value="0" hidden>
                        </div>
                        <hr><br>
                        <h4><label>Jadwal Mesin 74 - A</label></h4>
                        <div class="row">                        
                          <div class="col-md-6">
                            Tanggal Pelaksanaan<br>
                                <?php if($row->id_mesin_72 == null) {?>                                     
                                    <input type="date" class="form-control" name="tanggal_pelaksanaan_74a" placeholder="Tanggal Pelaksanaan Cover" id="tgl_72<?= $row->id_order; ?>" >
                                <?php }else{ ?>                                  
                                    <input type="date" class="form-control" name="tanggal_pelaksanaan_74a" id="tgl_72<?= $row->id_order.$row->id_order; ?>" value="<?= $row->tanggal_pelaksanaan_74a; ?>" placeholder="Tanggal Pelaksanaan Cover" >
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            Operator<br>
                                <?php if($row->id_mesin_72 == null) {?>
                                  <select id="inputState" class="form-select form-control" name="operator_74a" >
                                    <option value="-">-</option>
                                    <option value="Roni/Ariyanto">Roni/Ariyanto</option>
                                    <option value="Anam/Rois">Anam/Rois</option>
                                    <option value="Yono/Bukori">Yono/Bukori (Crew Fajar)</option>
                                    <option value="Natiman/Feri (Crew Fajar)">Natiman/Feri (Crew Fajar)</option>
                                    <option value="Kanang/Yoga">Kanang/Yoga</option>
                                    <option value="Heru/Toro">Heru/Toro</option>
                                    <option value="Nasikin/Agus Tugio">Nasikin/Agus Tugio</option>
                                    <option value="Heri">Heri</option>
                                    <option value="Samiran">Samiran</option>
                                  </select>
                                <?php }else{ ?>  
                                  <select id="inputState" class="form-select form-control" name="operator_74a" >
                                    <option value="<?php  echo $row->operator_74a != "-" ?   $row->operator_74a  : '-' ?>"><?php  echo $row->operator_74a != "-" ?   $row->operator_74a  : '-' ?></option>
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
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Target<br>
                              <?php if($row->id_mesin_72 == null) {?>                                     
                                <input type="number" class="form-control" name="target_74a" placeholder="Jumlah Target" >
                                <?php }else{ ?>  
                                  <input type="number" class="form-control" name="target_74a" value="<?= $row->target_74a; ?>" placeholder="Jumlah Target" >
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                          
                            <br>Jenis Lipatan<br>
                            <?php if($row->id_mesin_72 == null) {?>                                     
                                  <select id="inputState" class="form-select form-control" name="jenis_cetakan_74a" >
                                    <option value="-">-</option>
                                    <option value="Cover">Cover</option>
                                    <option value="Isi">Isi</option>
                                  </select>
                                <?php }else{ ?>                                  
                                  <select id="inputState" class="form-select form-control" name="jenis_cetakan_74a" >
                                  <option value="<?php  echo $row->jenis_cetakan_74a != "-" ?   $row->jenis_cetakan_74a  : '-' ?>"><?php  echo $row->jenis_cetakan_74a != "-" ?   $row->jenis_cetakan_74a  : '-' ?>   </option>
                                    <option value="-">-</option>
                                    <option value="Cover">Cover</option>
                                    <option value="Isi">Isi</option>
                                  </select>
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Set<br>
                                <?php if($row->id_mesin_72 == null) {?>                                     
                                  <input type="number" class="form-control" name="set_74a" placeholder="Jumlah Set" >
                                <?php }else{ ?>                                  
                                    <input type="number" class="form-control" name="set_74a" value="<?= $row->set_74a?>" placeholder="Jumlah set cover" >
                                <?php } ?>
                          </div>
                          <div class="col-md-6">
                            <br>Druk<br>
                            <!-- <input type="number" class="form-control" name="druk_cover" hidden>
                            <label>otomatis = target * oplag</label> -->
                            <?php if($row->id_mesin_72 == null) {?>
                              <input type="number" class="form-control" name="druk_74a" hidden>
                            <?php } else {?> 
                              <input type="number" class="form-control" name="druk_74a" hidden>
                              <label><?= $row->druk_74a?></label>
                             <?php } ?>
                          </div>
                        </div>
                        <br><hr><br>
                        <div class="row" align="right">
                          <div class="col">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                              <?php if($row->id_mesin_72 == null) {?>  
                            <button type="submit" class="btn btn-success" name="add">Jadwal</button>
                              <?php }else{ ?>
                            <button type="submit" class="btn btn-success" name="edit">Jadwal</button>
                              <?php } ?>
                          </div>
                        </div>
                      </div>
                      <!-- akhir Mesin 74a -->
                      
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