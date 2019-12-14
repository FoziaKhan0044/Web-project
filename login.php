<?php

require 'connection.php';

$adminname = $_POST['adminname'];
$adminpassword = $_POST['adminpassword'];

$mysql = "SELECT * FROM admin WHERE username='$adminname' AND password='$adminpassword'";
$result = mysqli_query($con,$mysql);
if (mysqli_num_rows($result)>=1) {
    echo "<script>window.open('home.html', '_self')</script>";
}
else{
    echo "<script>window.open('index.html','_self')</script>";
}
 ?>
