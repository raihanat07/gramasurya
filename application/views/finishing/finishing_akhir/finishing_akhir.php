<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>FINISHING Akhir</h1>
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
                <table id="table1" class="table table-bordered table-striped" style="font-size: 12px">
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
                        <td>Finishing Akhir</td>
                        <td>
                          <a href="<?=site_url()?>finishing/FinishingAkhir/jadwal_fa_binding" class="btn btn-success">
                            Binding
                          </a>
                        </td>
                        <td>
                          <a href="<?=site_url()?>finishing/FinishingAkhir/jadwal_fa_potong" class="btn btn-success">
                            Potong
                          </a>
                        </td>
                        <td>
                          <a href="<?=site_url()?>finishing/FinishingAkhir/jadwal_fa_jahir" class="btn btn-success">
                            Jahit
                          </a>
                        </td>
                        <td>
                          <a href="<?=site_url()?>finishing/FinishingAkhir/jadwal_fa_hardcoverr" class="btn btn-success">
                            Hardcover
                          </a>
                        </td>
                        <td>
                          <a href="<?=site_url()?>finishing/FinishingAkhir/jadwal_fa_sub"   class="btn btn-success">
                            SUB
                          </a>
                        </td>
                        <td>
                          <a href="<?=site_url()?>finishing/FinishingAkhir/jadwal_fa_spiral"   class="btn btn-success">
                            Spiral
                          </a>
                        </td>
                        <td>
                          <a href="<?=site_url()?>finishing/FinishingAkhir/jadwal_fa_klem"   class="btn btn-success">
                            Klem
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
                        <td>Finishing Akhir</td>
                        <td>Binding</td>
                        <td>Potong</td>
                        <td>Jahit</td>
                        <td>Hardcover</td>
                        <td>SUB</td>
                        <td>Spiral</td>
                        <td>Klem</td>
                        <td>Status</td>
                        <td align="center">
                          <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-plus" style="font-size:14px"></i> JADWAL
                          </button>
                          <!-- <a href="<?=site_url()?>finishing/FinishingAkhir/jadwal_fa" class="btn btn-success">
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
                          <h3>SO dari db</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <div class="card-body">
                            <h4>DETAIL ORDERAN</h4><hr>
                            <div class="row">
                              <div class="col-md-4">
                                <br>Nama Pemesan
                                <br><label class="form-label">dari db</label>
                              </div>
                              <div class="col-md-4">
                                <br>Nama Orderan
                                <br><label class="form-label">dari db</label>
                              </div>
                              <div class="col-md-4">
                                <br>Finishing
                                <br><label class="form-label">dari db</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-4">
                                <br>Ukuran
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
                            <hr><br>

                            <div class="row">
                              <div class="col-md-6">
                                Tanggal Pelaksanaan<br>
                                <input type="date" class="form-control" name="tanggal_pelaksanaan_mesin_shoe" placeholder="Tanggal Pelaksanaan" required>
                              </div>  
                            </div><br>
                            <hr><br>
                            <div class="row">
                              <div class="col-md-6">
                                Jenis Mesin<br>
                                <select id="inputState" class="form-select form-control" name="jenis_mesin" >
                                  <option value="-">-</option>
                                </select>
                              </div>
                            </div><br>
                            <hr><br>

                            <h4>Keterangan</h4>
                            <textarea name="keterangan_finishing_akhir" class="form-control" placeholder="catatan" style="height: 240px;"></textarea>


                          </div><br>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- footer modal -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-success" data-dismiss="modal">Jadwal</button>
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