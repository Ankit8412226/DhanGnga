<?php
include "conn.php";
$category_id = $_POST["category_id"];
$result = mysqli_query($connect , "SELECT * FROM subcatogry where scsid = $category_id");
?>
<option value="">Select Sub Category</option>
<?php
while ($row = mysqli_fetch_array($result)) {
    ?>
    <option value="<?php echo $row["scid"]; ?>"><?php echo $row["scname"]; ?></option>
    <?php
}

?>