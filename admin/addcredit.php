<?php 
    
    include "conn.php";
    session_start();

     $id=$_POST['id']; 

    $com=$_POST['com']; 
    
$query = "UPDATE paidmember SET commition = '$com' WHERE pmid = '$id' ";
    $result=mysqli_query($connect,$query) or die(mysqli_error($connect));
    if($result>0)
    {
        echo "<script>
window.location.href='nsnk.php';
</script>";
        
    }
    
    ?>