<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets\frontend\libraries\bootstrap\css\bootstrap.css')  ?>">
    <link rel="stylesheet" href="<?= base_url('assets\frontend\libraries\star_rating\star-rating.css')  ?>">
    <link
        href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
    <link href="<?= base_url('assets\frontend\libraries\font-awesome-5\css\fontawesome-all.min.css')?>" rel="stylesheet" media="all">
    <link rel="stylesheet" href="<?= base_url('assets\frontend\styles\main.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets\frontend\libraries\gjigo\css\gijgo.min.css')?>">
    <title>Beranda</title>
</head>

<body>

    <!-- navbar -->
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white">
            <a href="" class="navbar-brand">
                <img src="<?= base_url('assets\frontend\images\Terben.Tour@2x.png')  ?>" alt="Logo TerbenTour">
            </a>

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navM">
                <span class="navbar-toggler-icon clr"></span>
            </button>

            <div class="collapse navbar-collapse" id="navM">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link active">Home</a>
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
                    <button class="btn btn-login my-2 my-sm-0" onclick="location.href='<?= base_url('Login'); ?>'" type="button">
                        Masuk
                    </button>
                </form>
                <!-- end -->
                <!-- Desktop Button -->
                <form class="from-inline my-2 my-lg-0 d-none d-md-block">
                  <?php
                  $user_data = $this->session->userdata('user_data');
                  if (null !== $user_data) { ?>
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" onclick="location.href='<?= base_url('Login/logout'); ?>'" type="button">
                        <?php echo $user_data['first_name'] ?>
                    </button>
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

    <header>
        <div class=" container header">
            <h1 class="row">
                Travel Aman
                <br>
                Harga Nyaman
            </h1>
            <p class="row mt-3">
                Pusing dengan kerjaan anda? Liburan Yukk!!
            </p>
            <div class="row search">
                <!-- ------- -->
            </div>
        </div>
    </header>

    <main>
        <section class="section-paket-header mt-5  border-bottom ">
            <div class="container">
                <div class="row section-paket">
                    <div id="carousel-indicators-paket" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-indicators-paket" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-indicators-paket" data-slide-to="1"></li>
                            <li data-target="#carousel-indicators-paket" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner pb-5">
                            <div class="carousel-item active">
                                <div class="row section-text">
                                    <div class="col-lg-7 mt-5">
                                        <h3 class="mt-1">Exclusive Trips</h3>
                                        <h2 class="mt-5">Nikmati Paket Liburan akhir Tahun 2020 di Raja Ampat </h2>
                                        <p class="mt-5 mb-5 mr-5">
                                            Sekilas pikiran menerawang dan sebuah lukisan elok pun muncul terbayang.
                                            Lautan lepas
                                            dengan pulau-pulau karang yang tersusun rapih menyambut beberapa ekor
                                            lumba-lumba yang
                                            berloncatan ceria. Langit yang biru berpadu dengan indahnya ombak menyisir
                                            setia
                                        </p>
                                        <h5 class="mt-3 pl-3 border-left">15 Hari Liburan</h5>
                                        <div class="price-and-cta float-left">
                                            <h4 class="mt-3">Rp. 80.000.000</h4>
                                        </div>
                                        <form class="from-inline my-2 my-lg-0 float-right">
                                            <button class="btn-check btn-right my-2 my-sm-0 px-4 mx-3">
                                                Check <i class="fas fa-angle-right pl-2"></i>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="col-lg-5 mt-5">
                                        <img class="img-pict-trip rounded" src="<?= base_url('assets\frontend\images\pict-trip.png')  ?>"
                                            alt="gambar1" class="mt-5">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row section-text">
                                    <div class="col-lg-7 mt-5">
                                        <h3 class="mt-1">Exclusive Trips</h3>
                                        <h2 class="mt-5">Nikmati Paket Liburan akhir Tahun 2020 di Raja Ampat </h2>
                                        <p class="mt-5 mb-5 mr-5">
                                            Sekilas pikiran menerawang dan sebuah lukisan elok pun muncul terbayang.
                                            Lautan lepas
                                            dengan pulau-pulau karang yang tersusun rapih menyambut beberapa ekor
                                            lumba-lumba yang
                                            berloncatan ceria. Langit yang biru berpadu dengan indahnya ombak menyisir
                                            setia
                                        </p>
                                        <h5 class="mt-3 pl-3 border-left">15 Hari Liburan</h5>
                                        <div class="price-and-cta float-left">
                                            <h4 class="mt-3">Rp. 80.000.000</h4>
                                        </div>
                                        <form class="from-inline my-2 my-lg-0 float-right">
                                            <button class="btn-check btn-right my-2 my-sm-0 px-4 mx-3">
                                                Check <i class="fas fa-angle-right pl-2"></i>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="col-lg-5 mt-5">
                                        <img class="img-pict-trip rounded" src="<?= base_url('assets\frontend\images\pict-trip.png')  ?>"
                                            alt="gambar1" class="mt-5">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row section-text">
                                    <div class="col-lg-7 mt-5">
                                        <h3 class="mt-1">Exclusive Trips</h3>
                                        <h2 class="mt-5">Nikmati Paket Liburan akhir Tahun 2020 di Raja Ampat </h2>
                                        <p class="mt-5 mb-5 mr-5">
                                            Sekilas pikiran menerawang dan sebuah lukisan elok pun muncul terbayang.
                                            Lautan lepas
                                            dengan pulau-pulau karang yang tersusun rapih menyambut beberapa ekor
                                            lumba-lumba yang
                                            berloncatan ceria. Langit yang biru berpadu dengan indahnya ombak menyisir
                                            setia
                                        </p>
                                        <h5 class="mt-3 pl-3 border-left">15 Hari Liburan</h5>
                                        <div class="price-and-cta float-left">
                                            <h4 class="mt-3">Rp. 80.000.000</h4>
                                        </div>
                                        <form class="from-inline my-2 my-lg-0 float-right">
                                            <button class="btn-check btn-right my-2 my-sm-0 px-4 mx-3">
                                                Check <i class="fas fa-angle-right pl-2"></i>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="col-lg-5 mt-5">
                                        <img class="img-pict-trip rounded" src="<?= base_url('assets\frontend\images\pict-trip.png')  ?>"
                                            alt="gambar1" class="mt-5">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-testimonial-header mt-5 border-bottom">
            <div class="container ">
                <div class="row section-testimonial">
                    <div id="carousel-indicators-testimonials" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-indicators-testimonials" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-indicators-testimonials" data-slide-to="1"></li>
                            <li data-target="#carousel-indicators-testimonials" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row section-text">
                                    <div class="col-7 mt-5">
                                        <h3>Testimonial</h3>
                                        <h3 class="mt-5 mb-5">Rating</h3>
                                        <h5 class="mt-3 pr-5 mr-5">"Seperti saya bilang tadi, berlibur ke Raja Ampat itu
                                            mahal,
                                            tapi anda
                                            tidak
                                            akan menyesal. Itu pun kalau anda mendapat referensi berlibur ke Raja Ampat
                                            yang
                                            baik
                                            dan benar,"
                                        </h5>
                                        <h4 class="mt-5 mb-3">Galgadot</h4>
                                        <p>Liburan ke Raja Ampat, Indonesia</p>
                                    </div>
                                    <div class="col-lg-5 mt-5">
                                        <img class="img-pict-testimonial rounded  justify-content-center align-items-center " src="<?= base_url('assets\frontend\images\pict-testi.png')  ?>"
                                            alt="gambar1" class="mt-5">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row section-text">
                                    <div class="col-7 mt-5">
                                        <h3>Testimonial</h3>
                                        <h3 class="mt-5 mb-5">Rating</h3>
                                        <h5 class="mt-3 pr-5 mr-5">"Seperti saya bilang tadi, berlibur ke Raja Ampat itu
                                            mahal,
                                            tapi anda
                                            tidak
                                            akan menyesal. Itu pun kalau anda mendapat referensi berlibur ke Raja Ampat
                                            yang
                                            baik
                                            dan benar,"
                                        </h5>
                                        <h4 class="mt-5 mb-3">Galgadot</h4>
                                        <p>Liburan ke Raja Ampat, Indonesia</p>
                                    </div>
                                    <div class="col-lg-5 mt-5">
                                        <img class="img-pict-testimonial rounded  justify-content-center align-items-center" src="<?= base_url('assets\frontend\images\pict-testi.png')  ?>"
                                            alt="gambar1" class="mt-5">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row section-text">
                                    <div class="col-7 mt-5">
                                        <h3>Testimonial</h3>
                                        <h3 class="mt-5 mb-5">Rating</h3>
                                        <h5 class="mt-3 pr-5 mr-5">"Seperti saya bilang tadi, berlibur ke Raja Ampat itu
                                            mahal,
                                            tapi anda
                                            tidak
                                            akan menyesal. Itu pun kalau anda mendapat referensi berlibur ke Raja Ampat
                                            yang
                                            baik
                                            dan benar,"
                                        </h5>
                                        <h4 class="mt-5 mb-3">Galgadot</h4>
                                        <p>Liburan ke Raja Ampat, Indonesia</p>
                                    </div>
                                    <div class="col-lg-5 mt-5">
                                        <img class="img-pict-testimonial rounded  justify-content-center align-items-center" src="<?= base_url('assets\frontend\images\pict-testi.png')  ?>"
                                            alt="gambar1" class="mt-5">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="section-footer mt-5 mb-4">
            <div class="section-footer-img">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 col-lg-4 align-items-center">
                                    <img src="<?= base_url('frontend\images\phone.png')  ?>" alt="">
                                    <h4>Call Us For Information</h4>
                                    <span>0812145252200</span>
                                </div>
                                <div class="col-12 col-lg-4 align-items-center">
                                    <img src="" alt="">
                                    <h4>Call Us For Information</h4>
                                    <span>0812145252200</span>
                                </div>
                                <div class="col-12 col-lg-4 align-items-center">
                                    <img src="" alt="">
                                    <h4>Call Us For Information</h4>
                                    <span>0812145252200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid mb-3">
                <div class="row border-top justify-content-center align-items-center pt-4">
                    <div class="col-auto text-gray-500-font-weight-light">
                        2020.Copyright.Terben.Tour
                    </div>
                </div>
            </div>
        </footer>


    </main>
</body>

<script src="<?= base_url('assets\frontend\libraries\jquery\jquery-3.4.1.min.js')  ?>"></script>
<script src="<?= base_url('assets\frontend\libraries\bootstrap\js\bootstrap.js')  ?>"></script>
<script src="<?= base_url('assets\frontend\libraries\retina\retina.min.js')  ?>"></script>
<script src="<?= base_url('assets\frontend\libraries\star_rating\star-rating.js')  ?>"></script>
<script src="<?= base_url('assets\frontend\libraries\gjigo\js\gijgo.min.js')  ?>"></script>

</html>
