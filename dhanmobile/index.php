<?php
include "conn.php";

 error_reporting(0);
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
    <div class="row no-gutters vh-100 loader-screen">
        <div class="col align-self-center text-white text-center">
           <!-- <img src="img/logo.png" alt="logo">-->
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
	 <?php
									$mobile=$_SESSION['user'];												
                                    $query = "SELECT * FROM paidmember WHERE mmobile = '$mobile'";
                                    $result = mysqli_query($connect, $query);
                                    $row = mysqli_fetch_assoc($result);
                                    ?><?php $status=$row['verify'];?>
    <div class="sidebar">
        <div class="mt-4 mb-3">
            <div class="row">
                <div class="col-auto">
                    <figure class="avatar avatar-60 border-0"><img src="../assets/images/photo/paid/<?php echo $row['image'];?>" alt=""></figure>
                </div>
                <div class="col pl-0 align-self-center">
                    <h5 class="mb-1"><?php echo $row['mname']; ?></h5>
                    <p class="text-mute small"><?php echo $row['mcaddress']; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="list-group main-menu">
                    <a href="index.php" class="list-group-item list-group-item-action active"><i class="material-icons icons-raised">home</i>Home</a>
                    <a href="notification.php" class="list-group-item list-group-item-action"><i class="material-icons icons-raised">notifications</i>Notification <span class="badge badge-dark text-white"></span></a>
                    <a href="wallet.php" class="list-group-item list-group-item-action"><i class="material-icons icons-raised">find_in_page</i>History</a>
                    <!--<a href="controls.php" class="list-group-item list-group-item-action"><i class="material-icons icons-raised">help<span class="new-notification"></span></i>Help</a>-->
                    <a href="profile.php" class="list-group-item list-group-item-action"><i class="material-icons icons-raised">important_devices</i>Settings</a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#help"><i class="material-icons icons-raised">directions_railway</i>Help</a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#colorscheme"><i class="material-icons icons-raised">color_lens</i>Color scheme</a>

                    <a href="logout.php" class="list-group-item list-group-item-action"><i class="material-icons icons-raised bg-danger">power_settings_new</i>Logout</a>
                  
                </div>
            </div>
        </div>
    </div>
    <a href="javascript:void(0)" class="closesidemenu"><i class="material-icons icons-raised bg-dark ">close</i></a>
    <div class="wrapper homepage">
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

        <div class="container">
            <div class="card bg-template shadow mt-4 h-190">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto">
                            <figure class="avatar avatar-60"><img src="../assets/images/photo/paid/<?php echo $row['image'];?>" alt=""></figure>
                        </div>
                        <div class="col pl-0 align-self-center">
                            <h5 class="mb-1"><?php echo $row['mname']; ?></h5>
                            <p class="text-mute small"><?php echo $row['mcaddress']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
        <div class="container top-100">
            <div class="card mb-4 shadow">
                <div class="card-body border-bottom">
                    <div class="row">
                        <div class="col">
                            <h3 class="mb-0 font-weight-normal">Points 
                            <?php echo $row['commition']; ?>
                                    </h3>
                            <p class="text-mute">Total Credit</p>
                        </div>
                        <div class="col-auto">
                            <!--<button class="btn btn-default btn-rounded-54 shadow" data-toggle="modal" data-target="#help"><i class="material-icons">add</i></button>-->
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-none">
                    <div class="row">
                        <div class="col">
                            <center>
							<h6>Account Is  <?php echo $status;?></h6>
                            </center>
                        </div>
                    
                       
                    </div>
                </div>
            </div>
        </div>
      
        <div class="container">
            <div class="row">
                <div class="swiper-container icon-slide mb-4">
                    <div class="swiper-wrapper">
                        
                        <?php  if($status!='Verified'){?>
                           <a href="pay1.php?id2=<?php echo $row['mmobile']; ?>" class="swiper-slide text-center"  data-target="#paymodal">
                           
                            <div class="avatar avatar-60 no-shadow border-0">
                                <div class="overlay bg-template"></div>
                            <i class="fa fa-rupee"></i>
                            </div>
                            
                            <p class="small mt-2"> 
                           Pay</p>
                        </a>
                       <?php  } ?>
                        
                     

                        <a href="#" class="swiper-slide text-center" data-toggle="modal" data-target="#sendmoney">
                            <div class="avatar avatar-60 no-shadow border-0">
                                <div class="overlay bg-template"></div>
                                <i class="material-icons text-template">send</i>
                            </div>
                            <p class="small mt-2">Contact</p>
                        </a>
                        <a href="notification.php" class="swiper-slide text-center" >
                            <div class="avatar avatar-60 no-shadow border-0">
                                <div class="overlay bg-template"></div>
                                <i class="material-icons text-template">camera</i>
                            </div>
                            <p class="small mt-2">View</p>
                        </a>
                        <a href="wallet.php" class="swiper-slide text-center">
                            <div class="avatar avatar-60 no-shadow border-0">
                                <div class="overlay bg-template"></div>
                                <i class="material-icons text-template">assignment</i>
                            </div>
                            <p class="small mt-2">History</p>
                        </a>
                        <a href="#" class="swiper-slide text-center" data-toggle="modal" data-target="#help">
                            <div class="avatar avatar-60 no-shadow border-0">
                                <div class="overlay bg-template"></div>
                               
                                <i class="material-icons text-template">directions_railway</i>
                            </div>
                            <p class="small mt-2">Help</p>
                        </a>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <h6 class="subtitle">Book Any Legal Services <a href="allpayment.php" class="float-right small"></a></h6>

            <div class="row">
                <div class="container px-0">
                    <!-- Swiper -->
                    <div class="swiper-container offer-slide">
                        <div class="swiper-wrapper">
           
       
       						<div class="swiper-slide">
                                <div class="card shadow border-0 bg-template">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto pr-0">
                                                <img src="" alt="" class="mw-100">
                                            </div>
                                            <div class="col align-self-center">
                                                <h5 class="mb-2 font-weight-normal"  data-toggle="modal" data-target="#Criminal">Criminal</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

						
                            
                            
                            
                            	<div class="swiper-slide">
                                <div class="card shadow border-0 bg-template">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto pr-0">
                                                <img src="" alt="" class="mw-100">
                                            </div>
                                            <div class="col align-self-center">
                                                <h5 class="mb-2 font-weight-normal"  data-toggle="modal" data-target="#Civil">Civil</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
       
                       	

							<div class="swiper-slide">
                                <div class="card shadow border-0 bg-template">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto pr-0">
                                                <img src="" alt="" class="mw-100">
                                            </div>
                                            <div class="col align-self-center">
                                                <h5 class="mb-2 font-weight-normal"  data-toggle="modal" data-target="#Family"> Family Matter</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

						
                            
                            
                            
                            	<div class="swiper-slide">
                                <div class="card shadow border-0 bg-template">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto pr-0">
                                                <img src="" alt="" class="mw-100">
                                            </div>
                                            <div class="col align-self-center">
                                                <h5 class="mb-2 font-weight-normal"  data-toggle="modal" data-target="#Miscellaneous">Miscellaneous (विविध)</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


				<div class="swiper-slide">
                                <div class="card shadow border-0 bg-template">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto pr-0">
                                                <img src="" alt="" class="mw-100">
                                            </div>
                                            <div class="col align-self-center">
                                                <h5 class="mb-2 font-weight-normal"  data-toggle="modal" data-target="#Service">Service Matter</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

						
                            
                            
                            
                            	<div class="swiper-slide">
                                <div class="card shadow border-0 bg-template">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto pr-0">
                                                <img src="" alt="" class="mw-100">
                                            </div>
                                            <div class="col align-self-center">
                                                <h5 class="mb-2 font-weight-normal"  data-toggle="modal" data-target="#bcc"> BHAGALPUR CIVIL COURT ALL WORK</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
            
            	 <div class="container">
            <h6 class="subtitle">Founder Members</h6>
            <div class="row">
                <!-- Swiper -->
                <div class="swiper-container news-slide">
                    <div class="swiper-wrapper">
                       <?php 
$query = "SELECT * FROM nmember";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_assoc($result)) {
        ?>
                        <div class="swiper-slide">
                            <div class="card shadow-sm border-0 bg-dark text-white">
                                <figure class="background">
                                    <img src="../admin/<?php echo $row['image'];?>" alt="">
                                </figure>
                                <div class="card-body">
                                    <h5 class="small"><?php echo $row['name'];?></h5>
                                    <p class="text-mute small"><?php echo $row['position'];?></p>
                                </div>
                            </div>
                        </div>
                   <?php } ?>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
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
                            <a href="index.php" class="btn btn-link-default active">
                                <i class="material-icons">home</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="statistics.php" class="btn btn-link-default">
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

    <!-- notification -->
   <!-- <div class="notification bg-white shadow-sm border-primary">
        <div class="row">
            <div class="col-auto align-self-center pr-0">
                <i class="material-icons text-primary md-36">fullscreen</i>
            </div>
            <div class="col">
                <h6>Viewing in Phone?</h6>
                <p class="mb-0 text-secondary">Double tap to enter into fullscreen mode for each page.</p>
            </div>
            <div class="col-auto align-self-center pl-0">
                <button class="btn btn-link closenotification"><i class="material-icons text-secondary text-mute md-18 ">close</i></button>
            </div>
        </div>
    </div>-->
    <!-- notification ends -->

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
                     <a href="https://nayesochnayakadam.com/" class="swiper-slide text-center"><p class="text-mute">Go To Website:- nayesochnayakadam.com </p>
                    </a>
                    <p class="text-mute"> Email:-nayesochnayakadam@gmail.com </p>
                    <p class="text-mute"> Phone:(+91) 7279078783</p>

                </div>
         
            </div>
        </div>
    </div>
    <!-- HElp ends -->
    
    
    
    
    
    
    
    
 <div class="modal fade" id="sendmoney" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5>Naye Soch Naya Kadam</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-0">
                   

                    <div class="card shadow border-0 mb-3">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto pr-0">
                                  
                                </div>
                                <div class="col">
                                    <h6 class="font-weight-normal mb-1">प्रशासनिक कार्यालय </h6>
                                    <p class="text-mute small text-secondary">Naya Tola Teenpuliya,Ganeshpur,Bhagalpur, 812005</p>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <!--<div class="modal-footer border-0">-->
                <!--    <button type="button" class="btn btn-default btn-lg btn-rounded shadow btn-block" class="close" data-dismiss="modal">Next</button>-->
                <!--</div>-->
            </div>
        </div>
    </div>
    <!-- Modal -->


    <!-- Modal -->
    	<!-- Modal -->
	    <div class="modal fade" id="Civil" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <!--<div class="modal-header border-0">-->
                <!--    <h5>Dhanganga Associate Civil</h5>-->
                <!--    <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
                <!--        <span aria-hidden="true">&times;</span>-->
                <!--    </button>-->
                <!--</div>-->
                                
                    <?php 
$query = "SELECT * FROM type where scn=9";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="modal-body pt-0">
                    <div class="card shadow border-0 mb-3">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto pr-0">
                                  
                                </div>
                                <div class="col">
              
                       <a href="pricing.php?id=<?php echo $row['t1'];?>&id2=Civil" class="list-group-item list-group-item-action"><?php echo $row['t1'];?></a>
                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                               <?php } ?>

                <!--<div class="modal-footer border-0">-->
                <!--    <button type="button" class="btn btn-default btn-lg btn-rounded shadow btn-block" class="close" data-dismiss="modal">Next</button>-->
                <!--</div>-->
            </div>
        </div>
    </div>
    <!-- Modal -->   
       	<!-- Modal -->
	    <div class="modal fade" id="Criminal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <!--<div class="modal-header border-0">-->
                <!--    <h5>Dhanganga Associate Criminal</h5>-->
                <!--    <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
                <!--        <span aria-hidden="true">&times;</span>-->
                <!--    </button>-->
                <!--</div>-->
                    <?php 
$query = "SELECT * FROM type where scn=8";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="modal-body pt-0">
                    <div class="card shadow border-0 mb-3">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto pr-0">
                                  
                                </div>
                                <div class="col">
              
                       <a href="pricing.php?id=<?php echo $row['t1'];?>&id2=Criminal" class="list-group-item list-group-item-action"><?php echo $row['t1'];?></a>
                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                               <?php } ?>

                <!--<div class="modal-footer border-0">-->
                <!--    <button type="button" class="btn btn-default btn-lg btn-rounded shadow btn-block" class="close" data-dismiss="modal">Next</button>-->
                <!--</div>-->
            </div>
        </div>
    </div>
    <!-- Modal --> 
    
    	<!-- Modal -->
	    <div class="modal fade" id="Family" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
            
                                    
                     <?php 
$query = "SELECT * FROM type where scn=113";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="modal-body pt-0">
                    <div class="card shadow border-0 mb-3">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto pr-0">
                                  
                                </div>
                                <div class="col">
              
                       <a href="pricing.php?id=<?php echo $row['t1'];?>&id2=Family Matter" class="list-group-item list-group-item-action"><?php echo $row['t1'];?></a>
                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                               <?php } ?>
           
            </div>
        </div>
    </div>
    <!-- Modal --> 
    
    	<!-- Modal -->
	    <div class="modal fade" id="bcc" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
           
                                       <?php 
$query = "SELECT * FROM type where scn=115";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="modal-body pt-0">
                    <div class="card shadow border-0 mb-3">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto pr-0">
                                  
                                </div>
                                <div class="col">
              
                       <a href="pricing.php?id=<?php echo $row['t1'];?>&id2=Bhagalpur Civil Court All Work" class="list-group-item list-group-item-action"><?php echo $row['t1'];?></a>
                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                               <?php } ?>

            </div>
        </div>
    </div>
    <!-- Modal --> 
    	<!-- Modal -->
	    <div class="modal fade" id="Miscellaneous" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
           
                                       <?php 
$query = "SELECT * FROM type where scn=170";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="modal-body pt-0">
                    <div class="card shadow border-0 mb-3">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto pr-0">
                                  
                                </div>
                                <div class="col">
              
                       <a href="pricing.php?id=<?php echo $row['t1'];?>&id2=Miscellaneous (विविध)" class="list-group-item list-group-item-action"><?php echo $row['t1'];?></a>
                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                               <?php } ?>

            </div>
        </div>
    </div>
    
    
    
    
    
    	<!-- Modal -->
	    <div class="modal fade" id="Service" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
           
                                       <?php 
$query = "SELECT * FROM type where scn=171";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="modal-body pt-0">
                    <div class="card shadow border-0 mb-3">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto pr-0">
                                  
                                </div>
                                <div class="col">
              
                       <a href="pricing.php?id=<?php echo $row['t1'];?>&id2=Service Matter" class="list-group-item list-group-item-action"><?php echo $row['t1'];?></a>
                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                               <?php } ?>

            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    <div class="modal fade" id="bookmodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5>Pay</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-0">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline12" name="customRadioInline12" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline12">Flight</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline22" name="customRadioInline12" class="custom-control-input" checked>
                        <label class="custom-control-label" for="customRadioInline22">Train</label>
                    </div>
                    <h6 class="subtitle">Select Location</h6>
                    <div class="form-group mt-4">
                        <input type="text" class="form-control text-center" placeholder="Select start point" required="" autofocus="">
                    </div>
                    <div class="form-group mt-4">
                        <input type="text" class="form-control text-center" placeholder="Select end point" required="">
                    </div>
                    <h6 class="subtitle">Select Date</h6>
                    <div class="form-group mt-4">
                        <input type="date" class="form-control text-center" placeholder="Select end point" required="">
                    </div>
                    <h6 class="subtitle">number of passangers</h6>
                    <div class="form-group mt-4">
                        <select class="form-control  text-center">
                            <option>1</option>
                            <option selected>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                        </select>
                    </div>                    
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