<?php include"conn.php"?>
<!DOCTYPE html>
<html lang="zxx">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/meanmenu.css">

<link rel="stylesheet" href="assets/css/boxicons.min.css">

<link rel="stylesheet" href="assets/fonts/flaticon.css">

<link rel="stylesheet" href="assets/css/animate.min.css">

<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

<link rel="stylesheet" href="assets/css/nice-select.min.css">

<link rel="stylesheet" href="assets/css/odometer.min.css">

<link rel="stylesheet" href="assets/css/magnific-popup.min.css">

<link rel="stylesheet" href="assets/css/slick.min.css">
<link rel="stylesheet" href="assets/css/slick-theme.css">


<link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="assets/css/responsive.css">

<title>Netralay ! Bhagalpur</title>
<link rel="icon" type="image/png" href="assets/images/favicon.png">
</head>
<body>

<div class="loader">
<div class="d-table">
<div class="d-table-cell">
<div class="spinner">
<div class="double-bounce1"></div>
<div class="double-bounce2"></div>
</div>
</div>
</div>
</div>


<?php include "header.php"?>


<?php include "nav.php"?>


<div class="rules-area ptb-100">
<div class="container">
   
    
<div class="top">
<h2>Terms & Conditions</h2>
<span>Please read this Terms & Conditions carefully before using this website.</span>
</div>
   <?php
                                    $query = "SELECT * FROM nterm ";
                                    $result = mysqli_query($connect, $query);
                                    while ($row = mysqli_fetch_assoc($result)) {
									?> 

<div class="inner">
<h3><?php echo $row['nq']; ?></h3>
<p><?php echo $row['na']; ?></p>
</div>
<?php } ?>

</div>
</div>






<?php include "footer.php"?>




<div class="go-top">
<i class='bx bxs-up-arrow-alt'></i>
<i class='bx bxs-up-arrow-alt'></i>
</div>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/form-validator.min.js"></script>

<script src="assets/js/contact-form-script.js"></script>

<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<script src="assets/js/jquery.meanmenu.js"></script>
 
<script src="assets/js/wow.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/jquery.nice-select.min.js"></script>

<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>

<script src="assets/js/jquery.magnific-popup.min.js"></script>

<script src="assets/js/slick.min.js"></script>


<script src="assets/js/custom.js"></script>
</body>

</html>