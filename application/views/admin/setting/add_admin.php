<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Dashboard - Add Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="<?= base_url('assets\frontend\libraries\font-awesome-5\css\fontawesome-all.min.css') ?>" rel="stylesheet" media="all">
	  <link href="<?= base_url('assets\backend\style\main.css')?>" rel="stylesheet">
    <!-- SWEETALERT -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                                    <a href="<?= base_url('Administrator/Dashboard') ?>">
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
                                          <a href="<?= base_url('Administrator/MostTrips')  ?>"
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
                                    <a href="<?= base_url('Administrator/Add_admin') ?>" class="mm-active">
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
                            <div class="col-md-12">
                              <h3><b><center>TAMBAH ADMIN</center></b></h3>

                              <div class="card-body">
                              <?php // Form open
                              echo form_open(base_url('Administrator/add_admin'));
                               ?>
                              <form>
                                <div class="form-group">
                                  <?= form_error('username');  ?>
                                  <label for="username">Username</label>
                                  <input type="text" class="form-control" value="<?= set_value('username');  ?>" name="username" aria-describedby="emailHelp" placeholder="Username">
                                  <small id="emailHelp" class="form-text text-muted">Username Admin to Login</small>
                                </div>
                                <div class="form-group">
                                  <?= form_error('email');  ?>
                                  <label for="email">Alamat Email</label>
                                  <input type="email" class="form-control" value="<?= set_value('email');  ?>" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                  <?= form_error('nama_admin');  ?>
                                  <label for="nama_admin">Nama</label>
                                  <input type="text" class="form-control" value="<?= set_value('nama_admin');  ?>" name="nama_admin" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                  <?= form_error('password');  ?>
                                  <label for="password">Password</label>
                                  <input type="password" class="form-control" value="<?= set_value('password');  ?>" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                  <?= form_error('password_hint');  ?>
                                  <label for="password">Repeat Password</label>
                                  <input type="password" class="form-control" value="<?= set_value('password_hint');  ?>" name="password_hint" placeholder="Repeat Password">
                                </div>
                                <button type="button" class="btn btn-warning btn-lg" onclick="location.href='<?= base_url('Administrator/Dashboard'); ?>'">Back</button>
                                <button type="submit" class="btn btn-success btn-lg">Save</button>
                              </form>
                              <?php
                              // Form close
                              echo form_close();
                              ?>
                              </div>
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
