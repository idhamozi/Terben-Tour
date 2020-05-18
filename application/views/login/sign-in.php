<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign In</title>
	<link rel="stylesheet" href="<?= base_url('assets\frontend\libraries\bootstrap\css\bootstrap.css')  ?>">
	<link href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
	<link href="<?= base_url('assets\frontend\libraries\font-awesome-5\css\fontawesome-all.min.css')  ?>" rel="stylesheet" media="all">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url('assets\frontend\styles\main.css')  ?>">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo base_url('assets\frontend\plugin\iCheck\square\blue.css') ?>">
	<!-- SWEETALERT -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
	<?php

	// Form open
	echo form_open(base_url('login/LoginCommon'));
	?>
	<section class="section-header-sign_in">
		<section class="section-sign_in">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="card card-form">
							<div class="logo-sign_in">
								<img src="<?= base_url('assets/frontend/images/logo-sing_in.png')  ?>" class="rounded" alt="">
							</div>
							<div class="login-form">
								<form action="" method="post">
									<div class="form-group">
										<?= form_error('username');  ?>
										<label>Username</label>
										<input type="username" name="username" class="form-control" placeholder="Username">
									</div>
									<div class="form-group">
										<?= form_error('password'); ?>
										<label>Password</label>
										<input type="password" name="password" class="form-control" placeholder="Password">
									</div>

									<div class="form-group form-check">
										<label class="form-check-label mb-2">
										<input type="checkbox" class="form-check-input"> Remember Me
										</label>

									</div>
									<button class="btn sign_in" type="submit">Sign In</button>
									<div class="social-login-content mb-2">
										<div class="social-button">
											<a href="
                    <?php
										if (!isset($login_button)) {
											$user_data = $this->session->userdata('user_data');
										} else {
											echo $login_button;
										} ?>
                      " class="google btn"><i class="fa fa-google fa-fw"></i> Login with Google
											</a>
										</div>
									</div>
								</form>
								<?php
								// Form close
								echo form_close();
								?>
								<div class="container-fluid">
									<div class="row border-top justify-content-center align-items-center pt-3">
										<div class="col-auto text-gray-500-font-weight-light">
											<p>
												Don't you have account ?
												<a href="<?= base_url('login/register')  ?>">Sign Up Now !</a>
											</p>
											<p>
												Forgot Password ?
											<a href="#" type="submit" class="check-forget" data-toggle="modal" data-target="#LupaPassword">Click Here !</a>
											</p>
										<!-- Modal - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  -->
										<div class="modal fade" id="LupaPassword" tabindex="-1" role="dialog" aria-labelledby="LupaPasswordLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="LupaPasswordLabel">Lupa Password
														</h5>
													</div>
													<?php
														echo form_open(base_url('login/forgotPassword'));
													 ?>
													<div class="modal-body">
																<div class="form-group">
																	<?= form_error('email');  ?>
																	<label>Email address</label>
																	<input type="email" name="email" id="email" value="<?php echo set_value('email'); ?>" class="form-control" placeholder="Email">
																</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
														<input class="btn btn-primary" type="submit" value="Send Email">
													</div>
													<?php
													// Form close
													echo form_close();
													?>
												</div>
											</div>
										</div>
										<!-- end modal - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</section>
	</section>


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

<script src="<?= base_url('assets\frontend\libraries\jquery\jquery-3.4.1.min.js')  ?>"></script>
<script src="<?= base_url('assets\frontend\libraries\bootstrap\js\bootstrap.js')  ?>"></script>
<script src="<?= base_url('assets\frontend\libraries\retina\retina.min.js')  ?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets\frontend\plugin\iCheck\icheck.min.js') ?>"></script>
<script>
	$(function() {
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-blue',
			radioClass: 'iradio_square-blue',
			increaseArea: '20%' // optional
		})
	})
</script>

</html>
