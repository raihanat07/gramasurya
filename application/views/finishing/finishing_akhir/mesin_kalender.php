  <!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>FINISHING AKHIR</h1>
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
            <h3 class="card-title">Jadwal Finishing Akhir</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="tab-content">
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
                  <td>Finishing Akhir</td>
                  <td>
                    <a href="<?=site_url()?>finishing/FinishingAkhir/jadwal_fa_klemseng"   class="btn btn-success">
                      Klemseng
                    </a>
                  </td>
                  <td>
                    <a href="<?=site_url()?>finishing/FinishingAkhir/jadwal_fa_spiral"   class="btn btn-success">
                      Spiral
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
                  <td>Klemseng</td>
                  <td>Spiral</td>
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
          </div>

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
                      <li class="nav-item col"><a class="nav-link btn-outline-success active" href="#klemseng" data-toggle="tab">KLEMSENG</a></li>
                      <li class="nav-item col"><a class="nav-link btn-outline-success" href="#spiral" data-toggle="tab">SPIRAL</a></li>
                    </ul>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="tab-pane active" id="klemseng">
                          <h4>DETAIL ORDERAN</h4><hr>
                          <div class="row">
                            <div class="col-md-4">
                              <br>Nomor SO
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
                              <label>Tanggal Pelaksanaan</label><br>
                              <input type="date" class="form-control" name="tanggal_pelaksanaan_klemseng" placeholder="Tanggal Pelaksanaan">
                            </div>
                          </div><hr>

                          <div class="row">
                            <div class="col-md-4">
                              Jenis Mesin<br>
                              <label>Mesin Klemseng</label>
                            </div>
                            <div class="col-md-4">
                              Hasil Gabungan<br>
                              <label>dari db</label>
                            </div>
                            <div class="col-md-4">
                              Tanggal Pengerjaan<br>
                              <label>dari db</label>
                            </div>
                          </div><hr>

                          <h4>Keterangan</h4>
                          <textarea name="keterangan_finishing_akhir_klemseng" class="form-control" placeholder="catatan" style="height: 240px;"></textarea>
                        </div>
                        <div class="tab-pane" id="spiral">
                          <h4>DETAIL ORDERAN</h4><hr>
                          <div class="row">
                            <div class="col-md-4">
                              <br>Nomor SO
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
                              <label>Tanggal Pelaksanaan</label><br>
                              <input type="date" class="form-control" name="tanggal_pelaksanaan_spiral" placeholder="Tanggal Pelaksanaan">
                            </div>
                          </div><hr>

                          <div class="row">
                            <div class="col-md-4">
                              Jenis Mesin<br>
                              <label>Mesin Spiral</label>
                            </div>
                            <div class="col-md-4">
                              Hasil Gabungan<br>
                              <label>dari db</label>
                            </div>
                            <div class="col-md-4">
                              Tanggal Pengerjaan<br>
                              <label>dari db</label>
                            </div>
                          </div><hr>

                          <h4>Keterangan</h4>
                          <textarea name="keterangan_finishing_akhir_spiral" class="form-control" placeholder="catatan" style="height: 240px;"></textarea>
                        </div>
                      </div>
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