<?php
session_start();
include "conn.php";  
	if(isset($_POST['submit']))
    {   
        $name = $_POST['name'];
        $bio = $_POST['bio'];
        $position = $_POST['position']; 

        $filename = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];  
        $folder = "image/".$filename;

        $p="";
        if(move_uploaded_file($tempname,$folder)){ 
        $p=" image = '$folder', ";
        } 
        $query = " UPDATE nmember  SET  name = '$name', position = '$position', ".$p."  bio = '$bio' WHERE nmid = '$rest_id'" ; 
        mysqli_query($connect,$query) or die($query);
    
        echo "<script>
window.location.href='nsnkmember.php';
</script>"; 
	}
?> 
