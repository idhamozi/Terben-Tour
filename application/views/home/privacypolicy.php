<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets\frontend\libraries\bootstrap\css\bootstrap.css')  ?>">
    <link rel="stylesheet" href="<?= base_url('assets\frontend\libraries\star_rating\star-rating.css')  ?>">
    <link href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link href="<?= base_url('assets\frontend\libraries\font-awesome-5\css\fontawesome-all.min.css') ?>" rel="stylesheet" media="all">
    <link rel="stylesheet" href="<?= base_url('assets\frontend\styles\main.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets\frontend\libraries\gjigo\css\gijgo.min.css') ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url('assets\frontend\plugin\iCheck\square\blue.css') ?>">
    <title>Privacy Policy</title>
  </head>
  <body>

    <?php $user_data = $this->session->userdata('user_data');  ?>

      <!-- navbar -->
      <div class="container">
          <nav class="row navbar navbar-expand-lg navbar-light bg-white">
              <a href="" class="navbar-brand">
                  <img src="<?= base_url('assets\frontend\images\Terben.Tour@2x.png')  ?>" alt="Logo TerbenTour">
              </a>

              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navM">
                  <span class="navbar-toggler-icon clr"></span>
              </button>

              <div class="collapse navbar-collapse" id="navM">
                  <ul class="navbar-nav ml-auto mr-3">
                      <li class="nav-item mx-md-2">
                          <a href="<?= base_url('')  ?>" class="nav-link">Home</a>
                      </li>
                      <li class="nav-item mx-md-2">
                          <a href="<?= base_url('Paket') ?>" class="nav-link">Paket Travel</a>
                      </li>
                      <li class="nav-item mx-md-2">
                          <a href="<?= base_url('Testimoni/All') ?>" class="nav-link">Testimonial</a>
                      </li>
                  </ul>
                  <!-- Mobile Button -->
                  <form class="from-inline d-sm-block d-md-none">
                      <?php
                      if ($user_data !== null) { ?>
                          <div class="dropdown">
                              <button class="btn btn-login my-2 my-sm-0" type="button" data-toggle="dropdown">
                                  <?= $user_data['email']; ?>
                                  <i class="fa fa-angle-down ml-2 opacity-8"></i>
                              </button>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item" href="<?= base_url('User/Profile');  ?>">User Account</a>
                                  <a class="dropdown-item" href="<?= base_url('User/editProfile');  ?>">Setting</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="#" onclick="location.href='<?= base_url('Login/logout'); ?>'" type="button">Logout</a>
                              </div>
                          </div>

                      <?php } else { ?>
                          <button class="btn btn-login my-2 my-sm-0" onclick="location.href='<?= base_url('Login'); ?>'" type="button">
                              Masuk
                          </button>
                      <?php } ?>
                  </form>
                  <!-- end -->
                  <!-- Desktop Button -->
                  <form class="from-inline my-2 my-lg-0 d-none d-md-block">
                      <?php
                      if (null !== $user_data) { ?>
                          <div class="dropdown">
                              <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4"  type="button" data-toggle="dropdown">
                                  <?= $user_data['email'] ?>
                                  <i class="fa fa-angle-down ml-2 opacity-8"></i>
                              </button>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item" href="<?= base_url('User/Profile');  ?>">User Account</a>
                                  <a class="dropdown-item" href="<?= base_url('User/editProfile');  ?>">Setting</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="#" onclick="location.href='<?= base_url('Login/logout'); ?>'" type="button">Logout</a>
                              </div>
                          </div>
                      <?php } else { ?>
                          <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" onclick="location.href='<?= base_url('Login'); ?>'" type="button">
                              Masuk
                          </button>
                      <?php } ?>
                  </form>
                  <!-- end -->
              </div>
          </nav>
      </div>
      <!-- end -->

      <?php require_once APPPATH."views/layout/layout.header.php" ?>

<div class="container mt-3">


    <h1>Privacy Policy for Terben Tour & Travel</h1>

<p>At Terben Tour, accessible from terben-tour.pmh.web.ud, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Terben Tour and how we use it.</p>

<p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>

<p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Terben Tour. This policy is not applicable to any information collected offline or via channels other than this website.</p>

<h2>Consent</h2>

<p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>

<h2>Information we collect</h2>

<p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>
<p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>
<p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>

<h2>How we use your information</h2>

<p>We use the information we collect in various ways, including to:</p>

<ul>
<li>Provide, operate, and maintain our webste</li>
<li>Improve, personalize, and expand our webste</li>
<li>Understand and analyze how you use our webste</li>
<li>Develop new products, services, features, and functionality</li>
<li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the webste, and for marketing and promotional purposes</li>
<li>Send you emails</li>
<li>Find and prevent fraud</li>
</ul>

<h2>Log Files</h2>

<p>Terben Tour follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information. Our Privacy Policy was created with the help of the <a href="https://www.privacypolicygenerator.info">Privacy Policy Generator</a> and the <a href="https://www.disclaimergenerator.org/">Disclaimer Generator</a>.</p>




<h2>Advertising Partners Privacy Policies</h2>

<P>You may consult this list to find the Privacy Policy for each of the advertising partners of Terben Tour.</p>

<p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on Terben Tour, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>

<p>Note that Terben Tour has no access to or control over these cookies that are used by third-party advertisers.</p>

<h2>Third Party Privacy Policies</h2>

<p>Terben Tour's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>

<p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites.</p>

<h2>CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>

<p>Under the CCPA, among other rights, California consumers have the right to:</p>
<p>Request that a business that collects a consumer's personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>
<p>Request that a business delete any personal data about the consumer that a business has collected.</p>
<p>Request that a business that sells a consumer's personal data, not sell the consumer's personal data.</p>
<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>

<h2>GDPR Data Protection Rights</h2>

<p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>
<p>The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>
<p>The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>
<p>The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</p>
<p>The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>
<p>The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.</p>
<p>The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>
<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>

<h2>Children's Information</h2>

<p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>

<p>Terben Tour does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>
</div>

<?php require_once APPPATH."views/layout/layout.footer.php" ?>

  </body>
</html>
