<?php include"conn.php"?>
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

    <div id="main-wrapper">
        <div class="site-wrapper-reveal">

                 <!--===========  feature-large-images-wrapper  Start =============-->
            <div class="feature-large-images-wrapper section-space--ptb_100">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section-title-wrap Start -->
                            <div class="section-title-wrap text-center section-space--mb_60">
                                <h6 class="section-sub-title mb-20">Successfully</h6>
                                <h3 class="heading">Membership  <span class="text-color-primary"> Form</span></h3>
                            </div>
                            <!-- section-title-wrap Start -->
                        </div>
                    </div>
<?php
                                                $id = $_GET['id'];
                                                $query = "SELECT * FROM member WHERE mmobile = '$id'";
                                                $result = mysqli_query($connect, $query);
                                                $row = mysqli_fetch_assoc($result);
                                                ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="row">

                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <!-- ht-box-icon Start -->
                                    <a href="#" class="ht-large-box-images style-03">
                                        <div class="large-image-box">
                                            <div class="box-image">
                                                <div class="default-image">
                                                </div>
                                            </div>
                                          
                                        </div>
                                    </a>
                                    <!-- ht-box-icon End -->
                                </div>
                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <!-- ht-box-icon Start -->
                                    <a href="#" class="ht-large-box-images style-03">
                                        <div class="large-image-box">
                                            <div class="box-image">
                                                <div class="default-image">
                                                    <img class="img-fluid" style="width:375px;height:300px;" src="<?php echo $row['image'];?>" alt="">
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h5 class="heading"><?php echo $row['mname'];?></h5>
												<div class="text">मोबाइल नंबर:- <?php echo $row['mmobile'];?></div>
                                                <div class="text">पिता का नाम :- <?php echo $row['mfname'];?></div>
                                                <div class="text">जन्म की तारीख :- <?php echo $row['mdob'];?></div>
                                                <div class="text">शिक्षा:- <?php echo $row['medu'];?></div>
                                                <div class="text">वर्तमान पता :- <?php echo $row['mcaddress'];?></div>
                                                <div class="text">स्थायी पता:- <?php echo $row['mpaddress'];?></div>
                                                <div class="text">नामांकित व्यक्ति का नाम:- <?php echo $row['mrname'];?></div>
                                                <div class="text">संबंध:- <?php echo $row['mrelation'];?></div>
                                                <div href="#" class="box-images-arrow">
                                                    <span class="button-text">Payment Now</span>
                                                    <i class="far fa-long-arrow-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- ht-box-icon End -->
                                </div>
                            

                            </div>

                            <div class="section-under-heading text-center section-space--mt_20"><a href="#">Edit<i class="ml-1 button-icon far fa-long-arrow-right"></i></a></div>


                        </div>
                    </div>
                </div>
            </div>
            <!--===========  feature-large-images-wrapper  End =============-->

            <!--=========== fun fact Wrapper Start ==========-->
            <div class="fun-fact-wrapper bg-theme-default section-space--pb_30 section-space--pt_60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 wow move-up">
                            <div class="fun-fact--two text-center">
                                <div class="fun-fact__count counter">120</div>
                                <h6 class="fun-fact__text">Happy clients</h6>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow move-up">
                            <div class="fun-fact--two text-center">
                                <div class="fun-fact__count counter">32</div>
                                <h6 class="fun-fact__text">Finished projects</h6>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow move-up">
                            <div class="fun-fact--two text-center">
                                <div class="fun-fact__count counter">73</div>
                                <h6 class="fun-fact__text">Skilled Experts</h6>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow move-up">
                            <div class="fun-fact--two text-center">
                                <div class="fun-fact__count counter">318</div>
                                <h6 class="fun-fact__text">Media Posts</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=========== fun fact Wrapper End ==========-->
           

      <?php include "footer.php"?>

    </div>
    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->


      <?php include "mobile.php"?>





    <!--====================  search overlay ====================-->
  
    <!--====================  End of search overlay  ====================-->

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