<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SURAT ORDER</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="<?=site_url('pracetak/SuratOrder/tambah_so')?>"  class="btn btn-success btn-lg">
                  <i class="fa fa-plus"></i> TAMBAH
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
          <h3 class="card-title coba">Data Surat Order</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <td>Nomor SO</td>
              <td>Tanggal Masuk</td>
              <td>Nama Pemesan</td>
              <td>Deadline</td>
              <td>Nama Orderan</td>
              <td>SO CU</td>
              <td>Status</td>
              <td>Actions</td>
            </tr>
            </thead>
            <tr>
              <td>1</td>
              <td>5/4/2021</td>
              <td>Mr X</td>
              <td>Deadline</td>
              <td>Nama Order</td>
              <td>SO CU</td>
              <td>Status</td>
              <td>
                <div class="btn-group me-2" role="group" aria-label="First group">
                  <a class="btn btn-primary" href="<?=site_url('pracetak/SuratOrder/lihat_so')?>">
                    <i class="fa fa-eye" style="font-size:24px"></i>
                  </a>
                  <a class="btn btn-primary" href="<?=site_url('pracetak/SuratOrder/edit_so')?>">
                    <i class="fa fa-pencil" style="font-size:24px"></i>
                  </a>
                </div>
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