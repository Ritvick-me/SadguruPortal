<?php
  
  session_start();

  error_reporting(0);

  $_SESSION['Output'];

  $_SESSION['loginDoctor'];

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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>
    
    <nav id="nav-design" class="navbar navbar-expand-lg navbar-light fixed-top bg-light rvp-navbar">
      <a class="navbar-brand rvp-nav-head d-none d-md-block" href="#">SADGURU<span class="rvp-clinic"> HOMOEO CLINIC</span></a>
      <a class="navbar-brand rvp-nav-head d-md-none" href="#">SADGURU</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link rvp-nav-name" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link rvp-nav-name" href="#doctors">Doctors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link rvp-nav-name" href="#locations">Locations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link rvp-nav-name" href="#contactUs">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link rvp-nav-name" href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Login</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="background-color: var(--primary-color);">
            <div class="container-fluid">
              <div class="row align-items-center justify-content-center rvp-modal-row">
                <div id="rvp-pat-log"  class="col-12 col-md-6 text-center rvp-col-left">
                  <button id="patient-button" class="rvp-button">Login as a Patient</button>
                  <form id="Patient-login" class="d-none" action="loginPatient.php" method="POST">
                    <h3 style="font-weight: 999;">PATIENT'S LOGIN</h3>
                    <br>
                    <input class="rvp-mail" type="email" name="Email" placeholder="Your Email">
                    <br><br>
                    <input class="rvp-mail" type="password" name="pass" placeholder="Password">
                    <button id="go-pat-back" type="button" class="rvp-back">Go Back</button>
                    <button class="rvp-button">Login as a Patient</button>
                  </form>
                </div>
                <div id="rvp-doc-log" class="col-12 col-md-6 text-center rvp-col">
                  <button id="doctor-button" class="rvp-button">Login as a Doctor</button>
                  <form id="Doctor-login" class="d-none" action="loginDoctor.php" method="POST">
                    <h3 style="font-weight: 999;">DOCTOR'S LOGIN</h3>
                    <br>
                    <input class="rvp-mail" type="email" name="Email" placeholder="Your Email">
                    <br><br>
                    <input class="rvp-mail" type="password" name="pass" placeholder="Password">
                    <button id="go-doc-back" type="button" class="rvp-back">Go Back</button>
                    <button class="rvp-button">Login as a Doctor</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="rvp-close" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <header>
      <div class="container-fluid rvp-hero">
        <div class="row align-items-center justify-content-md-center rvp-row">
          <div class="col-12 rvp-hero-pad">
            <div class="container d-none d-lg-block rp-pad">
              <div id="#rvp-login" class="text-center">
                <?php
                  echo '<span style="font-size: 20px; margin-bottom: 15px; color: red; font-weight: 999; background-color: white;">' . $_SESSION['loginDoctor'] . '</span>';
                  $_SESSION['loginDoctor'] = "";
                ?> 
                 <!--Ask why is the session not being destroyed down below?-->
                <?php
                  echo '<h4 style="font-size: 20px; margin-bottom: 15px; color: red;">' . $_SESSION['User']['Name'] . '</h4>';
                ?>  
              </div>
              <h1 class="rvp-hero-head"><span class="rvp-s1">SADGURU</span><span class="rvp-s2">HOMOEO CLINIC</span></h1>
              <h2 class="rvp-hero-sub">HEALING WITH FAITH AND HOMOEOPATHY</h2>
            </div>
            <div class="container-fluid d-lg-none text-center rvp-small-pad">
              <h1 class="rvp-hero-head"><span class="rvp-s1 rvp-s1-alt">SADGURU</span><br><span class="rvp-s2 rvp-s2-alt">HOMOEO CLINIC</span></h1>
              <h2 class="rvp-hero-sub d-none d-lg-block">HEALING WITH FAITH AND HOMOEOPATHY</h2>
            </div>
          </div>
        </div>
      </div>
  
      <div class="container-fluid rvp-body rvp-disappear">
        <div class="row align-items-center justify-content-md-center rvp-body-row">
          <div class="col-12 col-md-6  rvp-image"></div>
          <div class="col-12 col-md-6">
            <h3 class="rvp-question"><span>W</span>HAT IS HOMOEOPATHY?</h3>
            <br><br>
            <p class="text-justify"><em> Homeopathy is a medical system based on the belief that the body can cure itself. Those who practice it use tiny amounts of natural substances,
                    like plants and minerals. They believe these stimulate the healing process. <br><br>
                    It was developed in the late 1700s in Germany. It’s common in many European countries, but it’s not quite as popular in the United States.
                    basic belief behind homeopathy is “like cures like.” In other words, something that brings on symptoms in a healthy person can -- in a very small 
                    dose -- treat an illness with similar symptoms. This is meant to trigger the body’s natural defenses. <br><br>
                    For example, red onion makes your eyes water. That’s why it’s used in homeopathic remedies for allergies. Treatments for other ailments are made
                    from poison ivy, white arsenic, crushed whole bees, and an herb called arnica.</em></p>
          </div>
        </div>
      </div>
    </header>
   

    <hr id="doctors">

    <div class="container-fluid rvp-doctor">
      <div class="rvp-doctor-head rvp-disappear"><span>D</span>OCTORS</div>
      <div  id="rvp-doc" class="row align-items-center justify-content-md-center rvp-disappear" style="margin-top: 30px; margin-bottom: 30px;">
        <div class="col-12 col-md-6 text-sm-center text-md-right rvp-drRamesh"><img src="./Resources/images/d_1.jpeg" alt="Dr. Ramesh Tripathi"></div>
        <div class="col-12 col-md-6">
          <div class="triangle-right d-none d-md-block"></div>
          <br>
          <div>
            <h3 class="drRamesh">Dr. Ramesh Tripathi</h3>
            <p class="text-justify rvp-width"><em> Dr. Ramesh Tripathi is a retired medical officer having plenty of experience in curing chronic diseases. Keen observer leading to quick
                    relief in acute cases where patients cant judge their symptoms by themselves. Experienced homoeopath doctor with tons of knowledge.</em></p>
          </div>
        </div>
      </div>
      <div id="rvp-doc2" class="row align-items-center justify-content-md-end rvp-disappear" style="margin-top: 30px; margin-bottom: 30px;">
        <div class="col-12 col-md-6 text-sm-center text-md-left rvp-drRamesh d-md-none"><img src="./Resources/images/d_3.jpeg" alt="Dr. Ramesh Tripathi"></div>
        <div class="col-12 col-md-6 col-lg-6 text-sm-left text-md-right rvp-drSwati">
          <div class="triangle-left ml-auto d-none d-md-block"></div>
          <br>
          <div>
            <h3 class="drRamesh">Dr. Swati Tripathi</h3>
            <p class="text-justify rvp-width"><em> 	Dr. Swati Tripathi Gold medalist batch 2010 from homoeopathy university. Dealing with gynaecological problems and child care.
                                          Lifestyle disorders like PCOS PCOD OBESITY HYPERTENSION ETC are treated with medicines as well as proper diet and regime.</em></p>
          </div>
        </div>
        <div class="col-12 col-md-6 text-sm-center text-md-left rvp-drRamesh d-none d-md-block"><img src="./Resources/images/d_3.jpeg" alt="Dr. Ramesh Tripathi"></div>
      </div>
      <div id="rvp-doc3" class="row align-items-center justify-content-md-center rvp-disappear" style="margin-top: 30px; margin-bottom: 30px;">
        <div class="col-12 col-md-6 text-sm-center text-md-right rvp-drRamesh"><img src="./Resources/images/d_2.jpeg" alt="Dr. Ramesh Tripathi"></div>
        <div class="col-12 col-md-6">
          <div class="triangle-right d-none d-md-block"></div>
          <br>
          <div>
            <h3 class="drRamesh">Dr. Ramest Tripathi</h3>
            <p class="text-justify rvp-width"><em>Dr. Ramest Tripathi is a BHMS 2010 batch from Homoeopathy university jaipur. Pursuing classical homoeopathy sticking to the 
                                        ethics and giving miraculous results. Also dealing in physclogical counselling. Separate couselling sessions for each patient.</em></p>
          </div>
        </div>
      </div>
    </div>

    <br id="locations">

    <div class="container-fluid rvp-location" style=" background-color: #fafafa;">
      <div class="rvp-location-head rvp-disappear"><span>L</span>OCATE US</div>
      <div id="rvp-locate" class="row align-items-center justify-content-md-center rvp-disappear" style="margin-top: 30px; margin-bottom: 30px;">
        <div class="col-12 col-md-8 text-sm-center text-md-right rvp-drRamesh d-none d-md-block">
          <iframe style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7127.156591953218!2d83.42769378159839!3d26.72591592647779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6e102d2547cd67ef!2sSadguru+Homoeo+Clinic+Gorakhpur!5e0!3m2!1sen!2sin!4v1555659886291!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen>
          </iframe>
        </div>
        <div class="col-12 col-md-4">
          <div class="triangle-right-alt d-none d-md-block"></div>
          <br>
          <div>
            <h3 class="rvp-gkp">Gorakhpur Clinic Location</h3>
          </div>
        </div>
        <div class="col-12 col-md-8 text-sm-center text-md-right rvp-drRamesh d-md-none">
          <iframe style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7127.156591953218!2d83.42769378159839!3d26.72591592647779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6e102d2547cd67ef!2sSadguru+Homoeo+Clinic+Gorakhpur!5e0!3m2!1sen!2sin!4v1555659886291!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen>
          </iframe>
        </div>
      </div>
      <div id="rvp-locate2" class="row align-items-center justify-content-md-end rvp-disappear" style="margin-top: 30px; margin-bottom: 30px;">
        <div class="col-12 col-md-4 text-sm-left text-md-right rvp-drSwati">
          <div class="triangle-left-alt ml-auto d-none d-md-block"></div>
          <br>
          <div>
            <h3 class="rvp-gkp">Deoria Clinic Location</h3>
          </div>
        </div>
        <div class="col-12 col-md-8 text-sm-center text-md-left rvp-drRamesh">
          <iframe style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3570.6746496740875!2d83.78311191497514!3d26.498418483307837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3993c5151461a83d%3A0xed9f2eae4ac88adf!2sSadguru+Homoeo+Clinic!5e0!3m2!1sen!2sin!4v1555660113311!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen>
          </iframe>
        </div>
      </div>
    </div>

    <footer class="text-center rvp-foot-bg">
      <br id="contactUs">
      <img class="rvp-contact rvp-disappear" src="./Resources/images/Contact-Us.png" style="margin-top: 0px;" alt="contact us">
      <div id="rvp-tag" class="text-justify container rvp-footer rvp-disappear" style="margin-top: 0px;">
        <form class="rvp-form" action="contact.php" method="POST">
          <h3 class="rvp-h1">PATIENT'S NAME:</h3>
          <input name="first" required type="text" class="rvp-name" placeholder="First name">
          <input name="last" required type="text" class="rvp-name" placeholder="Last name">
          <h3 class="rvp-h1">MOBILE NUMBER:</h3>
          <input name="phone" type="tel" class="rvp-input" placeholder="Mobile Number" required>
          <h3 class="rvp-h1">SUBJECT:</h3>
          <input name="subject" required type="text" class="rvp-input" placeholder="Subject">
          <h3 class="rvp-h1">PROBLEM DESCRIPTION:</h3>
          <textarea name="info" required type="text" class="rvp-input" placeholder="Let us know, we are listening..."></textarea>
          <div class="container-fluid text-center">
            <button type="submit" class="rvp-submit">Send</button>
          </div>
        </form>
        <div class="container-fluid text-center">
          <h4 class="rvp-email">Email Us:- <a href="mailto:sadguruclinic@gmail.com">sadguruclinic@gmail.com</a> &nbsp|&nbsp Call Us: <a href="tel:+918874188800">+918874188800</a> </h4>
        </div>
      </div>
      <div id="rvp-sender">
        <?php
          echo '<h4 style="font-size: 20px; margin-bottom: 15px; color: white;">' . $_SESSION['Output'] . '</h4>';
          $_SESSION['Output'] = "";
        ?>
      </div>
      <div class="container">
        <h4 class="rvp-end-h4">© Copyright SADGURU CLINIC. Designed & Managed by <span class="rvp-end">Ritvick V. Pandey</span></h4>
      </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
    <script type="text/javascript" src="./Resources/js/index.js"></script>
  </body>
</HTML>