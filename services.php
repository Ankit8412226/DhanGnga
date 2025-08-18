<?php include "conn.php"?>
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
   <?php include "header.php"?>


    <div id="main-wrapper">
        <div class="site-wrapper-reveal section-space--pt__120">
            <!--============ Service Hero Start ============-->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h1 class="breadcrumb-title text-color-primary">Naye Soch Naya Kadam</h1>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="text">Services</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
            <!--============ Service Hero End ============-->
            <!--===========  feature-images-wrapper  Start =============-->
            <div class="feature-images-wrapper position-relative">
                <div class="grid-wrapper">
                    <div class="line line-1"></div>
                    <div class="line line-2"></div>
                    <div class="line line-3"></div>
                    <div class="line line-4"></div>
                </div>
                <div class="swiper-container service-slider__container">
                    <div class="swiper-wrapper service-slider__wrapper feature-images__three">
                       
										       		<?php 

$query = "SELECT * FROM services";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_assoc($result)) {
    
    ?>
                        <div class="swiper-slide">
                            <!-- ht-box-icon Start -->
                            <a href="subservices.php?id=<?php echo $row['sid'];?>" class="ht-box-images style-03 wow move-up">
                                <div class="image-box-wrap">
                                    <div class="box-image">
                                        <img class="img-fulid" src="<?php echo $row['simage'];?>" alt="" style="width:100px;height:150px;">
                                    </div>
                                    <div class="content">
                                        <h5 class="heading"><?php echo $row['sname'];?></h5>
                                    </div>
                                </div>
                            </a>
                            <!-- ht-box-icon End -->
                        </div>
                    <?php } ?>
                    </div>
                    <div class="swiper-pagination swiper-pagination-service section-space--mt_30"></div>
                </div>
            </div>
            <!--===========  feature-images-wrapper  End =============-->




            <!--===========  Our Company History Start =============-->

         
            <!--===========  Our Company History Start  End =============-->






            <!--===========  feature-icon-wrapper  Start =============-->
            <div class="feature-icon-wrapper bg-gray section-space--ptb_100">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-wrap text-center section-space--mb_40">
                                <h6 class="section-sub-title mb-20">Industries we Serve</h6>
                                <h3 class="heading">Services We Deliver<br> we provide <span class="text-color-primary"> Various Dhanganga Services.</span></h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="feature-list__two">
                                <div class="row">
                                   		<?php 
$query = "SELECT * FROM services";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_assoc($result)) {
    
    ?>
								   <div class="col-lg-4 col-md-6 wow move-up">
                                        <div class="ht-box-icon style-02 single-svg-icon-box">
                                            <div class="icon-box-wrap">
                                                 <div class="icon">
                                                                <img class="img-fluid" src="<?php echo $row['simage'];?>" alt="">
                                                </div>
                                                <div class="content">
                                                    <h5 class="heading"><?php echo $row['sname'];?> </h5>
                                        <div class="text"><?php echo $row['sdec'];?></div>
													
                                                    <div class="feature-btn">
                                                        <a href="subservices.php?id=<?php echo $row['sid'];?>">
                                                            <span class="button-text">Book Service Now</span>
                                                            <i class="far fa-long-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="feature-list-button-box mt-30 text-center">
                                <a href="tel:+91 7279078783" class="ht-btn ht-btn-md">Talk to a consultant</a>
                                <a href="contact-us.php" class="ht-btn ht-btn-md ht-btn--outline">Contact us now </a>
                            </div>
                        </div>
                    </div>
					
					
                </div>
            </div>
            <!--===========  feature-icon-wrapper  End =============-->



            <!--====================  gradation process area ====================-->
            <div class="gradation-process-area section-space--ptb_100">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="gradation-title-wrapper section-space--mb_60">
                                <div class="gradation-title-wrap ">
                                    <h6 class="section-sub-title text-black mb-20">How we works</h6>
                                    <h4 class="heading">How it helps <span class="text-color-primary">your</span></h4>
                                </div>


                                <div class="gradation-sub-heading">
                                    <h3 class="heading"><mark>02</mark> Ways</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ht-gradation style-01">
                                <!-- Single item gradation Start -->
                                <div class="item item-1 animate  wow fadeInRight" data-wow-delay="0.1s">
                                    <div class="line"></div>
                                    <div class="circle-wrap">
                                        <div class="mask">
                                            <div class="wave-pulse wave-pulse-1"></div>
                                            <div class="wave-pulse wave-pulse-2"></div>
                                            <div class="wave-pulse wave-pulse-3"></div>
                                        </div>

                                        <h6 class="circle">1</h6>
                                    </div>

                                    <div class="content-wrap">

                                        <h6 class="heading">01. Discussion</h6>

                                        <div class="text">Call book your appointment on the phone.</div>

                                        
                                    </div>
                                </div>
                                <!-- Single item gradation End -->

                                <!-- Single item gradation Start -->
                                <div class="item item-1 animate  wow fadeInRight" data-wow-delay="0.15s">
                                    <div class="line"></div>
                                    <div class="circle-wrap">
                                        <div class="mask">
                                            <div class="wave-pulse wave-pulse-1"></div>
                                            <div class="wave-pulse wave-pulse-2"></div>
                                            <div class="wave-pulse wave-pulse-3"></div>
                                        </div>

                                        <h6 class="circle">2</h6>
                                    </div>

                                    <div class="content-wrap">

                                        <h6 class="heading">02. Concepts &amp; Initatives</h6>

                                        <div class="text">Another easy way is that you can book your appointment through our website.</div>

                                       
                                    </div>
                                </div>
                                <!-- Single item gradation End -->

                                <!-- Single item gradation Start -->
                              
                                <!-- Single item gradation End -->

                                <!-- Single item gradation Start -->
                               
                                <!-- Single item gradation End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================  End of gradation process area  ====================-->











            <!--========== Call to Action Area Start ============-->
            <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_one">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-7">
                            <div class="cta-content md-text-center">
                                <h3 class="heading text-white">We run all Best services in<span class="text-color-secondary"> Online.</span></h3>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="cta-button-group--one text-center">
                                <a href="https://chat.whatsapp.com/BhBhswr97GX49kup2jjHJ4" class="btn btn--white btn-one"><span class="btn-icon me-2"><i class="far fa-comment-alt-dots"></i></span> Let's talk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--========== Call to Action Area End ============-->

            <!--====================  End of brand logo slider area  ====================-->
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