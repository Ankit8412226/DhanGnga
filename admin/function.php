<?php
require_once("conn.php");

function check_user($mcode){
	global $connect;

    $query = "SELECT * FROM paidmember where code='$mcode'";
    $result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_assoc($result)) 
	{
	    echo $row['mname'];
	    $bb=$row['mmcode'];

        echo ("<br>");
	}

}



 ?>
