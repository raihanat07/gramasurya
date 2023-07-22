<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>IMPOSISI</h1><br>
        
        <label>PROSES HITUNG EDD</label>
          <form action="<?= site_url('pracetak/imposisi/filter_hariisi') ?>" method="post">
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
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Imposisi</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fa fa-minus"></i></button>
      </div>
    </div>
    <div class="card-body">
      <table id="table1" class="table table-bordered table-hover" style="font-size: 12px">
        <thead>
          <tr align="center">
            <td>Tanggal Imposisi 1</td>
            <td>Tanggal Imposisi 2</td>
            <td>Tanggal Imposisi 3</td>
            <td>Nomor SO</td>
            <td>Tanggal Masuk</td>
            <td>Deadline</td>
            <td>Nama Pemesan</td>
            <td>Nama Order</td>
            <td>Ukuran</td>
            <td>Halaman</td>
            <td>Finishing Akhir</td>
            <td>Status</td>
            <td>Actions</td>
          </tr>
        </thead>
        <?php foreach($imposisi as $s => $row) {?>  
        <tr>
          <td align="center">
            <?php
              if($row->isi1tglimposisi1 !=null){
                echo $row->isi1tglimposisi1;
                
              }
              else
                echo "-";
            ?>
          </td>
          <td align="center">
            <?php
              if($row->isi1tglimposisi2 !=null){
                echo $row->isi1tglimposisi2;
              }
              else
                echo "-";
            ?>
          </td>
          <td align="center">
            <?php
              if($row->isi1tglimposisi3 !=null){
                echo $row->isi1tglimposisi3;
              }
              else
                echo "-";
            ?>
          </td>
          <td align="center"><?= $row->nomor_so; ?></td>
          <td><?= date('d-m-Y', strtotime( $row->tanggal_masuk)); ?></td>
          <td style="color: red"><?= date('d-m-Y', strtotime( $row->deadline)); ?></td>
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
          <td>
            <?php 
              if(($row->so_status == "marketing") && $row->imposisi_status ==null) 
                echo $row->so_status;
              else
                echo $row->imposisi_status;   
            ?>          
          </td>
          <td align="center">
            <!-- lihat detail imposisi -->
            <?php if($row->id_imposisi != null) {?>
              <a href="<?=site_url('pracetak/Imposisi/lihat_imposisi/'.$row->id_order)?>">
                <i class="fa fa-eye" style="font-size:18px;margin-right: 20px;"></i>
              </a>

            <!-- tambah imposisi -->
            <?php } if($row->id_imposisi == null) {?>
              <a href="<?=site_url('pracetak/Imposisi/tambah_imposisi/'.$row->id_order)?>">
                <i class="fa fa-pencil" style="font-size:18px"></i>
              </a>
            <?php }else {?>

            <!-- edit imposisi -->
              <a href="<?=site_url('pracetak/Imposisi/edit_imposisi/'.$row->id_order)?>">
                <i class="fa fa-pencil" style="font-size:18px"></i>
              </a>
            <?php } ?>
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