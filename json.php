 <?php
 
 $mysqli = new mysqli('localhost','nayesoch_karan','g%?ZJ3-m8fMd','nayesoch_main');
$myArray = array();
$result = $mysqli->query("SELECT * FROM services");
while($row = $result->fetch_assoc()) {
    $myArray[] = $row;
}
echo json_encode($myArray);
 ?>
 
 
