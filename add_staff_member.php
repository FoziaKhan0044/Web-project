<?php
require 'connection.php';

$name = $_POST['name'];
$job = $_POST['job'];
$father = $_POST['father'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$address = $_POST['address'];
$salary = $_POST['salary'];
$joined = $_POST['join'];

$sql = "INSERT INTO staff (name,job,father,contact,email,address,salary,joindate)
          VALUES ('$name','$job','$father','$contact','$email','$address','$salary','$joined')";

$sql1 = "INSERT INTO salary_Status (name) VALUES ('$name')";

  if ($con->query($sql)==true && $con->query($sql1)==true) {
    echo "<script>alert('New Staff Registered!')</script>";
    echo "<script>window.open('addstaff.html', '_self')</script>";
  }
  else
    echo "Record Insertion Failed!";

 ?>
