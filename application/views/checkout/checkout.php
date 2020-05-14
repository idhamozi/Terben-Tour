<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets\frontend\libraries\bootstrap\css\bootstrap.css') ?>">
    <link href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link href="<?= base_url('assets\frontend\libraries\font-awesome-5\css\fontawesome-all.min.css') ?>" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets\frontend\styles\main.css') ?>">
    <title>Checkout</title>
</head>

<body>
    <!-- navbar -->
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white">
            <a href="" class="navbar-brand">
                <img src="<?= base_url('assets\frontend\images\Terben.Tour@2x.png') ?>" alt="Logo TerbenTour">
            </a>
        </nav>
    </div>
    <!-- breadcrumb -->
    <hr>
    <section class="section-details-breadcrumb">
        <div class="container">
            <div class="row ">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">Details</li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- header Checkout -->
    <section class="section-header-checkout ">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-12  justify-content-center">
                    <div class="text-center">
                        <h2>Payment</h2>
                        <p>Kindly follow the instruction below</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content Checkout -->
    <section class="section-content-checkout-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 border-right">
                    <div class="content-left">
                        <h5>Transfer Pembayaran :</h5>
                        <h4>Tax : 10%</h4>
                        <h4>Subtotal &nbsp; : &nbsp; Rp.2.000.000</h4>
                        <h4>Total &nbsp; : &nbsp; Rp. 2.200.000</h4>
                        <div class="bank ">
                            <div class="bank-item pb-3 ">
                                <img src="..." alt=" " class="bank-images " />
                                <div class="description ">
                                    <h3>Bank Central Asia</h3>
                                    <p>
                                        0881 8823 5568
                                        <br> Hanna Tour
                                    </p>
                                </div>
                                <div class="clearfix "></div>
                            </div>
                            <div class="bank-item pb-3 ">
                                <img src="..." alt=" " class="bank-images ">
                                <div class="description ">
                                    <h3>Bank Mandiri </h3>
                                    <p>
                                        0881 8453 5778
                                        <br> Ferdy Tour
                                    </p>
                                </div>
                                <div class="clearfix "></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content-right">
                        <form>
                            <div class="form-group">
                                <label for="InputAsalBank">Asal Bank</label>
                                <input type="text" class="form-control" id="InputAsalBank">
                            </div>
                            <div class="form-group">
                                <label for="InputNamaPengirim">Nama Pengirim</label>
                                <input type="text" class="form-control" id="InputNamaPengirim">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Upload Bukti Transfer</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </form>
                        <button class="btn btn-success btn-payment">Confirm Payment</button>
                        <button class="btn btn-secondary btn-payment">Cancel</button>
                    </div>
                </div>
            </div>
    </section>
</body>

<script src="<?= base_url('assets\frontend\libraries\jquery\jquery-3.4.1.min.js') ?>"></script>
<script src="<?= base_url('assets\frontend\libraries\bootstrap\js\bootstrap.js') ?>"></script>
<script src="<?= base_url('assets\frontend\libraries\retina\retina.min.js') ?>"></script>

</html>
