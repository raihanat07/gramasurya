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
        <h3>SO dari db</h3>
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

        <div class="row">
          <div class="col-md-3">
            <b>Lipat</b>
          </div>
          <div class="col-md-5">
            <b>Lembar</b>
          </div>
        </div><br>

        <div class="row">
          <div class="col-md-3">
            <div class="form-check">
              <input type="text" name="lipat1" value="" hidden>
              <input class="form-check-input" type="checkbox" name="lipat1" value="lipat 1">
              <label class="form-check-label" for="flexCheckDefault">Lipat 1</label>
            </div> 
          </div>
          <div class="col-md-1">
            Lipat 1
          </div>
          <div class="col-md-4">
            <input type="number" class="form-control" name="lipat1_mesin_shoe" placeholder="Masukan Jumlah Lembar">
          </div>
        </div><br>

        <div class="row">
          <div class="col-md-3">
            <div class="form-check">
              <input type="text" name="lipat2" value="" hidden>
              <input class="form-check-input" type="checkbox" name="lipat2" value="lipat 2">
              <label class="form-check-label" for="flexCheckDefault">Lipat 2</label>
            </div> 
          </div>
          <div class="col-md-1">
            Lipat 2
          </div>
          <div class="col-md-4">
            <input type="number" class="form-control" name="lipat2_mesin_shoe" placeholder="Masukan Jumlah Lembar">
          </div>
        </div><br>

        <div class="row">
          <div class="col-md-3">
            <div class="form-check">
              <input type="text" name="lipat3" value="" hidden>
              <input class="form-check-input" type="checkbox" name="lipat3" value="lipat 3">
              <label class="form-check-label" for="flexCheckDefault">Lipat 3</label>
            </div> 
          </div>
          <div class="col-md-1">
            Lipat 3
          </div>
          <div class="col-md-4">
            <input type="number" class="form-control" name="lipat3_mesin_shoe" placeholder="Masukan Jumlah Lembar">
          </div>
        </div><br>

        <div class="row">
          <div class="col-md-3">
            <div class="form-check">
              <input type="text" name="lipat4" value="" hidden>
              <input class="form-check-input" type="checkbox" name="lipat4" value="lipat 4">
              <label class="form-check-label" for="flexCheckDefault">Lipat 4</label>
            </div> 
          </div>
          <div class="col-md-1">
            Lipat 4
          </div>
          <div class="col-md-4">
            <input type="number" class="form-control" name="lipat4_mesin_shoe" placeholder="Masukan Jumlah Lembar">
          </div>
        </div><br>

        <h4>Keterangan</h4>
        <textarea name="Keterangan_finishing_proses" class="form-control" placeholder="catatan" style="height: 240px;"></textarea><br>

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
   