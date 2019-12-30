<?php

  include_once('config.php');
  include_once('session.php');
  
  error_reporting(0);

?>

<!DOCTYPE HTML>

<head>
    <title>Sadguru Clinic</title>
    <link rel="icon" type="image/png" sizes="32x32" href="res/img/favicon-32x32.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="generator" content="Webflow">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="Resources/css/styles.css">
    <link rel="stylesheet" href="Resources/css/doctor.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>

  <nav id="nav-design" class="navbar navbar-expand-lg navbar-light fixed-top bg-light rvp-navbar">
    <a class="navbar-brand rvp-nav-head d-none d-md-block" href="#">SADGURU<span class="rvp-clinic rvp-black"> HOMOEO CLINIC</span></a>
    <a class="navbar-brand rvp-nav-head d-md-none" href="#">SADGURU</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link rvp-nav-name rvp-black" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link rvp-nav-name rvp-black" href="#doctors">Doctors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link rvp-nav-name rvp-black" href="#locations">Locations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link rvp-nav-name rvp-black" href="#contactUs">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link rvp-nav-name rvp-black" href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="border-style: none; background-color: transparent;">
        <div class="modal-header rvp-header-bg">
          <h5 class="modal-title" id="exampleModalCenterTitle">Logout</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background-color: var(--tartiary-color); padding-top: 0px;">
          <h3 class="rvp-logout">Are you sure you want to log out?</h3>
          <form action="logout.php" method="post">
            <button type="button" class="rvp-close" data-dismiss="modal">Close</button>
            <button type="submit" class="rvp-logout-btn">Logout</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <div class="container-fluid rvp-hero">
    <div class="row align-items-center justify-content-md-center rvp-row">
      <div class="col-12 rvp-hero-pad">
        <div class="container d-none d-lg-block rp-pad">
          <h1 class="rvp-hero-head"><span class="rvp-s1">HELLO</span><span class="rvp-s2 rvp-white">HOMOEO CLINIC</span></h1>
          <h2 class="rvp-hero-sub">HEALING WITH FAITH AND HOMOEOPATHY</h2>
        </div>
        <div class="container-fluid d-lg-none text-center rvp-small-pad">
          <h1 class="rvp-hero-head"><span class="rvp-s1 rvp-s1-alt">SADGURU</span><br><span class="rvp-s2 rvp-s2-alt">HOMOEO CLINIC</span></h1>
          <h2 class="rvp-hero-sub d-none d-lg-block">HEALING WITH FAITH AND HOMOEOPATHY</h2>
        </div>
      </div>
    </div>
  </div>

  <div id="hideThis" class="container-fluid rvp-hero" style="height: 30px;">
    <div class="row justify-content-between">
      <div class="col-md-4 col-12">
        <?php
          echo '<h4 style="font-size: 20px; margin-bottom: 15px; color: red;">' . $_SESSION['User']['Name'] . '</h4>';
        ?>
      </div>
    </div>
  </div>

  <div id="showThis" class="container-fluid rvp-hero-pg2" style="display: none;">
    <div class="row align-items-center justify-content-md-center rvp-row">
      <div class="col-12 rvp-hero-pad">
        <div class="container d-none d-lg-block rp-pad">
          <h1 class="rvp-hero-head"><span class="rvp-s1">SADGURU</span><span class="rvp-s2 rvp-white">HOMOEO CLINIC</span></h1>
          <h2 class="rvp-hero-sub">HEALING WITH FAITH AND HOMOEOPATHY</h2>
        </div>
        <div class="container-fluid d-lg-none text-center rvp-small-pad">
          <h1 class="rvp-hero-head"><span class="rvp-s1 rvp-s1-alt">SADGURU</span><br><span class="rvp-s2 rvp-s2-alt">HOMOEO CLINIC</span></h1>
          <h2 class="rvp-hero-sub d-none d-lg-block">HEALING WITH FAITH AND HOMOEOPATHY</h2>
        </div>
      </div>
    </div>
  </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="./Resources/js/doctor.js"></script>
  </body>
</HTML>