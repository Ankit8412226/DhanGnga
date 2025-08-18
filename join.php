<?php
 include "conn.php";

if (isset($_POST['submit'])) {
    $mname = $_POST['mname'];
    $mfname = $_POST['mfname'];

    	$ss=$_POST['country'];
$query = "SELECT * FROM services  WHERE sid = '$ss'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
		$las=$row['sname'];

		$ab=$_POST['state'];

$query = "SELECT * FROM subcatogry  WHERE scid = '$ab'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
	$amain=$row['scname'];
    
    
    
    
    
    $mcaddress = $_POST['mcaddress'];
    $mpaddress = $_POST['city'];
    $mrname = $_POST['mrname'];
    $mrelation = $_POST['mrelation'];
    $mmobile = $_POST['mmobile'];
    $mcomment = $_POST['mcomment'];

	$filename = $_FILES['image1']['name'];
    $tempname = $_FILES['image1']['tmp_name']; 
    $folder = "assets/images/photo/".$filename; 
    move_uploaded_file($tempname,$folder);

	$filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name']; 
    $folder1 = "assets/images/photo/".$filename; 
    move_uploaded_file($tempname,$folder1);

    $sql = "INSERT INTO member(mname,mfname,mdob,medu,mcaddress,mpaddress,mrname,mrelation,mmobile,mcomment,image,image1) values('$mname','$mfname','$las','$amain','$mcaddress','$mpaddress','$mfname','$mrelation','$mmobile','$mcomment','$folder','$folder1')";
    mysqli_query($connect, $sql) or die($sql);
 echo "<script>
alert('Registration Successful');
window.location.href='card.php?id=$mmobile';
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
            <!--============ Appointment Hero Start ============-->
         <!--============ Contact Us Area Start =================-->
            <div class="contact-us-area appointment-contact-bg section-space--ptb_100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-title section-space--mb_50">
  <h3 class="mb-20">Membership Form</h3>
                                <p class="mb-20">One Time Membership Fee ₹ 1100/-</p>                               <!-- <p class="sub-title">Reach out to the world’s most reliable IT services.</p>-->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-form-wrap">

                                <form class="contact-form"  action="" enctype="multipart/form-data" method="post">
                                    <div class="contact-form__two">
                                        <div class="contact-input">
                                            <div class="contact-inner">
                                                <input name="mname" type="text" placeholder="नाम  *" required>
                                            </div>
                                            <div class="contact-inner">
                                                <input name="mfname" type="text" placeholder="पिता का नाम * " required>
                                            </div>

										
                                           
											<div class="contact-inner">
                                                <input name="mcaddress" type="text" placeholder="वर्तमान पता  *" required>
                                            </div>
                                          
                                            <div class="contact-inner">
                                        <input type="tel" id="phone" name="mmobile" pattern="[0-9]{10}" placeholder="मोबाइल नंबर " required >
                                            </div>
                                            <br>
                                           	  <p>Profile Photo</p>

											<div class="contact-inner">
                                                <input name="image" type="file" placeholder="Photo">
                                            </div>
                                            	  <p>Business Documents </p>

											<div class="contact-inner">
                                                <input name="image1" type="file" placeholder="Photo">
                                            </div>
											      <div class="contact-select">
                                            <div class="input-group mb-3">
                    <select class="form-select" id="country" name="country">
                        <option selected disabled>Select Services</option>
                        <?php $query = "SELECT * FROM services ";
										$result = mysqli_query($connect, $query);
										while ($row = mysqli_fetch_assoc($result)) {    ?>
                            <option value="<?php echo $row['sid']; ?>"> <?php echo $row['sname']; ?> </option>
										
										<?php } ?>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <select class="form-select" id="state" name='state'>
                        <option selected disabled>Select SubServices</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <select class="form-select" id="city" name="city">
                        <option selected disabled>Select Type</option>
                    </select>
                </div>
                                        </div>
										
                                        </div>
                                      <!--  <div class="contact-select">
                                            <div class="form-item contact-inner">
                                    <span class="inquiry">
                                        <select id="Visiting" name="Visiting">
                                            <option disabled selected>Select Department to email</option>
                                            <option value="Your inquiry about">Your inquiry about</option>
                                            <option value="General Information Request">General Information Request</option>
                                            <option value="Partner Relations">Partner Relations</option>
                                            <option value="Careers">Careers</option>
                                            <option value="Software Licencing">Software Licencing</option>
                                        </select>
                                    </span>
                                            </div>
                                        </div>-->
                                        <div class="contact-inner contact-message">
                                            <textarea name="mcomment" placeholder="Comment."></textarea>
                                        </div>
                                        <input type="checkbox" name="check" value="Boat" required>
                                         <label for="vehicle3" ><a href="termsn.php">I Agree To Terms and Conditions.</a></label>  
                                          <br>
                                                                                  <br>
                                        <div class="comment-submit-btn">
									<input name="submit" type="submit" class="btn" value="Next">
                                           
                                            <p class="form-messege-2"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-5 ms-auto">
                            <div class="contact-info-three text-left">
                                <h6 class="heading font-weight--reguler">Reach out now!</h6>
                                <h3 class="call-us"><a href="#">(+91) 7279078783</a></h3>
                               <!-- <div class="location-button mt-20">
                                    <a href="#" class="location-text-button"><span class="button-icon"></span> <span class="button-text">View on Google map</span></a>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div
            <!--============ Contact Us Area End =================-->
            <!--============ Appointment Hero End ============-->
         
           
            <!-- ============ Team Member Wrapper Start =============== -->
           
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
        </div>

      <?php include "footer.php"?>

    </div>
    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->

    <!-- End Toolbar -->

          <?php include "mobile.php"?>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"  crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                $('#category-dropdown').on('change', function() {
                    var category_id = this.value;
                    $.ajax({
                        url: "get-subca.php",
                        type: "POST",
                        data: {
                            category_id: category_id
                        },
                        cache: false,
                        success: function(result) {
                            $("#sub-category-dropdown").html(result);
                        }
                    });
                });
            });
        </script>
              <script>
    // County State

    $('#country').on('change', function() {
        var country_id = this.value;
        // console.log(country_id);
        $.ajax({
            url: 'state.php',
            type: "POST",
            data: {
                country_data: country_id
            },
            success: function(result) {
                $('#state').html(result);
                // console.log(result);
            }
        })
    });
    // state city
    $('#state').on('change', function() {
        var state_id = this.value;
        // console.log(country_id);
        $.ajax({
            url: 'city.php',
            type: "POST",
            data: {
                state_data: state_id
            },
            success: function(data) {
                $('#city').html(data);
                // console.log(data);
            }
        })
    });
</script>
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