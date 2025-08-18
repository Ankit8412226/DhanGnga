<?php
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

    <title>Khata Credit</title>

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
            <h1 class="mt-3"><span class="font-weight-light ">Khata</span>Credit</h1>
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
    
    <!-- sidebar -->
	 <?php
                                  	$mobile=$_SESSION['user'];
                                    $query = "SELECT * FROM patner  WHERE p_mobile = '$mobile'";
                                    $result = mysqli_query($connect, $query);
                                    $row = mysqli_fetch_assoc($result);
                                    ?>
    <div class="sidebar">
        <div class="mt-4 mb-3">
            <div class="row">
                <div class="col-auto">
                    <figure class="avatar avatar-60 border-0"><img src="admin/<?php echo $row['image1']; ?>" alt=""></figure>
                </div>
                <div class="col pl-0 align-self-center">
                    <h5 class="mb-1"><?php echo $row['p_name']; ?></h5>
                    <p class="text-mute small"><?php echo $row['p_address']; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="list-group main-menu">
                    <a href="index.php" class="list-group-item list-group-item-action active"><i class="material-icons icons-raised">home</i>Home</a>
                    <a href="notification.php" class="list-group-item list-group-item-action"><i class="material-icons icons-raised">notifications</i>Notification <span class="badge badge-dark text-white"></span></a>
                    <a href="wallet.php" class="list-group-item list-group-item-action"><i class="material-icons icons-raised">find_in_page</i>History</a>
                    <a href="profile.php" class="list-group-item list-group-item-action"><i class="material-icons icons-raised">important_devices</i>Settings</a><a href="javascript:void(0)" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#colorscheme"><i class="material-icons icons-raised">color_lens</i>Color scheme</a>
                    <a href="login.php" class="list-group-item list-group-item-action"><i class="material-icons icons-raised bg-danger">power_settings_new</i>Logout</a>
                </div>
            </div>
        </div>
    </div>
    <a href="javascript:void(0)" class="closesidemenu"><i class="material-icons icons-raised bg-dark ">close</i></a>
    <!-- sidebar ends -->

    <div class="wrapper walletpage">
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
								    $query = "SELECT sum(ano_total)total from another where ano_mobile = '$mobile'";
                                    $result = mysqli_query($connect, $query);
                                    $row = mysqli_fetch_assoc($result);
                                    ?><?php $i=$row['total'];?>
									 	 <?php
									$mobile=$_SESSION['user'];
								    $query = "SELECT sum(amount)amount from trans WHERE status='paid' and mobile = '$mobile'";
                                    $result = mysqli_query($connect, $query);
                                    $row = mysqli_fetch_assoc($result);
                                    ?>
        <div class="container">
            <div class="row mt-4">
                <div class="col">
			
                    <h3 class="mb-0 font-weight-normal">₹ <?php echo $i-$row['amount'];?></h3>
                    <p class="text-mute text-secondary">Total Credit</p>
                </div>
                <div class="col-auto">
                    <!--<button class="btn btn-default btn-rounded-54 shadow" data-toggle="modal" data-target="#addmoney"><i class="material-icons">add</i></button>-->
                </div>
            </div>
        </div>
		        <div class="swiper-container card-slide mb-2">
            <div class="swiper-wrapper">
					 <?php
                                  	$mobile=$_GET['id'];
                                  	$product=$_GET['id2'];
                                    $query = "SELECT * FROM another  WHERE ano_des='$product' and ano_mobile = '$mobile'";
                                    $result = mysqli_query($connect, $query);
                                    $row = mysqli_fetch_assoc($result);
                                    ?>
                <div class="swiper-slide pb-4">
                    <div class="container z-1 position-relative">
                        <div class="card bg-template shadow mt-4 h-200">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                      <center><h3><?php echo $row['ano_des'];?></h3></center>
                                    </div>
                                    <div class="col-12 mt-5">
                                      <center>  <h4 class="font-weight-normal">IMEI/SN No. <?php echo $row['ano_details'];?></h4></center><br>
                                    </div>
                                    <div class="col-12">
                                        <p><?php echo $row['ano_name'];?><span class="float-right"><?php echo $row['ano_date'];?></span></p> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container top-50 z-0">
                        <div class="card mb-4 shadow pt-5">
	
												  <?php
									                                  	$product=$_GET['id2'];
                                    $query = "SELECT * FROM trans  WHERE product = '$product'";
                                    $result = mysqli_query($connect, $query);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                            <div class="card-body border-bottom">
							   <div class="row">
                                    <div class="col">
                                        <p><?php echo $row['details'];?><br><small class="text-mute text-secondary"></small></p>
                                    </div>
                                    <div class="col text-right">
                                        <p><?php echo $row['amount'];?><br><small class="text-mute text-secondary"><?php echo $row['status'];?>: <?php echo $row['date'];?></small></p>
                                    </div>
                                </div>
							</div>
									<?php } ?>
                        
                            <div class="card-footer bg-none">
                                <button class="btn btn-default shadow  btn-rounded btn-block btn-lg ">Make Payment</button>
                            </div>
                        </div>
                    </div>
                </div>

               
				
				
            </div>
            <div class="swiper-pagination"></div>
        </div>
		
		 <?php
                                  	$mobile=$_SESSION['user'];
                                    $query = "SELECT * FROM patner  WHERE p_mobile = '$mobile'";
                                    $result = mysqli_query($connect, $query);
                                    $row = mysqli_fetch_assoc($result);
                                    ?>
		
        <div class="container">
            <div class="row">
                <div class="container px-0">
                    <!-- Swiper -->
                    <div class="swiper-container offer-slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card shadow border-0 bg-template">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto pr-0 ">
                                                <img src="img/graphics-carousel-scheme1.png" alt="" class="mw-100">
                                            </div>
                                            <div class="col align-self-center">
                                                <h5 class="mb-2 font-weight-normal">Gold loan scheme</h5>
                                                <p class="text-mute">Get all money at market rate of gold</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card shadow border-0 bg-template">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col pr-0 align-self-center">
                                                <h5 class="mb-2 font-weight-normal">Gold loan scheme</h5>
                                                <p class="text-mute">Get all money at market rate of gold</p>
                                            </div>
                                            <div class="col-auto ">
                                                <img src="img/graphics-carousel-scheme1.png" alt="" class="mw-100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
      


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
                            <a href="statistics.php" class="btn btn-link-default">
                                <i class="material-icons">insert_chart_outline</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="wallet.php" class="btn btn-link-default active">
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

    <!-- Modal -->
    <div class="modal fade" id="addmoney" tabindex="-1" role="dialog" aria-labelledby="addmoenylabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center pt-0">
                    <img src="img/infomarmation-graphics2.png" alt="logo" class="logo-small">
                    <div class="form-group mt-4">
                        <input type="text" class="form-control form-control-lg text-center" placeholder="Enter amount" required="" autofocus="">
                    </div>
                    <p class="text-mute">You will be redirected to payment gatway to procceed further. Enter amount in USD.</p>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-default btn-lg btn-rounded shadow btn-block" class="close" data-dismiss="modal">Next</button>
                </div>
            </div>
        </div>
    </div>
    
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
    <script></script>
</body>


</html>
<?php } ?>