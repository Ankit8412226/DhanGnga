<?php
include "conn.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category_id = mysqli_real_escape_string($connect, $_POST['category_id']);
    $sub_category_id = mysqli_real_escape_string($connect, $_POST['sub_category_id']);
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $phone = mysqli_real_escape_string($connect, $_POST['phone']);

    $query = "INSERT INTO appointments (category_id, sub_category_id, name, email, phone) 
              VALUES ('$category_id', '$sub_category_id', '$name', '$email', '$phone')";

    if (mysqli_query($connect, $query)) {
        echo "<script>alert('Appointment booked successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($connect) . "'); window.history.back();</script>";
    }
}
?>
