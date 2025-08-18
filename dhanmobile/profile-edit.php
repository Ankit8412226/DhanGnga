<?php
include "conn.php";
 session_start();
 if(empty($_SESSION["user"]))
{
	header('location:splash.php');
}
else
{
?>
<?php

if (isset($_POST['submit'])) {
	
$name = $_POST['name'];
$edu = $_POST['edu'];
$caddress = $_POST['caddress'];
$paddress = $_POST['paddress'];
$pass = $_POST['pass'];
$no=$_GET['id'];



$c_image= $_FILES['image']['name'];
$c_image_temp=$_FILES['image']['tmp_name'];

if($c_image_temp != "")
{ 

    move_uploaded_file($c_image_temp , "../assets/images/photo/paid/$c_image");
    $c_update="update paidmember set mname = '$name', medu = '$edu' ,mpaddress='$paddress', mcaddress='$caddress', pass = '$pass', image= '$c_image'
     where pmid = '$no'" ;
}else
{
    $c_update="update paidmember set mname = '$name', medu = '$edu' ,mpaddress='$paddress', mcaddress='$caddress', pass = '$pass'
     where pmid = '$no'" ;
}

 mysqli_query($connect, $c_update) or die($sql);
	    header('location:profile.php');


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
            <h1 class="mt-3"><span class="font-weight-light ">Naye Soch</span>Naya Kadam</h1>
            <div class="laoderhorizontal">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- Loader ends -->
    
	 <?php
									$mobile=$_SESSION['user'];												
                                    $query = "SELECT * FROM paidmember WHERE mmobile = '$mobile'";
                                    $result = mysqli_query($connect, $query);
                                    $row = mysqli_fetch_assoc($result);
                                    ?>
	
    <div class="wrapper">
        <div class="header">
            <div class="row no-gutters">
                <div class="col-auto">
                    <a href="javascript:void(0)" onClick="javascript:history.go(-1)" class="btn  btn-link text-dark"><i class="material-icons">navigate_before</i></a>
                </div>
                <div class="col text-center"><img src="img/logo-header.png" alt="" class="header-logo"></div>
                <div class="col-auto">
                    <a href="profile.php" class="btn  btn-link text-dark"><i class="material-icons">account_circle</i></a>
                </div>
            </div>
        </div>
		 
		 <form method="post" action="" enctype="multipart/form-data">

        <div class="container">
            <div class="text-center">
                <div class="figure-profile shadow my-4">
                    <figure><img src="../assets/images/photo/paid/<?php echo $row['image']; ?>" alt=""></figure>
                    <div class="btn btn-dark text-white floating-btn">
                        <i class="material-icons">camera_alt</i>
                        <input name="image" type="file" class="float-file">
                    </div>
                </div>
            </div>

            <h6 class="subtitle">Basic Information</h6>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group float-label active">
                        <input type="text" name="name" class="form-control" required="" value="<?php echo $row['mname']; ?>">
                        <label class="form-control-label">Name</label>
                    </div>
                </div>
				 <div class="col-12 col-md-6">
                    <div class="form-group float-label active">
                        <input type="text" name="pass" class="form-control" required="" value="<?php echo $row['pass']; ?>">
                        <label class="form-control-label">Password</label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group float-label active">
                        <input type="text" name="edu" class="form-control" required="" value="<?php echo $row['medu']; ?>">
                        <label class="form-control-label">Education</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group float-label active mb-0">
                        <input type="tel"   class="form-control" required="" value="<?php echo $row['mmobile']; ?>"disabled>
                        <label class="form-control-label">Phone Number</label>
                    </div>
                </div>
            </div>

            <h6 class="subtitle">Address</h6>

            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group float-label active">
                        <input type="text" name="paddress" class="form-control" required="" value="<?php echo $row['mpaddress']; ?>">
                        <label class="form-control-label">Permanent Address</label>
                    </div>
                </div>
              
            </div>
            <div class="row">				
			   <div class="col-6">
                    <div class="form-group float-label active">
                        <input type="text" name="caddress" class="form-control" required="" value="<?php echo $row['mcaddress']; ?>">
                        <label class="form-control-label">Current Address</label>
                    </div>
                </div>
               
            </div>
        
					<input type="submit" name="submit"  class="btn btn-lg btn-default text-white btn-block btn-rounded shadow" value="Submit">
            <br>
        </div>
</form>
        <!-- footer-->
          <div class="footer">
            <div class="no-gutters">
                <div class="col-auto mx-auto">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-auto">
                            <a href="index.php" class="btn btn-link-default ">
                                <i class="material-icons">home</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="statistics.php" class="btn btn-link-default">
                                <i class="material-icons">insert_chart_outline</i>
                            </a>
                        </div>                      
                        <div class="col-auto">
                            <a href="transactions.php" class="btn btn-link-default ">
                                <i class="material-icons">widgets</i>
                            </a>
                        </div>
						  <div class="col-auto">
                            <a href="leave.php" class="btn btn-link-default ">
                                <i class="material-icons">account_balance_wallet</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="profile.php" class="btn btn-link-default active">
                                <i class="material-icons">account_circle</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer ends-->
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

    <!-- page level script -->
    <script>
        $(window).on('load', function() {});

    </script>

</body>


</html>
<?php } ?>