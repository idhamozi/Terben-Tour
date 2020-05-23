<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Testimonial</title>
	<link rel="stylesheet" href="<?= base_url('assets\frontend\libraries\bootstrap\css\bootstrap.css') ?>">
	<link href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="<?= base_url('assets\frontend\libraries\font-awesome-5\css\fontawesome-all.min.css') ?>" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets\frontend\libraries\gjigo\css\gijgo.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets\frontend\styles\main.css') ?>">
</head>
<body>
<?php $user_data = $this->session->userdata('user_data');  ?>
    <!-- navbar -->
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white">
          <a href="<?= base_url('')  ?>" class="navbar-brand">
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
                        <a href="<?= base_url('Paket') ?>" class="nav-link">Paket Travel</a>
                    </li>
										<li class="nav-item mx-md-2">
                        <a href="<?= base_url('Testimoni/All') ?>" class="nav-link">Testimonial</a>
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
	    <!-- breadcrumb -->
	<hr>
    <section class="section-details-breadcrumb">
        <div class="container">
            <div class="row ">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
												<li class="breadcrumb-item"><a href="<?= base_url('')  ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Testimonial</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <main>
        <section class="section-content-testimonial">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="text-center mb-5">
                        <h3>They Are Loving Us</h3>
                        <span>Moment were giving them  the best experience</span>
                    </div>
                </div>
                <div class="row  justify-content-center">
                    <div class="col-lg-12 mb-5">
											<?php foreach ($testimoni as $dataTesti): ?>

                        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col pl-4 pt-4 d-flex flex-column position-static">
                                <strong class="d-inline-block mb-2 text-primary">Testimoni</strong>

																<h3 class="star-rating">
																		Rating &nbsp; &nbsp;
																		<?php if ($dataTesti->rating == 1){ ?>
																			<span class="fa fa-star" data-rating="1"></span>
																			<span class="fa fa-star-o" data-rating="1"></span>
																			<span class="fa fa-star-o" data-rating="1"></span>
																			<span class="fa fa-star-o" data-rating="1"></span>
																			<span class="fa fa-star-o" data-rating="1"> Worst ! </span>
																		<?php } elseif ($dataTesti->rating == 2) { ?>
																			<span class="fa fa-star" data-rating="2"></span>
																			<span class="fa fa-star" data-rating="2"></span>
																			<span class="fa fa-star-o" data-rating="2"></span>
																			<span class="fa fa-star-o" data-rating="2"></span>
																			<span class="fa fa-star-o" data-rating="2"> Bad ! </span>
																		<?php } elseif ($dataTesti->rating == 3) { ?>
																			<span class="fa fa-star" data-rating="3"></span>
																			<span class="fa fa-star" data-rating="3"></span>
																			<span class="fa fa-star" data-rating="3"></span>
																			<span class="fa fa-star-o" data-rating="3"></span>
																			<span class="fa fa-star-o" data-rating="3"> Cool ! </span>
																		<?php } elseif ($dataTesti->rating == 4) { ?>
																			<span class="fa fa-star" data-rating="4"></span>
																			<span class="fa fa-star" data-rating="4"></span>
																			<span class="fa fa-star" data-rating="4"></span>
																			<span class="fa fa-star" data-rating="4"></span>
																			<span class="fa fa-star-o" data-rating="4"> Fabulous ! </span>
																		<?php } elseif ($dataTesti->rating == 5) {?>
																			<span class="fa fa-star" data-rating="5"></span>
																			<span class="fa fa-star" data-rating="5"></span>
																			<span class="fa fa-star" data-rating="5"></span>
																			<span class="fa fa-star" data-rating="5"></span>
																			<span class="fa fa-star" data-rating="5"> Perfect ! </span>
																		<?php }?>
																</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-10">
                                        <h3 class="card-text mb-5 text-justify">"<?= $dataTesti->testimoni  ?>"</h3>
                                        <h5>
																					<?php if (isset($dataTesti->user_id)) {
																						foreach ($users as $user) {
																							if ($user->user_id == $dataTesti->user_id) {
																								echo $user->first_name." ".$user->last_name;
																							}
																						}
																					} else {
																						foreach ($users_google as $user_google) {
																							if ($user_google->google_id == $dataTesti->google_id) {
																								echo $user_google->first_name." ".$user_google->last_name;
																							}
																						}
																					} ?>
																				</h5>
                                        <span class="mb-5">Paket
																					<?php foreach ($paket as $dataPaket) {
																						if ($dataPaket->paket_id == $dataTesti->paket_id) {
																							echo $dataPaket->judul;
																						}
																					} ?>
																				</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto d-none d-lg-block p-4">
                                <img src="
																<?php if (isset($dataTesti->user_id)) {
																	foreach ($users as $user) {
																		if ($user->user_id == $dataTesti->user_id) {
																			echo base_url('/assets/frontend/images/users/profile/'.$user->img_profile);
																		}
																	}
																} else {
																	foreach ($users_google as $user_google) {
																		if ($user_google->google_id == $dataTesti->google_id) {
																			echo $user_google->img_profile;
																		}
																	}
																} ?>
																" alt="" style="width: 300px; height: 400px; border-radius: 15px;">
                            </div>
                        </div>
											<?php endforeach; ?>

                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
<script src="<?= base_url('assets\frontend\libraries\jquery\jquery-3.4.1.min.js') ?>"></script>
<script src="<?= base_url('assets\frontend\libraries\bootstrap\js\bootstrap.js') ?>"></script>
<script src="<?= base_url('assets\frontend\libraries\retina\retina.min.js') ?>"></script>


</html>
