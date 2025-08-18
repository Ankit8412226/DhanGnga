              
               <?php
                session_start();

                                     $id=$_SESSION["mobile"];
                                    $query = "SELECT * FROM bus WHERE n17 = '$id'";
                                    $result = mysqli_query($connect, $query);
                                    $row = mysqli_fetch_assoc($result);
                                    ?>
<div class="navbar-area sticky-top">

<div class="mobile-nav">
<a href="index.php" class="logo">
<img src="assets/images/netra.png" class="mobile-logo1" alt="Logo">
<img src="assets/images/netra.png" class="mobile-logo2" alt="Logo">
</a>
</div>
<br>
<br>
<div class="main-nav">
<div class="container">
<nav class="navbar navbar-expand-md navbar-light">
<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
<ul class="navbar-nav">
<li class="nav-item">
<a href="index.php" class="nav-link dropdown-toggle active">Home </a>
</li>

<li class="nav-item">
<a href="about.php" class="nav-link">About Us</a>
</li>
<li class="nav-item">
<a href="policy.php" class="nav-link">Booking</a>
</li>
<?php 
if($id==0)
echo'<li class="nav-item">
<a href="login.php" class="nav-link">Cheack Referral Points</a>
</li>';
else
{
}

?>



<li class="nav-item">
<a href="#" class="nav-link"><b>Your Referral Points</b><h4><?php echo $row['n23'];?></h4></a>
</li>
<!--<li class="nav-item">-->
<!--<a href="#" class="nav-link">Contact</a>-->
<!--</li>-->
</ul>
<div class="side-nav">



</div>
</div>
</nav>
</div>
</div>
</div>