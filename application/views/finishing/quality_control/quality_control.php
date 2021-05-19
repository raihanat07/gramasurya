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
                <table id="table1" class="table table-bordered table-striped" style="font-size: 12px">
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
                          <a href="<?=site_url()?>finishing/QualityControl/tambah_qc" class="btn btn-success">
                            <i class="fa fa-plus" style="font-size:14px"></i> QC
                          </a>
                        </td>
                      </tr>
                    </tbody>
            
                </table>

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
   