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
        <h3>Penjadwalan Mesin Shoe</h3>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="card-body">
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
        </div><br>
        <div class="row">
          <div class="col-md-4">
            <label>Keterangan</label><br>
            <textarea name="keterangan_jadwal_fp_shoe" class="form-control" placeholder="catatan" style="height: 100px;"></textarea>
          </div>
          <div class="col-md-4">
            <label>Tanggal Pelaksanaan</label><br>
            <input type="date" class="form-control" name="tanggal_pelaksanaan_mesin_shoe" placeholder="Tanggal Pelaksanaan" required>
          </div>
          <div class="col-md-4">
            <label>Status</label><br>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="finishingprosesisi" value="Finishing Proses Isi">
              <label class="form-check-label" for="flexCheckDefault">Finishing Proses Isi</label>
            </div>
          </div>  
        </div><hr>

        <div class="row">
          <div class="col-md-12">
            <label>Laporan Pengerjaan</label>
          </div>
        </div><br>
        <div class="row" align="center">
          <div class="col-md-2"></div>
          <div class="col-md-2"><label>Jenis Lipatan</label></div>
          <div class="col-md-2"><label>Hasil Lipatan</label></div>
          <div class="col-md-2"><label>Nama Operator</label></div>
          <div class="col-md-2"><label>Tanggal Pengerjaan</label></div>
          <div class="col-md-2"><label>Keterangan</label></div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label>Lembar 1</label></div>
          <div class="col-md-2">
            <select id="inputState" class="form-select form-control" name="lipat_lembar_1" >
              <option value="-">-</option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
            </select>
          </div>
          <div class="col-md-2">
            <input type="number" class="form-control" name="hasil_lipatan_lembar_1" placeholder="Hasil Lipatan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="operator_lembar_1" placeholder="Nama Operator">
          </div>
          <div class="col-md-2">
            <input type="date" class="form-control" name="tanggal_pengerjaan_lembar_1" placeholder="Tanggal Pengerjaan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="keterangan_lembar_1" placeholder="Keterangan">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label>Lembar 2</label></div>
          <div class="col-md-2">
            <select id="inputState" class="form-select form-control" name="lipat_lembar_2" >
              <option value="-">-</option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
            </select>
          </div>
          <div class="col-md-2">
            <input type="number" class="form-control" name="hasil_lipatan_lembar_2" placeholder="Hasil Lipatan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="operator_lembar_2" placeholder="Nama Operator">
          </div>
          <div class="col-md-2">
            <input type="date" class="form-control" name="tanggal_pengerjaan_lembar_2" placeholder="Tanggal Pengerjaan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="keterangan_lembar_2" placeholder="Keterangan">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label>Lembar 3</label></div>
          <div class="col-md-2">
            <select id="inputState" class="form-select form-control" name="lipat_lembar_3" >
              <option value="-">-</option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
            </select>
          </div>
          <div class="col-md-2">
            <input type="number" class="form-control" name="hasil_lipatan_lembar_3" placeholder="Hasil Lipatan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="operator_lembar_3" placeholder="Nama Operator">
          </div>
          <div class="col-md-2">
            <input type="date" class="form-control" name="tanggal_pengerjaan_lembar_3" placeholder="Tanggal Pengerjaan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="keterangan_lembar_3" placeholder="Keterangan">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label>Lembar 4</label></div>
          <div class="col-md-2">
            <select id="inputState" class="form-select form-control" name="lipat_lembar_4" >
              <option value="-">-</option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
            </select>
          </div>
          <div class="col-md-2">
            <input type="number" class="form-control" name="hasil_lipatan_lembar_4" placeholder="Hasil Lipatan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="operator_lembar_4" placeholder="Nama Operator">
          </div>
          <div class="col-md-2">
            <input type="date" class="form-control" name="tanggal_pengerjaan_lembar_4" placeholder="Tanggal Pengerjaan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="keterangan_lembar_4" placeholder="Keterangan">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label>Lembar 5</label></div>
          <div class="col-md-2">
            <select id="inputState" class="form-select form-control" name="lipat_lembar_5" >
              <option value="-">-</option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
            </select>
          </div>
          <div class="col-md-2">
            <input type="number" class="form-control" name="hasil_lipatan_lembar_5" placeholder="Hasil Lipatan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="operator_lembar_5" placeholder="Nama Operator">
          </div>
          <div class="col-md-2">
            <input type="date" class="form-control" name="tanggal_pengerjaan_lembar_5" placeholder="Tanggal Pengerjaan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="keterangan_lembar_5" placeholder="Keterangan">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label>Lembar 6</label></div>
          <div class="col-md-2">
            <select id="inputState" class="form-select form-control" name="lipat_lembar_6" >
              <option value="-">-</option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
            </select>
          </div>
          <div class="col-md-2">
            <input type="number" class="form-control" name="hasil_lipatan_lembar_6" placeholder="Hasil Lipatan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="operator_lembar_6" placeholder="Nama Operator">
          </div>
          <div class="col-md-2">
            <input type="date" class="form-control" name="tanggal_pengerjaan_lembar_6" placeholder="Tanggal Pengerjaan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="keterangan_lembar_6" placeholder="Keterangan">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label>Lembar 7</label></div>
          <div class="col-md-2">
            <select id="inputState" class="form-select form-control" name="lipat_lembar_7" >
              <option value="-">-</option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
            </select>
          </div>
          <div class="col-md-2">
            <input type="number" class="form-control" name="hasil_lipatan_lembar_7" placeholder="Hasil Lipatan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="operator_lembar_7" placeholder="Nama Operator">
          </div>
          <div class="col-md-2">
            <input type="date" class="form-control" name="tanggal_pengerjaan_lembar_7" placeholder="Tanggal Pengerjaan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="keterangan_lembar_7" placeholder="Keterangan">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label>Lembar 8</label></div>
          <div class="col-md-2">
            <select id="inputState" class="form-select form-control" name="lipat_lembar_8" >
              <option value="-">-</option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
            </select>
          </div>
          <div class="col-md-2">
            <input type="number" class="form-control" name="hasil_lipatan_lembar_8" placeholder="Hasil Lipatan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="operator_lembar_8" placeholder="Nama Operator">
          </div>
          <div class="col-md-2">
            <input type="date" class="form-control" name="tanggal_pengerjaan_lembar_8" placeholder="Tanggal Pengerjaan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="keterangan_lembar_8" placeholder="Keterangan">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label>Lembar 9</label></div>
          <div class="col-md-2">
            <select id="inputState" class="form-select form-control" name="lipat_lembar_9" >
              <option value="-">-</option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
            </select>
          </div>
          <div class="col-md-2">
            <input type="number" class="form-control" name="hasil_lipatan_lembar_9" placeholder="Hasil Lipatan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="operator_lembar_9" placeholder="Nama Operator">
          </div>
          <div class="col-md-2">
            <input type="date" class="form-control" name="tanggal_pengerjaan_lembar_9" placeholder="Tanggal Pengerjaan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="keterangan_lembar_9" placeholder="Keterangan">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label>Lembar 10</label></div>
          <div class="col-md-2">
            <select id="inputState" class="form-select form-control" name="lipat_lembar_10" >
              <option value="-">-</option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
            </select>
          </div>
          <div class="col-md-2">
            <input type="number" class="form-control" name="hasil_lipatan_lembar_10" placeholder="Hasil Lipatan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="operator_lembar_10" placeholder="Nama Operator">
          </div>
          <div class="col-md-2">
            <input type="date" class="form-control" name="tanggal_pengerjaan_lembar_10" placeholder="Tanggal Pengerjaan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="keterangan_lembar_10" placeholder="Keterangan">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label>Lembar 11</label></div>
          <div class="col-md-2">
            <select id="inputState" class="form-select form-control" name="lipat_lembar_11" >
              <option value="-">-</option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
            </select>
          </div>
          <div class="col-md-2">
            <input type="number" class="form-control" name="hasil_lipatan_lembar_11" placeholder="Hasil Lipatan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="operator_lembar_11" placeholder="Nama Operator">
          </div>
          <div class="col-md-2">
            <input type="date" class="form-control" name="tanggal_pengerjaan_lembar_11" placeholder="Tanggal Pengerjaan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="keterangan_lembar_11" placeholder="Keterangan">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label>Lembar 12</label></div>
          <div class="col-md-2">
            <select id="inputState" class="form-select form-control" name="lipat_lembar_12" >
              <option value="-">-</option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
            </select>
          </div>
          <div class="col-md-2">
            <input type="number" class="form-control" name="hasil_lipatan_lembar_12" placeholder="Hasil Lipatan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="operator_lembar_12" placeholder="Nama Operator">
          </div>
          <div class="col-md-2">
            <input type="date" class="form-control" name="tanggal_pengerjaan_lembar_12" placeholder="Tanggal Pengerjaan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="keterangan_lembar_12" placeholder="Keterangan">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label>Lembar 13</label></div>
          <div class="col-md-2">
            <select id="inputState" class="form-select form-control" name="lipat_lembar_13" >
              <option value="-">-</option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
            </select>
          </div>
          <div class="col-md-2">
            <input type="number" class="form-control" name="hasil_lipatan_lembar_13" placeholder="Hasil Lipatan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="operator_lembar_13" placeholder="Nama Operator">
          </div>
          <div class="col-md-2">
            <input type="date" class="form-control" name="tanggal_pengerjaan_lembar_13" placeholder="Tanggal Pengerjaan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="keterangan_lembar_13" placeholder="Keterangan">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label>Lembar 14</label></div>
          <div class="col-md-2">
            <select id="inputState" class="form-select form-control" name="lipat_lembar_14" >
              <option value="-">-</option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
            </select>
          </div>
          <div class="col-md-2">
            <input type="number" class="form-control" name="hasil_lipatan_lembar_14" placeholder="Hasil Lipatan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="operator_lembar_14" placeholder="Nama Operator">
          </div>
          <div class="col-md-2">
            <input type="date" class="form-control" name="tanggal_pengerjaan_lembar_14" placeholder="Tanggal Pengerjaan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="keterangan_lembar_14" placeholder="Keterangan">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label>Lembar 15</label></div>
          <div class="col-md-2">
            <select id="inputState" class="form-select form-control" name="lipat_lembar_15" >
              <option value="-">-</option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
            </select>
          </div>
          <div class="col-md-2">
            <input type="number" class="form-control" name="hasil_lipatan_lembar_15" placeholder="Hasil Lipatan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="operator_lembar_15" placeholder="Nama Operator">
          </div>
          <div class="col-md-2">
            <input type="date" class="form-control" name="tanggal_pengerjaan_lembar_15" placeholder="Tanggal Pengerjaan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="keterangan_lembar_15" placeholder="Keterangan">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label>Lembar 16</label></div>
          <div class="col-md-2">
            <select id="inputState" class="form-select form-control" name="lipat_lembar_16" >
              <option value="-">-</option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
            </select>
          </div>
          <div class="col-md-2">
            <input type="number" class="form-control" name="hasil_lipatan_lembar_16" placeholder="Hasil Lipatan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="operator_lembar_16" placeholder="Nama Operator">
          </div>
          <div class="col-md-2">
            <input type="date" class="form-control" name="tanggal_pengerjaan_lembar_16" placeholder="Tanggal Pengerjaan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="keterangan_lembar_16" placeholder="Keterangan">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label>Lembar 17</label></div>
          <div class="col-md-2">
            <select id="inputState" class="form-select form-control" name="lipat_lembar_17" >
              <option value="-">-</option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
            </select>
          </div>
          <div class="col-md-2">
            <input type="number" class="form-control" name="hasil_lipatan_lembar_17" placeholder="Hasil Lipatan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="operator_lembar_17" placeholder="Nama Operator">
          </div>
          <div class="col-md-2">
            <input type="date" class="form-control" name="tanggal_pengerjaan_lembar_17" placeholder="Tanggal Pengerjaan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="keterangan_lembar_17" placeholder="Keterangan">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label>Lembar 18</label></div>
          <div class="col-md-2">
            <select id="inputState" class="form-select form-control" name="lipat_lembar_18" >
              <option value="-">-</option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
            </select>
          </div>
          <div class="col-md-2">
            <input type="number" class="form-control" name="hasil_lipatan_lembar_18" placeholder="Hasil Lipatan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="operator_lembar_18" placeholder="Nama Operator">
          </div>
          <div class="col-md-2">
            <input type="date" class="form-control" name="tanggal_pengerjaan_lembar_18" placeholder="Tanggal Pengerjaan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="keterangan_lembar_18" placeholder="Keterangan">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label>Lembar 19</label></div>
          <div class="col-md-2">
            <select id="inputState" class="form-select form-control" name="lipat_lembar_19" >
              <option value="-">-</option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
            </select>
          </div>
          <div class="col-md-2">
            <input type="number" class="form-control" name="hasil_lipatan_lembar_19" placeholder="Hasil Lipatan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="operator_lembar_19" placeholder="Nama Operator">
          </div>
          <div class="col-md-2">
            <input type="date" class="form-control" name="tanggal_pengerjaan_lembar_19" placeholder="Tanggal Pengerjaan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="keterangan_lembar_19" placeholder="Keterangan">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label>Lembar 20</label></div>
          <div class="col-md-2">
            <select id="inputState" class="form-select form-control" name="lipat_lembar_20" >
              <option value="-">-</option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
            </select>
          </div>
          <div class="col-md-2">
            <input type="number" class="form-control" name="hasil_lipatan_lembar_20" placeholder="Hasil Lipatan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="operator_lembar_20" placeholder="Nama Operator">
          </div>
          <div class="col-md-2">
            <input type="date" class="form-control" name="tanggal_pengerjaan_lembar_20" placeholder="Tanggal Pengerjaan">
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="keterangan_lembar_20" placeholder="Keterangan">
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
   