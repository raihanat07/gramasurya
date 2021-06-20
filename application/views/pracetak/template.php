
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pracetak Gramasurya</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- DataTables -->
   <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel='shortcut icon' href="../assets/dist/img/grama.png">
  <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
  <script type="text/javascript">
    $("#cover1plate1").keyup(function(){
     var cover1plate1 = parseInt($("#cover1plate1").val());
     var cover1plate2 = parseInt($("#cover1plate2").val());
     var cover1plate3 = parseInt($("#cover1plate3").val());

     $("#jumlahplatcover1").val(c);
    });

    $("#cover1plate2").keyup(function(){
     var cover1plate1 = parseInt($("#cover1plate1").val());
     var cover1plate2 = parseInt($("#cover1plate2").val());
     var cover1plate3 = parseInt($("#cover1plate3").val());

     $("#jumlahplatcover1").val(c);
    });

    $("#cover1plate3").keyup(function(){
     var cover1plate1 = parseInt($("#cover1plate1").val());
     var cover1plate2 = parseInt($("#cover1plate2").val());
     var cover1plate3 = parseInt($("#cover1plate3").val());

     $("#jumlahplatcover1").val(c);
    });
  </script>
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Dashboard/Pracetak</a>
        </li>
      </ul>

      <!-- Right navbar links -->
           <!-- Right navbar links -->
           <ul class="navbar-nav ml-auto">
          <li class="dropdown user user-menu">
            <ul class="navbar-nav ml-auto ml-md-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="hiden-xs"><?=ucfirst($this->fungsi->user_login()->nama)?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="<?=site_url('auth/logout')?>">Logout</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="<?=base_url()?>/assets/dist/img/logo-sip.png" alt="logo SIP" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">SI Produksi</span>
      </a>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                PRACETAK
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=site_url()?>pracetak/SuratOrder"
                  <?php  if($judul == "Surat Order Pracetak" || $judul == "Tambah SO Pracetak" || $judul == "Edit SO Pracetak" || $judul == "Lihat SO Pracetak"){?>
                    class= "nav-link active"
                  <?php }else {?>
                    class= "nav-link"
                  <?php } ?>
                >
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Surat Order</p>
                </a>
              </li>
              <?php if ($this->fungsi->user_login()->level == 1 || $this->fungsi->user_login()->level == 4 || $this->fungsi->user_login()->level == 6) { ?>
                <li class="nav-item">
                  <a href="<?=site_url()?>pracetak/Imposisi" 
                    <?php  if($judul == "Imposisi" || $judul == "Tambah Imposisi" || $judul == "Lihat Imposisi Pracetak" || $judul == "Edit Imposisi Pracetak" || $judul == "Print Imposisi Pracetak"){?>
                      class= "nav-link active"
                    <?php }else {?>
                      class= "nav-link"
                    <?php } ?>
                  >
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Imposisi</p>
                  </a>
                </li>
              <?php } ?>
              <?php if ($this->fungsi->user_login()->level == 1 || $this->fungsi->user_login()->level == 5 || $this->fungsi->user_login()->level == 6) { ?>
                <li class="nav-item">
                  <a href="<?=site_url()?>pracetak/Ctcp" 
                    <?php  if($judul == "CTCP" || $judul == "Tambah Ctcp Pracetak" || $judul == "Edit Ctcp Pracetak" || $judul == "Lihat Ctcp Pracetak" || $judul == "Edit Ctcp Pracetak"){?>
                      class= "nav-link active"
                    <?php }else {?>
                      class= "nav-link"
                    <?php } ?>
                  >
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>CTCP</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?=site_url()?>pracetak/Laporan" 
                    <?php  if($judul == "Laporan" || $judul == "Tambah Laporan Pracetak" || $judul == "Edit Laporan Pracetak" || $judul == "Lihat Laporan Pracetak" || $judul == "Print Laporan Pracetak"){?>
                      class= "nav-link active"
                    <?php }else {?>
                      class= "nav-link"
                    <?php } ?>
                  >
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Laporan</p>
                  </a>
                </li>
              <?php } ?>
              <?php if ($this->fungsi->user_login()->level == 6) { ?>
                <li class="nav-item">
                  <a href="<?=site_url()?>pracetak/User" 
                    <?php  if($judul == "User"){?>
                      class= "nav-link active"
                    <?php }else {?>
                      class= "nav-link"
                    <?php } ?>
                  >
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>User</p>
                  </a>
                </li>
              <?php } ?>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <?php echo $contents; ?>
    </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; Fantastic-kod | 2021 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0-alpha
    </div>
  </footer>

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- SlimScroll -->
  <script src="<?=base_url()?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?=base_url()?>assets/plugins/fastclick/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?=base_url()?>assets/dist/js/demo.js"></script>
   
  <!-- DataTables -->
  <script src="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.js"></script>
  <script src="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap4.js"></script>
  <!-- SlimScroll -->
  <script src="<?=base_url()?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- iCheck 1.0.1 -->
  <script src="<?=base_url()?>assets/plugins/iCheck/icheck.min.js"></script>
  <!-- Page script -->
  <script>
      $(function () {
    $("#table1").DataTable();
  });
  </script>
  <!-- Page script -->
  <script>
    $(function () {
      //iCheck for checkbox and radio inputs
      $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass   : 'iradio_minimal-blue'
      })
      //Red color scheme for iCheck
      $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass   : 'iradio_minimal-red'
      })
      //Flat red color scheme for iCheck
      $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass   : 'iradio_flat-green'
      })
    })
  </script>
</body>
</html>
