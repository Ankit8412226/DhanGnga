<?php
include 'conn.php';
$country_id =   $_POST['country_data'];

$state = "SELECT * FROM subcatogry WHERE scsid = $country_id";

$state_qry = mysqli_query($connect, $state);
// $output="";
$output = '<option value="">Select Sub Cat</option>';
while ($state_row = mysqli_fetch_assoc($state_qry)) {
    $output .= '<option value="' . $state_row['scid'] . '">' . $state_row['scname'] . '</option>';
}
echo $output;
