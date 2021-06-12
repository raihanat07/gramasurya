<section class="content">
  <div class="row bg-success" align="center" style="padding: 30px;padding-top: 35px;">
    <div class="col"><h3><b>MESIN LAMINASI</b></h3></div>
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
            <a href="<?=site_url()?>finishing/Operator/op_fp_laminasi" style="color: #FC8639  ;">
              Laminasi
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
          <input type="date" class="form-control" name="tanggal_pengerjaan_laminasi">
        </div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;padding-top: 15px;padding-bottom: 15px;">
        <div class="col-md-12">
          <label>Keterangan</label>
          <textarea class="form-control" name="keterangan_pengerjaan_laminasi" style="height: 100px;" placeholder="Keterangan"></textarea>
        </div>
      </div>
    </div>
  </div>
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row" style="padding: 15px;">
        <div class="col"><b>Laporan Pengerjaan</b><hr></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12">
          <label>Pilih Jenis Laminasi</label><br>
          <div class="row">
            <input  type="text" name="jenis_laminasi" value="" hidden>
            <div class="col-md-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_laminasi" value="doff">
                <label class="form-check-label">Doff</label>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_laminasi" value="emboss">
                <label class="form-check-label">Emboss</label>
              </div>
            </div>
            <div class="col-md-1">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_laminasi" value="glossy">
                <label class="form-check-label">Glossy</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><br>
  
  <!-- LAPORAN 1 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Laporan 1</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_laminasi1" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Hasil</label><br>
          <input type="number" name="hasil_laminasi1" placeholder="Hasil Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Rejek</label><br>
          <input type="number" name="rejek_laminasi1" placeholder="Rejek Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="nama_operator_laminasi1" placeholder="Nama Operator" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Kru</label><br>
          <input type="text" name="kru_laminasi1" placeholder="Kru" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_laminasi1" placeholder="Keterangan" style="height: 80px;" class="form-control"></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LAPORAN 2 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Laporan 2</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_laminasi2" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Hasil</label><br>
          <input type="number" name="hasil_laminasi2" placeholder="Hasil Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Rejek</label><br>
          <input type="number" name="rejek_laminasi2" placeholder="Rejek Pengerjaan" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="nama_operator_laminasi2" placeholder="Nama Operator" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Kru</label><br>
          <input type="text" name="kru_laminasi2" placeholder="Kru" class="form-control"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_laminasi2" placeholder="Keterangan" style="height: 80px;" class="form-control"></textarea>
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