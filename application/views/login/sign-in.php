<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="frontend\libraries\bootstrap\css\bootstrap.css">
    <link
        href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
    <link href="frontend\libraries\font-awesome-5\css\fontawesome-all.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets\frontend\styles\main.css')  ?>">
</head>

<body>
    <section class="">
        <img src="frontend/images/bg-sign_in.png" class="img-fluid section-bg-login" alt="">
    </section>
    <section class="section-sign_in">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-form">
                        <div class="logo-sign_in">
                            <img src="frontend/images/logo-sing_in.png" class="rounded" alt="">
                        </div>
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>

                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input">
                                    <label class="form-check-label mb-2">Remember Me</label>
                                    <label class=" mb-2">
                                        <a href="#" class="check-forget">Lupa Password ?</a>
                                    </label>
                                </div>
                                <button class="btn sign_in" type="submit">Sign In</button>
                                <div class="social-login-content mb-2">
                                    <div class="social-button">
                                        <a href="#" class="fb btn">
                                            <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                                          </a>
                                    </div>
                                </div>
                            </form>
                            <div class="container-fluid">
                                <div class="row border-top justify-content-center align-items-center pt-3">
                                    <div class="col-auto text-gray-500-font-weight-light">
                                        <p>
                                            Don't you have account?
                                            <a href="#">Sign Up Here</a>
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

</body>

<script src="frontend\libraries\jquery\jquery-3.4.1.min.js"></script>
<script src="frontend\libraries\bootstrap\js\bootstrap.js"></script>
<script src="frontend\libraries\retina\retina.min.js"></script>

</html>
