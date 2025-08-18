<?php
session_start();
unset ($_SESSION["mobile"]);
session_unset();
   $_SESSION['warning']="logout succesfully";

echo "<script>
window.location.href='login.php';
</script>"; 
?>