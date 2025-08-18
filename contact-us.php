<?php
 include "conn.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $mobile = $_POST['mobile'];
	$comment = $_POST['comment'];

    $sql = "INSERT INTO contact(name,email,mobile,subject,comment) values('$name','$email','$mobile','$subject','$comment')";
    mysqli_query($connect, $sql) or die($sql);
 echo "<script>
alert('Plz Wait We just need a couple of hours!');
window.location.href='contact-us.php';
</script>";}

?> 
<!DOCTYPE html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DhanGanga Associate</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.webp">

    <!-- CSS ============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- JavaScript ====================================== -->
    <!-- Load jQuery first -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Load jQuery Migrate (Optional, if used in your project) -->
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</head>


<body>


    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <!--====================  header area ====================-->

        <!-- Header Top Wrap Start -->
      
        <!-- Header Top Wrap End -->

<?php include "header.php"?>
<!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">Contact us</h2>
                        <!-- breadcrumb-list start -->
                       
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <!--====================  Conact us Section Start ====================-->
            <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-lg-6">
                            <div class="conact-us-wrap-one mb-30">
                                <h3 class="heading">To make requests for <br>further information, <br><span class="text-color-primary">contact us</span> via our social channels. </h3>
                                <div class="sub-heading">We just need a couple of hours! <br> No more than 2 working days since receiving your issue ticket.</div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-lg-6">
                            <div class="contact-form-wrap">

                                <form class="contact-form"  action="" enctype="multipart/form-data" method="post">
                                    <div class="contact-form">
                                        <div class="contact-input">
                                            <div class="contact-inner">
                                                <input name="name" type="text" placeholder="Name *">
                                            </div>
                                            <div class="contact-inner">
                                                <input name="email" type="email" placeholder="Email *">
                                            </div>
                                        </div>
                                        <div class="contact-inner">
                                            <input name="mobile" type="mobile" placeholder="Mobile *">
                                        </div> 
										<div class="contact-inner">
                                            <input name="subject" type="text" placeholder="Subject *">
                                        </div>
                                        <div class="contact-inner contact-message">
                                            <textarea name="comment" placeholder="Please describe what you need."></textarea>
                                        </div>
                                        <div class="submit-btn mt-20">
											<input name="submit" type="submit" class="btn" value="Send message">
                                            <p class="form-messege"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================  Conact us Section End  ====================-->

            <!--====================  Conact us info Start ====================-->
            <div class="contact-us-info-wrappaer section-space--pb_100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="conact-info-wrap mt-30">
                                <h5 class="heading mb-20"></h5>
                                <ul class="conact-info__list">
                                    <li></li>
                                    <li><a href="#" class="hover-style-link text-color-primary"></a></li>
                                    <li><a href="#" class="hover-style-link text-black font-weight--bold"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="conact-info-wrap mt-30">
                                <h5 class="heading mb-20">Bhagalpur</h5>
                                <ul class="conact-info__list">
                                    <li>NayaTola TeenPuliya(Ganeshpur),Post- Khirabandh</li>
                                    <li>Thana-Gagdishpur,District-Bhagalpur</li>
                                    <li><a href="#" class="hover-style-link text-color-primary">manturani.pp@gmail.com</a></li>
                                    <li><a href="#" class="hover-style-link text-black font-weight--bold">(+91)7279098893</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="conact-info-wrap mt-30">
                                <h5 class="heading mb-20"></h5>
                                <ul class="conact-info__list">
                                    <li></li>
                                    <li><a href="#" class="hover-style-link text-color-primary"></a></li>
                                    <li><a href="#" class="hover-style-link text-black font-weight--bold"></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--====================  Conact us info End  ====================-->
  <!--========== Call to Action Area Start ============-->
            <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_two">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-7">
                            <div class="cta-content md-text-center">
                                <h3 class="heading">We run all kinds of IT services that vow your <span class="text-color-primary"> success</span></h3>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="cta-button-group--two text-center">
                                <a href="#" class="btn btn--white btn-one"><span class="btn-icon me-2"><i class="far fa-comment-alt-dots"></i></span> Let's talk</a>
                                <a href="#" class="btn btn--secondary btn-two "><span class="btn-icon me-2"><i class="far fa-info-circle"></i></span> Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--========== Call to Action Area End ============-->
</div>


<?php include "footer.php"?>


    </div>

    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->

      <?php include "mobile.php"?>


    <!-- JS
    ============================================ -->
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>


</body>


<!-- Mirrored from template.hasthemes.com/mitech/contact-us.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Oct 2021 03:38:46 GMT -->
</html>