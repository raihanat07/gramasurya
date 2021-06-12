<section class="content">
  <div class="row bg-success" align="center" style="padding: 30px;padding-top: 35px;">
    <div class="col"><h3><b>MESIN MBO</b></h3></div>
  </div>
</section>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="<?=site_url()?>finishing/Operator" style="color: #FC8639  ;">
              <i class="fa fa-home" style="font-size:24px"></i>
            </a>
          </li>
          <li class="breadcrumb-item">
            <a href="<?=site_url()?>finishing/Operator/op_fp" style="color: #FC8639  ;">
              Finishing Proses
            </a>
          </li>
          <li class="breadcrumb-item">
            <a href="<?=site_url()?>finishing/Operator/op_fp_mbo" style="color: #FC8639  ;">
              MBO
            </a>
          </li>
          <li class="breadcrumb-item">
            <a href="#">
              2021.5.422
            </a>
          </li>
          <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Blank Page</li> -->
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row" style="padding: 15px;">
        <div class="col"><b>Detail SO</b><hr></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;">
        <div class="col">
          Nomor SO<br>
          <label>SO 2021.5.4.22</label>
        </div>
        <div class="col">
          Nama Orderan<br>
          <label>Buku Disney Land</label>
        </div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;">
        <div class="col">
          Nama Pemesan<br>
          <label>Annete Black</label>
        </div>
        <div class="col">
          Ukuran<br>
          <label>16*24</label>
        </div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;padding-bottom: 15px;">
        <div class="col">
          Finishing<br>
          <label>Bending</label>
        </div>
        <div class="col">
          Oplag<br>
          <label>1000</label>
        </div>
      </div>
    </div>
  </div>
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row" style="padding: 15px;">
        <div class="col"><b>Detail Pengerjaan</b><hr></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;">
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" class="form-control" name="tanggal_pengerjaan_mbo">
        </div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;padding-top: 15px;padding-bottom: 15px;">
        <div class="col-md-12">
          <label>Keterangan</label>
          <textarea class="form-control" name="keterangan_pengerjaan_mbo" style="height: 100px;" placeholder="Keterangan"></textarea>
        </div>
      </div>
    </div>
  </div><br>
  
  <!-- LEMBAR 1 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 1</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="jenis_lipatan_lembar1_mbo" class="form-control" placeholder="Lipat 1" disabled><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar1_mbo" placeholder="Hasil Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="nama_operator_lembar1_mbo" placeholder="Nama Operator" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar1_mbo" placeholder="Tanggal Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar1_mbo" placeholder="Keterangan" style="height: 80px;" class="form-control"></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 2 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 2</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="jenis_lipatan_lembar2_mbo" class="form-control" placeholder="Lipat 1" disabled><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar2_mbo" placeholder="Hasil Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="nama_operator_lembar2_mbo" placeholder="Nama Operator" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar2_mbo" placeholder="Tanggal Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar2_mbo" placeholder="Keterangan" style="height: 80px;" class="form-control"></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 3 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 3</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="jenis_lipatan_lembar3_mbo" class="form-control" placeholder="Lipat 1" disabled><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar3_mbo" placeholder="Hasil Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="nama_operator_lembar3_mbo" placeholder="Nama Operator" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar3_mbo" placeholder="Tanggal Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar3_mbo" placeholder="Keterangan" style="height: 80px;" class="form-control"></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 4 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 1</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="jenis_lipatan_lembar4_mbo" class="form-control" placeholder="Lipat 1" disabled><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar4_mbo" placeholder="Hasil Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="nama_operator_lembar4_mbo" placeholder="Nama Operator" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar4_mbo" placeholder="Tanggal Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar4_mbo" placeholder="Keterangan" style="height: 80px;" class="form-control"></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 5 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 5</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="jenis_lipatan_lembar5_mbo" class="form-control" placeholder="Lipat 1" disabled><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar5_mbo" placeholder="Hasil Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="nama_operator_lembar5_mbo" placeholder="Nama Operator" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar5_mbo" placeholder="Tanggal Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar5_mbo" placeholder="Keterangan" style="height: 80px;" class="form-control"></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 6 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 6</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="jenis_lipatan_lembar6_mbo" class="form-control" placeholder="Lipat 1" disabled><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar6_mbo" placeholder="Hasil Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="nama_operator_lembar6_mbo" placeholder="Nama Operator" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar6_mbo" placeholder="Tanggal Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar6_mbo" placeholder="Keterangan" style="height: 80px;" class="form-control"></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 7 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 7</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="jenis_lipatan_lembar7_mbo" class="form-control" placeholder="Lipat 1" disabled><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar7_mbo" placeholder="Hasil Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="nama_operator_lembar7_mbo" placeholder="Nama Operator" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar7_mbo" placeholder="Tanggal Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar7_mbo" placeholder="Keterangan" style="height: 80px;" class="form-control"></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 8 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 8</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="jenis_lipatan_lembar8_mbo" class="form-control" placeholder="Lipat 1" disabled><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar8_mbo" placeholder="Hasil Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="nama_operator_lembar8_mbo" placeholder="Nama Operator" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar8_mbo" placeholder="Tanggal Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar8_mbo" placeholder="Keterangan" style="height: 80px;" class="form-control"></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 9 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 9</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="jenis_lipatan_lembar9_mbo" class="form-control" placeholder="Lipat 1" disabled><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar9_mbo" placeholder="Hasil Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="nama_operator_lembar9_mbo" placeholder="Nama Operator" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar9_mbo" placeholder="Tanggal Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar9_mbo" placeholder="Keterangan" style="height: 80px;" class="form-control"></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 10 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 10</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="jenis_lipatan_lembar10_mbo" class="form-control" placeholder="Lipat 1" disabled><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar10_mbo" placeholder="Hasil Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="nama_operator_lembar10_mbo" placeholder="Nama Operator" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar10_mbo" placeholder="Tanggal Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar10_mbo" placeholder="Keterangan" style="height: 80px;" class="form-control"></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 11 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 11</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="jenis_lipatan_lembar11_mbo" class="form-control" placeholder="Lipat 1" disabled><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar11_mbo" placeholder="Hasil Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="nama_operator_lembar11_mbo" placeholder="Nama Operator" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar11_mbo" placeholder="Tanggal Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar11_mbo" placeholder="Keterangan" style="height: 80px;" class="form-control"></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 12 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 12</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="jenis_lipatan_lembar12_mbo" class="form-control" placeholder="Lipat 1" disabled><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar12_mbo" placeholder="Hasil Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="nama_operator_lembar12_mbo" placeholder="Nama Operator" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar12_mbo" placeholder="Tanggal Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar12_mbo" placeholder="Keterangan" style="height: 80px;" class="form-control"></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 13 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 13</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="jenis_lipatan_lembar13_mbo" class="form-control" placeholder="Lipat 1" disabled><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar13_mbo" placeholder="Hasil Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="nama_operator_lembar13_mbo" placeholder="Nama Operator" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar13_mbo" placeholder="Tanggal Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar13_mbo" placeholder="Keterangan" style="height: 80px;" class="form-control"></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 14 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 14</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="jenis_lipatan_lembar14_mbo" class="form-control" placeholder="Lipat 1" disabled><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar14_mbo" placeholder="Hasil Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="nama_operator_lembar14_mbo" placeholder="Nama Operator" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar14_mbo" placeholder="Tanggal Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar14_mbo" placeholder="Keterangan" style="height: 80px;" class="form-control"></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 15 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 15</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="jenis_lipatan_lembar15_mbo" class="form-control" placeholder="Lipat 1" disabled><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar15_mbo" placeholder="Hasil Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="nama_operator_lembar15_mbo" placeholder="Nama Operator" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar15_mbo" placeholder="Tanggal Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar15_mbo" placeholder="Keterangan" style="height: 80px;" class="form-control"></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 16 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 16</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="jenis_lipatan_lembar16_mbo" class="form-control" placeholder="Lipat 1" disabled><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar16_mbo" placeholder="Hasil Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="nama_operator_lembar16_mbo" placeholder="Nama Operator" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar16_mbo" placeholder="Tanggal Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar16_mbo" placeholder="Keterangan" style="height: 80px;" class="form-control"></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 17 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 17</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="jenis_lipatan_lembar17_mbo" class="form-control" placeholder="Lipat 1" disabled><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar17_mbo" placeholder="Hasil Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="nama_operator_lembar17_mbo" placeholder="Nama Operator" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar17_mbo" placeholder="Tanggal Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar17_mbo" placeholder="Keterangan" style="height: 80px;" class="form-control"></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 18 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 18</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="jenis_lipatan_lembar18_mbo" class="form-control" placeholder="Lipat 1" disabled><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar18_mbo" placeholder="Hasil Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="nama_operator_lembar18_mbo" placeholder="Nama Operator" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar18_mbo" placeholder="Tanggal Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar18_mbo" placeholder="Keterangan" style="height: 80px;" class="form-control"></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 19 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 19</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="jenis_lipatan_lembar19_mbo" class="form-control" placeholder="Lipat 1" disabled><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar19_mbo" placeholder="Hasil Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="nama_operator_lembar19_mbo" placeholder="Nama Operator" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar19_mbo" placeholder="Tanggal Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar19_mbo" placeholder="Keterangan" style="height: 80px;" class="form-control"></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 20 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 20</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="jenis_lipatan_lembar20_mbo" class="form-control" placeholder="Lipat 1" disabled><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar20_mbo" placeholder="Hasil Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="nama_operator_lembar20_mbo" placeholder="Nama Operator" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar20_mbo" placeholder="Tanggal Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar20_mbo" placeholder="Keterangan" style="height: 80px;" class="form-control"></textarea>
        </div>
      </div>
    </div>
  </div><br>
  
  <div class="row" style="padding: 10px;">
    <div class="col">
      <button type="submit" class="btn btn-success" style="width: 100%;">SIMPAN</button>
    </div>
  </div><br>

  <!-- TOMBOL MODAL -->
  <!-- <div class="row" align="center">
    <div class="col">
      <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal" style="width: 100%;min-height: 50px;padding-top: 12px;">
        <i class="fa fa-pencil" style="font-size:14px;margin-right:5px"></i>
        <b>Lapor Pengerjaan</b>
      </button>
    </div>
  </div><br> -->

  <!-- MODAL -->
  <!-- <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <ul class="nav nav-pills row">
            <li class="nav-item col"><a class="nav-link btn-outline-success active" href="#lp1" data-toggle="tab">Laporan 1</a></li>
            <li class="nav-item col"><a class="nav-link btn-outline-success" href="#lp2" data-toggle="tab">Laporan 2</a></li>
          </ul>
        </div>
        <div class="row" style="padding:20px;">
          <div class="col">
            <div class="tab-content">
              <div class="tab-pane active" id="lp1">
                INI LP 1
              </div>
              <div class="tab-pane" id="lp2">
                INI LP 2
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
</section>
<!-- /.content -->  