<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?=site_url()?>pracetak" class="btn btn-warning btn-lg">
                <i class="fa fa-chevron-left" style="font-size:18px"></i> KEMBALI
                </a>
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
                  <input type="text" class="form-control" name="nama_pemesan" placeholder="Masukan Nama Pemesan" required="required">
                </div>
                <div class="col-md-4">
                  <label class="form-label">SO CU</label>
                  <input type="text" class="form-control" name="so_cu" placeholder="Masukan SO CU">
                </div>
                <div class="col-md-4">
                  <label class="form-label">Ukuran</label>
                  <input type="text" class="form-control" name="ukuran" placeholder="Masukan Ukuran">
                </div>
                <div class="col-md-4">
                  <br><label class="form-label">Kode Pemesan</label>
                  <select id="inputState" class="form-select form-control" name="kode_pemesan">
                    <option selected disabled="disabled">Masukan Kode Pemesan</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <br><label class="form-label">Tanggal Masuk</label>
                  <input type="date" class="form-control" name="tanggal_masuk" placeholder="Tanggal Masuk" required="required">
                </div>
                <div class="col-md-4">
                  <br><label class="form-label">Oplag</label>
                  <input type="number" class="form-control" name="oplag" placeholder="Masukan Oplag">
                </div>
                <div class="col-md-4">
                  <br><label class="form-label">Pemesan Pdk</label>
                  <input type="text" class="form-control" name="pemesan_pdk" placeholder="Masukan Pemesan Pdk">
                </div>
                <div class="col-md-4">
                  <br><label class="form-label">Nego</label>
                  <input type="date" class="form-control" name="nego" placeholder="Nego">
                </div>
                <div class="col-md-4">
                  <br><label class="form-label">Satuan</label>
                  <select id="inputState" class="form-select form-control" name="satuan">
                    <option selected disabled="disabled">Satuan</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <br><label class="form-label">Kode Order</label>
                  <select id="inputState" class="form-select form-control" name="kode_order">
                    <option selected disabled="disabled">Masukan Kode Order</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <br><label class="form-label">Deadline</label>
                  <input type="date" class="form-control" name="deadline" placeholder="Deadline" required="required">
                </div>
                <div class="col-md-4">
                  <br><label class="form-label">Hal</label>
                  <input type="text" class="form-control" name="hal" placeholder="Masukan Hal">
                </div>
                <div class="col-md-4">
                  <br><label class="form-label">Nama Orderan</label>
                  <input type="text" class="form-control" name="nama_orderan" placeholder="Masukan Orderan">
                </div>
                <div class="col-md-4">
                  <br><label class="form-label">Status</label>
                  <select id="inputState" class="form-select form-control" name="status">
                    <option selected disabled="disabled">Marketing</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <br><label class="form-label">FC</label>
                  <input type="text" class="form-control" name="fc" placeholder="FC">
                </div>
                <div class="col-md-4">
                  <br><label class="form-label">Nama Orderan Pendek</label>
                  <input type="text" class="form-control" name="nama_orderan_pendek" placeholder="Masukan Nama Pendek">
                </div>
                <div class="col-md-4">
                  <br><label class="form-label">Surat Order</label>
                  <input type="text" class="form-control" name="surat_order" placeholder="Masukan Surat Order">
                </div>
                <div class="col-md-4">
                  <br><label class="form-label">BW</label>
                  <input type="text" class="form-control" name="bw" placeholder="BW">
                </div>
                <div class="col-md-4">
                  <br><label class="form-label">Hal 2</label>
                  <input type="text" class="form-control" name="hal_2" placeholder="Masukan Hal 2">
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                  <br><label class="form-label">KETERANGAN</label>
                  <textarea class="form-control" name="keterangan" placeholder="keterangan"></textarea>
                </div>
              </div><br>
              <div class="row">
                <div class="col">
                  <div class="card">
                    <div class="card-header p-2">
                      <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#ctcp" data-toggle="tab">CTCP</a></li>
                        <li class="nav-item"><a class="nav-link" href="#kertas" data-toggle="tab">KERTAS</a></li>
                        <li class="nav-item"><a class="nav-link" href="#cetak" data-toggle="tab">CETAK</a></li>
                        <li class="nav-item"><a class="nav-link" href="#finish" data-toggle="tab">FINISH</a></li>
                      </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="active tab-pane" id="ctcp">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="card border border-success">
                                <div class="card-header text-center">
                                  COVER
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="card border border-success">
                                <div class="card-header text-center">
                                  ISI
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <br><label class="form-label">CTCP COVER 1</label>
                              <select id="inputState" class="form-select form-control" name="ctcp_cover_1">
                                <option selected disabled="disabled">Masukan Cover</option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">CTCP ISI 1</label>
                              <select id="inputState" class="form-select form-control" name="ctcp_isi_1">
                                <option selected disabled="disabled">Masukan Cover</option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">PLAT COVER 1</label>
                              <input type="text" class="form-control" name="plat_cover_1" placeholder="Masukan Orderan" name="plat_cover_1">
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">PLAT ISI 1</label>
                              <input type="text" class="form-control" name="plat_isi_1" placeholder="Masukan Orderan">
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">CTCP COVER 2</label>
                              <select id="inputState" class="form-select form-control" name="ctcp_cover_2">
                                <option selected disabled="disabled">Masukan Cover</option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">CTCP ISI 2</label>
                              <select id="inputState" class="form-select form-control" name="ctcp_isi_2">
                                <option selected disabled="disabled">Masukan Cover</option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">PLAT COVER 2</label>
                              <input type="text" class="form-control" name="plat_cover_2" placeholder="Masukan Orderan">
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">PLAT ISI 2</label>
                              <input type="text" class="form-control" name="plat_isi_2" placeholder="Masukan Orderan">
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">CTCP COVER 3</label>
                              <select id="inputState" class="form-select form-control" name="ctcp_cover_3">
                                <option selected disabled="disabled">Masukan Cover</option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">CTCP ISI 3</label>
                              <select id="inputState" class="form-select form-control" name="ctcp_isi_3">
                                <option selected disabled="disabled">Masukan Cover</option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">PLAT COVER 3</label>
                              <input type="text" class="form-control" name="plat_cover_3" placeholder="Masukan Orderan">
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">PLAT ISI 3</label>
                              <input type="text" class="form-control" name="plat_isi_3" placeholder="Masukan Orderan">
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane" id="kertas">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="card border border-success">
                                <div class="card-header text-center">
                                  KERTAS COVER
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="card border border-success">
                                <div class="card-header text-center">
                                  KERTAS ISI
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <br><label class="form-label">KERTAS COVER 1</label>
                              <select id="inputState" class="form-select form-control" name="kertas_cover_1">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">KERTAS ISI 1</label>
                              <select id="inputState" class="form-select form-control" name="kertas_isi_1">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">UKURAN KERTAS COVER 1</label>
                              <select id="inputState" class="form-select form-control" name="ukuran_kertas_cover_1">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">UKURAN KERTAS ISI 1</label>
                              <select id="inputState" class="form-select form-control" name="ukuran_kertas_isi_1">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">JUMLAH KERTAS COVER 1</label>
                              <select id="inputState" class="form-select form-control" name="jumlah_kertas_cover_1">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">JUMLAH KERTAS ISI 1</label>
                              <select id="inputState" class="form-select form-control" name="jumlah_kertas_isi_1">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">KERTAS COVER 2</label>
                              <select id="inputState" class="form-select form-control" name="kertas_cover_2">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">KERTAS ISI 2</label>
                              <select id="inputState" class="form-select form-control" name="kertas_isi_2">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">UKURAN KERTAS COVER 2</label>
                              <select id="inputState" class="form-select form-control" name="ukuran_kertas_cover_2">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">UKURAN KERTAS ISI 2</label>
                              <select id="inputState" class="form-select form-control" name="ukuran_kertas_isi_2">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">JUMLAH KERTAS COVER 2</label>
                              <select id="inputState" class="form-select form-control" name="jumlah_kertas_cover_2">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">JUMLAH KERTAS ISI 2</label>
                              <select id="inputState" class="form-select form-control" name="jumlah_kertas_isi_2">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">KERTAS COVER 3</label>
                              <select id="inputState" class="form-select form-control" name="kertas_cover_3">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">KERTAS ISI 3</label>
                              <select id="inputState" class="form-select form-control" name="kertas_isi_3">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">UKURAN KERTAS COVER 3</label>
                              <select id="inputState" class="form-select form-control" name="ukuran_kertas_cover_3">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">UKURAN KERTAS ISI 3</label>
                              <select id="inputState" class="form-select form-control" name="ukuran_kertas_isi_3">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">JUMLAH KERTAS COVER 3</label>
                              <select id="inputState" class="form-select form-control" name="jumlah_kertas_cover_3">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">JUMLAH KERTAS ISI 3</label>
                              <select id="inputState" class="form-select form-control" name="jumlah_kertas_isi_3">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane" id="cetak">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="card border border-success">
                                <div class="card-header text-center">
                                  CETAK COVER
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="card border border-success">
                                <div class="card-header text-center">
                                  CETAK ISI
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <br><label class="form-label">MESIN COVER 1</label>
                              <select id="inputState" class="form-select form-control" name="mesin_cover_1">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">CETAK ISI 1</label>
                              <select id="inputState" class="form-select form-control" name="cetak_isi_1">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">WARNA COVER 1</label>
                              <select id="inputState" class="form-select form-control" name="warna_cover_1">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">WARNA ISI 1</label>
                              <select id="inputState" class="form-select form-control" name="warna_isi_1">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">INSIT COVER 1</label>
                              <select id="inputState" class="form-select form-control" name="insit_cover_1">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">WARNA CETAK 1</label>
                              <select id="inputState" class="form-select form-control" name="warna_cetak_1">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                              <br><label class="form-label">INSIT ISI 2</label>
                              <select id="inputState" class="form-select form-control" name="insit_isi_2">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">MESIN COVER 2</label>
                              <select id="inputState" class="form-select form-control" name="mesin_cover_2">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">CETAK ISI 2</label>
                              <select id="inputState" class="form-select form-control" name="cetak_isi_2">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">WARNA COVER 2</label>
                              <select id="inputState" class="form-select form-control" name="warna_cover_2">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">WARNA ISI 2</label>
                              <select id="inputState" class="form-select form-control" name="warna_isi_2">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">INSIT COVER 2</label>
                              <select id="inputState" class="form-select form-control" name="insit_cover_2">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">WARNA CETAK 2</label>
                              <select id="inputState" class="form-select form-control" name="warna_cetak_2">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                              <br><label class="form-label">INSIT ISI 2</label>
                              <select id="inputState" class="form-select form-control" name="insit_isi_2">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">MESIN COVER 3</label>
                              <select id="inputState" class="form-select form-control" name="mesin_cover_3">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">CETAK ISI 3</label>
                              <select id="inputState" class="form-select form-control" name="cetak_isi_3">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">WARNA COVER 3</label>
                              <select id="inputState" class="form-select form-control" name="warna_cover_3">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">WARNA ISI 3</label>
                              <select id="inputState" class="form-select form-control" name="warna_isi_3">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">INSIT COVER 3</label>
                              <select id="inputState" class="form-select form-control" name="insit_cover_3">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <br><label class="form-label">WARNA CETAK 3</label>
                              <select id="inputState" class="form-select form-control" name="warna_cetak_3">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                              <br><label class="form-label">INSIT ISI 3</label>
                              <select id="inputState" class="form-select form-control" name="insit_isi_3">
                                <option selected disabled="disabled"> </option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane" id="finish">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="card border border-success">
                                <div class="card-header text-center">
                                  FINISHING COVER
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="card border border-success">
                                <div class="card-header text-center">
                                  FINISHING ISI
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="card border border-success">
                                <div class="card-header text-center">
                                  FINISHING AKHIR
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="finishing_cover_doff" value="doff" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Doff
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="finishing_cover_emboss" value="emboss" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Emboss
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="finishing_cover_glossy" value="glossy" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Glossy
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="finishing_cover_hot_print" value="hot_print" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Hot Print
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" name="finishing_cover_spot" type="checkbox" value="spot" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Spot
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="finishing_cover_uvi" value="uvi" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Uvi
                                </label>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="finishing_isi_lipat" value="lipat" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Lipat
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="finishing_isi_susun" value="susun" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Susun
                                </label>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="finishing_akhir_bending" value="bending" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Bending
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="finishing_akhir_hard_cover" value="hard_cover" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Hard Cover
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" name="finishing_akhir_jahit_benang" type="checkbox" value="jahit_benang" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Jahit Benang
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="finishing_akhir_jahit_kawat" value="jahit_kawat" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Jahit Kawat
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="finishing_akhir_pond" value="pond" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Pond
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="finishing_akhir_spiral" value="spiral" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Spiral
                                </label>
                              </div>
                            </div>
                          </div><br>
                          <div class="row">
                            <div class="col-md-4">
                              <label class="form-label">KETERANGAN FINISHING COVER</label>
                              <textarea class="form-control" placeholder="keterangan" name="keterangan_finishing_cover"></textarea>
                            </div>
                            <div class="col-md-4">
                              <label class="form-label">KETERANGAN FINISHING ISI</label>
                              <textarea class="form-control" placeholder="keterangan" name="keterangan_finishing_isi"></textarea>
                            </div>
                            <div class="col-md-4">
                              <label class="form-label">KETERANGAN FINISHING AKHIR</label>
                              <textarea class="form-control" placeholder="keterangan" name="keterangan_finishing_akhir"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <button type="reset" class="btn btn-default">Reset</button>
                  <button type="submit" name="add" class="btn btn-success float-right">Submit</button>
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