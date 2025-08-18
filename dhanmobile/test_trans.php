<?php
require_once("conn.php");

function check_trsns(){
	global $connect;

$query = "SELECT * FROM `transaction` as t JOIN paidmember as p on p.mmobile=t.ORDERID WHERE STATUS='TXN_SUCCESS' ";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_assoc($result)) {
        echo ("<br>");
        echo ("<br>");
	echo $row['ORDERID'];
	        echo ("<br>");

    echo $row['mname'];
            echo ("<br>");

    echo $row['TXNAMOUNT'];
            echo ("<br>");

 echo $row['code'];

        echo ("<br>");
}
}
check_trsns();
        ?>