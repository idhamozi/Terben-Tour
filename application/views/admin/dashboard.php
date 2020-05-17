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
                                            <a href="<?= base_url('Administrator/Testimonial')  ?>">
                                                <i class="metismenu-icon"></i>
                                                    Testimonials
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon"></i>
                                                Post Instagram
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
                        <div class="row">
                            <div class="col-md-6 col-xl-4">

                            </div>
                            <div class="col-md-6 col-xl-4">

                            </div>
                            <div class="col-md-6 col-xl-4">

                            </div>
                            <div class="d-xl-none d-lg-block col-md-6 col-xl-4">

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
