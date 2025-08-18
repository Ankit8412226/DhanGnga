<?php
include "conn.php";
$result = mysqli_query($connect , "SELECT * FROM type where sn = Criminal");
?>
<option value="">Select Sub Category Type</option>
<?php
while ($row = mysqli_fetch_array($result)) {
    ?>
    <option value="<?php echo $row["sn"]; ?>"><?php echo $row["sn"]; ?></option>
    <?php
}
?>