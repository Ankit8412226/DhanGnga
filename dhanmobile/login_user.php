<?php
session_start();
include "conn.php";

if(isset($_POST['submit'])){
	//$user_id = $_POST['username'];
	$password = $_POST['password'];
	$identity = $_POST['mobile'];
    $ide = "( `mmobile` = '$identity')";
	 $query = "SELECT * from paidmember where `pass`='$password' AND ".$ide;
	$result = mysqli_query($connect,$query)or die( mysqli_error());
	$row = mysqli_fetch_assoc($result);

if($row){
				$_SESSION['user'] = $row['mmobile'];

		echo "<script>
    	window.location.href='index.php';

        </script>";
}else{ 
	echo "<script>
    	window.location.href='login.php';
</script>"; 
}   

}
?>