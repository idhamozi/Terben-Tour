<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Setting</title>
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
                                <?= $user_data['email'] ?>
                                <i class="fa fa-angle-down ml-2 opacity-8"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">User Account</a>
                                <a class="dropdown-item" href="#">Setting</a>
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
	<main>
		<section class="section-header-akun"></section>
		<section class="section-content-akun">
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
												<form method="post" enctype="multipart/form-data" action="<?= base_url('User/upload') ?>" id="editprofile">
												<div class="sidebar-header">
													<label for="img_profile">
													<img id="uploadProfile" src="
													<?php if (base_url('assets/frontend/images/users/profile/') . $user_data['img_profile'] !== NULL) {
														echo base_url('assets/frontend/images/users/profile/') . $user_data['img_profile'];
													} else {
														echo base_url('assets/frontend/images/users/profile/default.jpg');
													}  ?>" alt="<?= $user_data['username']  ?>" class="img-thumbnail float-left mr-3">
													</label>
													<input type="file" name="img_profile" id="img_profile" hidden>
													<h5><center><?= $user_data['first_name'].' '.$user_data['last_name']?></center></h5>
													<span><center><?= $user_data['email'];  ?></center></span>
												</div>
												<li class="nav-item">
													<a href="javascript:;" class="nav-link active" onclick="document.getElementById('editprofile').submit()">
														<i class="fas fa-list-alt mr-3"></i>
														<span>Change Image</span>
													</a>
												</li>
												</form>
												<li class="nav-item">
													<a href="#" class="nav-link active">
														<i class="fas fa-envelope mr-3"></i>
														<span>Info Promo</span>
													</a>
												</li>
												<hr>
												<li class="nav-item">
													<a href="<?= base_url('User/Profile');  ?>" class="nav-link active">
														<i class="fas fa-user mr-3"></i>
														<span>Akun Saya</span>
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
												<h5><i class="fas fa-cog float-left mr-2"></i>Password Setting</h5>
												<hr class="border-1">
												<?php // Form open
												echo form_open(base_url('User/Change_Password'));
												 ?>
												<form>
													<div class="form-group">
														<label for="InputPassword">New Password</label>
														<input type="password" class="form-control" value="<?= set_value('password');  ?>" name="password">
													</div>
													<div class="form-group">
														<label for="InputPassword">Repeat Password</label>
														<input type="password" class="form-control" value="<?= set_value('password_hint');  ?>" name="password_hint">
														<span>*Note : Gunakan Password yang belum anda pakai</span>
													</div>
													<div class="action-button float-right mb-4">
														<button type="reset" class="btn bg-light mr-2">Batal</button>
														<button type="submit" class="btn btn-primary">Save</button>
													</div>
												</form>
												<?php
												// Form close
												echo form_close();
												?>
											</div>
										</div>

										<div class="card card-email-bar mb-4">
											<div class="email mx-4 mt-4">
												<div class="d-flex align-center justify-content-between">
													<h5><i class="fas fa-envelope mr-3"></i></i>Email Setting</h5>
												</div>
												<hr class="border-1">
												<?php // Form open
												echo form_open(base_url('User/Change_email'));
												 ?>
												<form>
													<div class="form-group">
														<label for="InputPassword">New Email</label>
														<input type="email" class="form-control" value="<?= set_value('email');  ?>" name="email">
														<span>*Note : Gunakan Email yang belum anda pakai</span>
													</div>
													<div class="action-button float-right mb-4">
														<button type="reset" class="btn bg-light mr-2">Batal</button>
														<button type="submit" type="button" class="btn btn-primary">
															Save
														</button>
													</div>
												</form>
												<?php
												// Form close
												echo form_close();
												?>
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
													<img src="
													<?php echo $user_data['img_profile']; ?>" alt="..." class="img-thumbnail float-left mr-3">
													<h5><center><?= $user_data['first_name'].' '.$user_data['last_name']?></center></h5>
													<span><center><?= $user_data['email'];  ?></center></span>
												</div>
												<li class="nav-item">
													<a href="#" class="nav-link active">
														<i class="fas fa-list-alt mr-3"></i>
														<span>Daftar Riwayat</span>
													</a>
												</li>
												<li class="nav-item">
													<a href="#" class="nav-link active">
														<i class="fas fa-envelope mr-3"></i>
														<span>Info Promo</span>
													</a>
												</li>
												<hr>
												<li class="nav-item">
													<a href="<?= base_url('User\Profile');  ?>" class="nav-link active">
														<i class="fas fa-user mr-3"></i>
														<span>Akun Saya</span>
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
												<h5><i class="fas fa-cog float-left mr-2"></i>Pengaturan Akun <?= $user_data['first_name'].' '.$user_data['last_name']?></h5>
												<hr class="border-1">
												<form>
													<div class="form-group">
														<label for="InputPassword">Password baru</label>
														<input type="password" class="form-control" readonly placeholder="Tidak bisa mengubah Password">
													</div>
													<div class="form-group">
														<label for="InputPassword">Konfirmasi password baru</label>
														<input type="password" class="form-control" readonly placeholder="Tidak bisa mengubah Password">
														<span>Karena menggunakan fitur Login with Gmail</span>
													</div>
													<div class="action-button float-right mb-4">
														<button type="reset" class="btn bg-light mr-2">Batal</button>
														<button type="submit" class="btn btn-primary">Simpan</button>
													</div>
												</form>
											</div>
										</div>
										<div class="card card-email-bar mb-4">
											<div class="email mx-4 mt-4">
												<div class="d-flex align-center justify-content-between">
													<h5><i class="fas fa-envelope mr-3"></i></i>Email Setting</h5>
												</div>
												<hr class="border-1">
												<form>
													<div class="form-group">
														<label for="InputPassword">Email</label>
														<input type="email" class="form-control" value="<?= $user_data['email'];  ?>" name="email" readonly>
														<span>*Note : Tidak Bisa Mengubah Email</span>
													</div>
													<div class="action-button float-right mb-4">
														<button type="reset" class="btn bg-light mr-2">Batal</button>
														<button type="submit" type="button" class="btn btn-primary">
															Save
														</button>
													</div>
												</form>
											</div>
											<hr class="border-1">
										</div>
									</div>
								</div>
							<?php } ?>

						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<footer class="section-footer mt-5 mb-4 border-top">
		<div class="container pt-5 pb-5">
			<div class="row justify-content-center">
				<div class="col-12">
					<div class="row">
						<div class="logo-right col-12 col-lg-5">
							<img src="<?= base_url('assets\frontend\images\Terben.Tour.png')  ?>" alt="" height="500" width="100">
							<p>Enjoy your beauty vacation instantly and memorable</p>
						</div>

						<div class="col-12 col-lg-2">
							<h5 class="head-span"> Pemula</h5>
							<ul class="list-unstyled text-gray-500-font-weight-light">
								<li><a class="link-footer" href="#">New Account</a></li>
								<li><a class="link-footer" href="#">Use Payment</a></li>
								<li><a class="link-footer" href="#">Start Trips</a></li>
							</ul>
						</div>

						<div class=" col-12 col-lg-2">
							<h5 class="head-span">Lainnya</h5>
							<ul class="list-unstyled text-gray-500-font-weight-light">
								<li><a class="link-footer" href="#">Syarat & Ketentuan</a></li>
								<li><a class="link-footer" href="#">Kebijakan & Privasi</a></li>
								<li><a class="link-footer" href="#">Media</a></li>
							</ul>
						</div>

						<div class="col-12 col-lg-2">
							<h5 class="head-span">Kontak Kami</h5>
							<ul class="list-unstyled text-gray-500-font-weight-light">
								<li><a class="link-footer" href="#">Surabaya Timur</a></li>
								<li><a class="link-footer" href="#">0821-213-1234</a></li>
								<li><a class="link-footer" href="#">support.Terben.Tour</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row border-top justify-content-center align-items-center pt-4">
				<div class="col-auto text-gray-500-font-weight-light">
					2020.Copyright.Terben.Tour
				</div>
			</div>
		</div>
	</footer>

	<script type="text/javascript">
		function display(input){
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e){
					$('#uploadProfile').attr('src',e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}

		$('#img_profile').change(function(){
			display(this);
		});

	</script>

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
