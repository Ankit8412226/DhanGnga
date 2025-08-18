<?php
include 'conn.php';

$state_id =  $_POST['state_data'];

$city = "SELECT * FROM type WHERE scn = $state_id";
$city_qry = mysqli_query($connect, $city);


$output = '<option value="">Select Type</option>';
while ($city_row = mysqli_fetch_assoc($city_qry)) {
    $output .= '<option value="' . $city_row['t1'] . '">' . $city_row['t1'] . '</option>';
}
echo $output;
