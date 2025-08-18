<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>
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

    <!--====================  header area ====================-->
  <?php include "header.php"?>
    <!--====================  End of header area  ====================-->


 <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <!--===========  feature-images-wrapper  Start =============-->
            <div class="feature-images-wrapper section-space--ptb_100">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section-title-wrap Start -->
                            <div class="section-title-wrap text-center">
                                <h6 class="section-sub-title mb-20">Payment</h6>
                                <h3 class="heading">Pay  <br> And book your <span class="text-color-primary">  service.</span></h3>
                            </div>
                            <!-- section-title-wrap Start -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="feature-images__one">
                                <div class="row">

                                   
                                <?php
							        $scid=$_POST['id'];
                                    $query = "SELECT * FROM subcatogry WHERE scid = '$scid'";
                                    $result = mysqli_query($connect, $query);
                                    $row = mysqli_fetch_assoc($result);
                                    ?>
									<?php $amount=$row['fee'];?>
									<?php
                                    $query = "SELECT * FROM enquiry ORDER BY eid DESC LIMIT 1";
                                    $result = mysqli_query($connect, $query);
                                    $row = mysqli_fetch_assoc($result);
                                    ?>
				<form method="POST" action="getwaye/index.php" id="paytm_forms" class="form-horizontal text-center">

									<div class="col-lg-6 col-md-8 wow move-up">
                                        <!-- ht-box-icon Start -->
                                        <div class="ht-box-images style-01">
                                            <div class="image-box-wrap">
                                                <div class="box-image">
                                                    <img class="img-fulid" src="assets/images/paynow.png" style="width:300px;height:200px;"  alt="">
                                                </div>
					<input title="TXN_AMOUNT" tabindex="10"	type="hidden" name="amout" value="<?php echo $amount;?>">
					<input 	type="hidden" name="mobile" value="<?php echo $row['emobile'];?>">
					<input 	type="hidden" name="oder" value="<?php echo rand(1000,1000000);?>">

						
                                                <div class="content">
                                                    <h5 class="heading"> <?php echo $row['ename'];?></h5>
                                                    <div class="text"> <?php echo $row['subdept'];?></div>
                                                    <div class="text"> Amout Is:-<?php echo $amount;?>
                                                    </div>
 <input type="image" src="assets/images/paynow1.png" value="submit" type="submit"	onclick="" style="width:300px;height:200px;"  >
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>
	</form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!--===========  feature-images-wrapper  End =============-->


            <!--===========  feature-images-wrapper  Start =============-->
    
            <!--===========  feature-images-wrapper  End =============-->


          




        </div>

        <!--====================  footer area ====================-->
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