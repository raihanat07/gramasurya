<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>FINISHING PROSES</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">
      <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Jadwal Finishing Proses</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table id="example2" class="table table-bordered table-striped" style="font-size: 12px">
                    <thead>
                      <tr align="center">
                        <td>Nomor SO</td>
                        <td>Tanggal Masuk</td>
                        <td>Deadline</td>
                        <td>Nama Pemesan</td>
                        <td>Nama Order</td>
                        <td>Ukuran Plano</td>
                        <td>Oplag</td>
                        <td>Halaman</td>
                        <td>
                          <a href="<?=site_url()?>finishing/FinishingProses/jadwal_fp_laminasi" class="btn btn-success">
                            Laminasi
                          </a>
                        </td>
                        <td>
                          <a href="<?=site_url()?>finishing/FinishingProses/jadwal_fp_mbo" class="btn btn-success">
                            MBO
                          </a>
                        </td>
                        <td>
                          <a href="<?=site_url()?>finishing/FinishingProses/jadwal_fp_shoe" class="btn btn-success">
                            Shoe
                          </a>
                        </td>
                        <td>
                          <a href="<?=site_url()?>finishing/FinishingProses/jadwal_fp_susun" class="btn btn-success">
                            Susun
                          </a>
                        </td>
                        <td>
                          <a href="<?=site_url()?>finishing/FinishingProses/jadwal_fp_sub"   class="btn btn-success">
                            SUB
                          </a>
                        </td>
                        <td>Status</td>
                        <td>Actions</td>
                      </tr>
                    </thead>
                    <?php foreach($fp as $s => $row) {?>  
                      <tr>
                      <td align="center"><?= $row->nomor_so; ?></td>
                        <td><?= $row->tanggal_masuk; ?></td>
                        <td style="color: red"><?= $row->deadline; ?></td>
                        <td><?= $row->nama_pemesan; ?></td>
                        <td><?= $row->nama_orderan; ?></td>
                        <td><?= $row->ukuran; ?></td>
                        <td><?= $row->oplag; ?></td>
                        <td><?= $row->halaman; ?></td>
                            <?php if($row->tanggal_laminasi != "0000-00-00") {?>
                        <td><?= $row->tanggal_laminasi ?></td>
                            <?php } else {?> <td></td> <?php } ?>
                            
                            <?php if($row->tanggal_mbo != "0000-00-00") {?>
                        <td><?= $row->tanggal_mbo ?></td>
                            <?php } else {?> <td></td> <?php } ?>

                            <?php if($row->tanggal_shoe != "0000-00-00") {?>
                        <td><?= $row->tanggal_shoe ?></td>
                            <?php } else {?> <td></td> <?php } ?>

                            <?php if($row->tanggal_susun != "0000-00-00") {?>
                        <td><?= $row->tanggal_susun ?></td>
                            <?php } else {?> <td></td> <?php } ?>

                            <?php if($row->tanggal_sub_proses != "0000-00-00") {?>
                        <td><?= $row->tanggal_sub_proses ?></td>
                            <?php } else {?> <td></td> <?php } ?>
                      
                        <td><?= $row->so_status ?></td>                        
                        <td align="center">
                          <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal<?= $row->id_order; ?>">
                            <i class="fa fa-plus" style="font-size:14px"></i> JADWAL
                          </button>
                          <!-- <a href="<?=site_url()?>finishing/FinishingProses/jadwal_fp" class="btn btn-success">
                            <i class="fa fa-plus" style="font-size:14px"></i> JADWAL
                          </a> -->
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
            
                </table>

                <?php foreach($fp as $s => $row) {?>  
                  <form action="<?=site_url('finishing/FinishingProses/proses_fp')?>" method="post">
                  <input type="text" name="id_order"  value="<?php echo $row->id_order; ?>" hidden>

                <div id="myModal<?= $row->id_order; ?>" class="modal fade" role="dialog">
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
                            <li class="nav-item col"><a class="nav-link btn-outline-success active" href="#laminasi<?= $row->id_order; ?>" data-toggle="tab">LAMINASI</a></li>
                            <li class="nav-item col"><a class="nav-link btn-outline-success" href="#mbo<?= $row->id_order; ?>" data-toggle="tab">MESIN MBO</a></li>
                            <li class="nav-item col"><a class="nav-link btn-outline-success" href="#shoe<?= $row->id_order; ?>" data-toggle="tab">MESIN SHOE</a></li>
                            <li class="nav-item col"><a class="nav-link btn-outline-success" href="#susun<?= $row->id_order; ?>" data-toggle="tab">SUSUN</a></li>
                            <li class="nav-item col"><a class="nav-link btn-outline-success" href="#sub<?= $row->id_order; ?>" data-toggle="tab">SUB</a></li>
                          </ul>
                          <!-- <h3>SO dari db</h3> -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <div class="card-body">
                            <div class="tab-content">
                              <div class="tab-pane" id="shoe<?= $row->id_order; ?>">
                                <h4>DETAIL ORDERAN</h4><hr>
                                <div class="row">
                                  <div class="col-md-4">
                                    Nomor SO
                                    <br><label class="form-label"><?= $row->nomor_so; ?></label>
                                  </div>
                                  <div class="col-md-4">
                                    Nama Orderan
                                    <br><label class="form-label"><?= $row->nama_orderan; ?></label>
                                  </div>
                                  <div class="col-md-4">
                                    Finishing
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
                                        if($row->klem != null){
                                          $finishing .= 'Klem, ';
                                        }
                                        $finishing = rtrim($finishing, ", ");
                                        echo $finishing;
                                        ?>
                                    </label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <br>Nama Pemesan
                                    <br><label class="form-label"><?= $row->nama_pemesan; ?></label>
                                  </div>
                                  <div class="col-md-4">
                                    <br>Laminasi
                                    <br><label class="form-label">
                                        <?php 
                                        $lam = "";
                                        if($row->doff != null){
                                          $lam .= "doff, ";
                                        }
                                        if($row->glossy != null){
                                          $lam .= 'glossy, ';
                                        }   
                                        if($row->uvi != null){
                                          $lam .= 'uvi, ';
                                        } 
                                        
                                        $lam = rtrim($lam, ", ");
                                        echo $lam;
                                        ?>
                                    </label>
                                  </div>
                                  <div class="col-md-4">
                                    <br>Oplag
                                    <br><label class="form-label"><?= $row->oplag; ?></label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <br>Ukuran
                                    <br><label class="form-label"><?= $row->ukuran; ?></label>
                                  </div>
                                  <div class="col-md-4">
                                    <br>Halaman
                                    <br><label class="form-label"><?= $row->halaman; ?></label>
                                  </div>
                                </div><hr>

                                <div class="row">
                                  <div class="col-md-6">
                                    Tanggal Pelaksanaan<br>
                                    <input type="date" class="form-control" name="tanggal_pelaksanaan_mesin_shoe" placeholder="Tanggal Pelaksanaan">
                                  </div>  
                                </div><hr>

                                <div class="row">
                                  <div class="col-md-6">
                                    Jenis Mesin : <b>Mesin SHOE</b>
                                  </div>
                                </div><hr>

                                <div class="row">
                                  <div class="col-md-12">
                                    Jadwal Pengerjaan
                                  </div>
                                </div><hr>

                                <div class="row">
                                  <!-- LEMBAR 1 - 10 -->
                                  <div class="col">
                                    <div class="row">
                                      <div class="col-md-6">Lembar 1</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="shoe_lipat_lembar_1" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 2</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="shoe_lipat_lembar_2" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 3</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="shoe_lipat_lembar_3" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 4</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="shoe_lipat_lembar_4" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 5</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="shoe_lipat_lembar_5" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 6</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="shoe_lipat_lembar_6" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 7</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="shoe_lipat_lembar_7" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 8</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="shoe_lipat_lembar_8" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 9</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="shoe_lipat_lembar_9" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 10</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="shoe_lipat_lembar_10" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-md-1"></div>
                                  <!-- LEMBAR 11 - 20 -->
                                  <div class="col">
                                    <div class="row">
                                      <div class="col-md-6">Lembar 11</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="shoe_lipat_lembar_11" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 12</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="shoe_lipat_lembar_12" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 13</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="shoe_lipat_lembar_13" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 14</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="shoe_lipat_lembar_14" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 15</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="shoe_lipat_lembar_15" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 16</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="shoe_lipat_lembar_16" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 17</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="shoe_lipat_lembar_17" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 18</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="shoe_lipat_lembar_18" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 19</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="shoe_lipat_lembar_19" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 20</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="shoe_lipat_lembar_20" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                </div><hr>

                                <h4>Keterangan</h4>
                                <textarea name="keterangan_jadwal_fp_shoe" class="form-control" placeholder="catatan" style="height: 240px;"></textarea><br>

                                <div class="row">
                                  <div class="col" align="right">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                    <button type="submit" class="btn btn-success" name="add">Jadwal</button>
                                  </div>
                                </div>
                              </div>

                              <div class="tab-pane" id="mbo<?= $row->id_order; ?>">
                                <h4>DETAIL ORDERAN</h4><hr>
                                <div class="row">
                                <div class="col-md-4">
                                    Nomor SO
                                    <br><label class="form-label"><?= $row->nomor_so; ?></label>
                                  </div>
                                  <div class="col-md-4">
                                    Nama Orderan
                                    <br><label class="form-label"><?= $row->nama_orderan; ?></label>
                                  </div>
                                  <div class="col-md-4">
                                    Finishing
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
                                        if($row->klem != null){
                                          $finishing .= 'Klem, ';
                                        }
                                        $finishing = rtrim($finishing, ", ");
                                        echo $finishing;
                                        ?>
                                    </label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <br>Nama Pemesan
                                    <br><label class="form-label"><?= $row->nama_pemesan; ?></label>
                                  </div>
                                  <div class="col-md-4">
                                    <br>Laminasi
                                    <br><label class="form-label">
                                        <?php 
                                            $lam = "";
                                            if($row->doff != null){
                                              $lam .= "doff, ";
                                            }
                                            if($row->glossy != null){
                                              $lam .= 'glossy, ';
                                            }   
                                            if($row->uvi != null){
                                              $lam .= 'uvi, ';
                                            } 
                                            
                                            $lam = rtrim($lam, ", ");
                                            echo $lam;
                                        ?>
                                    </label>
                                  </div>
                                  <div class="col-md-4">
                                    <br>Oplag
                                    <br><label class="form-label"><?= $row->oplag; ?></label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <br>Ukuran
                                    <br><label class="form-label"><?= $row->ukuran; ?></label>
                                  </div>
                                  <div class="col-md-4">
                                    <br>Halaman
                                    <br><label class="form-label"><?= $row->halaman; ?></label>
                                  </div>
                                </div><hr>

                                <div class="row">
                                  <div class="col-md-6">
                                    Tanggal Pelaksanaan<br>
                                    <input type="date" class="form-control" name="tanggal_pelaksanaan_mesin_mbo" placeholder="Tanggal Pelaksanaan">
                                  </div>  
                                </div><hr>

                                <div class="row">
                                  <div class="col-md-6">
                                    Jenis Mesin : <b>Mesin MBO</b>
                                  </div>
                                </div><hr>

                                <div class="row">
                                  <div class="col-md-12">
                                    Jadwal Pengerjaan
                                  </div>
                                </div><hr>

                                <div class="row">
                                  <!-- LEMBAR 1 - 10 -->
                                  <div class="col">
                                    <div class="row">
                                      <div class="col-md-6">Lembar 1</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="mbo_lipat_lembar_1" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 2</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="mbo_lipat_lembar_2" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 3</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="mbo_lipat_lembar_3" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 4</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="mbo_lipat_lembar_4" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 5</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="mbo_lipat_lembar_5" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 6</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="mbo_lipat_lembar_6" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 7</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="mbo_lipat_lembar_7" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 8</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="mbo_lipat_lembar_8" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 9</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="mbo_lipat_lembar_9" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 10</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="mbo_lipat_lembar_10" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-md-1"></div>
                                  <!-- LEMBAR 11 - 20 -->
                                  <div class="col">
                                    <div class="row">
                                      <div class="col-md-6">Lembar 11</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="mbo_lipat_lembar_11" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 12</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="mbo_lipat_lembar_12" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 13</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="mbo_lipat_lembar_13" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 14</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="mbo_lipat_lembar_14" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 15</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="mbo_lipat_lembar_15" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 16</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="mbo_lipat_lembar_16" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 17</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="mbo_lipat_lembar_17" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 18</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="mbo_lipat_lembar_18" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 19</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="mbo_lipat_lembar_19" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-6">Lembar 20</div>
                                      <div class="col-md-6">
                                        <select id="inputState" class="form-select form-control" name="mbo_lipat_lembar_20" >
                                          <option value="-">-</option>
                                          <option value="Lipat 1">Lipat 1</option>
                                          <option value="Lipat 2">Lipat 2</option>
                                          <option value="Lipat 3">Lipat 3</option>
                                          <option value="Lipat 4">Lipat 4</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                </div><hr>

                                <h4>Keterangan</h4>
                                <textarea name="keterangan_jadwal_fp_mbo" class="form-control" placeholder="catatan" style="height: 240px;"></textarea><br>

                                <div class="row">
                                  <div class="col" align="right">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                    <button type="submit" class="btn btn-success" name="add">Jadwal</button>
                                  </div>
                                </div>
                              </div>

                              <div class="tab-pane" id="sub<?= $row->id_order; ?>">
                                <h4>DETAIL ORDERAN</h4><hr>
                                <div class="row">
                                <div class="col-md-4">
                                    Nomor SO
                                    <br><label class="form-label"><?= $row->nomor_so; ?></label>
                                  </div>
                                  <div class="col-md-4">
                                    Nama Orderan
                                    <br><label class="form-label"><?= $row->nama_orderan; ?></label>
                                  </div>
                                  <div class="col-md-4">
                                    Finishing
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
                                        if($row->klem != null){
                                          $finishing .= 'Klem, ';
                                        }
                                        $finishing = rtrim($finishing, ", ");
                                        echo $finishing;
                                        ?>
                                    </label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <br>Nama Pemesan
                                    <br><label class="form-label"><?= $row->nama_pemesan; ?></label>
                                  </div>
                                  <div class="col-md-4">
                                    <br>Laminasi
                                    <br><label class="form-label">
                                          <?php 
                                            $lam = "";
                                            if($row->doff != null){
                                              $lam .= "doff, ";
                                            }
                                            if($row->glossy != null){
                                              $lam .= 'glossy, ';
                                            }   
                                            if($row->uvi != null){
                                              $lam .= 'uvi, ';
                                            } 
                                            
                                            $lam = rtrim($lam, ", ");
                                            echo $lam;
                                            ?>
                                    </label>
                                  </div>
                                  <div class="col-md-4">
                                    <br>Oplag
                                    <br><label class="form-label"><?= $row->oplag; ?></label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <br>Ukuran
                                    <br><label class="form-label"><?= $row->ukuran; ?></label>
                                  </div>
                                  <div class="col-md-4">
                                    <br>Halaman
                                    <br><label class="form-label"><?= $row->halaman; ?></label>
                                  </div>
                                </div><hr>

                                <div class="row">
                                  <div class="col-md-6">
                                    Tanggal Pelaksanaan<br>
                                    <input type="date" class="form-control" name="tanggal_pelaksanaan_sub_proses" placeholder="Tanggal Pelaksanaan">
                                  </div>  
                                </div><hr>

                                <div class="row">
                                  <div class="col-md-12">
                                    Jenis SUB<br>
                                    <div class="card-body">
                                      <div class="row">
                                        <div class="col-md-4">

                                        <input type="text" name="jenis_sub_lipat" value="" hidden>
                                          <input class="form-check-input" type="checkbox" name="jenis_sub_lipat" value="lipat" id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">Lipat</label>
                                        </div>

                                        <div class="col-md-4">
                                        <input type="text" name="jenis_sub_susun_gabung" value="" hidden>
                                          <input class="form-check-input" type="checkbox" name="jenis_sub_susun_gabung" value="susun gabung" id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">Susun / Gabung</label>
                                        </div>
                                        <div class="col-md-4">
                                        <input type="text" name="jenis_sub_laminasi" value="" hidden>
                                          <input class="form-check-input" type="checkbox" name="jenis_sub_laminasi" value="laminasi" id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">Laminasi</label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div><hr>

                                <h4>Keterangan</h4>
                                <textarea name="keterangan_jadwal_sub_proses" class="form-control" placeholder="catatan" style="height: 240px;"></textarea><br>

                                <div class="row">
                                  <div class="col" align="right">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                    <button type="submit" class="btn btn-success" name="add">Jadwal</button>
                                  </div>
                                </div>
                              </div>

                              <div class="tab-pane active" id="laminasi<?= $row->id_order; ?>">
                                <h4>DETAIL ORDERAN</h4><hr>
                                <div class="row">
                                  <div class="col-md-4">
                                    Nomor SO
                                    <br><label class="form-label"><?= $row->nomor_so; ?></label>
                                  </div>
                                  <div class="col-md-4">
                                    Nama Orderan
                                    <br><label class="form-label"><?= $row->nama_orderan; ?></label>
                                  </div>
                                  <div class="col-md-4">
                                    Finishing
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
                                        if($row->klem != null){
                                          $finishing .= 'Klem, ';
                                        }
                                        $finishing = rtrim($finishing, ", ");
                                        echo $finishing;
                                        ?>
                                    </label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <br>Nama Pemesan
                                    <br><label class="form-label"><?= $row->nama_pemesan; ?></label>
                                  </div>
                                  <div class="col-md-4">
                                    <br>Ukuran
                                    <br><label class="form-label"><?= $row->ukuran; ?></label>
                                  </div>
                                  <div class="col-md-4">
                                    <br>Oplag
                                    <br><label class="form-label"><?= $row->oplag; ?></label>
                                  </div>
                                </div><hr>

                                <div class="row">
                                  <div class="col-md-6">
                                    Tanggal Pelaksanaan<br>
                                    <input type="date" class="form-control" name="tanggal_pelaksanaan_laminasi" placeholder="Tanggal Pelaksanaan">
                                  </div>  
                                </div><hr>

                                <div class="row">
                                  <div class="col-md-6">
                                    Jenis Mesin<br>
                                    <b>Mesin LAMINASI</b>
                                  </div>
                                  <div class="col-md-6">
                                    Jenis Laminasi<br>
                                    <b>
                                      <?php 
                                          $lam = "";
                                          if($row->doff != null){
                                            $lam .= "doff, ";
                                          }
                                          if($row->glossy != null){
                                            $lam .= 'glossy, ';
                                          }   
                                          if($row->uvi != null){
                                            $lam .= 'uvi, ';
                                          } 
                                          
                                          $lam = rtrim($lam, ", ");
                                          echo $lam;
                                        ?>
                                    </b>
                                  </div>
                                </div><hr>

                                <h4>Keterangan</h4>
                                <textarea name="keterangan_jadwal_fp_laminasi" class="form-control" placeholder="catatan" style="height: 240px;"></textarea><br>

                                <div class="row">
                                  <div class="col" align="right">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                    <button type="submit" class="btn btn-success" name="add">Jadwal</button>
                                  </div>
                                </div>
                              </div>

                              <div class="tab-pane" id="susun<?= $row->id_order; ?>">
                                <h4>DETAIL ORDERAN</h4><hr>
                                <div class="row">
                                <div class="col-md-4">
                                    Nomor SO
                                    <br><label class="form-label"><?= $row->nomor_so; ?></label>
                                  </div>
                                  <div class="col-md-4">
                                    Nama Orderan
                                    <br><label class="form-label"><?= $row->nama_orderan; ?></label>
                                  </div>
                                  <div class="col-md-4">
                                    Finishing
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
                                        if($row->klem != null){
                                          $finishing .= 'Klem, ';
                                        }
                                        $finishing = rtrim($finishing, ", ");
                                        echo $finishing;
                                        ?>
                                    </label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <br>Nama Pemesan
                                    <br><label class="form-label"><?= $row->nama_pemesan; ?></label>
                                  </div>
                                  <div class="col-md-4">
                                    <br>Laminasi
                                    <br><label class="form-label">
                                        <?php 
                                            $lam = "";
                                            if($row->doff != null){
                                              $lam .= "doff, ";
                                            }
                                            if($row->glossy != null){
                                              $lam .= 'glossy, ';
                                            }   
                                            if($row->uvi != null){
                                              $lam .= 'uvi, ';
                                            } 
                                            
                                            $lam = rtrim($lam, ", ");
                                            echo $lam;
                                        ?>
                                    </label>
                                  </div>
                                  <div class="col-md-4">
                                    <br>Oplag
                                    <br><label class="form-label"><?= $row->oplag; ?></label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <br>Ukuran
                                    <br><label class="form-label"><?= $row->ukuran; ?></label>
                                  </div>
                                  <div class="col-md-4">
                                    <br>Halaman
                                    <br><label class="form-label"><?= $row->halaman; ?></label>
                                  </div>
                                </div><hr>

                                <div class="row">
                                  <div class="col-md-6">
                                    Tanggal Pelaksanaan<br>
                                    <input type="date" class="form-control" name="tanggal_pelaksanaan_mesin_susun" placeholder="Tanggal Pelaksanaan">
                                  </div>  
                                </div><hr>

                                <div class="row">
                                  <div class="col-md-6">
                                    Jenis Mesin : <b>Mesin SUSUN</b>
                                  </div>
                                </div><hr>

                                <h4>Keterangan</h4>
                                <textarea name="keterangan_jadwal_fp_susun" class="form-control" placeholder="catatan" style="height: 240px;"></textarea><br>

                                <div class="row">
                                  <div class="col" align="right">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                    <button type="submit" class="btn btn-success" name="add">Jadwal</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div><br>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- footer modal -->
                      <div class="modal-footer">
                      </div>
                    </div>
                  </div>
                </div>

                  </form>
                <?php } ?>

                </div>
                <!-- /.card-body -->
            </div>
          <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->