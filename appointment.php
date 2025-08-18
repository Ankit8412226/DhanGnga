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
         
           
           
        </div>

      <?php include "footer.php"?>

    </div>
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
           <script src="https://code.jquery.com/jquery-3.5.1.min.js"  crossorigin="anonymous"></script>
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


<!-- Mirrored from template.hasthemes.com/mitech/index-appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Oct 2021 03:37:46 GMT -->
</html>