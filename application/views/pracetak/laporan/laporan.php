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
              <td>Nomor SO</td>
              <td>Tanggal Masuk</td>
              <td>Deadline</td>
              <td>Nama Pemesan</td>
              <td>Nama Orderan</td>
              <td>Ukuran</td>
              <td>Halaman</td>
              <td>Finishing Akhir</td>
              <td>Status</td>
              <td>Actions</td>
            </tr>
            </thead>
            <?php foreach($laporan as $s => $row) {?>  
            <tr>
              <td align="center"><?= $row->id_order; ?></td>
              <td><?= $row->tanggal_masuk; ?></td>
              <td><?= $row->deadline; ?></td>
              <td><?= $row->nama_pemesan; ?></td>
              <td><?= $row->nama_orderan; ?></td>
              <td><?= $row->ukuran; ?></td>
              <td><?= $row->halaman; ?></td>
              <td>
                <?php 
                  $finishing = "";
                  if($row->bending != null){
                    $finishing .= "bending, ";
                  }
                  if($row->hard_cover != null){
                    $finishing .= 'hard cover, ';
                  }   
                  if($row->jahit_benang != null){
                    $finishing .= 'jahit benang, ';
                  } 
                  if($row->jahit_kawat != null){
                    $finishing .= 'jahit kawat, ';
                  }    
                  if($row->pond != null){
                    $finishing .= 'pond, ';
                  }   
                  if($row->klem != null){
                    $finishing .= 'klem, ';
                  } 
                  if($row->spiral != null){
                    $finishing .= 'Spiral, ';
                  }
                  $finishing = rtrim($finishing, ", ");
                  echo $finishing;
                  ?>
              </td>
              <td><?= $row->so_status; ?></td>
              <td align="center">
                <a href="<?=site_url('pracetak/Laporan/lihat_laporan/'.$row->id_order)?>">
                  <i class="fa fa-eye" style="font-size:18px;ma rgin-right: 20px;"></i>
                </a>
                <a href="<?=site_url('pracetak/Laporan/edit_laporan/'.$row->id_order)?>">
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