<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>CETAK</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title coba">Jadwal Mesin</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body">
          <table id="emple2xa" class="table table-bordered table-hover" style="font-size: 12px;">
            <thead>
            <tr align="center">
              <td>Tanggal Pelaksanaan</td>
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
              <td colspan="2">Actions</td>
            </tr>
            </thead>
            <?php foreach($jm as $s => $row) {
              ?>
              
            <tr>
              <td><?= $row->tanggal_pelaksanaan; ?></td>
              <td><?= $row->nomor_so; ?></td>
              <td><?= $row->tanggal_masuk; ?></td>
              <td style="color: red"><?= $row->deadline; ?></td>
              <td><?= $row->nama_pemesan; ?></td>
              <td><?= $row->nama_orderan; ?></td>
              <td><?= $row->ukuran; ?></td>
              <td><?= $row->halaman; ?></td>
              <td><?= $row->oplag; ?></td>
              <td><?= $row->jenis_cetakan; ?></td>
              <td><?= $row->set; ?></td>
              <td><?= $row->target; ?></td>
              <td><?= $row->druk; ?></td>
              <td align="center">
                <a href="<?=site_url('cetak/JadwalMesin/lihat_72')?>">
                  <i class="fa fa-eye" style="font-size:18px;margin-right: 20px;"></i>
                </a>
                <a href="<?=site_url('cetak/JadwalMesin/edit_72')?>">
                  <i class="fa fa-pencil" style="font-size:18px;"></i>
                </a>
              </td>
              <td align="center">
                <a href="<?=site_url()?>cetak/JadwalMesin/tambah_spk_72" class="btn btn-success">
                  <i class="fa fa-plus" style="font-size:14px"></i> BUAT SPK
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