<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= base_url('assets\frontend\libraries\bootstrap\css\bootstrap.css')  ?>">
	<link href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<link href="<?= base_url('assets\frontend\libraries\font-awesome-5\css\fontawesome-all.min.css')  ?>" rel="stylesheet" media="all">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url('assets\frontend\styles\main.css')  ?>">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo base_url('assets\frontend\plugin\iCheck\square\blue.css') ?>">
	<!-- SWEETALERT -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<title>Change Password</title>
</head>

<?php

// Form open
echo form_open(base_url('login/changePassword'));

?>

<body>
	<section class="section-header-sign_up">
		<Section class="section-sign_up">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="content-text">
							<div class="text-header">
								<h1 class="text-welcome">
									Welcome to
								</h1>
								<h1 class="text-travel">
									Terben.Tour Travel
								</h1>
							</div>
							<div class="text-banner">
								<h2>
									Travel Aman <br>
									Harga Nyaman
								</h2>
								<p>Pusing dengan Kerjaan anda? Liburan Yuk!</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card card-sign_up">
							<div class="logo-sign_up mx-4 my-3">
								<img src="<?= base_url('assets/frontend/images/logo-sign_up.png')  ?>" class="rounded" alt="">
							</div>
							<div class="sign_up-form mx-4">
								<form action="" method="post">
									<div class="form-group mb-3">
										<label><b> Change Password untuk akun dengan alamat email <?= $this->session->userdata('reset_email'); ?> </b></label>
									</div>
                  <div class="form-group mb-3">
										<?= form_error('password');  ?>
										<label>Password</label>
										<input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control" placeholder="Password">
									</div>
									<div class="form-group mb-3">
										<?= form_error('password_hint');  ?>
										<label>Repeat Password</label>
										<input type="password" name="password_hint" value="<?php echo set_value('password_hint'); ?>" class="form-control" placeholder="Repeat Password">
									</div>
									<button class="btn sign_up" type="submit">Change Password</button>
								</form>
							</div>
						</div>
					</div>
				</div>
		</Section>
	</section>
	<?php
	// Form close
	echo form_close();
	?>

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
