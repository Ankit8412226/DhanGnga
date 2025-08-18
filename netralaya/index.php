<?php
 include "conn.php";
 session_start();

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
window.location.href='submit.php?id=$n4';
</script>";
}

?>  
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

<link rel="stylesheet" href="assets/css/datetimepicker.min.css">

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



<div class="appointment-area">
<div class="appointment-shape">
<img src="assets/images/appointment-shape1.png" alt="Shape">
<img src="assets/images/appointment-shape2.png" alt="Shape">
</div>
<div class="container-fluid p-0">
<div class="row m-0">
<div class="col-lg-6 p-0">
<div class="appointment-img">
<img src="assets/images/bus.jpg" alt="Appointment">
</div>
</div>
<div class="col-lg-6 p-0">
<div class="appointment-content">
<h3>Booking Form</h3>
<form action="" enctype="multipart/form-data" method="post">
<div class="row">

<div class="col-lg-6">
<div class="form-group">
<label>Reference.</label>
<input type="text" name="n23" class="form-control" placeholder="Reference Code" >
</div>
</div>

<div class="col-lg-6">
<div class="form-group">
<label>मरीज का नाम</label>
<input type="text" name="n4" class="form-control" placeholder="Patient's Name" required>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>आयु</label>
<input type="text" name="n5" class="form-control" placeholder="Age" required>
</div>
</div>
<div class="form-check">
<input type="radio" name="n6" value="Male" class="form-check-input" id="exampleCheck1">
<label class="form-check-label" for="exampleCheck1">Male</label>
</div>
<div class="form-check">
<input type="radio" name="n6" value="Female" class="form-check-input" id="exampleCheck1">
<label class="form-check-label" for="exampleCheck1">Female</label>
</div>
<br>
<br>
<br>


<div class="col-lg-6">
<div class="form-group">
<label>मरीज के पिता/पुत्र/पति का नाम</label>
<input type="text" name="n7" class="form-control" placeholder="---" required>
</div>
</div>

<div class="col-lg-6">
<div class="form-group">
<label>सम्बन्ध</label>
<input type="text" name="n8" class="form-control" placeholder="---" required>
</div>
</div>
<br>
<br>
<br>



<div class="col-lg-6">
<div class="form-group">
<label>पूरा पता</label>
<input type="text" name="n9" class="form-control" placeholder="Full Address" required>
</div>
</div>


<div class="col-lg-6">
<div class="form-group">
<label>संपर्क फ़ोन नंबर</label>
<input type="text" name="n15" class="form-control" placeholder="Phone" required>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>सहयोगी का नाम और सम्बन्ध</label>
<input type="text" name="n16" class="form-control" placeholder="Attendant Name & Relation" required>
</div>




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

<br>
<div class="col-lg-6">
<div class="form-group">
<input type="text" name="n22" class="form-control" placeholder="अन्य बाते का उल्लेख  करे  " >
</div>
</div>
<br>
<br>
<br>
<label><b>साथ लेना अनिवार्य है</b></label>
<label>1.मौसम के अनुसार चादर या कंबल और पहनने का कपड़ा।</label>
<label>2.थाली-2,ग्लास-2,कटोरा-2,चम्मच-1</label>
<label>3.नहाने का साबुन इत्यादि</label>
<label>4.यात्रा दौरान रास्ते का भोजन तथा सुबह का नाश्ता</label>
<label>5.नियम एवं शर्तों में उल्लेखित पर तिथि मुताबिक पर्याप्त रकम</label>

<br>
<br>
<label><b>नोट</b></label>
<label>महिला मरीज नाक/कान का जेवर खोल दे,पुरुष मरीज दाढ़ी बनवा ले|<br></label>
 <br>
 <input type="checkbox" name="check" value="Boat" required>
  <a href="term.php">I Agree To Terms and Conditions.</a>
<div class="col-lg-12">
<button type="submit" name="submit"  class="btn common-btn">
Book
<span class="one"></span>
<span class="two"></span>
</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

<div class="banner-area two">
<div class="banner-slider owl-theme owl-carousel">
<div class="banner-item banner-bg-two">
<div class="d-table">
<div class="d-table-cell">
<div class="container">
<div class="banner-content">
<span class="title">Critical Care Center</span>
<h1>High Innovation Professional Eye Care</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
<a class="common-btn" href="about.php">
<span class="one"></span>
<span class="two"></span>
More About Us
</a>
</div>
</div>
</div>
</div>
</div>
<div class="banner-item banner-bg-three">
<div class="d-table">
<div class="d-table-cell">
<div class="container">
<div class="banner-content">
<span class="title">Critical Care Center</span>
<h1>Eye Specialist Services That You Can Trust</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
<a class="common-btn" href="about.php">
<span class="one"></span>
<span class="two"></span>
More About Us
</a>
</div>
</div>
</div>
</div>
</div>
<div class="banner-item banner-bg-four">
<div class="d-table">
<div class="d-table-cell">
<div class="container">
<div class="banner-content">
<span class="title">Critical Care Center</span>
<h1>We Only Give Best Care To Your Eyes</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
<a class="common-btn" href="about.php">
<span class="one"></span>
<span class="two"></span>
More About Us
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="about-area two pt-100 pb-70">
<div class="about-shape">
<img src="assets/images/about/shape1.png" alt="Shape">
<img src="assets/images/about/shape2.png" alt="Shape">
</div>
<div class="container">
<div class="row align-items-end">
<div class="col-lg-6">
<div class="about-img">
<img src="assets/images/about/main2.jpg" alt="About">
</div>
</div>
<div class="col-lg-6">
<div class="about-content">
<div class="section-title">
<div class="top">
<span class="top-title">About Us</span>
<span class="sub-title">About Us</span>
</div>
<h2>We Are Caring For Your Eye Health Hospital</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum</p>
</div>
<div class="row">
<div class="col-sm-6 col-lg-6">
<ul>
<li>
<i class='bx bx-check'></i>
Conducts eye health checkups
</li>
<li>
<i class='bx bx-check'></i>
Best lasik treatment
</li>
<li>
<i class='bx bx-check'></i>
Treats minor illnesses
</li>
</ul>
</div>
<div class="col-sm-6 col-lg-6">
<ul>
<li>
<i class='bx bx-check'></i>
Special eye exam
</li>
<li>
<i class='bx bx-check'></i>
Contact lens service
</li>
<li>
<i class='bx bx-check'></i>
Special Retina exam
</li>
</ul>
</div>
</div>
<a class="common-btn" href="about.php">
<span class="one"></span>
<span class="two"></span>
More About Us
</a>
</div>
</div>
</div>
</div>
</div>




<section class="services-area two pt-100 pb-70">
<div class="container">
<div class="section-title">
<div class="top">
<span class="top-title">Services</span>
<span class="sub-title">Services</span>
</div>
<h2>Opnix Eye Care Services</h2>
</div>
<div class="row">
<div class="col-sm-6 col-lg-4">
<div class="services-item">
<div class="bottom">
<span></span>
<span></span>
<span></span>
<span></span>
<i class="flaticon-lasik icon"></i>
<h3>
<a href="service-details.php">Retina Repair</a>
</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
<a class="services-btn" href="service-details.php">
More Details
<i class='bx bx-plus'></i>
</a>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-4">
<div class="services-item">
<div class="bottom">
<span></span>
<span></span>
<span></span>
<span></span>
<i class="flaticon-witness icon"></i>
<h3>
<a href="service-details.php">Glaucoma & Cornea</a>
</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
<a class="services-btn" href="service-details.php">
More Details
<i class='bx bx-plus'></i>
</a>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-4">
<div class="services-item">
<div class="bottom">
<span></span>
<span></span>
<span></span>
<span></span>
<i class="flaticon-eye-1 icon"></i>
<h3>
<a href="service-details.php">Dry Eye Surgery</a>
</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
<a class="services-btn" href="service-details.php">
More Details
<i class='bx bx-plus'></i>
</a>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-4">
<div class="services-item">
<div class="bottom">
<span></span>
<span></span>
<span></span>
<span></span>
<i class="flaticon-eye icon"></i>
<h3>
<a href="service-details.php">Cornea Transplant</a>
</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
<a class="services-btn" href="service-details.php">
More Details
<i class='bx bx-plus'></i>
</a>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-4">
<div class="services-item">
<div class="bottom">
<span></span>
<span></span>
<span></span>
<span></span>
<i class="flaticon-botox icon"></i>
<h3>
<a href="service-details.php">Surgical Procedure</a>
</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
<a class="services-btn" href="service-details.php">
More Details
<i class='bx bx-plus'></i>
</a>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-4">
<div class="services-item">
<div class="bottom">
<span></span>
<span></span>
<span></span>
<span></span>
<i class="flaticon-laser-surgery icon"></i>
<h3>
<a href="service-details.php">Laser Surgery</a>
</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
<a class="services-btn" href="service-details.php">
More Details
<i class='bx bx-plus'></i>
</a>
</div>
</div>
</div>
</div>
</div>
</section>



<div class="counter-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-sm-6 col-lg-3">
<div class="counter-item">
<i class="flaticon-doctor"></i>
<h3>
<span class="odometer" data-count="1280">00</span>
<span class="target">+</span>
</h3>
<p>Specialized Doctors</p>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="counter-item">
<i class="flaticon-trophy"></i>
<h3>
<span class="odometer" data-count="1480">00</span>
<span class="target">+</span>
</h3>
<p>Winning Awards</p>
 </div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="counter-item">
<i class="flaticon-satisfied"></i>
<h3>
<span class="odometer" data-count="2080">00</span>
<span class="target">+</span>
</h3>
<p>Satisfied Patients</p>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="counter-item">
<i class="flaticon-heartbeat"></i>
<h3>
<span class="odometer" data-count="1102">00</span>
<span class="target">+</span>
</h3>
<p>Health Sections</p>
</div>
</div>
</div>
</div>
</div>



<section class="client-area ptb-100">
<div class="container">
<div class="section-title">
<div class="top">
<span class="top-title">Testimonials</span>
<span class="sub-title">Testimonials</span>
</div>
<h2>What Our Patients Say About Us</h2>
</div>
<div class="main">
<div class="slider-for">
<div class="client-item">
<i class="flaticon-straight-quotes icon"></i>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum ultricessuspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. tempor incididunt ut labore et dolore magn aliqua </p>
<ul>
<li>
<i class='bx bxs-star checked'></i>
</li>
<li>
<i class='bx bxs-star checked'></i>
</li>
<li>
<i class='bx bxs-star checked'></i>
</li>
<li>
<i class='bx bxs-star checked'></i>
</li>
<li>
<i class='bx bxs-star checked'></i>
</li>
</ul>
 </div>
<div class="client-item">
<i class="flaticon-straight-quotes icon"></i>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum ultricessuspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. tempor incididunt ut labore et dolore magn aliqua</p>
<ul>
<li>
<i class='bx bxs-star checked'></i>
</li>
<li>
<i class='bx bxs-star checked'></i>
</li>
<li>
<i class='bx bxs-star checked'></i>
</li>
<li>
<i class='bx bxs-star checked'></i>
</li>
<li>
<i class='bx bxs-star checked'></i>
</li>
</ul>
</div>
<div class="client-item">
<i class="flaticon-straight-quotes icon"></i>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum ultricessuspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. tempor incididunt ut labore et dolore magn aliqua </p>
<ul>
<li>
<i class='bx bxs-star checked'></i>
</li>
<li>
<i class='bx bxs-star checked'></i>
</li>
<li>
<i class='bx bxs-star checked'></i>
</li>
<li>
<i class='bx bxs-star checked'></i>
</li>
<li>
<i class='bx bxs-star checked'></i>
</li>
</ul>
</div>
<div class="client-item">
<i class="flaticon-straight-quotes icon"></i>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum ultricessuspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. tempor incididunt ut labore et dolore magn aliqua </p>
<ul>
<li>
<i class='bx bxs-star checked'></i>
</li>
<li>
<i class='bx bxs-star checked'></i>
</li>
<li>
<i class='bx bxs-star checked'></i>
</li>
<li>
<i class='bx bxs-star checked'></i>
</li>
<li>
<i class='bx bxs-star checked'></i>
</li>
</ul>
</div>
</div>
<div class="slider-nav">
<div class="top-img">
<img src="assets/images/testimonials1.jpg" alt="Thumb">
<h3>Lorisa Tiara</h3>
<span>Businessman</span>
</div>
<div class="top-img">
<img src="assets/images/testimonials2.jpg" alt="Thumb">
<h3>Tom Henry</h3>
<span>Manager</span>
</div>
<div class="top-img">
<img src="assets/images/testimonials3.jpg" alt="Thumb">
<h3>Jac Jacson</h3>
<span>Engineer</span>
</div>
<div class="top-img">
<img src="assets/images/testimonials4.jpg" alt="Thumb">
<h3>John Mac</h3>
<span>Businessman</span>
</div>
</div>
</div>
</div>
<div class="client-img">
<img src="assets/images/client-main1.png" alt="Client">
</div>
</section>


<section class="features-area pt-100 pb-70">
<div class="container">
<div class="section-title">
<div class="top">
<span class="top-title">Choose Us</span>
<span class="sub-title">Why Choose Us</span>
</div>
<h2>Providing Care For The Sickest</h2>
</div>
<div class="row">
<div class="col-sm-6 col-lg-3">
<div class="features-item">
<span>01</span>
<i class="flaticon-doctor"></i>
<h3>
<a href="service-details.php">Qualified Doctors</a>
</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
<a class="features-btn" href="service-details.php">View Details</a>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="features-item">
<span>02</span>
<i class="flaticon-view"></i>
<h3>
<a href="service-details.php">Eye Examination</a>
</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
<a class="features-btn" href="service-details.php">View Details</a>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="features-item">
<span>03</span>
<i class="flaticon-eye-1"></i>
<h3>
<a href="service-details.php">Contact Lenses</a>
</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
<a class="features-btn" href="service-details.php">View Details</a>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="features-item">
<span>04</span>
<i class="flaticon-laser"></i>
<h3>
<a href="service-details.php">Laser Eye Correction</a>
</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
<a class="features-btn" href="service-details.php">View Details</a>
</div>
</div>
</div>
</div>
</section>





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