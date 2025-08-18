<?php
include "conn.php";
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

    <title>DhanGanga Bhagalpur</title>

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

    <div class="wrapper pb-0">
        <!-- header -->
        <div class="header">
            <div class="row no-gutters">
                <div class="col-auto">
                    <a href="javascript:void(0)" onclick="window.history.go(-1); return false;" class="btn  btn-link text-dark"><i class="material-icons">navigate_before</i></a>
                </div>
                <div class="col text-center"><img src="img/khatac.png" alt="" class="header-logo"></div>
                <div class="col-auto">
                    <a href="profile.php" class="btn  btn-link text-dark"><i class="material-icons">account_circle</i></a>
                </div>
            </div>
        </div>
        <!-- header ends -->
<br>
<br>
<br>
<br> <?php
									$mobile=$_GET['id2'];												
                                    $query = "SELECT * FROM paidmember WHERE mmobile = '$mobile'";
                                    $result = mysqli_query($connect, $query);
                                    $row = mysqli_fetch_assoc($result);
                                    ?>
<br>
<br>
		<form method="POST" action="" id="paytm_forms" class="form-horizontal text-center">
        <div class="container">
            <!-- page content here -->
            <section class="jumbotron text-center mt-3 bg-white shadow-sm">
                <div class="container">
                    <h1 class="jumbotron-heading font-weight-normal">Payment<b></b></h1>
                    <p class="lead"><b>Rs. 1100/-<br><br>
					<?php echo $_GET['id2']; ?><br><br></b>
											
                    <p class="text-secondary text-mute small"></p>
                    <p>
                        
                         <input name="ser" type="hidden"  value="Nayesoch">                                           
                             <input name="subser" type="hidden"  value="Registrstion">                                           
                             <input name="man" type="hidden"  value="self">                                           

                             <input name="tid" type="hidden"  value="<?php echo(rand(1000,9999999)); ?>">                                           
                             <input name="mobile" type="hidden"  value="<?php echo $mobile;?>"> 
                             <input name="aamount" type="hidden"  value="1100">    
                        
                        
                        
					<input value="Submit" type="submit" name="submit" class="btn btn-default btn-rounded shadow my-2"	onclick="">
                    </p>
                </div>
            </section>
            </div>
        </div>
    </div>
	</form>
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
            /* swiper  */
            var swiper = new Swiper('.offer-slide', {
                slidesPerView: 'auto',
                spaceBetween: 0,
            });

        });

    </script>

</body>


</html>
