<!DOCTYPE html>
<html lang="en">
<head>
	<title>Administrator Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= base_url('assets\frontend\images\icons\favicon.ico') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets\frontend\vendor\bootstrap\css\bootstrap.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets\frontend\fonts\font-awesome-4.7.0\css\font-awesome.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets\frontend\fonts\Linearicons-Free-v1.0.0\icon-font.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets\frontend\vendor\animate\animate.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets\frontend\vendor\css-hamburgers\hamburgers.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets\frontend\vendor\animsition\css\animsition.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets\frontend\vendor\select2\select2.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets\frontend\vendor\daterangepicker\daterangepicker.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets\frontend\css\util.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets\frontend\css\main.css') ?>">
<!--===============================================================================================-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
// Form open
echo form_open(base_url('Administrator'));
 ?>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?= base_url('assets/frontend/images/banner.png') ?>');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Administrator Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5">
					<?= form_error('username');  ?>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" value="<?= set_value('username');  ?>" name="username" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
					<?= form_error('password');  ?>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" value="<?= set_value('password');  ?>" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	<?php
	// Form close
	echo form_close();
	?>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="<?= base_url('assets\frontend\vendor\jquery\jquery-3.2.1.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets\frontend\vendor\animsition\js\animsition.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets\frontend\vendor\bootstrap\js\popper.js') ?>"></script>
	<script src="<?= base_url('assets\frontend\vendor\bootstrap\js\bootstrap.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets\frontend\vendor\select2\select2.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets\frontend\vendor\daterangepicker\moment.min.js') ?>"></script>
	<script src="<?= base_url('assets\frontend\vendor\daterangepicker\daterangepicker.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets\frontend\vendor\countdowntime\countdowntime.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets\frontend\js\main.js') ?>"></script>

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
