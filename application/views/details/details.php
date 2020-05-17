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
                        <li class="breadcrumb-item"><a href="<?= base_url('')  ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('Paket') ?>">Paket</a></li>
                        <?php
                        if (isset($paket[0]->kategori_id)) {
                          if ($paket[0]->kategori_id == 1) { ?>
                            <li class="breadcrumb-item active" aria-current="page"><a href="<?= base_url('Paket/'.$paket[0]->kategori_id)?>">Exclusive</a></li>
                          <?php } elseif ($paket[0]->kategori_id == 2) { ?>
                            <li class="breadcrumb-item active" aria-current="page"><a href="<?= base_url('Paket/'.$paket[0]->kategori_id)?>">Business</a></li>
                          <?php } elseif ($paket[0]->kategori_id == 3) { ?>
                            <li class="breadcrumb-item active" aria-current="page"><a href="<?= base_url('Paket/'.$paket[0]->kategori_id)?>">Economic</a></li>
                          <?php } ?>
                        <?php } ?>
                        <li class="breadcrumb-item active" aria-current="page">Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <main>
        <section class="title-details text-center">
            <h2><?= $paket[0]->judul  ?></h2>
        </section>
        <section class="section-header-details ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="img-thumbnail-details text-center">
                            <img src="<?= base_url('/assets/frontend/images/admin/paket/'.$paket[0]->img_paket)?>" alt="">
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
                            <div class="text-about text-justify">
                                <h5>About this place</h5>
                                <span><?= $paket[0]->deskripsi  ?></span>
                            </div>

                            <div class="">
                              <h6 class="mt-3 pl-3 border-left"><span><?= $paket[0]->durasi  ?> Hari</span></h6>
                            </div>

                            <div class="features row mt-3">
                                <div class="col-md-3">
                                    <div class="description">
                                        <i class="fas fa-bed"></i>
                                        <p><?= $paket[0]->fas_bedroom  ?> Bedroom</p>
                                        <hr>
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="description">
                                        <i class="fas fa-bath"></i>
                                        <p><?= $paket[0]->fas_bathroom  ?> Bathroom</p>
                                        <hr>
                                    </div>
                                </div>
                                <?php if ($paket[0]->fas_tv > 0): ?>
                                  <div class="col-md-3 ">
                                      <div class="description">
                                          <i class="fas fa-tv"></i>
                                          <p><?= $paket[0]->fas_tv  ?> Television</p>
                                          <hr>
                                      </div>
                                  </div>
                                <?php endif; ?>
                                <?php if ($paket[0]->fas_inet > 0): ?>
                                  <div class="col-md-3 ">
                                      <div class="description">
                                          <i class="fas fa-wifi"></i>
                                          <p><?= $paket[0]->fas_inet  ?> mb/s</p>
                                          <hr>
                                      </div>
                                  </div>
                                <?php endif; ?>
                                <div class="col-md-3 ">
                                  <div class="description">
                                    <i class="fas fa-users"></i>
                                    <p> Max. <?= $paket[0]->max_person?> Person</p>
                                    <hr>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="card card-booking">
                            <div class="text-booking">
                                <h5>Start Booking</h5>
                                <h3><span>Start From </span>Rp. <?= number_format($paket[0]->harga, 2, ',', '.')  ?></h3>
                                <p>Pick a date </p>
                                <div class="pick-date input-group ">
                                    <input type="text" class="form-control datepicker" id="PickDate" placeholder="Pick a date ">
                                </div>
                                <button class="btn btn-booking">Continue to Book</button>
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
