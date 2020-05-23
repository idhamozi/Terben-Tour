<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile User</title>
	<link rel="stylesheet" href="<?= base_url('assets\frontend\libraries\bootstrap\css\bootstrap.css')  ?>">
	<link rel="stylesheet" href="<?= base_url('assets\frontend\libraries\star_rating\star-rating.css')  ?>">
	<link href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<link href="<?= base_url('assets\backend\libraries\fontawesome.css') ?>" rel="stylesheet" media="all">
	<link rel="stylesheet" href="<?= base_url('assets\frontend\styles\main.css') ?>">
	<link href="<?= base_url('assets\frontend\libraries\font-awesome-5\css\fontawesome-all.min.css') ?>" rel="stylesheet" media="all">
	<link rel="stylesheet" href="<?= base_url('assets\frontend\libraries\gjigo\css\gijgo.min.css') ?>">
	<!-- SWEETALERT -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="<?= base_url('assets\frontend\libraries\jquery\jquery-3.4.1.min.js')  ?>"></script>
	<script src="<?= base_url('assets\frontend\libraries\bootstrap\js\bootstrap.js')  ?>"></script>
	<script src="<?= base_url('assets\frontend\libraries\bootstrap\js\bootstrap-select.js')  ?>"></script>
	<script src="<?= base_url('assets\frontend\libraries\bootstrap\js\bootstrap.bundle.min.js')  ?>"></script>
	<script src="<?= base_url('assets\frontend\libraries\retina\retina.min.js')  ?>"></script>
	<script src="<?= base_url('assets\frontend\libraries\gjigo\js\gijgo.min.js')  ?>"></script>
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
						<a href="<?= base_url('')  ?>" class="nav-link active">Home</a>
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
								<?= $user_data['email'] ?>
								<i class="fa fa-angle-down ml-2 opacity-8"></i>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">User Account</a>
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
							<button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button" data-toggle="dropdown">
								<?= $user_data['email'] ?>
								<i class="fa fa-angle-down ml-2 opacity-8"></i>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">User Account</a>
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
	<main>
		<section class="section-header-akun"></section>
		<section class="section-content-akun mt-5">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<div class="row">
							<?php if (isset($user)) { ?>
								<div class="col-10 col-lg-4">
									<div class="card card-sidebar">
										<!-- start sidebar -->
										<nav class="sidebar mb-3 ml-3 mt-3 mr-3 ">
											<ul class="nav flex-column">
												<div class="sidebar-header">
													<label for="img_profile">
														<img id="uploadProfile" src="
													<?php if (base_url('assets/frontend/images/users/profile/') . $user_data['img_profile'] !== NULL) {
														echo base_url('assets/frontend/images/users/profile/') . $user_data['img_profile'];
													} else {
														echo base_url('assets/frontend/images/users/profile/default.jpg');
													}  ?>" alt="<?= $user_data['username']  ?>" class="img-thumbnail float-left mr-3">
													</label>
													<h5>
														<center><?= $user_data['first_name'] . ' ' . $user_data['last_name'] ?></center>
													</h5>
													<span>
														<center><?= $user_data['email'];  ?></center>
													</span>
												</div>
												<hr>
												<li class="nav-item">
													<a href="<?= base_url('User/editProfile')  ?>" class="nav-link active">
														<i class="fas fa-user mr-3"></i>
														<span>Setting Akun</span>
													</a>
												</li>
												<li class="nav-item">
													<a href="<?= base_url('Login\logout');  ?>" class="nav-link active">
														<i class="fas fa-power-off mr-3"></i>
														<span>Keluar dari akun</span>
													</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
								<div class="col-10 col-lg-8">
									<div class="content-bar">
										<div class="card card-profil-bar mb-4">
											<div class="profil-name mx-4 mt-4">
												<h5><i class="far fa-user float-left mr-2"></i>Profile User</h5>
												<hr class="border-1">
												<div class="d-flex align-center justify-content-between">
													<h5><i class="float-left mr-2"></i>First Name</h5>
													<span><?= $user_data['first_name'] ?></span>
												</div>
												<hr class="border-1">
												<div class="d-flex align-center justify-content-between">
													<h5><i class="float-left mr-2"></i>Last Name</h5>
													<span><?= $user_data['last_name'] ?></span>
												</div>
												<hr class="border-1">
												<div class="d-flex align-center justify-content-between">
													<h5><i class="fas fa-user mr-3"></i></i>Username</h5>
													<span><?= $user_data['username'];  ?></span>
												</div>
												<hr class="border-1">
												<div class="d-flex align-center justify-content-between">
													<h5><i class="fas fa-envelope mr-3"></i></i>Email</h5>
													<span><?= $user_data['email'];  ?></span>
												</div>
												<hr class="border-1">
												<div class="d-flex align-center justify-content-between">
													<h5><i class="fas fa-calendar mr-3"></i></i>Member Since</h5>
													<span><?= $user_data['date_created'];  ?></span>
												</div>
												<hr class="border-1">
											</div>
										</div>

										<div class="card card-phone-bar mb-4">
											<div class="phone mx-4 mt-4">
												<div class="d-flex align-center justify-content-between">
													<h5><i class="fas fa-cog mr-3"></i>Change Password</h5>
													<button type="button" class="btn btn-primary" onclick="location.href='<?= base_url('User/editProfile'); ?>'"><i class="fas fa-plus-circle mr-2"></i>
														Change Password
													</button>
												</div>
												<span>Anda ingin mengganti Password ?</span>

												<hr class="border-1">
												<!-- Button trigger modal -->
											</div>
										</div>

										<div class="card card-email-bar mb-4">
											<div class="email mx-4 mt-4">
												<div class="d-flex align-center justify-content-between">
													<h5><i class="fas fa-envelope mr-3"></i></i>Change Email</h5>
													<button type="button" class="btn btn-primary" onclick="location.href='<?= base_url('User/editProfile'); ?>'"><i class="fas fa-plus-circle mr-2"></i>
														Change Email
													</button>
												</div>
												<span>Anda ingin mengganti Email ?</span>
											</div>

											<hr class="border-1">

										</div>
									</div>
								</div>
							<?php } else { ?>
								<div class="col-10 col-lg-4">
									<div class="card card-sidebar">
										<!-- start sidebar -->
										<nav class="sidebar mb-3 ml-3 mt-3 mr-3 ">
											<ul class="nav flex-column">
												<div class="sidebar-header">
													<label for="img_profile">
														<img id="uploadProfile" src="
													<?php echo $user_data['img_profile']; ?>" alt="<?= $user_data['email']  ?>" class="img-thumbnail float-left mr-3">
													</label>
													<h5>
														<center><?= $user_data['first_name'] . ' ' . $user_data['last_name'] ?></center>
													</h5>
													<span>
														<center><?= $user_data['email'];  ?></center>
													</span>
												</div>
												<hr>
												<li class="nav-item">
													<a href="<?= base_url('User\editProfile')  ?>" class="nav-link active">
														<i class="fas fa-user mr-3"></i>
														<span>Setting Akun</span>
													</a>
												</li>
												<li class="nav-item">
													<a href="<?= base_url('Login\logout');  ?>" class="nav-link active">
														<i class="fas fa-power-off mr-3"></i>
														<span>Keluar dari akun</span>
													</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
								<div class="col-10 col-lg-8">
									<div class="content-bar">
										<div class="card card-profil-bar mb-4">
											<div class="profil-name mx-4 mt-4">
												<h5><i class="far fa-user float-left mr-2"></i>Profile User</h5>
												<hr class="border-1">
												<div class="d-flex align-center justify-content-between">
													<h5><i class="float-left mr-2"></i>First Name</h5>
													<span><?= $user_data['first_name'] ?></span>
												</div>
												<hr class="border-1">
												<div class="d-flex align-center justify-content-between">
													<h5><i class="float-left mr-2"></i>Last Name</h5>
													<span><?= $user_data['last_name'] ?></span>
												</div>
												<hr class="border-1">
												<div class="d-flex align-center justify-content-between">
													<h5><i class="fas fa-envelope mr-3"></i></i>Email</h5>
													<span><?= $user_data['email'];  ?></span>
												</div>
												<hr class="border-1">
												<div class="d-flex align-center justify-content-between">
													<h5><i class="fas fa-calendar mr-3"></i></i>Member Since</h5>
													<span><?= $user_data['created_at']; ?></span>
												</div>
												<hr class="border-1">
											</div>
										</div>
									<?php } ?>

									</div>
								</div>
						</div>
					</div>
		</section>
	</main>

	<?php require_once APPPATH . "views/layout/layout.footer.php" ?>

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!-- SWEETALERT -->
	<?php if ($this->session->flashdata('sukses')) { ?>
		<script>
			swal("Berhasil", "<?php echo $this->session->flashdata('sukses'); ?>", "success")
		</script>
	<?php } ?>

	<?php if ($this->session->flashdata('warning')) { ?>
		<script>
			swal("Oops...", "<?php echo $this->session->flashdata('warning'); ?>", "warning")
		</script>
	<?php } ?>

</body>

</html>
