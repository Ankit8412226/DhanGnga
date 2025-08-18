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
<?php

if (isset($_POST['submit'])) {
    $sid = $_POST['order'];
    $pid = $_POST['mobile'];
    $aamount = $_POST['aamount'];
    $tid = $_POST['tid'];
    $ser = $_POST['ser'];
    $subser = $_POST['subser'];
    $man = $_POST['man'];

    $sql = "INSERT INTO nayesoch(sid,pid,amount,tid,ser,subser,man) values('$sid','$pid','$aamount','$tid','$ser','$subser','$man')";
    mysqli_query($connect, $sql) or die($sql);
 echo "<script>
window.location.href='getwaye/index.php';
</script>";}

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
    <!-- Loader ends -->
<?php
							        $sid=$_GET['id'];
                                    $query = "SELECT * FROM advc WHERE amain = '$sid'";
                                    $result = mysqli_query($connect, $query);
                                    $row = mysqli_fetch_assoc($result);
                                    ?><?php $code=$row['code'];?>
    <div class="wrapper">

        <!-- header -->
        <div class="header">
            <div class="row no-gutters">
                <div class="col-auto">
                    <a href="javascript:void(0)" onclick="window.history.go(-1); return false;" class="btn  btn-link text-dark"><i class="material-icons">navigate_before</i></a>
                </div>
                <div class="col text-center"><img src="img/logo-header.png" alt="" class="header-logo"></div>
                <div class="col-auto">
                    <a href="profile.php" class="btn  btn-link text-dark"><i class="material-icons">account_circle</i></a>
                </div>
            </div>
        </div>
        <!-- header ends -->
  <?php 
                
                if($code==0)
                {
                ?>
   <div class="container">
            <!-- page content here -->
            
            <h3 class="font-weight-light text-center mt-4"><br><span class="text-template"></span>  <span class="text-template"></span></h3>
              

      <?php 
									$id=$_GET['id'];
									$id2=$_GET['id2'];
									$query = "SELECT * FROM advc where amain='$id' and atype='$id2'";
                                    $result = mysqli_query($connect, $query);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?> 
                         <form class="contact-form"  action="" enctype="multipart/form-data" method="POST">

            <div class="card shadow border-0 mb-3">
                <div class="card-body">
                    <div class="row h-100">
                        <div class="col-auto pr-0">
                            <div class="avatar avatar-60 no-shadow border-0">
                                <div class="overlay gradient-info"></div>
                                    <img src="../admin/<?php echo $row['image'];?>" alt="">
                            </div>
                        </div>
                        <div class="col">
                            <h3><?php echo $row['aname'];?></h3>
							 <h4><?php echo $row['bio'];?></h4>

                            <ul class="list pl-4 my-3">
                                <li><b>₹ </b><?php echo $row['aamount'];?><small class="text-mute text-secondary">/-</small></li>
                                <li><?php echo $row['atime'];?></li>
                                      <?php  $otp=rand(10000,99999);?>
                            </ul>
                              <input name="ser" type="hidden"  value="<?php echo$_GET['id2'];?>">                                           
                             <input name="subser" type="hidden"  value="<?php echo $_GET['id'];?>">                                           
                             <input name="man" type="hidden"  value="<?php echo $row['aname'];?>">                                           

                             <input name="tid" type="hidden"  value="<?php echo $otp;?>">                                           
                             <input name="mobile" type="hidden"  value="<?php echo $_SESSION["user"];?>"> 
                             <input name="aamount" type="hidden"  value="<?php echo $row['aamount'];?>">    
                            <button type="submit" name="submit" value="submit" class="btn btn-rounded shadow btn-default">Book</button>
                        </div>
                    </div>
                </div>
            </div>
			</form>
			
			<?php } ?>
            <!-- page content ends -->
        </div>

            <?php }?>


<!---ADvice agar ho toh----->
  <?php 
                
                if($code==1)
                {
                ?>
   <div class="container">
            <!-- page content here -->
            
            <h3 class="font-weight-light text-center mt-4"><br><span class="text-template"></span>  <span class="text-template"></span></h3>
              

      <?php 
									$id=$_GET['id'];
									$id2=$_GET['id2'];
									$query = "SELECT * FROM advc where amain='$id' and atype='$id2'";
                                    $result = mysqli_query($connect, $query);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?> 
                         <form class="contact-form"  action="" enctype="multipart/form-data" method="POST">

            <div class="card shadow border-0 mb-3">
                <div class="card-body">
                    <div class="row h-100">
                        <div class="col-auto pr-0">
                            <div class="avatar avatar-60 no-shadow border-0">
                                <div class="overlay gradient-info"></div>
                                    <img src="../admin/<?php echo $row['image'];?>" alt="">
                            </div>
                        </div>
                        <div class="col">
                            <h3><?php echo $row['aname'];?></h3>
							 <h4><?php echo $row['bio'];?></h4>

                            <ul class="list pl-4 my-3">
                                <li><b>₹ </b><?php echo $row['aamount'];?><small class="text-mute text-secondary">/-</small></li>
                                <li><?php echo $row['atime'];?></li>
                                      <?php  $otp=rand(10000,99999);?>
                            </ul>
                            
                             <ul class="list pl-4 my-3">
                                <li><input type="radio" required id="aamount" name="aamount" value="<?php echo $row['aamount'];?>">Via Physically :-<?php echo $row['aamount'];?></li>
                                <li><input type="radio" required id="aamount" name="aamount" value="<?php echo round($row['aamount']*70/100);?>">Via Vedio  Call Discount 30%:-<?php echo round($row['aamount']*70/100);?></li>
                                <li><input type="radio" required id="aamount" name="aamount" value="<?php echo round($row['aamount']*60/100);?>">Via Phone Call Discount 40%:-<?php echo $row['aamount']*60/100;?></li>
                                <li><input type="radio" required id="aamount" name="aamount" value="<?php echo round($row['aamount']/2);?>">Via Mail Discount 50%:-<?php echo round($row['aamount']/2);?></li>
                                <li><input type="radio" required id="aamount" name="aamount" value="<?php echo round($row['aamount']*40/100);?>">Via Whatsapp Discount 60%:-<?php echo $row['aamount']*40/100;?></li>
                            </ul>
                             <input name="ser" type="hidden"  value="<?php echo$_GET['id2'];?>">                                           
                             <input name="subser" type="hidden"  value="<?php echo $_GET['id'];?>">                                           
                             <input name="man" type="hidden"  value="<?php echo $row['aname'];?>">   
                             <input name="tid" type="hidden"  value="<?php echo $otp;?>">                                           
                             <input name="mobile" type="hidden"  value="<?php echo $_SESSION["user"];?>"> 
                            <button type="submit" name="submit" value="submit" class="btn btn-rounded shadow btn-default">Book</button>
                        </div>
                    </div>
                </div>
            </div>
			</form>
			
			<?php } ?>
            <!-- page content ends -->
        </div>

            <?php }?>
<!--Close---->

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
        $(window).on('load', function() {

        });

    </script>

</body>


</html>
<?php } ?>
