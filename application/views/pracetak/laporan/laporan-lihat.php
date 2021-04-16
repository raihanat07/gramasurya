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
        <!-- <label>SO</label> -->
        <h3 class="card-title">SO dari db</h3>
        

        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
        <!-- <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button> -->
        </div>
    </div>
    <div class="card-body">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <br>Nomor SO
                    <br><label class="form-label">2021.04.829</label>
                </div>
                <div class="col-md-4">
                    <br>Nama Pemesan
                    <br><label class="form-label">UAD</label>
                </div>
                <div class="col-md-4">
                    <br>Halaman
                    <br><label class="form-label">12</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <br>anggal Masuk
                    <br><label class="form-label">10 04 2021</label>
                </div>
                <div class="col-md-4">
                    <br>Nama Orderan
                    <br><label class="form-label">Buku PMB</label>
                </div>
                <div class="col-md-4">
                    <br>Oplag
                    <br><label class="form-label">200</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <br>Deadline
                    <br><label class="form-label">10 05 2021</label>
                </div>
                <div class="col-md-4">
                    <br>Ukuran
                    <br><label class="form-label">18 x 26.5</label>
                </div>
                <div class="col-md-4">
                    <br>Finsihing Akhir
                    <br><label class="form-label">Jahit Kawat</label>
                </div>
            </div>
            <br><hr><br>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="row card-body">
                            <div class="col-md-12">
                                <label class="form-label">Tanggal Imposisi Cover</label>
                                <br><input type="date" class="form-control" name="tanggal_imposisi_cover" disabled>
                                <br><label class="form-label">Tanggal Imposisi Isi</label>
                                <br><input type="date" class="form-control" name="tanggal_imposisi_isi" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="row card-body">
                            <div class="col-md-12">
                                <div class="row card-body">
                                    <div class="col-md-6">
                                        <input class="form-check-input" type="checkbox" value="Imposisi Cover" disabled>
                                        <label class="form-check-label" for="flexCheckDefault">Imposisi Cover</label><br>
                                        <input class="form-check-input" type="checkbox" value="CTCP Cover" disabled>
                                        <label class="form-check-label" for="flexCheckDefault">CTCP Cover</label><br>
                                        <input class="form-check-input" type="checkbox" value="Khusus" disabled>
                                        <label class="form-check-label" for="flexCheckDefault">Khusus</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-check-input" type="checkbox" value="Imposisi Cover" disabled>
                                        <label class="form-check-label" for="flexCheckDefault">Imposisi Cover</label><br>
                                        <input class="form-check-input" type="checkbox" value="CTCP Cover" disabled>
                                        <label class="form-check-label" for="flexCheckDefault">CTCP Cover</label><br>
                                        <input class="form-check-input" type="checkbox" value="Pracetak" disabled>
                                        <label class="form-check-label" for="flexCheckDefault">Pracetak</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="row card-body">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col">
                                        <div class="card border bg-info">
                                            <div class="card-header text-center">
                                                Plate Keluar Cover
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="card-body p-3 mb-2 bg-light text-dark">
                                            <div class="row">
                                                <div class="col-md-6" align="center">
                                                    <label class="form-label">Plate</label>
                                                </div>
                                                <div class="col-md-6" align="center">
                                                    <label class="form-label">Mesin</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6" align="center">
                                                    <input type="number" class="form-control" name="plate_cover1" disabled>
                                                </div>
                                                <div class="col-md-6" align="center">
                                                    <input type="number" class="form-control" name="mesin_cover1" disabled>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-6" align="center">
                                                    <input type="number" class="form-control" name="plate_cover2" disabled>
                                                </div>
                                                <div class="col-md-6" align="center">
                                                    <input type="number" class="form-control" name="mesin_cover2" disabled>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-6" align="center">
                                                    <input type="number" class="form-control" name="plate_cover3" disabled>
                                                </div>
                                                <div class="col-md-6" align="center">
                                                    <input type="number" class="form-control" name="mesin_cover3" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-4">
                                <div class="row">
                                    <div class="col">
                                        <div class="card border bg-info">
                                            <div class="card-header text-center">
                                                Plate Keluar Isi
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="card-body p-3 mb-2 bg-light text-dark">
                                            <div class="row">
                                                <div class="col-md-6" align="center">
                                                    <label class="form-label">Plate</label>
                                                </div>
                                                <div class="col-md-6" align="center">
                                                    <label class="form-label">Mesin</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6" align="center">
                                                    <input type="number" class="form-control" name="plate_isi1" disabled>
                                                </div>
                                                <div class="col-md-6" align="center">
                                                    <input type="number" class="form-control" name="mesin_isi1" disabled>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-6" align="center">
                                                    <input type="number" class="form-control" name="plate_isi2" disabled>
                                                </div>
                                                <div class="col-md-6" align="center">
                                                    <input type="number" class="form-control" name="mesin_isi2" disabled>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-6" align="center">
                                                    <input type="number" class="form-control" name="plate_isi3" disabled>
                                                </div>
                                                <div class="col-md-6" align="center">
                                                    <input type="number" class="form-control" name="mesin_isi3" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col">
                                        <div class="card border bg-info">
                                            <div class="card-header text-center">
                                                Plate Keluar Gagal
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="card-body p-3 mb-2 bg-light text-dark">
                                            <div class="row">
                                                <div class="col-md-6" align="center">
                                                    <label class="form-label">Plate</label>
                                                </div>
                                                <div class="col-md-6" align="center">
                                                    <label class="form-label">Mesin</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6" align="center">
                                                    <input type="number" class="form-control" name="plate_gagal1" disabled>
                                                </div>
                                                <div class="col-md-6" align="center">
                                                    <input type="number" class="form-control" name="mesin_gagal1" disabled>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-6" align="center">
                                                    <input type="number" class="form-control" name="plate_gagal2" disabled>
                                                </div>
                                                <div class="col-md-6" align="center">
                                                    <input type="number" class="form-control" name="mesin_gagal2" disabled>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-6" align="center">
                                                    <input type="number" class="form-control" name="plate_gagal3" disabled>
                                                </div>
                                                <div class="col-md-6" align="center">
                                                    <input type="number" class="form-control" name="mesin_gagal3" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="row card-body">
                            <div class="col-md-12">
                                <label class="form-label">Tanggal Out CTCP Cover</label>
                                <br><input type="date" class="form-control" name="tanggal_out_ctcp_cover" disabled>
                                <br><label class="form-label">Tanggal Out CTCP Isi</label>
                            </div>
                        </div>
                        <div class="row card-body">
                            <div class="col-md-3">Ke 1 </div>
                            <div class="col-md-9"><input type="date" class="form-control" name="tanggal_out_ctcp_isi1" disabled></div>
                        </div><br>
                        <div class="row card-body">
                            <div class="col-md-3">Ke 2 </div>
                            <div class="col-md-9"><input type="date" class="form-control" name="tanggal_out_ctcp_isi1" disabled></div>
                        </div>
                    </div>
                </div>
            </div>
            <br><hr><br>
            <div class="row" align="center">
                <div class="col-md-3">
                    <label>Stok Plate 102</label>
                    <label>2000</label>
                </div>
                <div class="col-md-3">
                    <label>Stok Plate 74</label>
                    <label>4500</label>
                </div>
                <div class="col-md-3">
                    <label>Stok Plate 72</label>
                    <label>1000</label>
                </div>
                <div class="col-md-3">
                    <label>Stok Plate Paper Plate</label>
                    <label>500</label>
                </div>
            </div>
            <br><hr><br>
            <div class="row" align="center">
                <div class="col-md-3">
                    <div class="row">
                        <div class="col">
                            <label>Kasi Pengadaan</label>
                        </div>
                    </div>
                    <div class="row" style="height: 100px;"></div>
                    <div class="row">
                        <div class="col-md-2"><label>(</label></div>
                        <div class="col-md-8"></div>
                        <div class="col-md-2"><label>)</label></div>
                    </div>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col">
                            <label>Adm. 2 Pracetak</label>
                        </div>
                    </div>
                    <div class="row" style="height: 100px;"></div>
                    <div class="row">
                        <div class="col-md-2"><label>(</label></div>
                        <div class="col-md-8"></div>
                        <div class="col-md-2"><label>)</label></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col">
                            <label>Kasi Pracetak</label>
                        </div>
                    </div>
                    <div class="row" style="height: 100px;"></div>
                    <div class="row">
                        <div class="col-md-2"><label>(</label></div>
                        <div class="col-md-8"></div>
                        <div class="col-md-2"><label>)</label></div>
                    </div>
                </div>
            </div>
        </div>
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