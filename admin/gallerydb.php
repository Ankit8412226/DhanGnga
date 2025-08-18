<?php
include "conn.php";
?>
<?php

if (isset($_POST['submit'])) {

    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name']; 
    $folder = "image/gallery/".$filename; 
    move_uploaded_file($tempname,$folder);
    $sql = "INSERT INTO gallery(image) values('$folder')";
    mysqli_query($connect, $sql) or die($sql);
    header('location: gallery.php');
}

?> 