<?php
require 'connection.php';

$getclass = $_GET['class'];
$getname = $_GET['name'];
$getfather = $_GET['father'];

$query = "DELETE FROM student WHERE Class='$getclass' AND Name='$getname' AND Father='$getfather'";

if (mysqli_query($con,$query)==true) {
  echo "<script>alert('$getname from class $getclass Deleted Successfully!')</script>";
  echo "<script>window.open('students_detail.php','_self')</script>";
}
else {
  echo "<script>alert('Something went wrong!')</script>";
  echo "<script>window.open('students_detail.php','_self')</script>";
}

 ?>
