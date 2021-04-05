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
        <a href="index3.html" class="nav-link"><h3>Dashboard/Pracetak </h3></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>

        

    <!-- Right navbar links -->
         <!-- Right navbar links -->
         <ul class="navbar-nav ml-auto">
        <li class="dropdown user user-menu">
          <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <!-- <img src="<?= base_url() ?>assets//dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
                <span class="hiden-xs"><?= $this->fungsi->user_login()->username ?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">


                <a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a>
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
                <a href="<?=site_url()?>pracetak"
                    <?php  if($judul == "Surat Order Pracetak"){?>
                      class= "nav-link active"
                    <?php }else {?>
                      class= "nav-link"
                    <?php } ?>
                    >
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Surat Order</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url()?>pracetak/Imposisi" 
                <?php  if($judul == "Imposisi"){?>
                      class= "nav-link active"
                    <?php }else {?>
                      class= "nav-link"
                    <?php } ?>
                    >
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Imposisi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url()?>pracetak/Ctcp" 
                 <?php  if($judul == "CTCP"){?>
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
                 <?php  if($judul == "Laporan"){?>
                      class= "nav-link active"
                    <?php }else {?>
                      class= "nav-link"
                    <?php } ?>
                    >
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Laporan</p>
                </a>
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
    <strong>Copyright &copy; 2014-2018 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0-alpha
    </div>
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
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>assets/dist/js/demo.js"></script>
</body>
</html>
