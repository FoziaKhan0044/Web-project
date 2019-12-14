<?php
require 'connection.php';

$getname = $_GET['name'];
$getfather = $_GET['father'];

$query = "DELETE FROM staff WHERE name='$getname' AND father='$getfather'";
$query1 = "DELETE FROM salary_status WHERE name='$getname'";

if (mysqli_query($con,$query)==true && mysqli_query($con,$query1)==true) {
  echo "<script>alert('$getname Deleted Successfully!')</script>";
  echo "<script>window.open('staff_details.php','_self')</script>";
}
else {
  echo "<script>alert('Something went wrong!')</script>";
  echo "<script>window.open('staff_details.php','_self')</script>";
}

?>
