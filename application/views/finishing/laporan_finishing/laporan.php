<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Finishing</h1>
      </div>
    </div>
  </div>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">
      <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Laporan</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="table1" class="table table-bordered table-striped" style="font-size: 12px">
              <thead>
                <tr align="center">
                  <td rowspan="2">Nomor SO</td>
                  <td rowspan="2">Nama Order</td>
                  <td colspan="3">Laminasi</td>
                  <td colspan="4">MBO</td>
                  <td colspan="4">SHOE</td>
                  <td rowspan="2">Susun</td>
                  <td rowspan="2">Bending</td>
                  <td rowspan="2">Potong</td>
                  <td rowspan="2">Jahit</td>
                  <td rowspan="2">Hardcover</td>
                </tr>
                <tr>
                  <!-- LAMINASI -->
                  <td>Uvi</td>
                  <td>Gloss</td>
                  <td>Doff</td>
                  <!-- MBO -->
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                  <!-- SHOE -->
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                </tr>
              </thead>
              <tbody>
              <?php $nilai=0;?>            
              <?php $id_banding[-1]=null;?>


                <?php foreach($lp as $s => $row) {?>  
                  <?php $id_banding[$nilai]=$row->id_order;?>

                <?php if($id_banding[$nilai] != $id_banding[$nilai-1]){ ?>

                  <tr>                
                    <td align="center"><?= $row->nomor_so; ?></td>
                    <td><?= $row->nama_orderan."--<br>".$row->id_order; ?></td>
                    
                    <!-- LAMINASI -->
                    <td><?php echo $row->uvi == "uvi" ?  "uvi" : "" ?></td>
                    <td><?php echo $row->glossy == "glossy" ?  "glossy" : "" ?></td>
                    <td><?php echo $row->doff == "doff" ?  "doff" : "" ?></td>
                    
                    <!-- MBO -->
                    <td><?= $total_mbo_1[$nilai]; ?></td>
                    <td><?= $total_mbo_2[$nilai]; ?></td>
                    <td><?= $total_mbo_3[$nilai]; ?></td>
                    <td><?= $total_mbo_4[$nilai]; ?></td>
                    
                    <!-- SHOE -->
                    <td><?= $total_shoe_1[$nilai]; ?></td>
                    <td><?= $total_shoe_2[$nilai]; ?></td>
                    <td><?= $total_shoe_3[$nilai]; ?></td>
                    <td><?= $total_shoe_4[$nilai]; ?></td>
                    
                    <!-- Susun -->
                    <td><?= $total_susun[$nilai]; ?></td>

                    <!-- Bending -->
                    <td><?= $total_binding[$nilai]; ?></td>
                    
                    <!-- Potong -->
                    <td><?= $total_fa_potong[$nilai]; ?></td>
                    
                    <!-- Jahit -->
                    <td><?= $total_jahit[$nilai]; ?></td>
                    
                    <!-- Hardcover -->
                    <td><?= $total_hardcover[$nilai]; ?></td>
                  </tr> 

                <?php $nilai++;} ?>
                <?php } ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      <!-- /.Default box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->