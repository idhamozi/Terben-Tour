<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets\frontend\libraries\bootstrap\css\bootstrap.css') ?>">
    <link href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link href="<?= base_url('assets\frontend\libraries\font-awesome-5\css\fontawesome-all.min.css') ?>" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets\frontend\libraries\gjigo\css\gijgo.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets\frontend\styles\main.css') ?>">
    <title>Details</title>
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
                        <a href="<?= base_url('')  ?>" class="nav-link active">Home</a>
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
    <hr>
    <!-- end -->
    <!-- breadcrumb -->
    <section class="section-details-breadcrumb">
        <div class="container">
            <div class="row ">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <main>
        <section class="title-details text-center">
            <h2>Trips to Bandung</h2>
        </section>
        <section class="section-header-details ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="img-thumbnail-details text-center">
                            <img src="<?= base_url('assets\frontend\images\pict-trip.png')?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-content-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="col-lg-10">
                            <div class="text-about">
                                <h5>About this place</h5>
                                <span>Bandung is the capital of West Java in Indonesia. Bandung is 180 kilometers
                                    southeast from
                                    Jakarta. Although it has a population of over two million the pace of city life is
                                    slower
                                    than Jakarta's. Today Bandung has a population of 2 million people, Bandung area an
                                    estimated 4 million. Bandung is situated on a plateau 768 meters above sea level
                                    with a cool
                                    climate throughout the year. Bandung is the most European city of Java. </span>
                            </div>

                            <div class="features row mt-3">
                                <div class="col-md-3">
                                    <div class="description">
                                        <i class="fas fa-bed"></i>
                                        <p>2 Bedroom</p>
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="description">
                                        <i class="fas fa-bath"></i>
                                        <p>1 Bathroom</p>
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="description">
                                        <i class="fas fa-tv"></i>
                                        <p>Television</p>
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="description">
                                        <i class="fas fa-wifi"></i>
                                        <p>20 mb/s</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="card card-booking">
                            <div class="text-booking">
                                <h5>Start Booking</h5>
                                <h3><span>Start From </span>Rp. 1.500.000</h3>
                                <p>Pick a date </p>
                                <div class="pick-date input-group ">
                                    <input type="text" class="form-control datepicker" id="PickDate" placeholder="Pick a date ">
                                </div>
                                <button class="btn btn-booking">Countinue to Book</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-img-details mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="features row mt-3">
                            <div class="col-lg-3">
                                <div class="description">
                                    <img src="frontend\images\icon_user.png" alt="">
                                    <div class="description">
                                        <h5 class="mt-3">Mountain</h5>
                                        <p>Nature</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 ">
                                <div class="description">
                                    <img src="frontend\images\icon_user.png" alt="">
                                    <div class="description">
                                        <h5 class="mt-3">Mountain</h5>
                                        <p>Nature</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 ">
                                <div class="description">
                                    <img src="frontend\images\icon_user.png" alt="">
                                    <div class="description">
                                        <h5 class="mt-3">Mountain</h5>
                                        <p>Nature</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 ">
                                <div class="description">
                                    <img src="frontend\images\icon_user.png" alt="">
                                    <div class="description">
                                        <h5 class="mt-3">Mountain</h5>
                                        <p>Nature</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
	</main>

	<?php require_once APPPATH."views/layout/layout.footer.php" ?>


    <!-- end -->

</body>
<script src="<?= base_url('assets\frontend\libraries\jquery\jquery-3.4.1.min.js') ?>"></script>
<script src="<?= base_url('assets\frontend\libraries\bootstrap\js\bootstrap.js') ?>"></script>
<script src="<?= base_url('assets\frontend\libraries\retina\retina.min.js') ?>"></script>
<script src="<?= base_url('assets\frontend\libraries\gjigo\js\gijgo.js') ?>"></script>

<script>
    $(document).ready(function() {
        $('.datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            icons: {
                rightIcon: '<i class="fas fa-calendar-alt"></i>'
            }
        })
    });
</script>

</html>
