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
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">News/Event</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->











   





            <!--====================  Blog Area Start ====================-->
            
                    
                            <!--======= Single Blog Item Start ========-->
		
         <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <div class="blog-pages-wrapper section-space--ptb_100">
                <div class="container">
                                  <div class="row">
                                      							                    <?php 
$query = "SELECT * FROM news";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_assoc($result)) {
        ?>
                        <div class="col-lg-4 col-md-6  mb-30 wow move-up">       
						   <div class="single-blog-item blog-grid">
                                <!-- Post Feature Start -->
                                <div class="post-feature blog-thumbnail">
                                    <a href="blog-post-layout-one.html">
                                        <img class="img-fluid" src="admin/<?php echo $row['nimage'];?>" alt="Blog Images">
                                    </a>
                                </div>
                                <!-- Post Feature End -->

                                <!-- Post info Start -->
			                  <div class="post-info lg-blog-post-info">
                                    <div class="post-meta">
                                        <div class="post-date">
                                            <span class="far fa-calendar meta-icon"></span>
                                            <?php echo $row['nd'];?>
                                        </div>
                                    </div>

                                    <h5 class="post-title font-weight--bold">
                                        <a href="#"> <?php echo $row['nh'];?></a>
                                    </h5>

                                    <div class="post-excerpt mt-15">
                                        <p> <?php echo $row['ns'];?>. …</p>
                                    </div>
                                  <!--  <div class="btn-text">
                                        <a href="#">Read more <i class="ml-1 button-icon far fa-long-arrow-right"></i></a>
                                    </div>-->
                                </div>
								
                                <!-- Post info End -->
                            </div>
                                  </div>
							<?php } ?>

            

                    </div>         </div>
            </div>

                            <!--===== Single Blog Item End =========-->

                  
       
            <!--====================  Blog Area End  ====================-->

            <!--========== Call to Action Area Start ============-->
            <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_one">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-7">
                            <div class="cta-content md-text-center">
                                <h3 class="heading text-white">Assess your business potentials and find opportunities <span class="text-color-secondary">for bigger success</span></h3>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="cta-button-group--one text-center">
                                <a href="#" class="btn btn--white btn-one"><span class="btn-icon me-2"><i class="far fa-comment-alt-dots"></i></span> Let's talk</a>
                                <a href="#" class="btn btn--secondary  btn-two"><span class="btn-icon me-2"><i class="far fa-info-circle"></i></span> Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--========== Call to Action Area End ============-->








        </div>

      <?php include"footer.php"?>

    </div>
    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->

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


<!-- Mirrored from template.hasthemes.com/mitech/blog-grid-classic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Oct 2021 03:38:53 GMT -->
</html>