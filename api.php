<?php
$servername = "localhost";
$username = "nayesoch_karan";
$password = "g%?ZJ3-m8fMd";
$dbname = "nayesoch_main";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO data (sender, sms)
VALUES ('John', 'Doe')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>