<?php

require 'connection.php';

$acc_name = $_POST['username'];
$acc_password = $_POST['password'];

$mysql = "SELECT * FROM accountant WHERE username='$acc_name' AND password='$acc_password'";
$result = mysqli_query($con,$mysql);
if (mysqli_num_rows($result)>=1) {
    echo "<script>window.open('accounts.html', '_self')</script>";
}
else{
    echo "<script>window.open('acc_auth.html','_self')</script>";
}
 ?>
