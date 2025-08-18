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
    <!-- CSS=========================================== -->
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
            <!--============ Appointment Hero Start ============-->
            <div class="appointment-hero-wrapper appointment-hero-bg section-space--ptb_120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="appointment-hero-wrap wow move-up">
                                <div class="appointment-hero-text">
                                    <h6 class="text-white"> </h6>
                                    <h1 class="font-weight--reguler text-white mb-30"> Naye Soch Naya Kadam <span class="text-line">Excellent Services.</span></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 me-auto ms-auto col-md-6">
                            <div class="business-solution-form-wrap me-auto ms-auto">
                                <div class="contact-title text-center section-space--mb_40">
                                    <h5 class="mb-10">Book appointment</h5>
                                    <p class="text">It's out pleasure to have a chance to cooperate.</p>
                                </div>
                               <form class="contact-form" action="plan.php" method="POST">
    <div class="contact-form__two">
        <div class="contact-select">
            <div class="form-item contact-inner">
                <span class="inquiry">
                    <select class="form-control" name="id" id="category-dropdown" required>
                        <option value="">Select Category</option>
                        <?php
                        $result = mysqli_query($connect, "SELECT * FROM services");
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<option value="' . htmlspecialchars($row['sid']) . '">' . htmlspecialchars($row["sname"]) . '</option>';
                        }
                        ?>
                    </select>
                </span>
            </div>
        </div>
        <div class="contact-select">
            <div class="form-item contact-inner">
                <span class="inquiry">
                    <select class="form-control" name="id2" id="sub-category-dropdown" required>
                        <option value="">Select Sub Category</option>
                    </select>
                </span>
            </div>
        </div>
        <div class="comment-submit-btn text-center">
            <input type="submit" class="btn ht-btn ht-btn-md" value="Get Start">
            <p class="form-messege"></p>
        </div>
    </div>
</form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--============ Appointment Hero End ============-->
            <!--===========  feature-icon-wrapper  Start =============-->
            <div class="feature-icon-wrapper section-space--ptb_100">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-wrap text-center section-space--mb_40">
                              <!--  <h6 class="section-sub-title mb-20">Industries we Serve</h6>-->
                                <h3 class="heading">Services We Deliver<br> we provide <span class="text-color-primary"> Vrious Services.</span></h3>
                            </div>
                        </div>
                    </div>

                     <div class="row">
                        <div class="col-12">
                            <div class="feature-list__one">
                                <div class="row">
                                 <?php 
$query = "SELECT * FROM services";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_assoc($result)) {
    
    ?>
                                      <div class="col-lg-3 col-md-6">
                                        <!-- ht-box-icon Start -->
                                        <div class="ht-box-icon style-01 single-svg-icon-box">
                                            <div class="icon-box-wrap">
                                                <div class="icon">
                                                    <img src="<?php echo $row['simage'];?>" alt="">
                                                </div>
                                                <div class="content">
                                                    <h5 class="heading"><?php echo $row['sname'];?></h5>
                                                    <div class="text">We provide the most responsive and functional IT design for companies and businesses worldwide.
                                                    </div>
                                                    <div class="feature-btn">
                                                        <a href="subservices.php?id=<?php echo $row['sid'];?>">
                                                            <span class="button-text">Discover now</span>
                                                            <i class="far fa-long-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>
                                   <?php } ?>
                                </div>
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
            <!--===========  feature-icon-wrapper  End =============-->
            <!--======== Tabs Wrapper Start ======== -->
            <div class="tabs-wrapper bg-gray section-space--ptb_100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-wrapper text-center section-space--mb_60 wow move-up">
                                <h6 class="section-sub-title mb-20">discover our company</h6>
                                <h3 class="section-title">We’ve been thriving in<span class="text-color-primary"> 7 years</span> </h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 ht-tab-wrap">
                            <div class="text-center  ">
                                <ul class="nav justify-content-center ht-tab-menu ht-tab-menu_two" role="tablist">
                                    <li class="tab__item nav-item active">
                                        <a class="nav-link active" id="nav-tab1" data-bs-toggle="tab" href="#tab_list_06" role="tab" aria-selected="true">Our mission</a>
                                    </li>
                                    <li class="tab__item nav-item">
                                        <a class="nav-link" id="nav-tab2" data-bs-toggle="tab" href="#tab_list_07" role="tab" aria-selected="false">Our services</a>
                                    </li>
                                  
                                </ul>
                            </div>

                            <div class="tab-content ht-tab__content">

                                <div class="tab-pane fade show active" id="tab_list_06" role="tabpanel">
                                    <div class="tab-history-wrap section-space--mt_40">
                                        <div class="row">
                                            <div class="col-lg-6 ">
                                                <div class="tab-history-image video-popup mt-30">
                                                        <div class="single-popup-wrap">
                                                            <img class="img-fluid" src="assets/images/dhan/d005.jpeg" alt="">
                                                            <div class="ht-popup-video video-button">
                                                                <div class="video-mark">
                                                                    <div class="wave-pulse wave-pulse-1"></div>
                                                                    <div class="wave-pulse wave-pulse-2"></div>
                                                                </div>
                                                                <div class="video-button__two">
                                                                    <div class="video-play">
                                                                        <span class="video-play-icon"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 offset-lg-1 ">
                                                <div class="tab-content-inner  mt-30">
                                                    <div class="text mb-30">We are 24*7 available ! <br>Contact to require a detailed analysis and assessment of your plan.</div>

													<ul class="check-list section-space--mb_40">
                                                                            <?php 
$query = "SELECT * FROM services";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_assoc($result)) {
    
    ?>                                                          
													   <li class="list-item"><?php echo $row['sname'];?> </li>
                                                       <?php } ?>

                                                    </ul>
                                                    <div class="tab-button">
                                                        <a class="btn-text" href="appointment.php">
                                                            <span class="button-text">Let's get started <i class="far fa-long-arrow-right"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab_list_07" role="tabpanel">
                                    <div class="tab-history-wrap section-space--mt_60">
                                        <div class="row">
                           <?php 
$query = "SELECT * FROM services";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_assoc($result)) {
        ?>
                                            <div class="col-lg-4 col-md-6">
                                                <!-- ht-box-icon Start -->
                                                <a href="subservices.php?id=<?php echo $row['sid'];?>" class="ht-large-box-images style-04">
                                                    <div class="large-image-box">
                                                        <div class="box-image">
                                                            <div class="default-image">
                                                               <center> <img class="img-fluid" src="<?php echo $row['simage'];?>" alt=""></center>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="heading"><?php echo $row['sname'];?></h5>
                                                            <div class="text">At Mitech, we have a holistic and integrated approach towards core modernization to experience technological evolution.
                                                            </div>
                                                            <div class="box-images-arrow">
                                                                <span class="button-text">Discover now</span>
                                                                <i class="far fa-long-arrow-right"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!-- ht-box-icon End -->
                                            </div>
										<?php } ?>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--======== Tabs Wrapper End ======== -->

            <!-- ============ Team Member Wrapper Start =============== -->
            <div class="team-member-wrapper section-space--pt_100 section-space--pb_40">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="section-title section-space--mb_60">
                                <h3 class="heading">Our <span class="text-color-primary">experience </span> experts</h3>
                            <!--    <p class="text mt-30">Mitech specializes in technological and IT-related services such as product engineering, warranty management, building cloud, infrastructure, network, etc. </p>
-->
                                <div class="sider-title-button-box mt-30">
                                    <a href="join.php" class="ht-btn ht-btn-md">Join us now</a>
                                    <a href="about-us.php" class="btn-text font-weight--bold small-mt__20">View all team <i class="ml-1 button-icon far fa-long-arrow-right"></i></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-8 ht-team-member-style-one">
                            <div class="row">
                            <?php 
										 $query = "SELECT * FROM team ";
										$result = mysqli_query($connect, $query);
										while ($row = mysqli_fetch_assoc($result)) {
    
											?>
								<div class="col-lg-6 col-md-6 wow move-up">
                                    <div class="grid-item">
                                        <div class="ht-team-member">
                                            <div class="team-image">
                                            <img class="img-fluid" src="admin/<?php echo $row['timage'];?>" alt="" style="width:150px; height:150px; object-fit:cover;">
                                                <div class="social-networks">
                                                    <div class="inner">
                                                        <a target="_blank" href="#" class=" hint--bounce  hint--top hint--theme-two" aria-label="Facebook"><i class="fab fa-facebook"></i>
                                                        </a>
                                                        <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Twitter"><i class="fab fa-twitter"></i>
                                                        </a>
                                                        <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Instagram"><i class="fab fa-instagram"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="team-info ">
                                                <h5 class="name"><?php echo $row['tname'];?></h5>
                                                <div class="position"><?php echo $row['tdept'];?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============ Team Member Wrapper End =============== -->
            <!--========== Call to Action Area Start ============-->
            <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_two">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-7">
                            <div class="cta-content md-text-center">
                                <h3 class="heading">We run all kinds of services that vow your <span class="text-color-primary"> success</span></h3>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="cta-button-group--two text-center">
                                <a href="tel:+91 7279078783" class="btn btn--white btn-one"><span class="btn-icon me-2"><i class="far fa-comment-alt-dots"></i></span> Let's talk</a>
                                <a href="about-us.php" class="btn btn--secondary btn-two "><span class="btn-icon me-2"><i class="far fa-info-circle"></i></span> Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--========== Call to Action Area End ============-->

            <!--=========== fun fact Wrapper Start ==========-->
            <div class="fun-fact-wrapper bg-theme-default section-space--pb_30 section-space--pt_60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 wow move-up">
                            <div class="fun-fact--two text-center">
                                <div class="fun-fact__count counter">1200</div>
                                <h6 class="fun-fact__text">Happy clients</h6>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow move-up">
                            <div class="fun-fact--two text-center">
                                <div class="fun-fact__count counter">320</div>
                                <h6 class="fun-fact__text">Work</h6>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow move-up">
                            <div class="fun-fact--two text-center">
                                <div class="fun-fact__count counter">78</div>
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



       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
    $('#category-dropdown').change(function(){
        var category_id = $(this).val();
        if(category_id){
            $.ajax({
                type: 'POST',
                url: 'get_subcategories.php',
                data: {category_id: category_id},
                success: function(html){
                    $('#sub-category-dropdown').html(html);
                }
            });
        } else {
            $('#sub-category-dropdown').html('<option value="">Select Sub Category</option>');
        }
    });
});
</script>

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