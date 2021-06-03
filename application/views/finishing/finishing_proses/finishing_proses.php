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
                          <a href="<?=site_url()?>finishing/FinishingProses/jadwal_fp" class="btn btn-success">
                            Laminasi
                          </a>
                        </td>
                        <td>
                          <a href="<?=site_url()?>finishing/FinishingProses/jadwal_fp" class="btn btn-success">
                            MBO
                          </a>
                        </td>
                        <td>
                          <a href="<?=site_url()?>finishing/FinishingProses/jadwal_fp" class="btn btn-success">
                            Shoe
                          </a>
                        </td>
                        <td>
                          <a href="<?=site_url()?>finishing/FinishingProses/jadwal_fp" class="btn btn-success">
                            Susun
                          </a>
                        </td>
                        <td>
                          <a href="<?=site_url()?>finishing/FinishingProses/jadwal_fp"   class="btn btn-success">
                            SUB
                          </a>
                        </td>
                        <td>Status</td>
                        <td>Actions</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Nomor SO</td>
                        <td>Tanggal Masuk</td>
                        <td>Deadline</td>
                        <td>Nama Pemesan</td>
                        <td>Nama Order</td>
                        <td>Ukuran Plano</td>
                        <td>Oplag</td>
                        <td>Halaman</td>
                        <td>Laminasi</td>
                        <td>MBO</td>
                        <td>Shoe</td>
                        <td>Susun</td>
                        <td>SUB</td>
                        <td>Status</td>
                        <td align="center">
                          <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-plus" style="font-size:14px"></i> JADWAL
                          </button>
                          <!-- <a href="<?=site_url()?>finishing/FinishingProses/jadwal_fp" class="btn btn-success">
                            <i class="fa fa-plus" style="font-size:14px"></i> JADWAL
                          </a> -->
                        </td>
                      </tr>
                    </tbody>
            
                </table>

                <div id="myModal" class="modal fade" role="dialog">
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
                            <li class="nav-item col"><a class="nav-link btn-outline-success active" href="#shoe" data-toggle="tab">MESIN SHOE</a></li>
                            <li class="nav-item col"><a class="nav-link btn-outline-success" href="#mbo" data-toggle="tab">MESIN MBO</a></li>
                            <li class="nav-item col"><a class="nav-link btn-outline-success" href="#sub" data-toggle="tab">SUB</a></li>
                            <li class="nav-item col"><a class="nav-link btn-outline-success" href="#laminasi" data-toggle="tab">LAMINASI</a></li>
                            <li class="nav-item col"><a class="nav-link btn-outline-success" href="#susun" data-toggle="tab">SUSUN</a></li>
                          </ul>
                          <!-- <h3>SO dari db</h3> -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <div class="card-body">
                            <div class="tab-content">
                              <div class="tab-pane active" id="shoe">
                                <h4>DETAIL ORDERAN</h4><hr>
                                <div class="row">
                                  <div class="col-md-4">
                                    Nomor SO
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                  <div class="col-md-4">
                                    Nama Orderan
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                  <div class="col-md-4">
                                    Finishing
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <br>Nama Pemesan
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                  <div class="col-md-4">
                                    <br>Laminasi
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                  <div class="col-md-4">
                                    <br>Oplag
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <br>Ukuran
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                  <div class="col-md-4">
                                    <br>Halaman
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                </div><hr>

                                <div class="row">
                                  <div class="col-md-6">
                                    Tanggal Pelaksanaan<br>
                                    <input type="date" class="form-control" name="tanggal_pelaksanaan_mesin_shoe" placeholder="Tanggal Pelaksanaan" required>
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
                                        <select id="inputState" class="form-select form-control" name="lipat_lembar_1" >
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
                                        <select id="inputState" class="form-select form-control" name="lipat_lembar_2" >
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
                                        <select id="inputState" class="form-select form-control" name="lipat_lembar_3" >
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
                                        <select id="inputState" class="form-select form-control" name="lipat_lembar_4" >
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
                                        <select id="inputState" class="form-select form-control" name="lipat_lembar_5" >
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
                                        <select id="inputState" class="form-select form-control" name="lipat_lembar_6" >
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
                                        <select id="inputState" class="form-select form-control" name="lipat_lembar_7" >
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
                                        <select id="inputState" class="form-select form-control" name="lipat_lembar_8" >
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
                                        <select id="inputState" class="form-select form-control" name="lipat_lembar_9" >
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
                                        <select id="inputState" class="form-select form-control" name="lipat_lembar_10" >
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
                                        <select id="inputState" class="form-select form-control" name="lipat_lembar_11" >
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
                                        <select id="inputState" class="form-select form-control" name="lipat_lembar_12" >
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
                                        <select id="inputState" class="form-select form-control" name="lipat_lembar_13" >
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
                                        <select id="inputState" class="form-select form-control" name="lipat_lembar_14" >
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
                                        <select id="inputState" class="form-select form-control" name="lipat_lembar_15" >
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
                                        <select id="inputState" class="form-select form-control" name="lipat_lembar_16" >
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
                                        <select id="inputState" class="form-select form-control" name="lipat_lembar_17" >
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
                                        <select id="inputState" class="form-select form-control" name="lipat_lembar_18" >
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
                                        <select id="inputState" class="form-select form-control" name="lipat_lembar_19" >
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
                                        <select id="inputState" class="form-select form-control" name="lipat_lembar_20" >
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
                                <textarea name="keterangan_finishing_proses" class="form-control" placeholder="catatan" style="height: 240px;"></textarea><br>

                                <div class="row">
                                  <div class="col" align="right">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Jadwal</button>
                                  </div>
                                </div>
                              </div>

                              <div class="tab-pane" id="sub">
                                <h4>DETAIL ORDERAN</h4><hr>
                                <div class="row">
                                  <div class="col-md-4">
                                    Nomor SO
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                  <div class="col-md-4">
                                    Nama Orderan
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                  <div class="col-md-4">
                                    Finishing
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <br>Nama Pemesan
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                  <div class="col-md-4">
                                    <br>Laminasi
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                  <div class="col-md-4">
                                    <br>Oplag
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <br>Ukuran
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                  <div class="col-md-4">
                                    <br>Halaman
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                </div><hr>

                                <div class="row">
                                  <div class="col-md-6">
                                    Tanggal Pelaksanaan<br>
                                    <input type="date" class="form-control" name="tanggal_pelaksanaan_sub" placeholder="Tanggal Pelaksanaan" required>
                                  </div>  
                                </div><hr>

                                <div class="row">
                                  <div class="col-md-12">
                                    Jenis SUB<br>
                                    <div class="card-body">
                                      <div class="row">
                                        <div class="col-md-4">
                                          <input class="form-check-input" type="checkbox" name="jenis_sub_lipat" value="Lipat" id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">Lipat</label>
                                        </div>
                                        <div class="col-md-4">
                                          <input class="form-check-input" type="checkbox" name="jenis_sub_susun_gabung" value="Susun Gabung" id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">Susun / Gabung</label>
                                        </div>
                                        <div class="col-md-4">
                                          <input class="form-check-input" type="checkbox" name="jenis_sub_laminasi" value="Laminasi" id="flexCheckDefault">
                                          <label class="form-check-label" for="flexCheckDefault">Laminasi</label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div><hr>

                                <h4>Keterangan</h4>
                                <textarea name="keterangan_finishing_proses" class="form-control" placeholder="catatan" style="height: 240px;"></textarea><br>

                                <div class="row">
                                  <div class="col" align="right">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Jadwal</button>
                                  </div>
                                </div>
                              </div>

                              <div class="tab-pane" id="laminasi">
                                <h4>DETAIL ORDERAN</h4><hr>
                                <div class="row">
                                  <div class="col-md-4">
                                    Nomor SO
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                  <div class="col-md-4">
                                    Nama Orderan
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                  <div class="col-md-4">
                                    Finishing
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <br>Nama Pemesan
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                  <div class="col-md-4">
                                    <br>Ukuran
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                  <div class="col-md-4">
                                    <br>Oplag
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                </div><hr>

                                <div class="row">
                                  <div class="col-md-6">
                                    Tanggal Pelaksanaan<br>
                                    <input type="date" class="form-control" name="tanggal_pelaksanaan_laminasi" placeholder="Tanggal Pelaksanaan" required>
                                  </div>  
                                </div><hr>

                                <div class="row">
                                  <div class="col-md-6">
                                    Jenis Mesin<br>
                                    <b>Mesin LAMINASI</b>
                                  </div>
                                  <div class="col-md-6">
                                    Jenis Laminasi<br>
                                    <b>dari db</b>
                                  </div>
                                </div><hr>

                                <h4>Keterangan</h4>
                                <textarea name="keterangan_finishing_proses" class="form-control" placeholder="catatan" style="height: 240px;"></textarea><br>

                                <div class="row">
                                  <div class="col" align="right">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Jadwal</button>
                                  </div>
                                </div>
                              </div>

                              <div class="tab-pane" id="susun">
                                <h4>DETAIL ORDERAN</h4><hr>
                                <div class="row">
                                  <div class="col-md-4">
                                    Nomor SO
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                  <div class="col-md-4">
                                    Nama Orderan
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                  <div class="col-md-4">
                                    Finishing
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <br>Nama Pemesan
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                  <div class="col-md-4">
                                    <br>Laminasi
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                  <div class="col-md-4">
                                    <br>Oplag
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <br>Ukuran
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                  <div class="col-md-4">
                                    <br>Halaman
                                    <br><label class="form-label">dari db</label>
                                  </div>
                                </div><hr>

                                <div class="row">
                                  <div class="col-md-6">
                                    Tanggal Pelaksanaan<br>
                                    <input type="date" class="form-control" name="tanggal_pelaksanaan_susun" placeholder="Tanggal Pelaksanaan" required>
                                  </div>  
                                </div><hr>

                                <h4>Keterangan</h4>
                                <textarea name="keterangan_finishing_proses" class="form-control" placeholder="catatan" style="height: 240px;"></textarea><br>

                                <div class="row">
                                  <div class="col" align="right">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Jadwal</button>
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