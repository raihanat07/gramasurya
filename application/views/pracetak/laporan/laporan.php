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
                <td rowspan="2">Nomor SO</td>
                <td rowspan="2">Tanggal Masuk</td>
                <td rowspan="2">Deadline</td>
                <td rowspan="2">Nama Pemesan</td>
                <td rowspan="2">Nama Orderan</td>
                <td colspan="4">Plat</td>
                <td rowspan="2">Status</td>
                <td rowspan="2">Actions</td>
              </tr>
              <tr align="center">
                <td>102</td>
                <td>74</td>
                <td>72</td>
                <td>Paper Plate</td>
              </tr>
            </thead>
            <?php foreach($laporan as $s => $row) {?>  
            <tr>
              <td align="center"><?= $row->nomor_so; ?></td>
              <td><?= $row->tanggal_masuk; ?></td>
              <td style="color: red"><?= $row->deadline; ?></td>
              <td><?= $row->nama_pemesan; ?></td>
              <td><?= $row->nama_orderan; ?></td>
              <!--UNTUK TOTAL PLAT YANG DIGUNAKAN -->
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><?= $row->so_status; ?></td>
              <td align="center">
                  <!-- lihat detail imposisi -->
                    <a href="<?=site_url('pracetak/Laporan/lihat_laporan/'.$row->id_order)?>">
                      <i class="fa fa-eye" style="font-size:18px;margin-right: 20px;"></i>
                    </a>
              </td>
            </tr> 
            <?php } ?> 
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