<?php
include "conn.php";

if (isset($_POST['submit'])) {
    $mmobile = $_POST['mmobile'];

    // Check if the user is already registered
    $query = "SELECT * FROM paidmember WHERE mmobile = '$mmobile'";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
        // User is already registered, display message and exit script
        $message = "User with mobile number $mmobile is already registered!";
        echo "<script>alert('$message');</script>";
        exit();
    }

    // User is not registered, proceed with registration
    $mname = $_POST['mname'];
    $mfname = $_POST['mfname'];
    $mdob = $_POST['mdob'];
    $medu = $_POST['medu'];
    $mcaddress = $_POST['mcaddress'];
    $mpaddress = $_POST['mpaddress'];
    $mrname = $_POST['mrname'];
    $code = $_POST['code'];
    $pass = $_POST['pass'];
    $mrelation = $_POST['mrelation'];
    $mcomment = $_POST['mcomment'];
    $email = $_POST['email'];

    $c_image = $_FILES['image']['name'];
    $c_image_temp = $_FILES['image']['tmp_name'];
    move_uploaded_file($c_image_temp , "../assets/images/photo/paid/$c_image");

    if ($code == 0) {
        $code = 'Nill';
    } else {
        $code = $_POST['code'];
    }

    $mcode = $mmobile;
    $verify = 'Not Verified';
    $commition = 0;
    $image1 = '';

    $sql = "INSERT INTO paidmember(mname,mfname,mdob,medu,mcaddress,mpaddress,mrname,code,mcode,mrelation,mmobile,mcomment,image,pass,email,verify,commition,image1) values('$mname','$mfname','$mdob','$medu','$mcaddress','$mpaddress','$mfname','$code','$mcode','$mrelation','$mmobile','$mcomment','$c_image','$pass','$email','$verify','$commition','$image1')";
    mysqli_query($connect, $sql) or die($sql);

    // Display success message and redirect to desired page after registration
    $message = "Registration successful!";
    echo "<script>alert('$message');</script>";
    header('Location: pay1.php?id2=' . $mmobile);
    exit();
}




?> 
<!doctype html>
<html lang="en" class="deeppurple-theme">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="Maxartkiller">

    <title>Naye Soch Naya Kadam</title>

    <!-- Material design icons CSS -->
    <link rel="stylesheet" href="vendor/materializeicon/material-icons.css">

    <!-- Roboto fonts CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap-4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Swiper CSS -->
    <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Loader -->
    <div class="row no-gutters vh-100 loader-screen">
        <div class="col align-self-center text-white text-center">
            
            <h1 class="mt-3"><span class="font-weight-light ">Naye Soch</span>Naye Kadam</h1>
            <p class="text-mute text-uppercase small"></p>
            <div class="laoderhorizontal">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- Loader ends -->

    <div class="wrapper">
        <!-- header -->
        <!--<div class="header">
            <div class="row no-gutters">
                <div class="col-auto">
                    <a href="introduction.html" class="btn  btn-link text-dark"><i class="material-icons">chevron_left</i></a>
                </div>
                <div class="col text-center"></div>
                <div class="col-auto">
                </div>
            </div>
        </div>-->
        <!-- header ends -->

    <div class="row no-gutters login-row">
            <div class="col align-self-center px-3 text-center">
                <br>
                <img src="img/khatac.png" alt="logo" class="logo-small">
				<form class="contact-form"  action="" enctype="multipart/form-data" method="post">
                   <br><br>
                    <div class="form-group">
                        <input name="code" type="text" id="inputEmail" class="form-control form-control-lg text-center" placeholder="Referral Code/Mobile No." >
                    </div>
                    <div class="form-group">
                        <input name="mname" type="text" id="username" class="form-control form-control-lg text-center" placeholder="नाम  *" required autofocus>
                    </div>
                     <div class="form-group">
                        <input name="mmobile" type="number"  class="form-control form-control-lg text-center" placeholder="मोबाइल नंबर *" required>
                    </div>
                     <div class="form-group">
                        <input name="email" type="email"  class="form-control form-control-lg text-center" placeholder="Email *" required>
                    </div>
                    <div class="form-group">
                        <input  name="mfname" type="text" id="phone" class="form-control form-control-lg text-center" placeholder="पिता/पति का नाम * " required>
                    </div>
                    <div class="form-group">
                        <p>जन्म की तारीख </p>
                        <input name="mdob" type="date" id="inputEmail" class="form-control form-control-lg text-center" placeholder="जन्म की तारीख  *" required>
                    </div>
                    <div class="form-group">
                        <input name="medu" type="text" id="inputPassword" class="form-control form-control-lg text-center" placeholder="शिक्षा  *" required>
                    </div>
                    <div class="form-group">
                        <input name="mcaddress" type="text" id="confirmPassword" class="form-control form-control-lg text-center" placeholder="वर्तमान पता  *" required>
                    </div> 
					<div class="form-group">
                        <input name="mpaddress" type="text" id="username" class="form-control form-control-lg text-center" placeholder="स्थायी पता *" required >
                    </div>
                    <div class="form-group">
                        <input  name="mrname" type="text" id="phone" class="form-control form-control-lg text-center" placeholder="नामांकित व्यक्ति का नाम * " >
                    </div>
                   
                    <div class="form-group">
                        <input name="mrelation" type="text" id="inputPassword" class="form-control form-control-lg text-center" placeholder="संबंध" >
                    </div>
                   
                     <div class="form-group">
                        <input name="pass" type="text"  class="form-control form-control-lg text-center" placeholder="Password *" required>
                    </div>
					<div class="form-group">
					    <p>Photo</p>
                        <input name="image" type="file" id="inputPassword" class="form-control form-control-lg text-center">
                    </div>
                    <!--<div class="form-group">-->
                    <!--    <p>Document</p>-->
                    <!--    <input name="doc" type="file" id="confirmPassword" class="form-control form-control-lg text-center" >-->
                    <!--</div>-->

                    <p class="mt-4 d-block text-secondary">
                        <input type="checkbox" name="check" value="Boat" required>
                                         <a href="terms.php">Click & Read=>I Agree To Terms and Conditions.</a>
                    </p>
								<input class="btn btn-default btn-lg btn-rounded shadow btn-block" type="submit" name="submit" value="Submit">

                </form>
            </div>
        </div>

        <!-- login buttons -->
        <div class="row mx-0 bottom-button-container">
            <div class="col">

            </div>
        </div>
		                </form>               

        <!-- login buttons -->
    </div>


    <!-- color chooser menu start -->
    <div class="modal fade " id="colorscheme" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content ">
                <div class="modal-header theme-header border-0">
                    <h6 class="">Color Picker</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-0">
                    <div class="text-center theme-color">
                        <button class="m-1 btn red-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="red-theme"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn blue-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="blue-theme"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn yellow-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="yellow-theme"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn green-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="green-theme"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn pink-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="pink-theme"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn orange-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="orange-theme"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn purple-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="purple-theme"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn deeppurple-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="deeppurple-theme"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn lightblue-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="lightblue-theme"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn teal-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="teal-theme"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn lime-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="lime-theme"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn deeporange-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="deeporange-theme"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn gray-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="gray-theme"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn black-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="black-theme"><i class="material-icons w-50">color_lens_outline</i></button>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-6 text-left">
                        <div class="row">
                            <div class="col-auto text-right align-self-center"><i class="material-icons text-warning vm">wb_sunny</i></div>
                            <div class="col-auto text-center align-self-center px-0">
                                <div class="custom-control custom-switch float-right">
                                    <input type="checkbox" name="themelayout" class="custom-control-input" id="theme-dark">
                                    <label class="custom-control-label" for="theme-dark"></label>
                                </div>
                            </div>
                            <div class="col-auto text-left align-self-center"><i class="material-icons text-dark vm">brightness_2</i></div>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        <div class="row">
                            <div class="col-auto text-right align-self-center">LTR</div>
                            <div class="col-auto text-center align-self-center px-0">
                                <div class="custom-control custom-switch float-right">
                                    <input type="checkbox" name="rtllayout" class="custom-control-input" id="theme-rtl">
                                    <label class="custom-control-label" for="theme-rtl"></label>
                                </div>
                            </div>
                            <div class="col-auto text-left align-self-center">RTL</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- color chooser menu ends -->


    <!-- jquery, popper and bootstrap js -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="vendor/bootstrap-4.4.1/js/bootstrap.min.js"></script>

    <!-- swiper js -->
    <script src="vendor/swiper/js/swiper.min.js"></script>

    <!-- cookie js -->
    <script src="vendor/cookie/jquery.cookie.js"></script>

    <!-- template custom js -->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from maxartkiller.com/website/Fimobile/Fimobile-HTML/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Dec 2019 13:37:10 GMT -->
</html>
