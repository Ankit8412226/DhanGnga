<?php
$hostname = "localhost";
$username = "nayesoc1_karan";
$password = "g%?ZJ3-m8fMd";
$databasename = "nayesoc1_main";
$connect = mysqli_connect($hostname, $username, $password,$databasename) or die("Could not connect database");  
$connect->set_charset("utf8");
?>