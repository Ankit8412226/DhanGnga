<?php
 include "conn.php";

if (isset($_POST['submit'])) {
    $ename = $_POST['ename'];
    $emobile = $_POST['emobile'];
    $eemail = $_POST['eemail'];
    $edept = $_POST['edept'];

	//$filename = $_FILES['image']['name'];
 //   $tempname = $_FILES['image']['tmp_name']; 
   // $folder = "assets/images/photo/".$filename; 
   // move_uploaded_file($tempname,$folder);-->

    $sql = "INSERT INTO enquiry(ename,emobile,eemail,edept) values('$ename','$emobile','$eemail','$edept')";
    mysqli_query($connect, $sql) or die($sql);
 echo "<script>
alert('Thank You For Booking Appointment');
window.location.href='index.php';
</script>";
}

?> 