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
<?php include"header.php"?>
<?php include"nav.php"?>

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


<div class="rules-area ptb-100">
<div class="container">
<div class="top">
<h2>Rule-Regulation</h2>
<span>Please read this Privacy Policy carefully before using this website.</span>
</div>
<div class="inner">
<h3>Privacy Policy Consent</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic</p>
</div>
<div class="inner">
<h3>When Do We Collect Information</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
</div>
<div class="inner">
<h3>What We Use Your Personal Data For</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
<ul>
<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor commodo viverra</li>
<li>It is a long established fact that a reader will be distracted</li>
<li>Contrary to popular belief, Lorem Ipsum is not simply random text.. </li>
</ul>
</div>
<div class="inner">
<h3>How Do We Protect Information?</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
</div>
<div class="inner">
<h3>Password</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
</div>
<div class="inner">
<h3>How You Can Access, Update or Delete Your Personal Data</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
</div>
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