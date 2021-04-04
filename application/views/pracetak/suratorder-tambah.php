<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href=" " class="btn btn-warning tombol">
                  <img src=" " > KEMBALI </a>
              </li>
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li> -->
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
          <h3 class="card-title">Penambahan Surat Order</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <!-- <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button> -->
          </div>
        </div>
        <div class="card-body">
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-md-4">
                  <label class="form-label">Nama Pemesan</label>
                  <input type="text" class="form-control" name="namapemesan" placeholder="Masukan Nama Pemesan" required="required">
                </div>
                <div class="col-md-4">
                  <label class="form-label">SO CU</label>
                  <input type="text" class="form-control" name="socu" placeholder="Masukan SO CU">
                </div>
                <div class="col-md-4">
                  <label class="form-label">Ukuran</label>
                  <input type="text" class="form-control" name="ukuran" placeholder="Masukan Ukuran">
                </div>
                <div class="col-4">
                  <label class="form-label">Kode Pemesan</label>
                  <select id="inputState" class="form-select form-control">
                    <option selected disabled="disabled">Masukan Kode Pemesan</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-4">
                  <label class="form-label">Tanggal Masuk</label>
                  <input type="date" class="form-control" name="tanggalmasuk" placeholder="Tanggal Masuk" required="required">
                </div>
                <div class="col-4">
                  <label class="form-label">Oplag</label>
                  <input type="number" class="form-control" name="oplag" placeholder="Masukan Oplag">
                </div>
                <div class="col-md-4">
                  <label class="form-label">Pemesan Pdk</label>
                  <input type="text" class="form-control" name="pemesanpdk" placeholder="Masukan Pemesan Pdk">
                </div>
                <div class="col-md-4">
                  <label class="form-label">Nego</label>
                  <input type="text" class="form-control" name="nego" placeholder="Nego">
                </div>
                <div class="col-md-4">
                  <label class="form-label">Satuan</label>
                  <select id="inputState" class="form-select form-control">
                    <option selected disabled="disabled">Satuan</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-4">
                  <label class="form-label">Kode Order</label>
                  <select id="inputState" class="form-select form-control">
                    <option selected disabled="disabled">Masukan Kode Order</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-4">
                  <label class="form-label">Deadline</label>
                  <input type="date" class="form-control" name="deadline" placeholder="Deadline" required="required">
                </div>
                <div class="col-4">
                  <label class="form-label">Hal</label>
                  <input type="text" class="form-control" name="hal" placeholder="Masukan Hal">
                </div>
                <div class="col-md-4">
                  <label class="form-label">Nama Orderan</label>
                  <input type="text" class="form-control" name="namaorderan" placeholder="Masukan Orderan">
                </div>
                <div class="col-md-4">
                  <label class="form-label">Status</label>
                  <select id="inputState" class="form-select form-control">
                    <option selected disabled="disabled">Marketing</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label class="form-label">FC</label>
                  <input type="text" class="form-control" name="fc" placeholder="FC">
                </div>
                <div class="col-4">
                  <label class="form-label">Nama Orderan Pendek</label>
                  <input type="text" class="form-control" name="namaorderanpendek" placeholder="Masukan Nama Pendek">
                </div>
                <div class="col-4">
                  <label class="form-label">Surat Order</label>
                  <input type="text" class="form-control" name="so" placeholder="Masukan Surat Order">
                </div>
                <div class="col-4">
                  <label class="form-label">BW</label>
                  <input type="text" class="form-control" name="bw" placeholder="BW">
                </div>
                <div class="col-4">
                  <label class="form-label">Hal</label>
                  <input type="text" class="form-control" name="hal" placeholder="Masukan Hal">
                </div>
                <div class="col-4"></div>
                <div class="col-md-4">
                  <label class="form-label">KETERANGAN</label>
                  <textarea class="form-control" name="hal" placeholder="keterangan"></textarea>
                </div>
              </div>
              <div class="row">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a href="<?=base_url()?>pracetak"
                        <?php  if($judul == "Surat Order Pracetak"){?>
                          class= "nav-link active"
                        <?php }else {?>
                          class= "nav-link"
                        <?php } ?>
                      >
                      <p>CTCP</p>
                    </a>
                    <!-- <a class="nav-link active" aria-current="page" href="#">Active</a> -->
                  </li>
                  <li class="nav-item dropdown">
                    <a href="<?=base_url()?>pracetak/Imposisi"
                        <?php  if($judul == "Imposisi"){?>
                          class= "nav-link active"
                        <?php }else {?>
                          class= "nav-link"
                        <?php } ?>
                      >
                      <p>Kertas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=base_url()?>pracetak/Ctcp"
                        <?php  if($judul == "CTCP"){?>
                          class= "nav-link active"
                        <?php }else {?>
                          class= "nav-link"
                        <?php } ?>
                      >
                      <p>Cetak</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=base_url()?>pracetak/Laporan"
                        <?php  if($judul == "Laporan"){?>
                          class= "nav-link active"
                        <?php }else {?>
                          class= "nav-link"
                        <?php } ?>
                      >
                      <p>Finish</p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="row">
                <div class="col btn btn-outline-success rounded">
                  COVER
                </div>
                <div class="col btn btn-outline-success">
                  ISI
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label class="form-label">CTCP Cover 1</label>
                  <select id="inputState" class="form-select form-control">
                    <option selected disabled="disabled">Masukan Cover</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label class="form-label">CTCP Cover 1</label>
                  <select id="inputState" class="form-select form-control">
                    <option selected disabled="disabled">Masukan Cover</option>
                  </select>
                </div>
                <div class="col-6">
                  <label class="form-label">Plat Cover 1</label>
                  <input type="text" class="form-control" name="platcover1" placeholder="Masukan Cover">
                </div>
                <div class="col-6">
                  <label class="form-label">Plat Cover 1</label>
                  <input type="text" class="form-control" name="platcover1" placeholder="Masukan Cover">
                </div>

                <div class="col-md-6">
                  <label class="form-label">CTCP Cover 2</label>
                  <select id="inputState" class="form-select form-control">
                    <option selected disabled="disabled">Masukan Cover</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label class="form-label">CTCP Cover 2</label>
                  <select id="inputState" class="form-select form-control">
                    <option selected disabled="disabled">Masukan Cover</option>
                  </select>
                </div>
                <div class="col-6">
                  <label class="form-label">Plat Cover 2</label>
                  <input type="text" class="form-control" name="platcover2" placeholder="Masukan Cover">
                </div>
                <div class="col-6">
                  <label class="form-label">Plat Cover 2</label>
                  <input type="text" class="form-control" name="platcover2" placeholder="Masukan Cover">
                </div>

                <div class="col-md-6">
                  <label class="form-label">CTCP Cover 3</label>
                  <select id="inputState" class="form-select form-control">
                    <option selected disabled="disabled">Masukan Cover</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label class="form-label">CTCP Cover 3</label>
                  <select id="inputState" class="form-select form-control">
                    <option selected disabled="disabled">Masukan Cover</option>
                  </select>
                </div>
                <div class="col-6">
                  <label class="form-label">Plat Cover 3</label>
                  <input type="text" class="form-control" name="platcover3" placeholder="Masukan CoverW">
                </div>
                <div class="col-6">
                  <label class="form-label">Plat Cover 3</label>
                  <input type="text" class="form-control" name="platcover3" placeholder="Masukan Cover">
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->