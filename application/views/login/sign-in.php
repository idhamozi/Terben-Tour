<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="<?= base_url('assets\frontend\libraries\bootstrap\css\bootstrap.css')  ?>">
    <link
        href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
    <link href="<?= base_url('assets\frontend\libraries\font-awesome-5\css\fontawesome-all.min.css')  ?>" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets\frontend\styles\main.css')  ?>">
</head>

<body>
  <?php
  // Notifikasi error
  echo validation_errors('<p class="alert alert-warning">','</p>');

  // Form open
  echo form_open(base_url('login/LoginCommon'));
  ?>
    <section class="">
        <img src="<?= base_url('assets/frontend/images/bg-sign_in.png')  ?>" class="img-fluid section-bg-login" alt="">
    </section>
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
                                    <label>Username</label>
                                    <input type="username" name="username" class="form-control" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>

                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input">
                                    <label class="form-check-label mb-2">Remember Me</label>
                                    <label class=" mb-2">
                                        <a href="#" class="check-forget" data-toggle="modal"
                                                data-target="#LupaPassword">Lupa Password ?</a>
                                                <!-- Modal - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  -->
                                                <div class="modal fade" id="LupaPassword" tabindex="-1" role="dialog"
                                                    aria-labelledby="LupaPasswordLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="LupaPasswordLabel">Lupa Password
                                                                </h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <Form>
                                                                    <form action="" method="post">
                                                                        <div class="form-group">
                                                                            <label>Email address</label>
                                                                            <input type="email" class="form-control" placeholder="Email">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Password Baru</label>
                                                                            <input type="password" class="form-control" placeholder="Password">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Konfirmasi Password</label>
                                                                            <input type="password" class="form-control" placeholder="Password">
                                                                        </div>
                                                                </Form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Cancel</button>
                                                                <button type="button" class="btn btn-primary"> Save </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
<!-- end modal - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  -->
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
                                        " class="fb btn"><i class="fa fa-google fa-fw"></i> Login with Google
                                          </a>
                                    </div>
                                </div>
                            </form>
                            <div class="container-fluid">
                                <div class="row border-top justify-content-center align-items-center pt-3">
                                    <div class="col-auto text-gray-500-font-weight-light">
                                        <p>
                                            Don't you have account?
                                            <a href="<?= base_url('login/register')  ?>">Sign Up Here</a>
                                        </p>
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
    <?php
    // Form close
    echo form_close();
    ?>

    <!-- SWEETALERT -->
    <?php if($this->session->flashdata('sukses')) { ?>
    <script>
      swal("Berhasil", "<?php echo $this->session->flashdata('sukses'); ?>","success")
    </script>
    <?php } ?>

    <?php if($this->session->flashdata('warning')) { ?>
    <script>
      swal("Oops...", "<?php echo $this->session->flashdata('warning'); ?>","warning")
    </script>
    <?php } ?>
</body>

<script src="<?= base_url('assets\frontend\libraries\jquery\jquery-3.4.1.min.js')  ?>"></script>
<script src="<?= base_url('assets\frontend\libraries\bootstrap\js\bootstrap.js')  ?>"></script>
<script src="<?= base_url('assets\frontend\libraries\retina\retina.min.js')  ?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets\frontend\plugin\iCheck\icheck.min.js') ?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>

</html>
