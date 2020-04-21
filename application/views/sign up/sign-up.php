<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="frontend\libraries\bootstrap\css\bootstrap.css">
    <link
        href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
    <link href="frontend\libraries\font-awesome-5\css\fontawesome-all.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets\frontend\styles\main.css')  ?>">
    <title>Sign Up</title>
</head>

<body>
    <section class="">
        <img src="frontend/images/bg-sign_up.png" class="img-fluid section-bg-sign_up" alt="">
    </section>
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
                            <img src="frontend/images/logo-sign_up.png" class="rounded" alt="">
                        </div>
                        <div class="sign_up-form mx-4">
                            <form action="" method="post">
                                <div class="form-group mb-3">
                                    <label>Name</label>
                                    <div class="form-row">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="First name">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Last name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Username</label>
                                    <input type="username" class="form-control" placeholder="Username">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Email address</label>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Foto Profil</label>
                                    <input type="file" class="form-control-file">
                                </div>
                                <button class="btn sign_up" type="submit">Sign In</button>
                            </form>
                            <div class="container-fluid mt-3">
                                <div class="row border-top justify-content-center align-items-center pt-3">
                                    <div class="col-auto text-gray-500-font-weight-light">
                                        <p>
                                            Do you have account?
                                            <a href="#">Sign In Here</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </Section>
</body>
<script src="frontend\libraries\jquery\jquery-3.4.1.min.js"></script>
<script src="frontend\libraries\bootstrap\js\bootstrap.js"></script>
<script src="frontend\libraries\retina\retina.min.js"></script>

</html>
