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
          <h3 class="card-title coba">Cetak, Edit SO [<label>dari db</label>]</h3>

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
                  <div class="col-md-7"><label class="form-label">dari db</label></div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row"><br>
                  <div class="col-md-5">Nama Orderan</div>
                  <div class="col-md-7"><label class="form-label">dari db</label></div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row"><br>
                  <div class="col-md-5">Ukuran</div>
                  <div class="col-md-7"><label class="form-label">dari db</label></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="row"><br>
                  <div class="col-md-5">Tanggal Masuk</div>
                  <div class="col-md-7"><label class="form-label">dari db</label></div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row"><br>
                  <div class="col-md-5">Nama Pemesan</div>
                  <div class="col-md-7"><label class="form-label">dari db</label></div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row"><br>
                  <div class="col-md-5">Halaman</div>
                  <div class="col-md-7"><label class="form-label">dari db</label></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="row"><br>
                  <div class="col-md-5">Deadline</div>
                  <div class="col-md-7"><label class="form-label">dari db</label></div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row"><br>
                  <div class="col-md-5">Jenis Cetakan</div>
                  <div class="col-md-7"><label class="form-label">dari db</label></div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row"><br>
                  <div class="col-md-5">Oplag</div>
                  <div class="col-md-7"><label class="form-label">dari db</label></div>
                </div>
              </div>
            </div><br>
            
            <div class="row">
              <div class="col-md-6">
                <label>Tanggal Pelaksanaan</label>
                <input type="date" class="form-control" name="tanggal_pelaksanaan" required>
              </div>
              <div class="col-md-6">
                <label>Mesin</label>
                <input type="text" class="form-control" name="nomor_so" placeholder="Masukan Nomor SO" required>
              </div>
            </div><br>
            <div class="row">
              <div class="col-md-6">
                <label>Target</label>
                <input type="number" class="form-control" name="target" placeholder="Masukan Jumlah Target" required>
              </div>
            </div><br>
            <div class="row">
              <div class="col-md-6">
                <label>Druk</label>
                <input type="number" class="form-control" name="druk" placeholder="Masukan Jumlah Target" required>
              </div>
            </div><br>


            <div class="row" align="right">
              <div class="col">
                <button type="reset" class="btn btn-default">Reset</button>
                <button type="submit" name="add" class="btn btn-success">Simpan</button>
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