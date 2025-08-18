<?php
session_start();
unset ($_SESSION["user_id"]);
session_unset();
   $_SESSION['warning']="logout succesfully";

echo "<script>
window.location.href='index.php';
</script>"; 
?>