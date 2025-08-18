
<?php 
    
    include "conn.php";
    session_start();

  /* if(isset($_POST['delete']))
   {*/
    $id=$_GET['id']; 
    //$user_status = $_POST['user_status'];
//    print_r($_REQUEST);
$query = "DELETE FROM offer where nid='$id'";
    // $query="DELETE from user where id='$id'";
    $result=mysqli_query($connect,$query) or die(mysqli_error($connect));
    if($result>0)
    {
        // header("location:blocked_user.php");
        echo "<script>
alert('DELETED');
window.location.href='offeradd.php';
</script>";
        /* 
        echo ("<script language='javascript'>
            window.location.href='view_blog.php';
            </script>");*/
    } /*
}*/
