<!DOCTYPE html>
<?php session_start(); ?>
<!-- saved from url=(0079)https://demos.creative-tim.com/material-dashboard-pro/examples/pages/login.html -->
<html lang="en" class="perfect-scrollbar-on gr__demos_creative-tim_com"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/sislogo2.png">
  <link rel="icon" type="image/png" href="../assets/img/sislogo2.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>
    SIS Login   
  </title>
  
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="./Material Dashboard PRO by Creative Tim_files/css">
  <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./assets/css/material-dashboard.min.css" rel="stylesheet">
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet">
  <link href="./assets/css/css.css" rel="stylesheet">
  <style type="text/css">
    .material-icons {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 24px;
  line-height: 1;
  letter-spacing: normal;
  text-transform: none;
  display: inline-block;
  white-space: nowrap;
  word-wrap: normal;
  direction: ltr;
  -webkit-font-feature-settings: 'liga';
  -webkit-font-smoothing: antialiased;
}

  </style>
  <!-- Google Tag Manager -->
  
<script type="text/javascript" charset="UTF-8" src="./Material Dashboard PRO by Creative Tim_files/common.js.download"></script><script type="text/javascript" charset="UTF-8" src=".//util.js.download"></script></head>

<body class="off-canvas-sidebar" data-gr-c-s-loaded="true" style="">
 
  <div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black" style="background-image: url(&#39;../../assets/img/login1.jpg&#39;); background-size:1580px 750px; background-repeat: no-repeat;">
      <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
            <form class="form" method="post" action="check.php" pb-autologin="true" autocomplete="off">
              <div class="card card-login">
                <div class="card-header card-header-danger text-center">
                  <div class="logo">
        <a href="#" class="simple-text logo-normal">
          <img src="../assets/img/clogo1.jpg" style="height="90px" width="90px" align="absmiddle" >
          <img src="sislogo2.png" style="height="150px  width="100px" align="absmiddle">
        </a>
      </div>
                  <!-- <h4 class="card-title" >MJP Govertment Polytechnic</h6> --> 
                  <h4 class="card-title">SIS Login</h4>   
                  <!-- <h6 class="card-title"><i>MJP Govertment Polytechnic Initative</i></h6>                   -->
                </div>
                <div class="card-body ">
                  <p class="card-description text-center text-danger">An MJP Govt. Polytechnic Initative</p>
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">email</i>
                        </span>
                      </div>
                      <input type="text" class="form-control"  name="username" placeholder="username">
                    </div>
                  </span>
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                  </span>
                </div>
                <div>
                  <?php 
                  if(isset($_SESSION['error'])){
                    echo $_SESSION['error'];
                  }session_destroy();
                 ?></div>
                <div class="card-footer justify-content-center">
                  <button type="submit" class="btn btn-danger btn-sm btn-round" name="submit">Login</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js.download"></script>
  <script src="./Material Dashboard PRO by Creative Tim_files/popper.min.js.download"></script>
  <script src="./Material Dashboard PRO by Creative Tim_files/bootstrap-material-design.min.js.download"></script>
  <script src="./Material Dashboard PRO by Creative Tim_files/perfect-scrollbar.jquery.min.js.download"></script>
  <!--  Google Maps Plugin    -->
  <script src="./Material Dashboard PRO by Creative Tim_files/js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async="" defer="" src="./Material Dashboard PRO by Creative Tim_files/buttons.js.download"></script>
  <!-- Chartist JS -->
  <script src="./Material Dashboard PRO by Creative Tim_files/chartist.min.js.download"></script>
  <!--  Notifications Plugin    -->
  <script src="./Material Dashboard PRO by Creative Tim_files/bootstrap-notify.js.download"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./Material Dashboard PRO by Creative Tim_files/material-dashboard.min.js.download" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="./Material Dashboard PRO by Creative Tim_files/demo.js.download"></script>
  
  <!-- Sharrre libray -->
  <script src="./Material Dashboard PRO by Creative Tim_files/jquery.sharrre.js.download"></script>
 
</body></html>