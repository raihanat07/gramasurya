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
  <div class="card">
    <div class="card-header">
      <div class="card-title">
        <h3>Sub Finishing Akhir</h3>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="card-body">
        <h4>DETAIL ORDERAN</h4><hr>
        <div class="row"> 
          <div class="col-md-3">
            <br>Nomor SO
            <br><label class="form-label">dari db</label>
          </div>
          <div class="col-md-3">
            <br>Nama Orderan
            <br><label class="form-label">dari db</label>
          </div>
          <div class="col-md-3">
            <br>Finishing
            <br><label class="form-label">dari db</label>
          </div>
          <div class="col-md-3">
            <br>Laminasi
            <br><label class="form-label">dari db</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <br>Nama Pemesan
            <br><label class="form-label">dari db</label>
          </div>
          <div class="col-md-3">
            <br>Ukuran
            <br><label class="form-label">dari db</label>
          </div>
          <div class="col-md-3">
            <br>Oplag
            <br><label class="form-label">dari db</label>
          </div>
          <div class="col-md-3">
            <br>Halaman
            <br><label class="form-label">dari db</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="card-body">
              <input class="form-check-input" type="checkbox" name="status" value="Finishing Akhir" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">Finishing Akhir</label>
            </div>
          </div>
        </div><hr>

        <div class="row">
          <div class="col-md-4">
            Tanggal Pelaksanaan<br>
            <input type="date" class="form-control" name="tanggal_pelaksanaan_sub" placeholder="Tanggal Pelaksanaan">
          </div>
          <div class="col-md-4">
            Keterangan<br>
            <textarea name="keterangan_finishing_akhir_sub" class="form-control" placeholder="catatan" style="height: 150px;"></textarea>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col">Jenis Sub<br></div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="card-body">
                  <input class="form-check-input" type="checkbox" name="status" value="Binding" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">Binding</label><br>
                  <input class="form-check-input" type="checkbox" name="status" value="Hardcover" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">Hardcover</label><br>
                  <input class="form-check-input" type="checkbox" name="status" value="Jahit" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">Jahit</label>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card-body">
                  <input class="form-check-input" type="checkbox" name="status" value="Potong" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">Potong</label><br>
                  <input class="form-check-input" type="checkbox" name="status" value="Klemseng" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">Klemseng</label><br>
                  <input class="form-check-input" type="checkbox" name="status" value="Jahit" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">Jahit</label>
                </div>
              </div>
            </div>
          </div>
        </div><hr>
        
        <div class="row">
          <div class="col-md-4">
            <label>Laporan Pengerjaaan</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2"><label>Tanggal Kembali</label></div>
          <div class="col-md-2"><label>Hasil</label></div>
          <div class="col-md-2"><label>Rejek</label></div>
          <div class="col-md-2"><label>Nama Operator</label></div>
          <div class="col-md-2"><label>Kru</label></div>
          <div class="col-md-2"><label>Keterangan</label></div>
        </div>

        <div class="row">
          <div class="col-md-2">
            <input type="date" class="form-control" name="tanggal_kembali_sub" placeholder="Masukan Tanggal Pengerjaan">
          </div>
          <div class="col-md-2">
            <input type="number" class="form-control" name="hasil" placeholder="Hasil">
          </div>
          <div class="col-md-2">
            <input type="number" class="form-control" name="rejek" placeholder="Rejek">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="nama_operator" placeholder="Nama Operator">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="kru" placeholder="Kru">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="keterangan" placeholder="Keterangan">
          </div>
        </div><hr><br>

        <div class="row">
          <div class="col" align="right">
            <button type="reset" class="btn btn-default">Kembali</button>
            <button type="submit" name="simpan" class="btn btn-success">Publish</button>
          </div>
        </div>

      </div>
    </div>
  </div>  
  <!-- /.card -->
</section>
<!-- /.content -->
   