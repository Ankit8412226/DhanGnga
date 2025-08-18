<?php
session_start();
include "conn.php";

if(isset($_POST['submit'])){
	//$user_id = $_POST['username'];
	$Password = $_POST['password'];
	$identity = $_POST['mobile'];
    $ide = "( `email` = '$identity' OR `mobile` = '$identity')";
	 $query = "SELECT * from admin where `password`='$Password' AND ".$ide;
	$result = mysqli_query($connect,$query)or die( mysqli_error());
	$row = mysqli_fetch_assoc($result);

if($row){
				$_SESSION['admin'] = $row['mobile'];

		echo "<script>
		alert('Welcome');

    	window.location.href='index.php';
        </script>";
}else{ 
	echo "<script>
	alert('Somting Is Wrong');

    	window.location.href='login.php';

</script>"; 
}   

}
?>