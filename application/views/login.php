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
    }
    .form__input:focus{
      border-bottom-color: #008080;
      box-shadow: 0 0 5px rgba(0,80,80,.4); 
      border-radius: 4px;
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
      margin-left: -400px;
      color: white;
      filter: brightness(90%)
    }
    
    /* Slideshow container */
    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 4s ease;
    }

    .active {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.5s;
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }

    @keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {font-size: 11px}
    }
  </style>
</head>
<body class="hold-transition login-page">
  <div class="container-fluid">
    <div class="row no-gutter">
      <div class="d-md-flex bg-image" style="width: 65%">
        <div class="row"> 
          <div class="col-md-11"><img src="../assets/dist/img/logo gramasurys.png" style="width:230px;margin-top: 30px;margin-left: 30px;"></div>
          <div class="col-md-1"><img src="../assets/dist/img/logo-FK.png" style="width: 230px;margin-top: 30px;margin-left: 70px;"></div>
        </div>
        <div class="row uc" align="center"> <h1><b title="ciee, gratis">SISTEM INFORMASI PRODUKSI</b> <br> <b>PT. GRAMASURYA</b></h1></div>
        

        <!--<div class="slideshow-container">
          <div class="mySlides">
            <img src="../assets/dist/img/FOTO-LOGIN.jpg" style="width:100%">
            <div class="text">Caption Text</div>
          </div>

          <div class="mySlides">
            <img src="../assets/dist/img/logo-sip-dz.png" style="width:100%">
            <div class="text">Caption Two</div>
          </div>

          <div class="mySlides">
            <img src="../assets/dist/img/logo gramasurys.png" style="width:100%">
            <div class="text">Caption Three</div>
          </div>
        </div><br><br>
        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>-->

        <script>
          var slideIndex = 0;
          showSlides();

          function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
          }
        </script>
      </div>
      <div style="width: 35%">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 mx-auto">
                <div class="card" style="padding:50px;">
                  <center><img src="../assets/dist/img/logo gramasurys 2.png" style="width: 75px;margin-bottom: 10px;margin-top: 30px;" title="LOGO PT. GRAMASURYA"></center>
                  <h3 class="login-heading mb-4 text-center"><b>MASUK</b></h3>
                  <center><hr style="width: 200px;margin-top: -20px;"></center>
                  <form action="<?=site_url('auth/process')?>" method="post">
                    <div class="row" style="margin-top: -20px;">
                      <!-- <input type="text" name="username" id="username" class="form__input" placeholder="Username"> -->
                      <div class="col-md-11"><input type="text" name="username" id="username" class="form__input" placeholder="Username"></div>
                      <div class="col-md-1" style="margin-top: 50px;"><span class="fa fa-user"></span></div>
                    </div>
                    <div class="row" style="margin-top: -20px;margin-bottom: 30px;">
                      <div class="col-md-11"><input type="password" name="password" id="password" class="form__input" placeholder="Password"></div>
                      <div class="col-md-1" style="margin-top: 50px;"><span class="fa fa-lock"></span></div>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" name="login" title="KUY LOGIN">Sign in</button>
                  </form>
                </div>
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
