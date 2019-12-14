<?php

session_start();

$stdname = $_SESSION['uname'];
$stdfather = $_SESSION['ufather'];

$jan = $_POST['jan'];
$feb = $_POST['feb'];
$mar = $_POST['mar'];
$apr = $_POST['apr'];
$may = $_POST['may'];
$jun = $_POST['jun'];
$jul = $_POST['jul'];
$aug = $_POST['aug'];
$sep = $_POST['sep'];
$oct = $_POST['oct'];
$nov = $_POST['nov'];
$dec = $_POST['dec'];

include 'connection.php';

$sql = "UPDATE student SET jan='$jan', feb='$feb', mar='$mar', apr='$apr',may='$may', jun='$jun', jul='$jul', aug='$aug', sep='$sep', oct='$oct', nov='$nov', decr='$dec' WHERE Name='$stdname' AND Father='$stdfather'";

if ($con->query($sql)==true) {
    echo "<script>alert('Record Updated')</script>";
    echo "<script>window.open('class.php?classId=".$_GET['classId']."','_self')</script>";
} else {
    echo "Error updating record: ";
}


 ?>
