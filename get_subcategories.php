<?php
include "conn.php"; // Your DB connection file

if(isset($_POST['category_id']) && !empty($_POST['category_id'])) {
    $category_id = $_POST['category_id'];

    $stmt = $connect->prepare("SELECT scid, scname FROM subcatogry WHERE scsid = ?");
    $stmt->bind_param("s", $category_id);
    $stmt->execute();
    $result = $stmt->get_result();

    $options = "<option value=''>Select Sub Category</option>";
    while($row = $result->fetch_assoc()) {
        $options .= '<option value="'.htmlspecialchars($row['scid']).'">'.htmlspecialchars($row['scname']).'</option>';
    }

    echo $options;
}
?>
