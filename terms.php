<?php include "conn.php" ?>
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

    <!-- CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

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
   <?php include "header.php"?>

    <!--====================  header area ====================-->
    
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">Terms and Conditions </h2>
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
            <!--====================  Accordion area ====================-->
            <div class="accordion-wrapper section-space--ptb_100">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section-title-wrap Start -->
                            <div class="section-title-wrap text-center section-space--mb_20">
                                <h3 class="heading">Terms and Conditions</h3>
                            </div>
                            <!-- section-title-wrap Start -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="faq-wrapper  section-space--mt_40">
                                <div id="accordion">
                                                                                  					                    <?php 
$query = "SELECT * FROM terms ";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_assoc($result)) {
        ?>
                                        <div class="card">
                                            <div class="card-header" id="faq_4">
                                                <h5 class="mb-0">
                                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq_four" aria-expanded="false" aria-controls="faq_four">
                                                        <?php echo $row['tq'];?> <span> <i class="fas fa-chevron-down"></i>
                                                <i class="fas fa-chevron-up"></i> </span>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="faq_four" class="collapse" aria-labelledby="faq_4" data-bs-parent="#faq-toggles">
                                                <div class="card-body">
                                                    <p><?php echo $row['ta'];?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- End toggles -->
                        </div>
                    </div>
                </div>
            </div>
            <!--====================  Accordion area  ====================-->


         
            <!--====================  Conact us Section Start ====================-->
           <div class="contact-us-section-wrappaer infotechno-contact-us-bg section-space--ptb_120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-lg-6">
                            <div class="conact-us-wrap-one">
                                <h3 class="heading">Naye Soch Naya Kadam  <span class="text-color-primary">Provides </span>Services On a Single Clicks. </h3>

                                <div class="sub-heading">We’re available for 27*7!<br></div>

                            </div>
                        </div>

                        <div class="col-lg-6 col-lg-6">
                            <div class="contact-info-one text-center">
                                <div class="icon">
                                    <span class="fal fa-phone"></span>
                                </div>
                                <h6 class="heading font-weight--reguler">Reach out now!</h6>
                                <h2 class="call-us"><a href="tel:+91 9234692692">+91 9234692692</a></h2>
                                <div class="contact-us-button mt-20">
                                    <a href="#" class="btn btn--secondary">Contact us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================  Conact us Section End  ====================-->

        </div>

    <?php include "footer.php"?>
    </div>
    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->
    <!-- Start Toolbar -->
 
    <!-- End Toolbar -->

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


</html>