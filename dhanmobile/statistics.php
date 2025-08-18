<?php
require_once "function.php";
require_once "indirect_cheack.php";

include "conn.php";
 session_start();
 if(empty($_SESSION["user"]))
{
	header('location:login.php');
}
else
{
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
								
	 <?php
									$mobile=$_SESSION['user'];
                                    $query = "SELECT * FROM paidmember WHERE mmobile = '$mobile'";
                                    $result = mysqli_query($connect, $query);
                                    $row = mysqli_fetch_assoc($result);
                                    ?>
<body>
    <div class="row no-gutters vh-100 loader-screen">
        <div class="col align-self-center text-white text-center">
            <h1 class="mt-3"><span class="font-weight-light ">Naye Soch</span>Naya Kadam</h1>
            <p class="text-mute text-uppercase small"></p>
            <div class="laoderhorizontal">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <div class="sidebar">
        <div class="my-5">
            <div class="row">
                <div class="col-auto">
                    <figure class="avatar avatar-60 border-0"><img src="../assets/images/photo/paid/<?php echo $row['image'];?>" alt=""></figure>
                </div>
                <div class="col pl-0 align-self-center">
                    <h5 class="mb-1"><?php echo $row['mname'];?></h5>
                    <p class="text-mute small"><?php echo $row['mcaddress'];?></p>
                </div>
            </div><?php $mcode=$row['mcode'];?>
        </div>
        <div class="row">
            <div class="col">
                <div class="list-group main-menu">
                    <a href="index.php" class="list-group-item list-group-item-action active"><i class="material-icons icons-raised">home</i>Home</a>
                    <a href="notification.php" class="list-group-item list-group-item-action"><i class="material-icons icons-raised">notifications</i>Notification <span class="badge badge-dark text-white"></span></a>
                    <a href="wallet.php" class="list-group-item list-group-item-action"><i class="material-icons icons-raised">find_in_page</i>History</a>
                    <a href="profile.php" class="list-group-item list-group-item-action"><i class="material-icons icons-raised">important_devices</i>Settings</a><a href="javascript:void(0)" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#colorscheme"><i class="material-icons icons-raised">color_lens</i>Color scheme</a>
                                        <a href="javascript:void(0)" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#help"><i class="material-icons icons-raised">directions_railway</i>Help</a>

                    <a href="login.php" class="list-group-item list-group-item-action"><i class="material-icons icons-raised bg-danger">power_settings_new</i>Logout</a>
                </div>
            </div>
        </div>
    </div>
    <a href="javascript:void(0)" class="closesidemenu"><i class="material-icons icons-raised bg-dark ">close</i></a>
    <div class="wrapper">
        <!-- header -->
        <div class="header">
            <div class="row no-gutters">
                <div class="col-auto">
                    <button class="btn  btn-link text-dark menu-btn"><i class="material-icons">menu</i><span class="new-notification"></span></button>
                </div>
                <div class="col text-center"><img src="img/khatac.png" alt="" class="header-logo"></div>
                <div class="col-auto">
                    <a href="notification.php" class="btn  btn-link text-dark position-relative"><i class="material-icons">notifications_none</i><span class="counts">9+</span></a>
                </div>
            </div>
        </div>
        <!-- header ends -->
 <?php
									$mobile=$_SESSION['user'];
									$query = "SELECT COUNT(code)mcode FROM `paidmember`  WHERE code='$mcode' ";
                                    $result = mysqli_query($connect, $query);
                                    $row = mysqli_fetch_assoc($result);
                                    ?>
        <div class="container">
            <div class="card shadow mt-4 h-200 overflow-hidden">
                <div class="card-body">
                    <h3 class="mb-0 font-weight-normal"></h3>
                    <p class="text-mute text-secondary"></p>

                </div>
                <div class="h-200 top-100">
                    <canvas id="linechart"></canvas>
                </div>
            </div>
        </div>

        <div class="container top-30">
            <div class="card mb-4 shadow">
                <div class="card-body bg-none py-3">
               <center> <h4>Total Direct Reference Members:- <?php echo $row['mcode'];?></h4></center>
               <center> <h4>Total Indirect Reference Members:- <?php
                            									$mobile=$_SESSION['user'];
                            check_indirect($mobile); ?></h4></center>
                </div>
            </div>
        </div>
        <div class="container">
            <h6 class="subtitle">Expensive Categories</h6>
            <!--<div class="row">
                <div class="swiper-container icon-slide mb-4">
                    <div class="swiper-wrapper">
                        <a href="#" class="swiper-slide text-center">
                            <div class="avatar avatar-60 no-shadow border-0">
                                <div class="overlay gradient-success"></div>
                                <i class="material-icons text-success">account_balance</i>
                            </div>
                            <p class="small mt-2">Rent</p>
                        </a>
                        <a href="#" class="swiper-slide text-center">
                            <div class="avatar avatar-60 no-shadow border-0">
                                <div class="overlay gradient-warning"></div>
                                <i class="material-icons text-warning">videogame_asset</i>
                            </div>
                            <p class="small mt-2">Gaming</p>
                        </a>
                        <a href="#" class="swiper-slide text-center">
                            <div class="avatar avatar-60 no-shadow border-0">
                                <div class="overlay gradient-danger"></div>
                                <i class="material-icons text-danger">cake</i>
                            </div>
                            <p class="small mt-2">Parties</p>
                        </a>
                        <a href="#" class="swiper-slide text-center">
                            <div class="avatar avatar-60 no-shadow border-0">
                                <div class="overlay gradient-info"></div>
                                <i class="material-icons text-info">local_florist</i>
                            </div>
                            <p class="small mt-2">Parties</p>
                        </a>
                        <a href="#" class="swiper-slide text-center">
                            <div class="avatar avatar-60 no-shadow border-0">
                                <div class="overlay gradient-primary"></div>
                                <i class="material-icons text-primary">camera</i>
                            </div>
                            <p class="small mt-2">Videos</p>
                        </a>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>-->
     
               <div class="card shadow border-0 mb-3">
                <div class="card-body">
                    <div class="row">
                       <h4>My Members List</h4>
                        <div class="col">
                            <p class="text-mute small text-secondary "><b><?php
                            									$mobile=$_SESSION['user'];

                            check_user($mobile); ?></b></p>
                        </div>
                        <div class="col-auto">
                            <h5 class="font-weight-normal "></h5>
                        </div>
                    </div>
                    <div class="progress h-4">
                        <div class="progress-bar bg-success" role="progressbar" style="width:35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                </div>
            </div>

           
        </div>
       
        <!-- Start-->
      
      <div class="container">

       <?php 
       $n=0;
$query = "SELECT * FROM paidmember where code='$code'";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_assoc($result)) {
       $n++; ?>
               <div class="card shadow border-0 mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <p class="text-mute small text-secondary "><b><?php echo $n;?> <?php echo $row['mname'];?></b></p>
                        </div>
                     
                        <div class="col-auto">
                            <h5 class="font-weight-normal "><?php echo $row['verify'];?></h5>
                        </div>
                    </div>
                    <div class="progress h-4">
                        <div class="progress-bar bg-success" role="progressbar" style="width:35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                </div>
            </div>
			<?php } ?>
        </div>
        <!-- Stop-->

        </div>
      <!-- Help start -->
    <div class="modal fade " id="help" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content ">
                <div class="modal-header theme-header border-0">
                    <h6 class="">Help</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center pt-0">
                    <p class="text-mute"><b>Contact 24*7</b></p>
                    <div class="form-group mt-4">
                    </div>
                    <p class="text-mute"> Email:-nayesochnayakadam@gmail.com </p>
                    <p class="text-mute"> Phone:(+91) 7279078783</p>

                </div>
         
            </div>
        </div>
    </div>
    <!-- HElp ends -->
        <!-- footer-->
        <div class="footer">
            <div class="no-gutters">
                <div class="col-auto mx-auto">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-auto">
                            <a href="index.php" class="btn btn-link-default">
                                <i class="material-icons">home</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="statistics.php" class="btn btn-link-default active">
                                <i class="material-icons">insert_chart_outline</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="wallet.php" class="btn btn-link-default">
                                <i class="material-icons">account_balance_wallet</i>
                            </a>
                        </div>
                                              <!-- <div class="col-auto">
                            <a href="transactions.php" class="btn btn-link-default ">
                                <i class="material-icons">widgets</i>
                            </a>
                        </div>-->
                        <div class="col-auto">
                            <a href="profile.php" class="btn btn-link-default">
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

    <!-- chart js -->
    <script src="vendor/chartjs/Chart.min.js"></script>
    <script src="vendor/chartjs/utils.js"></script>

    <!-- template custom js -->
    <script src="js/main.js"></script>
    
    <!-- page level custom js -->
    <script src="js/statistics.js"></script>

    <!-- page level script -->
    <script></script>

</body>


</html>
<?php } ?>