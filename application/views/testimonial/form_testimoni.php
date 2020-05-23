<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="frontend\libraries\bootstrap\css\bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="frontend\libraries\css\star-rating.css">
    <link rel="stylesheet" href="<?= base_url('assets\frontend\styles\main.css') ?>">
</head>

<body>
<?php $user_data = $this->session->userdata('user_data');  ?>
	<!-- navbar -->
	<main>
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
    <section class="section-header-form-testimonial"></section>
    <section class="section-content-form-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Apakah anda senang dengan liburan anda?</h3>
                    <form>
                        <div class="form-group">
                            <label for="FormDeskripsi">Deskripsi</label>
                            <textarea class="form-control" id="FormDeskripsi" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="input-21f">Berikan bintang</label>
                            <div class="rating ">
                                        <input type="radio " id="star10 " name="rating " value="10 " /><label for="star10 " title="Rocks! ">5 stars</label>
                                        <input type="radio " id="star9 " name="rating " value="9 " /><label for="star9 " title="Rocks! ">4 stars</label>
                                        <input type="radio " id="star8 " name="rating " value="8 " /><label for="star8 " title="Pretty good ">3 stars</label>
                                        <input type="radio " id="star7 " name="rating " value="7 " /><label for="star7 " title="Pretty good ">2 stars</label>
                                        <input type="radio " id="star6 " name="rating " value="6 " /><label for="star6 " title="Meh ">1 star</label>
                                    </div>
                        </div>
                        <div class="form-group">
                            <label for="FormName">Nama Anda</label>
                            <input type="text" class="form-control" id="FormName" placeholder="Nama anda">
                            <!-- Terserah dham, enak e d disable opo nggk nama e -->
                        </div>
                        <div class="form-group">
                            <label for="FormPlace">Tempat liburan</label>
                            <input type="text" class="form-control" id="FormPlace" placeholder="Tempat liburan anda">
                            <!-- Terserah dham, enak e d disable opo nggk nama e -->
                        </div>
                        <button class="btn btn-success">Done</button>
                    </form>
                </div>
            </div>
        </div>
	</section>
	</main>
	<?php require_once APPPATH."views/layout/layout.footer.php" ?>
</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?= base_url('assets\frontend\libraries\js\star-rating.js') ?>"></script>
<script src="<?= base_url('assets\frontend\libraries\bootstrap\js\bootstrap.js') ?>"></script>
<script>
    jQuery(document).ready(function() {
        $("#input-21f").rating({
            starCaptions: function(val) {
                if (val < 3) {
                    return val;
                } else {
                    return 'high';
                }
            },
            starCaptionClasses: function(val) {
                if (val < 3) {
                    return 'label label-danger';
                } else {
                    return 'label label-success';
                }
            },
            hoverOnClear: false
        });
        var $inp = $('#rating-input');

        $inp.rating({
            min: 0,
            max: 5,
            step: 1,
            size: 'lg',
            showClear: false
        });

        $('.rb-rating').rating({
            'showCaption': true,
            'stars': '3',
            'min': '0',
            'max': '3',
            'step': '1',
            'size': 'xs',
            'starCaptions': {
                0: 'status:nix',
                1: 'status:wackelt',
                2: 'status:geht',
                3: 'status:laeuft'
            }
        });
    });
</script>

</html>
