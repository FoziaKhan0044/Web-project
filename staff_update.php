<?php

session_start();

$sname = $_SESSION['sname'];
$sfather = $_SESSION['sfather'];

$job = $_POST['job'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$salary = $_POST['salary'];
$address = $_POST['address'];

include 'connection.php';

$sql = "UPDATE staff SET job='$job', email='$email', contact='$contact', salary='$salary', address='$address' WHERE name='$sname' AND father='$sfather'";

if ($con->query($sql)==true) {
    echo "<script>alert('Record Updated')</script>";
    echo "<script>window.open('staff_details.php','_self')</script>";
} else {
    echo "Error updating record: ";
}


 ?>
