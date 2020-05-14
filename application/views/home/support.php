<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets\frontend\libraries\bootstrap\css\bootstrap.css')  ?>">
    <link rel="stylesheet" href="<?= base_url('assets\frontend\libraries\star_rating\star-rating.css')  ?>">
    <link href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link href="<?= base_url('assets\frontend\libraries\font-awesome-5\css\fontawesome-all.min.css') ?>" rel="stylesheet" media="all">
    <link rel="stylesheet" href="<?= base_url('assets\frontend\styles\main.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets\frontend\libraries\gjigo\css\gijgo.min.css') ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url('assets\frontend\plugin\iCheck\square\blue.css') ?>">
    <title>Privacy Policy</title>
  </head>
  <body>

    <?php $user_data = $this->session->userdata('user_data');  ?>

      <!-- navbar -->
      <div class="container">
          <nav class="row navbar navbar-expand-lg navbar-light bg-white">
              <a href="" class="navbar-brand">
                  <img src="<?= base_url('assets\frontend\images\Terben.Tour@2x.png')  ?>" alt="Logo TerbenTour">
              </a>

              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navM">
                  <span class="navbar-toggler-icon clr"></span>
              </button>

              <div class="collapse navbar-collapse" id="navM">
                  <ul class="navbar-nav ml-auto mr-3">
                      <li class="nav-item mx-md-2">
                          <a href="<?= base_url('')  ?>" class="nav-link">Home</a>
                      </li>
                      <li class="nav-item mx-md-2">
                          <a href="#" class="nav-link">Paket Travel</a>
                      </li>
                      <li class="nav-item mx-md-2">
                          <a href="#" class="nav-link">Testimonial</a>
                      </li>
                  </ul>
                  <!-- Mobile Button -->
                  <form class="from-inline d-sm-block d-md-none">
                      <?php
                      if ($user_data !== null) { ?>
                          <div class="dropdown">
                              <button class="btn btn-login my-2 my-sm-0" type="button" data-toggle="dropdown">
                                  <?= $user_data['email']; ?>
                                  <i class="fa fa-angle-down ml-2 opacity-8"></i>
                              </button>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item" href="<?= base_url('User/Profile');  ?>">User Account</a>
                                  <a class="dropdown-item" href="<?= base_url('User/editProfile');  ?>">Setting</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="#" onclick="location.href='<?= base_url('Login/logout'); ?>'" type="button">Logout</a>
                              </div>
                          </div>

                      <?php } else { ?>
                          <button class="btn btn-login my-2 my-sm-0" onclick="location.href='<?= base_url('Login'); ?>'" type="button">
                              Masuk
                          </button>
                      <?php } ?>
                  </form>
                  <!-- end -->
                  <!-- Desktop Button -->
                  <form class="from-inline my-2 my-lg-0 d-none d-md-block">
                      <?php
                      if (null !== $user_data) { ?>
                          <div class="dropdown">
                              <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4"  type="button" data-toggle="dropdown">
                                  <?= $user_data['email'] ?>
                                  <i class="fa fa-angle-down ml-2 opacity-8"></i>
                              </button>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item" href="<?= base_url('User/Profile');  ?>">User Account</a>
                                  <a class="dropdown-item" href="<?= base_url('User/editProfile');  ?>">Setting</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="#" onclick="location.href='<?= base_url('Login/logout'); ?>'" type="button">Logout</a>
                              </div>
                          </div>
                      <?php } else { ?>
                          <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" onclick="location.href='<?= base_url('Login'); ?>'" type="button">
                              Masuk
                          </button>
                      <?php } ?>
                  </form>
                  <!-- end -->
              </div>
          </nav>
      </div>
      <!-- end -->

<div class="container">


    <h1>Information Terben Tour & Travel</h1>

<p>Terben Tour & Travel is agent travel that located in Surabaya, East Java Indonesia. We provide a new experience to do a Travel.</p>

<h2>Contact</h2>

<p>Our contact person is in 0821-213-1234 if you want to get more info or just ask about the packet.</p>

<h2>Support Terben Tour & Travel</h2>

<p>Our official email for information is in info.terbentour@gmail.com .</p>

</div>

<?php require_once APPPATH."views/layout/layout.footer.php" ?>

  </body>
</html>
