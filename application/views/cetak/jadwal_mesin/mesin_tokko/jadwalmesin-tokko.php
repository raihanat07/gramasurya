<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>CETAK</h1>
      </div>
    </div><br>
    <?php if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 6) { ?>
      <div class="row mb-2">
        <div class="col-sm-6">
          <label>PROSES HITUNG EDD</label>
          <form action="<?= site_url('cetak/jadwalmesin/filter_haritokko') ?>" method="post">
            <div class="row">
              <div class="col-md-3">
                <input type="date" class="form-control" name="hari" placeholder="Deadline" required>
              </div>
              <div class="col-md-6">
                <button type="submit" name="tampilkan_data" class="btn btn-primary col-md-3">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    <?php } ?>
  </div><!-- /.container-fluid -->
</section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title coba">Jadwal Mesin Tokko</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body">
          <table id="table1" class="table table-bordered table-hover" style="font-size: 12px;">
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
              <td>Actions</td>
            </tr>
            </thead>
            <?php $banding_id[-1] = null;?>
            <?php $nilai = 0;?>

            <?php foreach($jm as $s => $row) {
              $banding_id[$nilai] = $row->id_mesin_tokko;
              if($banding_id[$nilai] != $banding_id[$nilai-1]){
              ?>
              
            <tr>
              <td><<?= date('d-m-Y', strtotime($row->tanggal_pelaksanaan)); ?></td>
              <td><?= $row->nomor_so; ?></td>
              <td><?= date('d-m-Y', strtotime($row->tanggal_masuk)); ?></td>
              <td style="color: red"><?= date('d-m-Y', strtotime($row->deadline)); ?></td>
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
                <a href="<?=site_url('cetak/Jadwalmesin/lihat_tokko/'.$row->id_mesin_tokko."-".$row->id_order)?>">
                  <i class="fa fa-eye" style="font-size:18px;margin-right: 20px;"></i>
                </a>
                <a href="<?=site_url('cetak/Jadwalmesin/edit_tokko/'.$row->id_mesin_tokko)?>">
                  <i class="fa fa-pencil" style="font-size:18px;margin-right: 20px;"></i>
                </a>
                <?php if($cek_id_mesin[$nilai] != null){ ?>
                <a href="<?=site_url('cetak/Jadwalmesin/print_tokko/'.$row->id_mesin_tokko."-".$row->id_order)?>">
                  <i class="fa fa-print" style="font-size:18px;margin-right: 20px;"></i>
                </a>
                <?php } ?>
              <?php if($cek_id_mesin[$nilai] == null){?>
                  <a href="<?=site_url('cetak/Jadwalmesin/tambah_spk_tokko/'.$row->id_mesin_tokko)?>" class="btn btn-success">
                  <i class="fa fa-plus" style="font-size:14px"></i> TAMBAH SPK    
                </a>
                <?php }else{?>
                  <a href="<?=site_url('cetak/Jadwalmesin/edit_spk_tokko/'.$row->id_mesin_tokko."-".$row->id_order)?>" class="btn btn-success">
                  <i class="fa fa-pencil" style="font-size:14px"></i> EDIT SPK 
                </a>
              
              </td>              
              <?php }?>     
            </tr>
            <?php } ?>
            <?php $nilai++;}?>  
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