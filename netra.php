<?php
 include "conn.php";

if (isset($_POST['submit'])) {
    $pname = $_POST['pname'];
    $pdept = $_POST['pdept'];
	$pmassage = $_POST['pmassage'];
    $pmobile = $_POST['pmobile'];
    $set = $_POST['shit'];
    $attan = $_POST['attan'];
    $age = $_POST['age'];
 

    $sql = "INSERT INTO enquiryn(pname,pmobile,pdept,pmassage,shit,attan,age) values('$pname','$pmobile','$pdept','$pmassage','$set','$attan','$age')";
    mysqli_query($connect, $sql) or die($sql);
    echo "<script>
window.location.href='netpayment.php?id=$pmobile';
</script>";
}

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
 <!--====================  header area ====================-->
    <div class="header-area header-sticky only-mobile-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header position-relative">
                        <!-- brand logo -->
                        <div class="header__logo top-logo">
                            <a href="index.php">
                                <img src="assets/images/logo/sai1.png" style="width:1050px;height:100px;" class="img-fluid" alt="">
                            </a>
                        </div>
					
                        <div class="header-right flexible-image-slider-wrap">

                            <div class="header-right-inner" id="hidden-icon-wrapper">
                                <!-- Header Search Form -->
                                <div class="header-search-form d-md-none d-block">
                                    <form action="#" class="search-form-top">
                                        <input class="search-field" type="text" placeholder="Search…">
                                        <button class="search-submit">
                                            <i class="search-btn-icon fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>

                                <!-- Header Top Info -->
                                <div class="swiper-container header-top-info-slider-werap top-info-slider__container">
                                    <div class="swiper-wrapper header-top-info-inner default-color">
                                        <div class="swiper-slide">
                                            <div class="info-item">
                                                <div class="info-icon">
                                                    <span class="fa fa-phone"></span>
                                                </div>
                                                <div class="info-content">
                                                    <h6 class="info-title">+91 7279078783</h6>
                                                    <div class="info-sub-title">nayesochnayakadam@gmail.com</div>
                                                </div>
                                            </div>
                                        </div> 
								
                                       <div class="swiper-slide">
                                            <div class="info-item">
                                                <div class="info-icon">
                                                    <span class="fa fa-phone"></span>
                                                </div>
                                                <div class="info-content">
                                                    <h6 class="info-title">+91 9955299280</h6>
                                                    <div class="info-sub-title">netralaybgp@gmail.com</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="info-item">
                                                <div class="info-icon">
                                                    <span class="fa fa-map-marker-alt"></span>
                                                </div>
                                                <div class="info-content">
                                                    <h6 class="info-title">DR.Ravi Kumar,Baltikar khana Chowk,Bounsi Road </h6>
                                                    <div class="info-sub-title">Bhagalpur, 812005</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="info-item">
                                                <div class="info-icon">
                                                    <span class="fa fa-comment-alt-lines"></span>
                                                </div>
                                                <div class="info-content">
                                                    <h6 class="info-title">Online 24/7</h6>
                                                    <div class="info-sub-title">+91 7764026786</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                  <div class="header-social-networks style-icons">
                                    <div class="inner">
                                        <a class=" social-link hint--black hint--bottom-left" aria-label="Twitter" href="https://twitter.com/PAWANPYARA3?t=B-MYzPRAxlyDMjn-JXST6Q&s=09" data-hover="Twitter" target="_blank">
                                            <i class="social-icon fab fa-twitter"></i>
                                        </a>
                                        <a class=" social-link hint--black hint--bottom-left" aria-label="Facebook" href="https://facebook.com/" data-hover="Facebook" target="_blank">
                                            <i class="social-icon fab fa-facebook-f"></i>
                                        </a>
                                        <a class=" social-link hint--black hint--bottom-left" aria-label="Instagram" href="https://instagram.com/" data-hover="Instagram" target="_blank">
                                            <i class="social-icon fab fa-instagram"></i>
                                        </a>
                                        <a class=" social-link hint--black hint--bottom-left" aria-label="Youtube" href="https://youtube.com/channel/UC0lCFQ7k4YnJiHwZCoz7Jzw" data-hover="youtube" target="_blank">
                                            <i class="social-icon fab fa-youtube"></i>
                                        </a>
                                    </div>
                                </div>

                            </div> 
                            <!-- mobile menu -->
                            <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                                <i></i>
                            </div>
                            <!-- hidden icons menu -->
                            <div class="hidden-icons-menu d-block d-md-none" id="hidden-icon-trigger">
                                <a href="javascript:void(0)">
                                    <i class="far fa-ellipsis-h-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom-wrap bg-theme-default d-md-block d-none header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-bottom-inner position-relative">
                            <div class="header-bottom-left-wrap">
                                <!-- navigation menu -->
                                <div class="header__navigation d-none d-xl-block">
                                    <nav class="navigation-menu navigation-menu--text_white">

                                        <ul>
                                            
                                              <!--  <ul class="submenu">
                                                    <li><a href="index-infotechno"><span>Infotechno</span></a></li>
                                                    <li><a href="index-processing"><span>Processing</span></a></li>
                                                    <li><a href="index-appointment"><span>Appointment</span></a></li>
                                                    <li><a href="index-services"><span>Services</span></a></li>
                                                    <li><a href="index-resolutions"><span>Resolutions</span></a></li>
                                                    <li><a href="index-cybersecurity"><span>Cybersecurity</span></a></li>
                                                    <li><a href="index-modern-it-company"><span>Modern IT Company</span></a></li>
                                                    <li><a href="index-machine-learning"><span>Machine Learning</span></a></li>
                                                    <li><a href="index-software-innovation"><span>Software Innovation</span></a></li>
                                                </ul>-->
										   
<li class="menu">
                                                <a href=""><span>Netralay</span></a>
                                                <!-- multilevel submenu -->
                                               
                                            </li> 
											
                                          <!--  <li class="has-children has-children--multilevel-submenu">
                                                <a href="blog-list-large-image"><span>Blog</span></a>
                                                <ul class="submenu">
                                                    <li><a href="blog-list-large-image"><span>List Large Image</span></a></li>
                                                    <li><a href="blog-list-left-large-image"><span>Left Large Image</span></a></li>
                                                    <li><a href="blog-grid-classic"><span>Grid Classic</span></a></li>
                                                    <li><a href="blog-grid-masonry"><span>Grid Masonry</span></a></li>
                                                    <li class="has-children">
                                                        <a href="blog-post-layout-one"><span>Single Layouts</span></a>
                                                        <ul class="submenu">
                                                            <li><a href="blog-post-layout-one"><span>Left Sidebar</span></a></li>
                                                            <li><a href="blog-post-right-sidebar"><span>Right Sidebar</span></a></li>
                                                            <li><a href="blog-post-no-sidebar"><span>No Sidebar</span></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>-->
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--====================  End of header area  ====================-->

    <div id="main-wrapper">
        <div class="site-wrapper-reveal section-space--pt__120">
            <!--============ Service Hero Start ============-->


           
          <!--============ Contact Us Area Start =================-->
            <div class="contact-us-area service-contact-bg section-space--ptb_100">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-4">
                            <div class="contact-info sytle-one service-contact text-left">


                                <div class="contact-list-item">
                                    <a href="tel:190068668" class="single-contact-list">
                                        <div class="content-wrap">
                                            <div class="content">
                                                <div class="icon">
                                                    <span class="fal fa-phone"></span>
                                                </div>
                                                <div class="main-content">
                                                    <h6 class="heading">Call for advice now!</h6>
                                                    <div class="text">(+91) 9955299280</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="mailto:netralaybgp@gmail.com" class="single-contact-list">
                                        <div class="content-wrap">
                                            <div class="content">
                                                <div class="icon">
                                                    <span class="fal fa-envelope"></span>
                                                </div>
                                                <div class="main-content">
                                                    <h6 class="heading">Say hello</h6>
                                                    <div class="text">netralaybgp@gmail.com</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-7 ms-auto">
                            <div class="contact-form-service-wrap">
                                <div class="contact-title text-center section-space--mb_40">
                                    <h3 class="mb-10">Book Your Appointment</h3>
                                    <p class="text">Reach Out To The Indo-Nepal Most Reliable Ophthalmologists Services.</p>
                                </div>

                           
                                        <form class="contact-form"  action="" enctype="multipart/form-data" method="post">
                                    <div class="contact-form__two">
                                        <div class="contact-input">
                                             <div class="contact-inner">
                                                <input  type="text" placeholder="Reference Code">
                                            </div>
                                         </div>    
                                            <div class="contact-inner">
                                                <input name="pname" type="text" placeholder="Patient's Name *" required>
                                            </div>
                                            <div class="contact-inner">
                                                <input name="age" type="text" placeholder="Age *" required>
                                            </div>
                                            <div class="contact-inner">
                                            </div>
                                            <br>
                                            </br>

                                            <div class="contact-inner">
                                                <input name="attan" type="text" placeholder="Guardian Name*" required>
                                            <label for="vehicle3">Father's Name</label> 
                                            
                                                <input type="checkbox" name="check" value="Boat" >  
                                             <label for="vehicle3">Husband's Name</label>
                                            <input type="checkbox" name="check" value="Boat" >  
                                            </div>
                                            <div class="contact-inner">
                                          
                                            </div>
                                       
										<div class="contact-input">
                                            <div class="contact-inner">
                                                <input  type="text" placeholder="Attendant Name*" required>
                                            </div>
                                             <div class="contact-inner">
                                                <input name="pmobile" type="mobile" placeholder="Mobile *" required>
                                            </div>
                                            <div class="contact-inner">
                                                <input name="shit" type="text" placeholder="Gram*" required>
                                            </div>
                                             <div class="contact-inner">
                                                <input name="pdept" type="text" placeholder="Near*" required>
                                            </div>
                                             <div class="contact-inner">
                                                <input name="posa" type="text" placeholder="Post*" required>
                                            </div>
                                             <div class="contact-inner">
                                                <input name="ps" type="text" placeholder="Police Station*" required>
                                            </div>
                                             <div class="contact-inner">
                                                <input name="dis" type="text" placeholder="District*" required>
                                            </div>
                                        </div>
									
                                           <div class="contact-input">
<br>
<br>
                                        <div class="comment-submit-btn">
									<input name="submit" type="submit" class="btn" value="Book">
                                            <p class="form-messege-2"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--============ Contact Us Area End =================-->
            <!--====================  brand logo slider area ====================-->
  
            <!--====================  End of brand logo slider area  ====================-->
        </div>

  <!--====================  footer area ====================-->
        <div class="footer-area-wrapper bg-gray">
            <div class="footer-area section-space--ptb_80">
                <div class="container">
                    <div class="row footer-widget-wrapper">
                        <div class="col-lg-4 col-md-6 col-sm-6 footer-widget">
                            <div class="footer-widget__logo mb-30">
                                <img src="assets/images/logo/sai1.png" width="200" height="100" class="img-fluid" alt="">
                            </div>
                            <ul class="footer-widget__list">
                                <li>NAYATOLA TINPULYA (GANESHPUR) P.O.-  KHIRIBANDH, P.S.- JAGDISHPUR. DIST.-  BHAGALPUR</li>
                                <li><a href="mailto:manturani.pp@gmail.com" class="hover-style-link">manturani.pp@gmail.com</a></li>
                                <li><a href="tel:123344556" class="hover-style-link text-black font-weight--bold">(+91) 9234692692</a></li>
                                <li><a href="http://nayesochnayakadam.com/" class="hover-style-link text-color-primary">Nayesochnayakadam.com</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                            <h6 class="footer-widget__title mb-20">Services</h6>
                            <ul class="footer-widget__list">
                                  <?php 
$query = "SELECT * FROM services";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_assoc($result)) {
        ?>
                                <li><a href="#" class="hover-style-link"><?php echo $row['sname'];?></a></li>
                               
                            <?php } ?>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                            <h6 class="footer-widget__title mb-20">Naye Soch Naye Kadam</h6>
                            <ul class="footer-widget__list">
                                <li><a href="joinfull.php" class="hover-style-link">Join New Member</a></li>
                                 <li><a href="https://nayesochnayakadam.com/dhanmobile" class="hover-style-link">Login Old Member</a></li>
                                 <li><a href="aboutnsnk.php" class="hover-style-link">Introduction</a></li>
                                 <li><a href="terms.php" class="hover-style-link">Terms And Conditions</a></li>
                                 <li><a href="founder.php" class="hover-style-link">Founder Details</a></li>
                                 <li><a href="benifit.php" class="hover-style-link">How To Join</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                            <h6 class="footer-widget__title mb-20">Support</h6>
                            <ul class="footer-widget__list">
                                <li><a href="#" class="hover-style-link">Forum Support</a></li>
                                <li><a href="#" class="hover-style-link">Help & FAQ</a></li>
                                <li><a href="#" class="hover-style-link">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                            <div class="footer-widget__title section-space--mb_50"></div>
                            <ul class="footer-widget__list">
                                <li><a href="#" class="image_btn"><img class="img-fluid" src="assets/images/icons/aeroland-button-google-play.webp" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright-area section-space--pb_30">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center text-md-start">
                            <span class="copyright-text">&copy; 2021 Dhanganga Associate. <a href="https://nayesochnayakadam.com/">All Rights Reserved.</a></span>

                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <ul class="list ht-social-networks solid-rounded-icon">

                                <li class="item">
                                    <a href="https://twitter.com/" target="_blank" aria-label="Twitter" class="social-link hint--bounce hint--top hint--primary">
                                        <i class="fab fa-twitter link-icon"></i>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="https://facebook.com/" target="_blank" aria-label="Facebook" class="social-link hint--bounce hint--top hint--primary">
                                        <i class="fab fa-facebook-f link-icon"></i>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="https://instagram.com/" target="_blank" aria-label="Instagram" class="social-link hint--bounce hint--top hint--primary">
                                        <i class="fab fa-instagram link-icon"></i>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="https://linkedin.com/" target="_blank" aria-label="Linkedin" class="social-link hint--bounce hint--top hint--primary">
                                        <i class="fab fa-linkedin link-icon"></i>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="contaner">
           <b> <p>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#160;         तेरा
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#160;        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#160;   सपना &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#160;&#160;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
           
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#160;        
              सच     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#160;                       &#160;        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#160;           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#160;          हो। </p></b>

            </div>

        </div>
        <!--====================  End of footer area  ====================-->    </div>
    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->
    <!-- Start Toolbar -->
 
    <!-- End Toolbar -->

 <!--====================  mobile menu overlay ====================-->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <div class="mobile-menu-overlay__inner">
            <div class="mobile-menu-overlay__header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-8">
                            <!-- logo -->
                            <div class="logo">
                                <a href="index.php">
                                    <img src="assets/images/logo/logo-dark.webp" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-4">
                            <!-- mobile menu content -->
                            <div class="mobile-menu-content text-end">
                                <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-overlay__body">
                <nav class="offcanvas-navigation">
                    <ul>
                        <li class="has-children">
                            <a href="index.php">Home</a>                        
                        </li>
						 <li class="has-children">
                            <a href="netralay.php">Netralay</a>                    
                        </li> 
						<li class="has-children">
                            <a href="about-us.php">About</a>                    
                        </li> <li class="has-children">
                            <a href="Services.php">Services</a>                        
                        </li>
						 <li class="has-children">
                            <a href="appointment.php">Appointment</a>                    
                        </li> <li class="has-children">
                            <a href="Join.php">Join Us</a>                        
                        </li>
						 <li class="has-children">
                            <a href="news.php">News</a>                    
                        </li> 	
						<li class="has-children">
                            <a href="offer.php">Offer</a>                    
                        </li> 
						<li class="has-children">
                            <a href="contact-us.php">Contact</a>                    
                        </li>
                       
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!--====================  End of mobile menu overlay  ====================-->



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