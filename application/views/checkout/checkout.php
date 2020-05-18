<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets\frontend\libraries\bootstrap\css\bootstrap.css') ?>">
    <script src="<?= base_url('assets\frontend\libraries\bootstrap\js\bootstrap-select.js')  ?>"></script>
    <script src="<?= base_url('assets\frontend\libraries\bootstrap\js\bootstrap.bundle.min.js')  ?>"></script>
    <script src="<?= base_url('assets\frontend\libraries\bootstrap\js\bootstrap.js')  ?>"></script>
	<link href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="<?= base_url('assets\frontend\libraries\font-awesome-5\css\fontawesome-all.min.css') ?>" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets\frontend\styles\main.css') ?>">
    <title>Checkout</title>
</head>

<body>
  <?php $user_data = $this->session->userdata('user_data');  ?>
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
                        <li class="breadcrumb-item"><a href="<?= base_url('')  ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('Paket') ?>">Paket</a></li>
                        <?php
                        if (isset($paket[0]->kategori_id)) {
                          if ($paket[0]->kategori_id == 1) { ?>
                            <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('Paket/'.$paket[0]->kategori_id)?>">Exclusive</a></li>
                          <?php } elseif ($paket[0]->kategori_id == 2) { ?>
                            <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('Paket/'.$paket[0]->kategori_id)?>">Business</a></li>
                          <?php } elseif ($paket[0]->kategori_id == 3) { ?>
                            <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('Paket/'.$paket[0]->kategori_id)?>">Economic</a></li>
                          <?php } ?>
                        <?php } ?>
                        <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('Paket/Detail/'.$paket[0]->paket_id)?>">Details</a></li>
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
                        <h4>Subtotal &nbsp; : &nbsp; Rp.<?= number_format($booking[0]->harga, 2, ',', '.')  ?></h4>
                        <h4>Tax 10% &nbsp;&nbsp; : &nbsp; Rp. <?= number_format($tax, 2, ',', '.')  ?></h4>
                        <?php $code = rand(100,1000); ?>
                        <h4>Code &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; <?= $code ?></h4>
                        <?php $total = $booking[0]->harga+$tax+$code; ?><hr>
                        <h4>Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; Rp. <?= number_format($total, 2, ',', '.')  ?></h4>
                        <div class="bank ">
                            <div class="bank-item pb-3 ">
                                <img src="<?= base_url('assets\frontend\images\bank-bca.jpg') ?>" style="width: 150px;" alt=" " class="bank-images " />
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
                                <img src="<?= base_url('assets\frontend\images\bank-mandiri.jpg') ?>" style="width: 150px;" alt=" " class="bank-images ">
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
                        <form method="post" enctype="multipart/form-data" action="<?= base_url('Checkout/Payment')  ?>">
                            <div class="form-group">
                                <label for="InputAsalBank">Asal Bank</label>
                                <input type="text" class="form-control" name="Bank" id="Bank" required>
                            </div>
                            <div class="form-group">
                                <label for="InputNamaPengirim">Nama Pengirim</label>
                                <input type="text" class="form-control" name="NamaPengirim" id="NamaPengirim" required>
                            </div>
                            <div class="form-group">
                                <label for="image">Upload Bukti Transfer</label>
                                <input type="file" class="form-control-file" name="image" id="image" required>
                            </div>
                            <?php  if (isset($user_data['user_id'])) { ?>
                              <input type="text" name="user_id" value="<?= $user_data['user_id'] ;  ?>" hidden>
                            <?php  } else { ?>
                              <input type="text" name="google_id" value="<?= $user_data['google_id'] ;  ?>" hidden>
                            <?php  } ?>

                            <input type="text" name="email" id="email" value="<?= $user_data['email'] ; ?>" hidden>
                            <input type="text" name="paket_id" id="paket_id" value="<?= $paket[0]->paket_id ?>" hidden>
                            <input type="text" name="harga" id="harga" value="<?= $total ?>" hidden>
                            <input type="text" name="temp_id" id="temp_id" value="<?= $booking[0]->temp_id ?>" hidden>

                            <input type="text" name="submit" value="submit" hidden>
                            <button type="submit" id="submit" class="btn btn-success btn-payment">Confirm Payment</button>
                            <button class="btn btn-secondary btn-payment">Cancel</button>
                        </form>

                    </div>
                </div>
            </div>
    </section>
</body>

<script src="<?= base_url('assets\frontend\libraries\jquery\jquery-3.4.1.min.js') ?>"></script>
<script src="<?= base_url('assets\frontend\libraries\retina\retina.min.js') ?>"></script>

</html>
