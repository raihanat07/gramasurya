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
  <div class="card">
    <div class="card-header">
      <div class="card-title">
        <h3>Mesin Shoe</h3>
      </div>
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
            Surat Order<br>
            <input type="text" class="form-control" name="so" required>
          </div>
          <div class="col-md-6">
            Status<br>
            <div class="form-check">
              <input type="text" name="finishingprosesisi" value="" hidden>
              <input class="form-check-input" type="checkbox" name="finishingprosesisi" value="Finishing Proses Isi">
              <label class="form-check-label" for="flexCheckDefault">Finishing Proses Isi</label>
            </div>
          </div>  
        </div><br>
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
            Hasil<br>
            <input type="number" class="form-control" name="hasil_laminasi" placeholder="Masukan Jumlah Lembar" required>
          </div>
          <div class="col-md-6">
            Rejek<br>
            <input type="number" class="form-control" name="rejek_laminasi" placeholder="Masukan Jumlah Lembar" required>
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-6">
            Keterangan<br>
            <input type="text" class="form-control" name="keterangan_laminasi" required>
          </div>
        </div><br>
        <hr><br>

        <h4>Laporan Pengerjaan</h4><br>
        <div class="row">
          <div class="col-md-2">Hasil</div>
          <div class="col-md-4">: <label>dari db</label></div>
          <div class="col-md-2">Rejek</div>
          <div class="col-md-4">: <label>dari db</label></div>
        </div><br>
        <div class="row">
          <div class="col-md-2">Keterangan</div>
          <div class="col-md-10">: <label>dari db</label></div>
        </div><br>
        <div class="row">
          <div class="col-md-2">Operator</div>
          <div class="col-md-10">: <label>dari db</label></div>
        </div><br>
        <div class="row">
          <div class="col-md-2">Tanggal</div>
          <div class="col-md-10">: <label>dari db</label></div>
        </div><br>

        <div class="row">
          <div class="col" align="right">
            <button type="reset" class="btn btn-default">Kembali</button>
            <button type="submit" name="simpan" class="btn btn-success">Jadwal</button>
          </div>
        </div>

      </div>
    </div>
  </div>  
  <!-- /.card -->
</section>
<!-- /.content -->
   