
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Blank Page</title>
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
        <a href="index3.html" class="nav-link">Dashboard/Finishing</a>
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
                Finishing
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=site_url()?>finishing/Display"
                    <?php  if($judul == "Display Umum"){?>
                      class= "nav-link active"
                    <?php }else {?>
                      class= "nav-link"
                    <?php } ?>
                    >
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Display Umum</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url()?>finishing/FinishingProses" 
                <?php  if($judul == "Finishing Proses"){?>
                      class= "nav-link active"
                    <?php }else {?>
                      class= "nav-link"
                    <?php } ?>
                    >
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Finishing Proses</p>
                </a>
              </li>
              <li class="nav-item has-treeview menu-open">
                <a href="#" 
                 <?php  if($judul == "Finishing Akhir"){?>
                      class= "nav-link active"
                    <?php }else {?>
                      class= "nav-link"
                    <?php } ?>
                    >
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Finishing Akhir <i class="fa fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?=site_url()?>finishing/FinishingAkhir/mesin_kategori1"
                      <?php  if($judul == "Finishing Akhir Mesin Finishing"){?>
                        class= "nav-link active"
                      <?php }else {?>
                        class= "nav-link"
                      <?php } ?>
                    >
                      <p><i class="fa fa-circle-o nav-icon" style="margin-left: 20px;"></i>Mesin Finishing</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=site_url()?>finishing/FinishingAkhir/mesin_kalender"
                      <?php  if($judul == "Finishing Akhir Mesin Kalender"){?>
                        class= "nav-link active"
                      <?php }else {?>
                        class= "nav-link"
                      <?php } ?>
                    >
                      <p><i class="fa fa-circle-o nav-icon" style="margin-left: 20px;"></i>Mesin Kalender</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="<?=site_url()?>finishing/QualityControl" 
                 <?php  if($judul == "Quality Control"){?>
                      class= "nav-link active"
                    <?php }else {?>
                      class= "nav-link"
                    <?php } ?>
                    >
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Quality Control</p>
                </a>
              </li>
              <li class="nav-item has-treeview menu-open">
                <a href="#" 
                 <?php  if($judul == "Operator"){?>
                      class= "nav-link active"
                    <?php }else {?>
                      class= "nav-link"
                    <?php } ?>
                    >
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Operator <i class="fa fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?=site_url()?>finishing/OperatorFP"
                      <?php  if($judul == "Operator Finishing Proses"){?>
                        class= "nav-link active"
                      <?php }else {?>
                        class= "nav-link"
                      <?php } ?>
                    >
                      <p><i class="fa fa-circle-o nav-icon" style="margin-left: 20px;"></i>Finishing Proses</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=site_url()?>finishing/OperatorFA"
                      <?php  if($judul == "Operator Finishing Akhir"){?>
                        class= "nav-link active"
                      <?php }else {?>
                        class= "nav-link"
                      <?php } ?>
                    >
                      <p><i class="fa fa-circle-o nav-icon" style="margin-left: 20px;"></i>Finishing Akhir</p>
                    </a>
                  </li>
                </ul>
              </li>
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
    <?php  if($judul == "Operator Finishing Proses" || $judul == "Operator Finishing Akhir") {?>

    <?php  } else {?>
      <strong>Copyright &copy; Fantastic-kod | 2021 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.0-alpha
      </div>
    <?php } ?>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
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
 
  <!-- DataTables -->
  <script src="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.js"></script>
  <script src="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap4.js"></script>

  <!-- Page script -->
  <script>
      $(function () {
    $("#table1").DataTable();
  });
  </script>
</body>
</html>
