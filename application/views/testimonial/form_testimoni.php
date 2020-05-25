<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('assets\frontend\libraries\font-awesome-5\css\fontawesome-all.min.css') ?>" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets\frontend\libraries\bootstrap\css\bootstrap.css') ?>">
    <link href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets\frontend\styles\main.css') ?>">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?= base_url('assets\frontend\libraries\jquery\jquery-3.4.1.min.js') ?>"></script>
    <script src="<?= base_url('assets\frontend\libraries\bootstrap\js\bootstrap.js') ?>"></script>

</head>
<style media="screen">
.rating {
display: inline-block;
position: relative;
height: 50px;
line-height: 50px;
font-size: 50px;
}

.rating label {
position: absolute;
top: 0;
left: 0;
height: 100%;
cursor: pointer;
}

.rating label:last-child {
position: static;
}

.rating label:nth-child(1) {
z-index: 5;
}

.rating label:nth-child(2) {
z-index: 4;
}

.rating label:nth-child(3) {
z-index: 3;
}

.rating label:nth-child(4) {
z-index: 2;
}

.rating label:nth-child(5) {
z-index: 1;
}

.rating label input {
position: absolute;
top: 0;
left: 0;
opacity: 0;
}

.rating label .icon {
float: left;
color: transparent;
}

.rating label:last-child .icon {
color: #000;
}

.rating:not(:hover) label input:checked ~ .icon,
.rating:hover label:hover input ~ .icon {
color: #09f;
}

.rating label input:focus:not(:checked) ~ .icon:last-child {
color: #000;
text-shadow: 0 0 5px #09f;
}
</style>
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
    <section class="section-content-form-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Give us feedback from your experience with us?</h3>
                        <div class="form-group">
                            <h5>Pick a Rating</h5>
                            <form class="rating">
                              <label>
                                <input type="radio" name="stars" value="1" />
                                <span class="icon">★</span>
                              </label>
                              <label>
                                <input type="radio" name="stars" value="2" />
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                              </label>
                              <label>
                                <input type="radio" name="stars" value="3" />
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                              </label>
                              <label>
                                <input type="radio" name="stars" value="4" />
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                              </label>
                              <label>
                                <input type="radio" name="stars" value="5" />
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                              </label>
                            </form>
                        <form method="post" action="<?= base_url('Testimoni/uploadTesti')  ?>">
                          <div class="form-group">
                              <h5 for="Testimoni">Testimoni</h5>
                              <textarea class="form-control" name="Testimoni" id="Testimoni" rows="10"></textarea>
                          </div>
                          <input type="text" name="checkout_id" id="checkout_id" value="<?= $paket[0]->checkout_id ?>" class="form-control" hidden>

                          <?php if (isset($paket[0]->user_id)) { ?>
                            <input type="text" name="user_id" id="user_id" value="<?= $paket[0]->user_id ?>" class="form-control" hidden>
                          <?php } else { ?>
                            <input type="text" name="google_id" id="google_id" value="<?= $paket[0]->google_id ?>" class="form-control" hidden>
                          <?php } ?>

                          <input type="text" name="paket_id" id="paket_id" value="<?= $paket[0]->paket_id ?>" class="form-control" hidden>

                          <input type="number" name="Score" id="Score" class="form-control" hidden>
                          <input type="text" name="submit" value="submit" hidden>
                        <button class="btn btn-success">Done</button>
                      </form>

                      </div>

                </div>
            </div>
        </div>
	</section>
	</main>
	<?php require_once APPPATH."views/layout/layout.footer.php" ?>
</body>

<script type="text/javascript">
$(':radio').change(function() {
console.log('New star rating: ' + this.value);

document.getElementById("Score").value = this.value

});
</script>
</html>
