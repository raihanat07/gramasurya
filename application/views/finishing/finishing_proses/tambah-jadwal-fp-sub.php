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
        <h3>Penjadwalan Susun</h3>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="card-body">
        <h4>DETAIL ORDERAN</h4><hr>
        <div class="row">
          <div class="col-md-3">
            Nomor SO
            <br><label class="form-label">dari db</label>
          </div>
          <div class="col-md-3">
            Nama Orderan
            <br><label class="form-label">dari db</label>
          </div>
          <div class="col-md-3">
            Finishing
            <br><label class="form-label">dari db</label>
          </div>
          <div class="col-md-3">
            Laminasi
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
            <br><label>Status</label><br>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="finishingprosesisi" value="Finishing Proses Isi">
              <label class="form-check-label" for="flexCheckDefault">Finishing Proses Isi</label>
            </div>
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-4">
            <label>Tanggal Pelaksanaan</label><br>
            <input type="date" class="form-control" name="tanggal_pelaksanaan_sub" placeholder="Tanggal Pelaksanaan" required>
          </div>
          <div class="col-md-2">
            <label>Jenis Sub</label><br>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="jenis_sub_lipat" value="Lipat" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">Lipat</label><br>
              <input class="form-check-input" type="checkbox" name="jenis_sub_susun_gabung" value="Susun Gabung" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">Susun / Gabung</label><br>
              <input class="form-check-input" type="checkbox" name="jenis_sub_laminasi" value="Laminasi" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">Laminasi</label>
            </div>
          </div>
          <div class="col-md-4">
            <label>Keterangan</label><br>
            <textarea name="keterangan_jadwal_fp_shoe" class="form-control" placeholder="catatan" style="height: 100px;"></textarea>
          </div>
        </div><hr>

        <div class="row">
          <div class="col-md-12">
            <label>Laporan Pengerjaan</label>
          </div>
        </div><br>
        <div class="row" align="center">
          <div class="col-md-3"><label>Tanggal Kembali Sub</label></div>
          <div class="col-md-3"><label>Hasil</label></div>
          <div class="col-md-3"><label>Rejek</label></div>
          <div class="col-md-3"><label>Keterangan</label></div>
        </div><br>
        <div class="row">
          <div class="col-md-3">
            <input type="date" class="form-control" name="tanggal_kembali_sub" placeholder="Tanggal Kembali Sub">
          </div>
          <div class="col-md-3">
            <input type="number" class="form-control" name="hasil" placeholder="Hasil">
          </div>
          <div class="col-md-3">
            <input type="number" class="form-control" name="rejek" placeholder="Rejek">
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control" name="keterangan" placeholder="Keterangan">
          </div>
        </div><hr><br>

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
   