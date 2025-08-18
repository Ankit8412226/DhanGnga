<?php
require_once("conn.php");

function check_indirect($mobile){
    global $connect;

    $count = 0;
    $aa = array();
    $query = "SELECT * FROM paidmember WHERE code='$mobile'";
    $result = mysqli_query($connect, $query);
    
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $aa[] = $row['mcode'];
        }
        
        foreach ($aa as $value) {
            $query = "SELECT * FROM paidmember WHERE code='$value'";
            $result = mysqli_query($connect, $query);
            
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $count++;
                }
            }
        }
        
        echo "<b>".$count."</b>";
    } else {
        echo "No data found.";
    }
}
?>
