<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-md-6">
        <ol class="breadcrumb">
          <a href="<?= site_url('finishing/FinishingAkhir/jadwal_fa_sub') ?>" class="btn btn-warning">
            <i class="fa fa-undo"></i> Kembali
          </a>
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

      <h3 class="card-title">Proses EDD Tanggal <?= $hari ?> </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fa fa-minus"></i></button>
        <!-- <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button> -->
      </div>

    </div>

    <div class="card-body">
      <table id="table1" class="table table-bordered table-hover" style="font-size: 12px">
        <thead>
          <tr align="center">
            <td>Prioritas (No SO)</td>
            <td>Tanggal Pelaksanaan</td>
            <td>Deadline</td>
            <td>Nama Pemesan</td>
            <td>Nama Order</td>
            <td>Processing Time</td>
            <td>Flow Time</td>
            <td>Due Date</td>
            <td>Lateness</td>
        </thead>
        <?php foreach ($jm as $s => $row) { ?>
          <?php
          $total1 = count($jm);
          $total2 = 0;
          $total3 = 0;
          $total4 = 0;

          $tgl1 = strtotime($row->tanggal_pelaksanaan_sub);
          $tgl2 = strtotime($row->deadline);

          $jarak = $tgl2 - $tgl1;

          $processingtime = $jarak / 60 / 60 / 24;

          $flowtime = $processingtime;

          // Due Date
          $tg1 = strtotime($row->tanggal_masuk);
          $tg2 = strtotime($row->deadline);

          $day = $tg2 - $tg1;
          $duedate = $day / 60 / 60 / 24;

          $latenes = $flowtime - $duedate;
          ?>
          <tr align="center">
            <td><?= $row->nomor_so; ?></td>
            <td><?= date('d-m-Y', strtotime($row->tanggal_pelaksanaan_sub)); ?></td>
            <td style="color: red"><?= date('d-m-Y', strtotime($row->deadline)); ?></td>
            <td><?= $row->nama_pemesan; ?></td>
            <td><?= $row->nama_orderan; ?></td>
            <td><?= $processingtime; ?></td>
            <td><?= $flowtime; ?></td>
            <td><?= $duedate; ?></td>
            <td><?= $latenes; ?></td>
          </tr>

        <?php
          $total2 += $processingtime;
          $total3 += $flowtime;
          $total3 += $latenes;
        } ?>
        <thead>
          <tr>
            <td colspan="4" align="right">Jumlah</td>
            <td align="center"><?= $total1; ?></td>
            <td align="center"><?= $total2; ?></td>
            <td align="center"><?= $total3; ?></td>
            <td colspan="1"></td>
            <td align="center"><?= $total4; ?></td>
          </tr>
        </thead>
      </table>
    </div>
  </div>
  </div>


  <!-- /.card -->

</section>
<section class="content">
  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Proses EDD Tanggal <?= $hari ?> </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fa fa-minus"></i></button>
      </div>
    </div>
    <?php
    $waktu_rata = $total3 / $total1;
    $utilitas = $total2 / $total3;
    $jumlah_rata = $total3 / $total2;
    $keterlambatan_rata = $total4 / $total1;
    ?>
    <div class="card-body">
      <div class="row">
        <div class="col-md-4">
          <br>Waktu penyelesaian rata - rata
          <br><label class="form-label"><?= $waktu_rata; ?></label>
        </div>
        <div class="col-md-6">
          <br>Utilitas (%)
          <br><label class="form-label"><?= $utilitas; ?>%</label>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <br>Jumlah job rata – rata
          <br><label class="form-label"><?= $jumlah_rata; ?></label>
        </div>
        <div class="col-md-4">
          <br>Keterlambatan job rata – rata
          <br><label class="form-label"><?= $keterlambatan_rata; ?></label>
        </div>
      </div>
      <!-- /.card -->
    </div>
</section>
<!-- /.content -->
<!-- /.content -->