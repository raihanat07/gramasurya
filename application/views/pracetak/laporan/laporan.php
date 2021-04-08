<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>LAPORAN</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Laporan</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <!-- <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button> -->
          </div>
        </div>
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover" style="font-size: 12px">
            <thead>
            <tr align="center">
              <td rowspan="2">No SO</td>
              <td rowspan="2">Tanggal Masuk</td>
              <td rowspan="2">Nama Pemesan</td>
              <td rowspan="2">Deadline</td>
              <td rowspan="2">Nama Order</td>
              <td rowspan="2">Ukuran</td>
              <td rowspan="2">SO CU</td>
              <td colspan="2">plat</td>
              <td rowspan="2">Lembar Yang Dihasilkan</td>
              <td rowspan="2">Imposisi</td>
              <td rowspan="2">Status</td>
              <td rowspan="2">Actions</td>
            </tr>
            <tr align="center">
              <td>Cover</td>
              <td>Isi</td>
            </tr>
            </thead>
            <tr>
              <td>1</td>
              <td>5/4/2021</td>
              <td>Mr X</td>
              <td>Deadline</td>
              <td>Nama Order</td>
              <td>Ukuran</td>
              <td>SO CU</td>
              <td>Cover</td>
              <td>Isi</td>
              <td>Lembar Yang Dihasilkann</td>
              <td>Imposisi</td>
              <td>Status</td>
              <td align="center">
                <a class="btn btn-primary" href="<?=site_url('pracetak/Laporan/lihat_laporan')?>">
                  <i class="fa fa-eye" style="font-size:12px"></i>
                </a>
                <a class="btn btn-primary" href="<?=site_url('pracetak/Laporan/edit_laporan')?>">
                  <i class="fa fa-pencil" style="font-size:12px"></i>
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