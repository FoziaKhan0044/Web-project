<?php
require 'connection.php';

$name = $_POST['name'];
$father = $_POST['father'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$grade = $_POST['grade'];
$admission_fee = $_POST['addfee'];
$tuition_fee = $_POST['tuition_fee'];
$joined = $_POST['join'];

$mysql = "INSERT INTO student (Name,father,contact,address,class,admission_fee,tuition_fee,joiningdate)
          VALUES ('$name','$father','$contact','$address','$grade','$admission_fee','$tuition_fee','$joined')";

  if ($con->query($mysql)==true) {
    echo "<script>alert('Student Registered!')</script>";
    echo "<script>window.open('home.html', '_self')</script>";
  }
  else
    echo "Record Insertion Failed!";

 ?>
