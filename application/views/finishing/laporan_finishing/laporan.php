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
                <?php foreach($so as $s => $row) {?>  
                  <tr>                
                    <td align="center"><?= $row->nomor_so; ?></td>
                    <td><?= $row->nama_orderan; ?></td>
                    
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
                    
                    <!-- Susun -->
                    <td>99</td>

                    <!-- Bending -->
                    <td>99</td>
                    
                    <!-- Potong -->
                    <td>99</td>
                    
                    <!-- Jahit -->
                    <td>99</td>
                    
                    <!-- Hardcover -->
                    <td>99</td>
                  </tr> 
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