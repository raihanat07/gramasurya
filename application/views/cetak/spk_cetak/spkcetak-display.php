<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="<?=site_url()?>cetak" class="btn btn-warning btn-lg">
            <i class="fa fa-chevron-left" style="font-size:18px"></i> KEMBALI
            </a>
          </li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <div class="card-title coba">
        <div class="row">
          <div class="col-sm-6">SPK MESIN (disesuaikan)</div>
          <div class="col-md-6" align="right"><label>Kapasitas : (disesuaikan)/Jam</label></div>
        </div>
      </div>

      <div class="card-tools">
        <!-- <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fa fa-minus"></i></button> -->
      </div>
    </div>
    <div class="card-body">
      <table id="example2" class="table table-bordered table-hover" style="font-size: 12px;">
        <thead>
          <tr align="center">
            <td>Hari, Tanggal Pelaksanaan</td>
            <td>urutan</td>
            <td>No SO</td>
            <td>Tanggal Masuk</td>
            <td>Deadline</td>
            <td>Nama Pemesan</td>
            <td>Nama Order</td>
            <td>Ukuran</td>
            <td>Halaman</td>
            <td>Oplag</td>
            <td>Jenis Cetakan</td>
            <td>Jumlah Set</td>
            <td>Target</td>
            <td>Druk</td>
            <td>Actions</td>
          </tr>
        </thead>
        <tr>
          <td rowspan="2">Hari, Tanggal Pelaksanaan</td>
          <td>urutan</td>
          <td>No SO</td>
          <td>Tanggal Masuk</td>
          <td>Deadline</td>
          <td>Nama Pemesan</td>
          <td>Nama Order</td>
          <td>Ukuran</td>
          <td>Halaman</td>
          <td>Oplag</td>
          <td>Jenis Cetakan</td>
          <td>Jumlah Set</td>
          <td>Target</td>
          <td>Druk</td>
          <td align="center">
            <a href="<?=site_url('cetak/Spk/edit_spk')?>">
              <i class="fa fa-pencil" style="font-size:18px;margin-right: 20px;"></i>
            </a>
            <a href="<?=site_url('cetak/Spk/lihat_spk')?>">
              <i class="fa fa-eye" style="font-size:18px;"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td>urutan</td>
          <td>No SO</td>
          <td>Tanggal Masuk</td>
          <td>Deadline</td>
          <td>Nama Pemesan</td>
          <td>Nama Order</td>
          <td>Ukuran</td>
          <td>Halaman</td>
          <td>Oplag</td>
          <td>Jenis Cetakan</td>
          <td>Jumlah Set</td>
          <td>Target</td>
          <td>Druk</td>
          <td align="center">
            <a href="<?=site_url('cetak/Spk/edit_spk')?>">
              <i class="fa fa-pencil" style="font-size:18px;margin-right: 20px;"></i>
            </a>
            <a href="<?=site_url('cetak/Spk/lihat_spk')?>">
              <i class="fa fa-eye" style="font-size:18px;"></i>
            </a>
          </td>
        </tr>
      </table>
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