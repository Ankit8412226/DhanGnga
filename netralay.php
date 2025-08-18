<?php
 include "conn.php";

if (isset($_POST['submit'])) {
    
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];
    $n5 = $_POST['n5'];
    $n6 = $_POST['n6'];
    $n7 = $_POST['n7'];
    $n8 = $_POST['n8'];
    $n9 = $_POST['n9'];
    $n10 = $_POST['n10'];
    $n11 = $_POST['n11'];
    $n12 = $_POST['n12'];
    $n13 = $_POST['n13'];
    $n14 = $_POST['n14'];
    $n15 = $_POST['n15'];
    $n16 = $_POST['n16'];
    $n17 = $_POST['n17'];
    $n18 = $_POST['n18'];
    $n19 = $_POST['n19'];
    $n20 = $_POST['n20'];
    $n21 = $_POST['n21'];
    $n22 = $_POST['n22'];
    $n23 = $_POST['n23'];
    

       $sql = "INSERT INTO bus(n1,n2,n3,n4,n5,n6,n7,n8,n9,n10,n11,n12,n13,n14,n15,n16,n17,n18,n19,n20,n21,n22,n23)
    values('$n1','$n2','$n3','$n4','$n5','$n6','$n7','$n8','$n9','$n10','$n11','$n12','$n13','$n14','$n15','$n16','$n17','$n18','$n19','$n20','$n21','$n22','$n23')";
    mysqli_query($connect, $sql) or die($sql);
    echo "<script>
window.location.href='netpayment.php?id=$n15';
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
     
            <!--============ Service Hero End ============-->
            <!--===========  feature-images-wrapper  Start =============-->
    
            <!--===========  feature-images-wrapper  End =============-->




            <!--===========  Our Company History Start =============-->

            <div class="our-company-history section-space--ptb_100">
                <div class="container-fluid">
                    <div class="grid-wrapper">
                        <div class="line line-1"></div>
                        <div class="line line-2"></div>
                        <div class="line line-3"></div>
                        <div class="line line-4"></div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="faq-custom-col">
                                <div class="section-title-wrap">
                                    <h6 class="section-sub-title mb-20">Netralay</h6>
                                    <h3 class="heading">Netralay <br> is a trustworthy organization of eyes and ears, which is giving its services for <span class="text-color-primary"> 20 years.</span> </h3>


                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="rv-video-section">

                                <div class="ht-banner-01 ">
                                    <img class="img-fluid border-radus-5 animation_images one wow fadeInDown" src="assets/images/netrale/net1.jpeg" alt="">
                                </div>

                                <div class="ht-banner-02">
                                    <img class="img-fluid border-radus-5 animation_images two wow fadeInDown" src="assets/images/netrale/net2.jpeg" alt="">
                                </div>
								<!--

<br>
<br>
<br>


                                <div class="ht-banner-03">
                                    <img class="img-fluid border-radus-5 animation_images three wow fadeInDown" src="assets/images/netrale/net4.jpeg" alt="">
                                </div>-->
<br>
<br>
<br>
                                <div class="ht-banner-04">
                                    <img class="img-fluid border-radus-5 animation_images four wow fadeInDown" src="assets/images/netrale/net4.jpeg" alt="">
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--===========  Our Company History Start  End =============-->


  <div class="gallery-section section-space--pt_100">
                <div class="container">

                                       <center> <img class="img-fluid" src="assets/images/netrale/net4.jpg" style="width:800px;height:500px;" alt=""></center>

                </div>
            </div>




            <!--===========  feature-icon-wrapper  Start =============-->
            <div class="feature-icon-wrapper bg-gray section-space--ptb_100">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-wrap text-center section-space--mb_40">
                                <h6 class="section-sub-title mb-20">Services</h6>
                                <h3 class="heading">we provide<br> <span class="text-color-primary"> Various  Services.</span></h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="feature-list__two">
                                <div class="row">
                                   		<?php 
$query = "SELECT * FROM netralay";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_assoc($result)) {
    
    ?>
								   <div class="col-lg-4 col-md-6 wow move-up">
                                        <div class="ht-box-icon style-02 single-svg-icon-box">
                                            <div class="icon-box-wrap">
                                                 <div class="icon">
                                                <img class="img-fluid" src="<?php echo $row['image'];?>" alt="">
                                                </div>
                                                <div class="content">
                                                    <h5 class="heading"><?php echo $row['nservices'];?> </h5>
                                                    <div class="text">We provide the most responsive and functional IT design for companies and businesses worldwide.
                                                    </div>
													
                                                    <div class="feature-btn">
                                                        <a href="#">
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
                                <a href="tel:+91 9955299280" class="ht-btn ht-btn-md">Talk to a consultant</a>
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

                                        <div class="text">Call and report your problem and book your appointment on the phone.</div>

                                        
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
                                                 <label>Reference.</label>
                                                <input  type="text" name="n23" placeholder="Reference Code">
                                            </div>
                                         </div>    
                                            <div class="contact-inner">
                                                <input name="n4" type="text" placeholder="Patient's Name *" required>
                                            </div>
                                               <div class="form-check">
                                           <label for="vehicle3">Male</label> 
                                                <input type="radio" name="n6" value="male" >
                                                <br>
                                             <label for="vehicle3">Female</label>
                                            <input type="radio" name="n6" value="female" >  
                                            </div>
                                                                                         <br>

                                            <div class="contact-inner">
                                                <input name="n5" type="number" placeholder="Age *" required>
                                            </div>
                                           
                                            
                                            <div class="contact-inner">
                                                <input name="n7" type="text" placeholder="Guardian Name*" required>
                                            </div>
                                            
                                            
                                            <div class="form-check">
                                           <label for="vehicle3">Father's Name</label> 
                                                <input type="radio" name="n8" value="Father" >
                                                <br>
                                             <label for="vehicle3">Husband's Name</label>
                                            <input type="radio" name="n8" value="Husband" >  
                                             <br>
                                             <label for="vehicle3">Son's Name</label>
                                            <input type="radio" name="n8" value="Son" >  
                                            </div>
                                       <br>
										<div class="contact-input">
                                            <div class="contact-inner">
                                                <input name="n16" type="text" placeholder="Attendant Name*" required>
                                            </div>
                                             <div class="contact-inner">
                                                <input name="n15" type="mobile" placeholder="Mobile *" required>
                                            </div>
                                            <div class="contact-inner">
                                                <input name="n9" type="text" placeholder="Full Address*" required>
                                            </div>
                                          
                                       </div>
									
<br>
<br>


<br>
<label><b>जाने का उद्देश्य</b></label>
<fieldset data-role="controlgroup">
<div class="form-check">
<input type="radio" name="n21" value="Eye"  class="form-check-input" id="exampleCheck1">
<label class="form-check-label"   for="exampleCheck1">केबल आँख जाँच </label>
</div>
<div class="form-check">
<input type="radio"  name="n21" value="ear" class="form-check-input" id="exampleCheck1">
<label class="form-check-label"  for="exampleCheck1">केबल कान जाँच </label>
</div>
<div class="form-check">
<input type="radio"  name="n21" value="both"  class="form-check-input" id="exampleCheck1">
<label class="form-check-label"  name="bmotive" value="both" for="exampleCheck1">आँख और कान जाँच</label>
</div>
<div class="form-check">
<input type="radio"  name="n21" value="motiyabind"  class="form-check-input" id="exampleCheck1">
<label class="form-check-label"  name="bmotive" value="motiyabind" for="exampleCheck1">मोतियाबिंद ऑपरेशन</label>
</div>
</fieldset>

<div class="col-lg-6">
<div class="form-group">
<input type="text" name="n22" class="form-control" placeholder="अन्य बाते का उल्लेख  करे  " >
</div>
</div>
<br>
                                        <div class="comment-submit-btn">
									<input name="submit" type="submit" class="btn" value="Book">
                                            <p class="form-messege-2"></p>
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