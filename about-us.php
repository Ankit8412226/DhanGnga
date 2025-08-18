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
        <div class="site-wrapper-reveal">
            <!--===========  feature-large-images-wrapper  Start =============-->
            <div class="feature-large-images-wrapper section-space--ptb_100">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section-title-wrap Start -->
                            <div class="section-title-wrap text-center section-space--mb_60">
                                <h6 class="section-sub-title mb-20">Naye Soch Naya Kadam</h6>
                                <h3 class="heading">Share the joy of achieving <span class="text-color-primary"> glorious   <br> moments</span> & climbed up <span class="text-color-primary">the top.</span></h3>
                            </div>
                            <!-- section-title-wrap Start -->
                        </div>
                    </div>
                    <div class="cybersecurity-about-box">
                        <div class="row">
                            <div class="col-lg-5 offset-lg-1">
                                <div class="modern-number-01 number-two">
                                    <h2 class="heading  me-5"><span class="mark-text">07</span>Years’ Experience </h2>
                                    <h5 class="heading mt-30">We’ve been triumphing all these <span class="text-color-primary"> 07 years. </span> Sacrifices are made up with success. </h5>
                                </div>
                            </div>
                            <div class="col-lg-5 ms-auto">
                                <div class="faq-wrapper">
                                    <div id="accordion">
                                         <?php 
										 $query = "SELECT * FROM about ";
										$result = mysqli_query($connect, $query);
										while ($row = mysqli_fetch_assoc($result)) {
    
											?>
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn-link" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <?php echo $row[bq];?>. <span> <i class="fas fa-chevron-down"></i>
                                        <i class="fas fa-chevron-up"></i> </span>
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                                <div class="card-body">
                                                    <p><?php echo $row[ba];?>. </p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                      <?php } ?>
                                       
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--===========  feature-large-images-wrapper  End =============-->

         
           <!-- ============ Team Member Wrapper Start =============== -->
                <div class="team-member-wrapper section-space--pt_100 section-space--pb_70 bg-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title section-space--mb_60 text-center">
                                    <h3 class="heading">We pride ourselves on having a team <br> of <span class="text-color-primary">highly-skilled</span> experts</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row ht-team-member-style-two">
                            					                    <?php 
$query = "SELECT * FROM team ";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_assoc($result)) {
        ?>
                            <div class="col-lg-4 col-md-6 wow move-up">
                                <div class="grid-item">
                                    <div class="ht-team-member">
                                        <div class="team-image">
                                            <img class="img-fluid" src="admin/<?php echo $row['timage'];?>" style="width:300px;height:400px;" alt="">
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
                                        <div class="team-info text-center">
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
                <!-- ============ Team Member Wrapper End =============== -->
            <!--===========  feature-icon-wrapper  End =============-->


           
           

        </div>

   <?php include "footer.php"?>

    </div>
    <!-- Start Toolbar -->
  
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


<!-- Mirrored from template.hasthemes.com/mitech/about-us-02.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Oct 2021 03:38:46 GMT -->
</html>