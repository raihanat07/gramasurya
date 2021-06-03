<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>QUALITY CONTROL</h1>
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
            <h3 class="card-title">Data Quality Control</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-striped" style="font-size: 12px">
            <thead>
              <tr align="center">
                <td>No SO</td>
                <td>Tanggal Masuk</td>
                <td>Deadline</td>
                <td>Nama Pemesan</td>
                <td>Nama Order</td>
                <td>Ukuran</td>
                <td>Halaman</td>
                <td>Oplag</td>
                <td>Tanggal Selesai</td>
                <td>Status</td>
                <td>Keterangan</td>
                <td>Actions</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>No SO</td>
                <td>Tanggal Masuk</td>
                <td>Deadline</td>
                <td>Nama Pemesan</td>
                <td>Nama Order</td>
                <td>Ukuran</td>
                <td>Halaman</td>
                <td>Oplag</td>
                <td>Tanggal Selesai</td>
                <td>Status</td>
                <td>Keterangan</td>
                <td align="center">
                  <a href="<?=site_url('finishing/QualityControl/lihat_qc')?>">
                    <i class="fa fa-eye" style="font-size:18px;margin-right: 20px;"></i>
                  </a>
                  <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
                    <i class="fa fa-plus" style="font-size:14px"></i> QC
                  </button>
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
                          <input type="date" class="form-control" name="tanggal_pelaksanaan_mesin_binding" placeholder="Tanggal Pelaksanaan" required>
                        </div>
                        <div class="col-md-6">
                          Status<br>
                          <select id="inputState" class="form-select form-control" name="status" >
                            <option value="-">-</option>
                            <option value="Diterima">Diterima</option>
                            <option value="Ditolak">Ditolak</option>
                          </select>
                        </div>  
                      </div><br>
                      <hr><br>

                      <div class="row">
                        <div class="col-md-6">
                          Hasil QC<br>
                          <input type="number" class="form-control" name="hasil_qc" placeholder="Masukan Jumlah Lembar" required>
                        </div>
                        <div class="col-md-6">
                          Rejek QC<br>
                          <input type="number" class="form-control" name="rejek_qc" placeholder="Masukan Jumlah Lembar" required>
                        </div>
                      </div><br>
                      <hr><br>

                      <h4>Keterangan</h4>
                      <textarea name="keterangan_qc" class="form-control" placeholder="catatan" style="height: 240px;"></textarea>
                    </div><br>
                  </div>
                  <!-- footer modal -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal">Jadwal</button>
                  </div>
                <!-- /.card-body -->
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