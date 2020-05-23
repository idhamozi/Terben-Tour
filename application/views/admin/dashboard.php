<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Dashboard - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
	<link href="<?= base_url('assets\frontend\libraries\font-awesome-5\css\fontawesome-all.min.css') ?>" rel="stylesheet" media="all">
	<link href="<?= base_url('assets\backend\style\main.css')?>" rel="stylesheet">
</head>
<body>
  <?php $admin_data = $this->session->userdata('admin_data');  ?>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">

	<?php require_once APPPATH."views\admin\layout\layout.navbar.php" ?>

        <div class="app-main">
			<div class="app-sidebar sidebar-shadow">
				<div class="app-header__logo">
					<div class="logo-src"></div>
					<div class="header__pane ml-auto">
						<div>
							<button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
								<span class="hamburger-box">
									<span class="hamburger-inner"></span>
								</span>
							</button>
						</div>
					</div>
				</div>
				<div class="app-header__mobile-menu">
					<div>
						<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
						</button>
					</div>
				</div>
				<div class="app-header__menu">
					<span>
						<button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
							<span class="btn-icon-wrapper">
								<i class="fa fa-ellipsis-v fa-w-6"></i>
							</span>
						</button>
					</span>
				</div>
				<div class="scrollbar-sidebar">
					<div class="app-sidebar__inner">
						<ul class="vertical-nav-menu">
							<li class="app-sidebar__heading">Dashboards</li>
							<li>
								<a href="<?= base_url('Administrator/Dashboard') ?>" class="mm-active">
									<i class="metismenu-icon pe-7s-rocket"></i>
									Dashboard
								</a>
							</li>
							<li class="app-sidebar__heading">Layouts</li>
							<li>
								<a href="#">
									<i class="metismenu-icon pe-7s-home"></i>
										Home Page
									<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
								</a>
								<ul>
									<li>
										<a href="<?= base_url('Administrator/MostTrips')  ?>">
											<i class="metismenu-icon"></i>
												Most Trip
										</a>
									</li>
									<li>
										<a href="<?= base_url('Administrator/Validate')  ?>">
											<i class="metismenu-icon"></i>
												Validate Payment
										</a>
									</li>
									<li>
										<a href="<?= base_url('Administrator/Testimonial')  ?>">
											<i class="metismenu-icon"></i>
												Testimonials
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">
									<i class="metismenu-icon pe-7s-plane"></i>
										Travel
									<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
								</a>
								<ul>
									<li>
										<a href="<?= base_url('Administrator/Paket/'."1")  ?>">
											<i class="metismenu-icon"></i>
												Exclusive Travel
										</a>
									</li>
									<li>
										<a href="<?= base_url('Administrator/Paket/'."2")  ?>">
											<i class="metismenu-icon"></i>
												Business Travel
										</a>
									</li>
									<li>
										<a href="<?= base_url('Administrator/Paket/'."3")  ?>">
											<i class="metismenu-icon"></i>
												Economic Travel
										</a>
									</li>
								</ul>
							</li>
							<li class="app-sidebar__heading">SETTING ADMIN</li>
							<li>
								<a href="<?= base_url('Administrator/Add_admin') ?>">
									<i class="metismenu-icon pe-7s-add-user"></i>
									Tambah Admin
								</a>
								<a href="<?= base_url('Administrator/List_admin') ?>">
									<i class="metismenu-icon pe-7s-users"></i>
									List Admin
								</a>
								<a href="#" onclick="logout_admin<?= $admin_data['username'] ?>()" class="dropdown-item">
									<i class="metismenu-icon pe-7s-power"></i>
									Logout
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="app-main__outer">
				<div class="app-main__inner">
					<div class="divider mt-0" style="margin-bottom: 30px;"></div>
					<div class="row">
						<div class="col-lg-6 col-xl-6">
							<div class="card mb-3 widget-content">
								<div class="widget-content-outer">
									<div class="widget-content-wrapper">
                    <?php
                      $user_internal = count($users);
                      $user_google = count($users_google);
                      $total_users = $user_internal+$user_google;
                      $p_user_in = $user_internal/$total_users * 100;
                      $p_user_google = $user_google/$total_users * 100;
                     ?>
										<div class="widget-content-left">
											<div class="widget-heading">User Internal</div>
											<div class="widget-subheading">Total user with account TerbenTour</div>
										</div>
										<div class="widget-content-right">
											<div class="widget-numbers text-success"><?= $user_internal  ?></div>
										</div>
									</div>
									<div class="widget-progress-wrapper">
										<div class="progress-bar-xs progress">
											<div class="progress-bar bg-primary" role="progressbar" aria-valuenow="0.16" aria-valuemin="0" aria-valuemax="100" style="width: <?= $p_user_in ?>%;"><!-- Total user google + TT  | 10/60x100=+-16%--></div>
										</div>
										<div class="progress-sub-label">
											<div class="sub-label-left">All User</div>
											<div class="sub-label-right"><?= $total_users  ?></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-6">
							<div class="card mb-3 widget-content">
								<div class="widget-content-outer">
									<div class="widget-content-wrapper">
										<div class="widget-content-left">
											<div class="widget-heading">User External</div>
											<div class="widget-subheading">Total user with Google</div>
										</div>
										<div class="widget-content-right">
											<div class="widget-numbers text-primary"><?= $user_google  ?></div>
										</div>
									</div>
									<div class="widget-progress-wrapper">
										<div class="progress-bar-lg progress-bar-animated progress">
											<div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0.83" aria-valuemin="0" aria-valuemax="100" style="width: <?= $p_user_google  ?>%;"><!-- Total user google + TT  | 50/60x100=+-84%--></div>
										</div>
										<div class="progress-sub-label">
											<div class="sub-label-left">All User</div>
											<div class="sub-label-right"><?= $total_users  ?></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-6">
							<div class="card mb-3 widget-content">
								<div class="widget-content-outer">
									<div class="widget-content-wrapper">
										<div class="widget-content-left">
											<div class="widget-heading">Admin</div>
											<div class="widget-subheading">Online</div>
										</div>
										<div class="widget-content-right">
                      <?php
                      $admin_online = count($admin_on);
                      $total_admin = $admin->num_rows();
                      $p_admin = $admin_online/$total_admin * 100;?>
											<div class="widget-numbers text-warning"><?= $admin_online ?></div>
										</div>
									</div>
									<div class="widget-progress-wrapper">
										<div class="progress-bar-xs progress-bar-animated-alt progress">
											<div class="progress-bar bg-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $p_admin; ?>%;"><!-- Admin Max 5 orang | 3/5x100=60%--></div>
										</div>
										<div class="progress-sub-label">
											<div class="sub-label-left">Total Admin</div>
											<div class="sub-label-right"><?= $total_admin  ?></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-6">
							<div class="card mb-3 widget-content">
								<div class="widget-content-outer">
									<div class="widget-content-wrapper">
										<div class="widget-content-left">
											<div class="widget-heading">Package</div>
											<div class="widget-subheading">Package Travel</div>
										</div>
										<div class="widget-content-right">
                      <?php
                      $paket_all = count($paket);
                      $p_paket = $paket_all / 50 * 100;?>
											<div class="widget-numbers text-danger"><?= count($paket)  ?></div>
										</div>
									</div>
									<div class="widget-progress-wrapper">
										<div class="progress-bar-sm progress-bar-animated-alt progress">
											<div class="progress-bar bg-success" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: <?= $p_paket  ?>%;"><!-- Max 50 paket  | 20/50x100=40%--></div>
										</div>
										<div class="progress-sub-label">
											<div class="sub-label-left">Max 50 Package</div>
											<div class="sub-label-right"><?= $p_paket  ?>%</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
<script>
  function logout_admin<?= $admin_data['username'] ?>() {
    var txt;
    if (confirm("Anda yakin ingin Logout ?")) {
      window.location = "<?= base_url() . 'Administrator/logout/' . $admin_data['username'] ?>";
    }
  }
</script>
<script type="text/javascript" src="<?= base_url('assets\backend\script\main.js')?>"></script>
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
