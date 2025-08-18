<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databasename = "nayesoch";
$connect = mysqli_connect($hostname, $username, $password,$databasename) or die("Could not connect database");
$connect->set_charset("utf8");
?>
