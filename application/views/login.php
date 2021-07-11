<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi Produksi| Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel='shortcut icon' href="../assets/dist/img/logo gramasurys 2.png">

  <style type="text/css">
    .form__input{
      width: 100%;
      border:0px solid transparent;
      border-radius: 0;
      border-bottom: 1px solid #aaa;
      padding: 1em .5em .5em;
      padding-left: 2em;
      outline:none;
      margin:1.5em auto;
      transition: all .5s ease;
      background: #EBECEC;
    }
    .form__input:focus{
      border-bottom-color: #008080;
      box-shadow: 0 0 5px rgba(0,80,80,.4); 
      border-radius: 4px;
      background: #EBECEC;
    }
    :root {
      --input-padding-x: 1.5rem;
      --input-padding-y: 0.75rem;
    }


    .logo {
      width: 220px;
      height: 40px;
      margin-top: 20px;
      margin-left: 35px
    }

    .login,
    .image {
      min-height: 100vh;
    }

    .bg-image {
      background-image: url('../assets/dist/img/FOTO-LOGIN.jpg');
      background-size: cover;
      background-position: center;
      /*filter: brightness(75%)*/
    }

    .login-heading {
      font-weight: 300;
    }

    .btn-login {
      font-size: 0.9rem;
      letter-spacing: 0.05rem;
      padding: 0.75rem 1rem;
      border-radius: 2rem;
    }

    .form-label-group {
      position: relative;
      margin-bottom: 1rem;
    }

    .form-label-group>input,
    .form-label-group>label {
      padding: var(--input-padding-y) var(--input-padding-x);
      height: auto;
      border-radius: 2rem;
    }

    .form-label-group>label {
      position: absolute;
      top: 0;
      left: 0;
      display: block;
      width: 100%;
      margin-bottom: 0;
      /* Override default `<label>` margin */
      line-height: 1.5;
      color: #495057;
      cursor: text;
      /* Match the input under the label */
      border: 1px solid transparent;
      border-radius: .25rem;
      transition: all .1s ease-in-out;
    }

    .form-label-group input::-webkit-input-placeholder {
      color: transparent;
    }

    .form-label-group input:-ms-input-placeholder {
      color: transparent;
    }

    .form-label-group input::-ms-input-placeholder {
      color: transparent;
    }

    .form-label-group input::-moz-placeholder {
      color: transparent;
    }

    .form-label-group input::placeholder {
      color: transparent;
    }

    .form-label-group input:not(:placeholder-shown) {
      padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
      padding-bottom: calc(var(--input-padding-y) / 3);
    }

    .form-label-group input:not(:placeholder-shown)~label {
      padding-top: calc(var(--input-padding-y) / 3);
      padding-bottom: calc(var(--input-padding-y) / 3);
      font-size: 12px;
      color: #777;
    }

    /* Fallback for Edge
    -------------------------------------------------- */

    @supports (-ms-ime-align: auto) {
      .form-label-group>label {
        display: none;
      }
      .form-label-group input::-ms-input-placeholder {
        color: #777;
      }
    }

    /* Fallback for IE
    -------------------------------------------------- */

    @media all and (-ms-high-contrast: none),
    (-ms-high-contrast: active) {
      .form-label-group>label {
        display: none;
      }
      .form-label-group input:-ms-input-placeholder {
        color: #777;
      }
    }

    .uc{
      margin-top: 330px;
      margin-left: -90px;
      color: white;
      filter: brightness(90%)
    }
  </style>
</head>
<body class="hold-transition login-page">
  <div class="container-fluid">
    <div class="row no-gutter">
      <div class="d-none d-md-flex col-md-8 col-lg-8 bg-image">
        <div class="row"> <img src="../assets/dist/img/logo gramasurys.png" class="logo"> </div>
        <div class="row uc" align="center"> <h1><b>SISTEM INFORMASI PRODUKSI <br> PT. GRAMASURYA</h1></b></div>
      </div>
      <div class="col-md-4 col-lg-4">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
                <h3 class="login-heading mb-4 text-center"><b>MASUK</b></h3>
                <hr style="width: 200px;margin-top: -20px;">
                <form action="<?=site_url('auth/process')?>" method="post">
                  <div class="row" style="margin-top: -20px;">
                    <input type="text" name="username" id="username" class="form__input" placeholder="Username">
                  </div>
                  <div class="row" style="margin-top: -20px;margin-bottom: 30px;">
                    <!-- <span class="fa fa-lock"></span> -->
                    <input type="password" name="password" id="password" class="form__input" placeholder="Password">
                  </div>
                  <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" name="login">Sign in</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- iCheck -->
  <script src="<?=base_url()?>assets/plugins/iCheck/icheck.min.js"></script>
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass   : 'iradio_square-blue',
        increaseArea : '20%' // optional
      })
    })
  </script>
</body>
</html>
