<?php

$mysql_localhost = "localhost";
$mysql_user = "root";
$mysql_password = "root";
$db = 'school_db';

$con = new mysqli($mysql_localhost,$mysql_user,$mysql_password,$db);

if ($con->connect_error)
{
    die('cannot connect to the database!'.$connect_error);
}



?>
