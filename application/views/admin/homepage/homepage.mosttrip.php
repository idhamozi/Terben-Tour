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
                                        <a href="#" class="mm-active"
                                            <i class="metismenu-icon"></i>
                                                Most Trip
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
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
                                        <a href="#">
                                            <i class="metismenu-icon"></i>
                                                Exclusive Travel
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="metismenu-icon"></i>
                                                Business Travel
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
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
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="fas fa-suitcase-rolling"></i>
                                </div>
                                <div>Add Vacation Packages for Travelers
                                    <div class="page-title-subheading">Add vacation packages start from executive,
                                        business, and economy!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">Add Thumbnail Vacation Packages</h5>

                                    <hr>

                                    <img src="" class="img-thumbnail mb-2" alt="...">
                                    <div class="add-package-thumbnail">
                                        <span style="font-weight: bold;" class="mt-1 mb-3">For Executive</span>
                                        <form class="was-validated">
                                            <div class="form-row">
                                                <div class="col mb-3">
                                                    <label for="validationCustom02">Tipe Paket</label>
                                                    <input type="text" class="form-control is-invalid"
                                                        placeholder="Required Tipe Paket" required>
                                                    <div class="invalid-feedback"> Please enter a Tipe Paket </div>
                                                </div>
                                                <div class="col mb-3">
                                                    <label for="validationCustom02">Judul</label>
                                                    <input type="text" class="form-control is-invalid"
                                                        placeholder="Required Judul" required>
                                                    <div class="invalid-feedback"> Please enter a Judul </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="validationCustom02">Deskripsi</label>
                                                <textarea class="form-control is-invalid"
                                                    placeholder="Required deskripsi" required></textarea>
                                                <div class="invalid-feedback"> Please enter a deskripsi </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col mb-3">
                                                    <label for="validationCustom02">Day</label>
                                                    <input type="text" class="form-control is-invalid"
                                                        placeholder="Required Day" required>
                                                    <div class="invalid-feedback"> Please enter a Day </div>
                                                </div>
                                                <div class="col mb-3">
                                                    <label for="validationCustom02">Price</label>
                                                    <input type="text" class="form-control is-invalid"
                                                        placeholder="Required Price" required>
                                                    <div class="invalid-feedback"> Please enter a Price </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Img file input</label>
                                                <input type="file" class="form-control-file"
                                                    id="exampleFormControlFile1">
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                        </form>
                                    </div>

                                    <hr>

                                    <img src="" class="img-thumbnail mb-2" alt="...">
                                    <div class="add-package-thumbnail">
                                        <span style="font-weight: bold;" class="mt-1 mb-3">For Business</span>
                                        <form class="was-validated">
                                            <div class="form-row">
                                                <div class="col mb-3">
                                                    <label for="validationCustom02">Tipe Paket</label>
                                                    <input type="text" class="form-control is-invalid"
                                                        placeholder="Required Tipe Paket" required>
                                                    <div class="invalid-feedback"> Please enter a Tipe Paket </div>
                                                </div>
                                                <div class="col mb-3">
                                                    <label for="validationCustom02">Judul</label>
                                                    <input type="text" class="form-control is-invalid"
                                                        placeholder="Required Judul" required>
                                                    <div class="invalid-feedback"> Please enter a Judul </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="validationCustom02">Deskripsi</label>
                                                <textarea class="form-control is-invalid"
                                                    placeholder="Required deskripsi" required></textarea>
                                                <div class="invalid-feedback"> Please enter a deskripsi </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col mb-3">
                                                    <label for="validationCustom02">Day</label>
                                                    <input type="text" class="form-control is-invalid"
                                                        placeholder="Required Day" required>
                                                    <div class="invalid-feedback"> Please enter a Day </div>
                                                </div>
                                                <div class="col mb-3">
                                                    <label for="validationCustom02">Price</label>
                                                    <input type="text" class="form-control is-invalid"
                                                        placeholder="Required Price" required>
                                                    <div class="invalid-feedback"> Please enter a Price </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Img file input</label>
                                                <input type="file" class="form-control-file"
                                                    id="exampleFormControlFile1">
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                        </form>
                                    </div>

                                    <hr>

                                    <img src="" class="img-thumbnail mb-2" alt="...">
                                    <div class="add-package-thumbnail">
                                        <span style="font-weight: bold;" class="mt-1 mb-3">For Economy</span>
                                        <form class="was-validated">
                                            <div class="form-row">
                                                <div class="col mb-3">
                                                    <label for="validationCustom02">Tipe Paket</label>
                                                    <input type="text" class="form-control is-invalid"
                                                        placeholder="Required Tipe Paket" required>
                                                    <div class="invalid-feedback"> Please enter a Tipe Paket </div>
                                                </div>
                                                <div class="col mb-3">
                                                    <label for="validationCustom02">Judul</label>
                                                    <input type="text" class="form-control is-invalid"
                                                        placeholder="Required Judul" required>
                                                    <div class="invalid-feedback"> Please enter a Judul </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="validationCustom02">Deskripsi</label>
                                                <textarea class="form-control is-invalid"
                                                    placeholder="Required deskripsi" required></textarea>
                                                <div class="invalid-feedback"> Please enter a deskripsi </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col mb-3">
                                                    <label for="validationCustom02">Day</label>
                                                    <input type="text" class="form-control is-invalid"
                                                        placeholder="Required Day" required>
                                                    <div class="invalid-feedback"> Please enter a Day </div>
                                                </div>
                                                <div class="col mb-3">
                                                    <label for="validationCustom02">Price</label>
                                                    <input type="text" class="form-control is-invalid"
                                                        placeholder="Required Price" required>
                                                    <div class="invalid-feedback"> Please enter a Price </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Img file input</label>
                                                <input type="file" class="form-control-file"
                                                    id="exampleFormControlFile1">
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                        </form>
                                    </div>

                                    <hr>

                                </div>
                            </div>
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">Add Vacation Packages</h5>
                                    <div class="add-package-content">
                                        <table class="table">
                                            <!-- Button modal -->
                                            <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal"
                                                data-target="#exampleModal">
                                                Tambah
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modal title
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="was-validated">
                                                                <div class="form-row">
                                                                    <div class="col mb-3">
                                                                        <label for="validationCustom02">Tipe
                                                                            Paket</label>
                                                                        <input type="text"
                                                                            class="form-control is-invalid"
                                                                            placeholder="Required Tipe Paket" required>
                                                                        <div class="invalid-feedback"> Please enter a
                                                                            Tipe Paket </div>
                                                                    </div>
                                                                    <div class="col mb-3">
                                                                        <label for="validationCustom02">Judul</label>
                                                                        <input type="text"
                                                                            class="form-control is-invalid"
                                                                            placeholder="Required Judul" required>
                                                                        <div class="invalid-feedback"> Please enter a
                                                                            Judul </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="validationCustom02">Deskripsi</label>
                                                                    <textarea class="form-control is-invalid"
                                                                        placeholder="Required deskripsi"
                                                                        required></textarea>
                                                                    <div class="invalid-feedback"> Please enter a
                                                                        deskripsi </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col mb-3">
                                                                        <label for="validationCustom02">Day</label>
                                                                        <input type="text"
                                                                            class="form-control is-invalid"
                                                                            placeholder="Required Day" required>
                                                                        <div class="invalid-feedback"> Please enter a
                                                                            Day </div>
                                                                    </div>
                                                                    <div class="col mb-3">
                                                                        <label for="validationCustom02">Price</label>
                                                                        <input type="text"
                                                                            class="form-control is-invalid"
                                                                            placeholder="Required Price" required>
                                                                        <div class="invalid-feedback"> Please enter a
                                                                            Price </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlFile1">Img file
                                                                        input</label>
                                                                    <input type="file" class="form-control-file"
                                                                        id="exampleFormControlFile1">
                                                                </div>
                                                                <button type="submit"
                                                                    class="btn btn-primary mt-3">Submit</button>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end modal -->

                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">No.</th>
                                                    <th scope="col">Tipe Paket</th>
                                                    <th scope="col">Judul</th>
                                                    <th scope="col">Deskripsi</th>
                                                    <th scope="col">Day</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Executive</td>
                                                    <td>Liburan ke Begudul</td>
                                                    <td>Asik liburan ke begudul banyak bule cantik-cantik dan di jamin
                                                        liburan anda akan menyenangkan dengan tempat penginapan yang
                                                        strategi</td>
                                                    <td>15</td>
                                                    <td>25.000.000</td>
                                                    <td>begudul.png</td>
                                                    <td>
                                                        <button class="btn btn-warning">Edit</button>
                                                        <button class="btn btn-danger">Hapus</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
