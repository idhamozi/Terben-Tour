<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets\frontend\libraries\bootstrap\css\bootstrap.css') ?>">
    <link href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link href="<?= base_url('assets\frontend\libraries\font-awesome-5\css\fontawesome-all.min.css') ?>" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets\frontend\styles\main.css') ?>">
    <title>Paket</title>
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
                        <a href="#" class="nav-link  active">Paket Travel</a>
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
    <section class="section-details-breadcrumb">
        <div class="container">
            <div class="row ">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('')  ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Paket</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <main>
        <section class="section-content-paket">
            <div class="container">
                <div class="row">
                  <?php foreach ($paket as $dataPaket) { ?>
                    <div class="col-lg-6 mb-3">
                        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col pl-4 pt-4 d-flex flex-column position-static">
                                <strong class="d-inline-block mb-2 text-primary">
                                  <a href="<?= base_url('Paket/'.$dataPaket->kategori_id)  ?>">
                                  <?php if ($dataPaket->kategori_id == 1) {
                                    echo "Exclusive";
                                  } elseif ($dataPaket->kategori_id == 2) {
                                    echo "Business";
                                  } else {
                                    echo "Economic";
                                  } ?>
                                   Trip
                                   </a>
                                 </strong>
                                <h3 class="mb-0"><?= $dataPaket->judul  ?></h3>
                                <div class="mb-1 text-muted"><?= $dataPaket->durasi  ?> Hari</div>
                                <h5>Rp. <?= number_format($dataPaket->harga, 2, ',', '.')  ?></h5>
                                <p class="card-text mb-auto text-muted text-justify"><?= character_limiter(strip_tags($dataPaket->deskripsi),100) ?></p>
                            </div>
                            <div class="col-auto d-none d-lg-block p-4">
                                <img src="<?= base_url('/assets/frontend/images/admin/paket/'.$dataPaket->img_paket) ?>" alt="<?= $dataPaket->img_paket  ?>" style="width: 250px; height: 200px;">
                            </div>
                            <div class="col-lg-12 pl-4 pb-4 pr-4">

                                <div class="features row mt-3">
                                    <div class="col-md-3">
                                        <div class="description">
                                            <i class="fas fa-bed"></i>
                                            <p><?= $dataPaket->fas_bedroom ?> Bedroom</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 ">
                                        <div class="description">
                                            <i class="fas fa-bath"></i>
                                            <p><?= $dataPaket->fas_bathroom ?> Bathroom</p>
                                        </div>
                                    </div>
                                    <?php if ($dataPaket->fas_tv > 0) { ?>
                                      <div class="col-md-3 ">
                                          <div class="description">
                                              <i class="fas fa-tv"></i>
                                              <p><?= $dataPaket->fas_tv  ?> Television</p>
                                          </div>
                                      </div>
                                    <?php } ?>
                                    <?php if ($dataPaket->fas_inet > 0) { ?>
                                      <div class="col-md-3 ">
                                          <div class="description">
                                              <i class="fas fa-wifi"></i>
                                              <p><?= $dataPaket->fas_inet ?> mb/s</p>
                                          </div>
                                      </div>
                                    <?php } ?>
                                </div>
                                <div class="features row mt-4">
                                  <div class="col-md-8">
                                    <button class="btn btn-success" onclick="location.href='<?= base_url('Paket/Detail/'.$dataPaket->paket_id); ?>'" type="button">
                                        Continue Details
                                    </button>
                                  </div>
                                  <div class="col-md-4 order-last">
                                    <div class="description">
                                      <i class="fas fa-users"></i> Max. <?= $dataPaket->max_person?> Person
                                      <hr>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  <?php } ?>
                </div>
            </div>
        </section>
	</main>
	<?php require_once APPPATH."views/layout/layout.footer.php" ?>

</body>

<script src="<?= base_url('assets\frontend\libraries\jquery\jquery-3.4.1.min.js') ?>"></script>
<script src="<?= base_url('assets\frontend\libraries\bootstrap\js\bootstrap.js') ?>"></script>
<script src="<?= base_url('assets\frontend\libraries\retina\retina.min.js') ?>"></script>

</html>
