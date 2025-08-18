<?php
$hostname = "localhost";
$username = "nayesoch_karan";
$password = "g%?ZJ3-m8fMd";
$databasename = "nayesoch_main";
$connect = mysqli_connect($hostname, $username, $password,$databasename) or die("Could not connect database");  
$connect->set_charset("utf8");
?>