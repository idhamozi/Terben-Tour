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
    <script src="<?= base_url('assets\frontend\libraries\jquery\jquery-3.4.1.min.js')  ?>"></script>
    <script src="<?= base_url('assets\frontend\libraries\bootstrap\js\bootstrap.js')  ?>"></script>
    <script src="<?= base_url('assets\frontend\libraries\bootstrap\js\bootstrap-select.js')  ?>"></script>
    <script src="<?= base_url('assets\frontend\libraries\bootstrap\js\bootstrap.bundle.min.js')  ?>"></script>
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
                                <a href="<?= base_url('Administrator/Dashboard') ?>">
                                    <i class="metismenu-icon pe-7s-rocket"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Layouts</li>
                            <li>
                                <a href="#"  class="mm-active">
                                    <i class="metismenu-icon pe-7s-home"></i>
                                        Home Page
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="<?= base_url('Administrator/MostTrips')  ?>" class="mm-active"
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
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="fas fa-suitcase"></i>
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

                                    <label for="image">
                                    <img class="img-thumbnail mb-2" src="<?=(@$paket['img_paket'] != null)? base_url('/assets/frontend/images/admin/paket/'.$paket['img_paket']): "#";?>"  alt="...">
                                    </label>
                                    <div class="add-package-thumbnail">
                                        <span style="font-weight: bold;" class="mt-1 mb-3">Add Packages</span>
                                        <form class="was-validated" method="post" enctype="multipart/form-data" action="<?= base_url('Administrator/Add_Paket')  ?>">
                                            <div class="form-row">
                                                <div class="col mb-3">
                                                    <label for="validationCustom02">Tipe Paket</label>
                                                    <select class="form-control" name="Kategori" id="Kategori">
                                                      <?php foreach ($kategori as $key => $value) { ?>
                                                        <option value="<?= $value->kategori_id ?>"
                                                        <?=(@$kategori[$key]->nama_kategori == $value->nama_kategori)?"selected":""?> >
                                                          <?= $value->nama_kategori ?>
                                                        </option>
                                                      <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col mb-3">
                                                    <label for="validationCustom02">Judul</label>
                                                    <input type="text" name="Judul" id="Judul" class="form-control is-invalid"
                                                        placeholder="Required Judul"  required>
                                                    <div class="invalid-feedback"> Please enter a Judul </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="validationCustom02">Deskripsi</label>
                                                <textarea name="Deskripsi" id="Deskripsi" rows="10" aria-describedby="deskripsi-help" class="form-control is-invalid"
                                                    placeholder="Required deskripsi" required></textarea>
                                                    <small id="deskripsi-help" class="form-text text-muted">*Max 500 character</small>

                                                <div class="invalid-feedback"> Please enter a deskripsi </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col mb-3">
                                                    <label for="validationCustom02">Day</label>
                                                    <input type="text" name="Durasi" id="Durasi" class="form-control is-invalid"
                                                        placeholder="Required Day" required>
                                                    <div class="invalid-feedback"> Please enter a Day </div>
                                                </div>
                                                <div class="col mb-3">
                                                    <label for="validationCustom02">Price</label>
                                                    <div class="input-group mb-2">
                                                      <div class="input-group-prepend">
                                                        <div class="input-group-text">Rp.</div>
                                                      </div>
                                                        <input type="text" name="inputHarga" id="inputHarga"  class="form-control" placeholder="Required Price" required>
                                                    </div>
                                                    <div class="invalid-feedback"> Please enter a Price </div>
                                                    <input type="number" name="Harga" id="Harga" class="form-control" hidden>
                                                </div>
                                            </div>
                                            <label>Facility</label>
                                            <div class="form-row">
                                              <div class="col mb-3">
                                                <input class="form-control is-invalid" type="text" id="Bedroom" name="Bedroom" placeholder="Required Amount of Bed" required>
                                                <div class="invalid-feedback"> Please enter a Facility, if you don't have fill with 0</div>
                                              </div>
                                              <div class="col mb-3">
                                                <input class="form-control is-invalid" type="text" id="Bathroom" name="Bathroom" placeholder="Required Amount of Bath" required>
                                              </div>
                                              <div class="col mb-3">
                                                <input class="form-control is-invalid" type="text" id="Tv" name="Tv" placeholder="Required Amount of TV" required>
                                              </div>
                                              <div class="col mb-3">
                                                <input class="form-control is-invalid" type="text" id="Inet" name="Inet" placeholder="Required Speed Internet" required>
                                              </div>
                                            </div>
                                            <div class="form-row">
                                              <div class="col mb-3">
                                                <label>Img file input</label>
                                                <input type="file" class="form-control-file" name="image" id="image">
                                              </div>

                                                <div class="col mb-3">
                                                    <label for="validationCustom02">Max Person</label>
                                                    <select class="form-control" name="Max" id="Max">
                                                        <option value="2">2 Person</option>
                                                        <option value="4">4 Person</option>
                                                        <option value="8">8 Person</option>
                                                        <option value="16">16 Person</option>
                                                        <option value="32">32 Person</option>
                                                        <option value="64">64 Person</option>
                                                    </select>
                                                    <div class="invalid-feedback"> Please enter a Max Person </div>
                                                </div>
                                            </div>
                                            <input type="text" name="submit" value="submit" hidden>
                                            <button type="submit" id="submit" class="btn btn-primary mt-3">Submit</button>
                                        </form>
                                    </div>

                                    <hr>

                                </div>
                            </div>
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">List Vacation Packages</h5>
                                    <div class="add-package-content">
                                        <table class="table">

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
                                            <?php $no = 1; foreach ($paket as $dataPaket) { ?>
                                            <tbody>
                                                <tr>
                                                    <th scope="row"><?= $no;  ?></th>
                                                    <td><?php if ($dataPaket->kategori_id == 1) {
                                                      echo "Exclusive";
                                                    } elseif ($dataPaket->kategori_id == 2) {
                                                      echo "Business";
                                                    } else {
                                                      echo "Economic";
                                                    }
                                                      ?></td>
                                                    <td><?= $dataPaket->judul ?></td>
                                                    <td><?= $dataPaket->deskripsi ?></td>
                                                    <td><?= $dataPaket->durasi ?></td>
                                                    <td>Rp. <?= number_format($dataPaket->harga, 2, ',', '.') ?></td>
                                                    <td><img src="<?= base_url('/assets/frontend/images/admin/paket/'.$dataPaket->img_paket) ?>" style="width: 150px; height: 100px;"></td>
                                                    <td>
                                                        <a href="#" onclick="editPaket<?= $dataPaket->paket_id ?>()" class="btn btn-warning">Edit</a>

                                                        <a href="#" onclick="delete_paket<?= $dataPaket->paket_id ?>()" class="btn btn-danger">Hapus</a>
                                                        <script>
                                                          function delete_paket<?= $dataPaket->paket_id ?>() {
                                                            var txt;
                                                            if (confirm("Anda yakin ingin mendelete data paket ini?")) {
                                                              window.location = "<?= base_url() . 'Administrator/Delete_Paket/' . $dataPaket->paket_id ?>";
                                                            }
                                                          }
                                                          function editPaket<?= $dataPaket->paket_id ?>() {
                                                            var txt;
                                                            if (confirm("Anda yakin ingin mengubah data paket ini?")) {
                                                              window.location = "<?= base_url() . 'Administrator/editPaket/' . $dataPaket->paket_id ?>";
                                                            }
                                                          }
                                                        </script>
                                                    </td>
                                                </tr>
                                            </tbody>
                                          <?php $no++; } ?>

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

<script type="text/javascript">
function display(input){
if (input.files && input.files[0]) {
  var reader = new FileReader();
  reader.onload = function(e){
    $('.img-thumbnail').attr('src',e.target.result);
  }
  reader.readAsDataURL(input.files[0]);
}
}

$('#image').change(function(){
display(this);
});

document.getElementById("inputHarga").onblur =function (){

    //number-format the user input
    this.value = parseFloat(this.value.replace(/,/g, ""))
                    .toFixed(2)
                    .toString()
                    .replace(/\B(?=(\d{3})+(?!\d))/g, ",");

    //set the numeric value to a number input
    document.getElementById("Harga").value = this.value.replace(/,/g, "")

}
</script>

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
