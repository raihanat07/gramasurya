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
          <h3 class="card-title coba">Jadwal Mesin 74a</h3>

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
            <?php $banding_id[-1] = null;?>
            <?php $nilai = 0;?>

            <?php foreach($jm as $s => $row) {
              $banding_id[$nilai] = $row->id_mesin_74a;
              if($banding_id[$nilai] != $banding_id[$nilai-1]){
              ?>
              
            <tr>
              <td><?= date('d-m-Y', strtotime($row->tanggal_pelaksanaan)); ?></td>
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
                <a href="<?=site_url('cetak/JadwalMesin/lihat_74a/'.$row->id_mesin_74a)?>">
                  <i class="fa fa-eye" style="font-size:18px;margin-right: 20px;"></i>
                </a>
                <a href="<?=site_url('cetak/JadwalMesin/edit_74a/'.$row->id_mesin_74a)?>">
                  <i class="fa fa-pencil" style="font-size:18px;"></i>
                </a>
              </td>

              
              <td align="center">
              <?php if($row->id_spk == null){?>
                  <a href="<?=site_url('cetak/JadwalMesin/tambah_spk_74a/'.$row->id_mesin_74a)?>" class="btn btn-success">
                  <i class="fa fa-plus" style="font-size:14px"></i> EDIT SPK  
                </a>
                <?php }else{?>
                  <a href="<?=site_url('cetak/JadwalMesin/edit_spk_74a/'.$row->id_mesin_74a)?>" class="btn btn-success">
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