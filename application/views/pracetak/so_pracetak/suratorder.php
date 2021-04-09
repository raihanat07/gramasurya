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
          <table id="example2" class="table table-bordered table-hover" style="font-size: 12px;">
            <thead>
            <tr align="center">
              <td>Nomor SO</td>
              <td>Tanggal Masuk</td>
              <td>Deadline</td>
              <td>Nama Pemesan</td>
              <td>Nama Orderan</td>
              <td>Ukuran</td>
              <td>Halaman</td>
              <td>Oplag</td>
              <td>Finishing Akhir</td>
              <td>Status</td>
              <td>Actions</td>
            </tr>
            </thead>
            <?php foreach($so as $s => $row) {?>
            <tr>
              <td align="center"><?= $row->id_order; ?></td>
              <td><?= $row->tanggal_masuk; ?></td>
              <td><?= $row->deadline; ?></td>
              <td><?= $row->nama_pemesan; ?></td>
              <td><?= $row->nama_orderan; ?></td>
              <td><?= $row->ukuran; ?></td>
              <td><?= $row->halaman; ?></td>
              <td><?= $row->oplag; ?></td>
              <td>
                <?php 
                  if($row->bending != null){
                    echo 'bending, ';}
                  if($row->hard_cover != null){
                    echo 'hard cover, ';}   
                  if($row->jahit_benang != null){
                    echo 'jahit benang, ';} 
                  if($row->jahit_kawat != null){
                    echo 'jahit kawat, ';}    
                  if($row->pond != null){
                    echo 'pond, ';}   
                  if($row->spiral != null){
                    echo 'Spiral, ';}                                   
                ?>
              </td>
              <td><?= $row->so_status; ?></td>
              <td align="center">
                <a href="<?=site_url('pracetak/SuratOrder/lihat_so'.$row->id_order)?>">
                  <i class="fa fa-eye" style="font-size:18px;margin-right: 20px;"></i>
                </a>
                <a href="<?=site_url('pracetak/SuratOrder/edit_so'.$row->id_order)?>)?>">
                  <i class="fa fa-pencil" style="font-size:18px"></i>
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