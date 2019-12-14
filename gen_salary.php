<?php
require 'connection.php';

$name = $_POST['name'];
$dom = $_POST['days_of_month'];
$present = $_POST['days_present'];
$month = $_POST['month'];

$query ="SELECT *FROM staff where name = '$name'";

$result = mysqli_query($con,$query);

if (mysqli_num_rows($result)==0) {
   echo "<script>alert('No Record Found')</script>";
}

while ($row = mysqli_fetch_array($result))
{
  $salary = $row['salary'];
}

$amount = ($salary*$present)/$dom;

$sql = "INSERT INTO salary (name,month_days,present_day,amount,month)
        VALUES ('$name','$dom','$present','$amount','$month')";

        switch ($month) {
          case 'jan':
          case 'Jan':
          $update = "UPDATE salary_status SET jan='$amount' Where name='$name'";
          if ($con->query($update)==true) {
          //  echo "success";
          }
          else
            echo "failed";

          break;

          case 'feb':
          case 'Feb':
          $update = "UPDATE salary_status SET feb='$amount' Where name='$name'";
          if ($con->query($update)==true) {
            //echo "success";
          }
          else
            echo "failed";
          break;

          case 'Mar':
          case 'mar':
          $update = "UPDATE salary_status SET mar='$amount' Where name='$name'";
          if ($con->query($update)==true) {
            //echo "success";
          }
          else
            echo "failed";
          break;

          case 'apr':
          case 'Apr':
          $update = "UPDATE salary_status SET apr='$amount' Where name='$name'";
          if ($con->query($update)==true) {
          //  echo "success";
          }
          else
            echo "failed";
          break;

          case 'may':
          case 'May':
          $update = "UPDATE salary_status SET may='$amount' Where name='$name'";
          if ($con->query($update)==true) {
          //  echo "success";
          }
          else
            echo "failed";
          break;

          case 'jun':
          case 'Jun':
          $update = "UPDATE salary_status SET jun='$amount' Where name='$name'";
          if ($con->query($update)==true) {
            //echo "success";
          }
          else
            echo "failed";
          break;

          case 'jul':
          case 'Jul':
          $update = "UPDATE salary_status SET jul='$amount' Where name='$name'";
          if ($con->query($update)==true) {
            //echo "success";
          }
          else
            echo "failed";
          break;

          case 'aug':
          case 'Aug':
          $update = "UPDATE salary_status SET aug='$amount' Where name='$name'";
          if ($con->query($update)==true) {
            //echo "success";
          }
          else
            echo "failed";
          break;

          case 'sep':
          case 'Sep':
          $update = "UPDATE salary_status SET sep='$amount' Where name='$name'";
          if ($con->query($update)==true) {
          //  echo "success";
          }
          else
            echo "failed";
          break;

          case 'oct':
          case 'Oct':
          $update = "UPDATE salary_status SET oct='$amount' Where name='$name'";
          if ($con->query($update)==true) {
            //echo "success";
          }
          else
            echo "failed";
          break;

          case 'nov':
          case 'Nov':
          $update = "UPDATE salary_status SET nov='$amount' Where name='$name'";
          if ($con->query($update)==true) {
            //echo "success";
          }
          else
            echo "failed";
          break;

          case 'dec':
          case 'Dec':
          $update = "UPDATE salary_status SET december='$amount' Where name='$name'";
          if ($con->query($update)==true) {
            //echo "success";
          }
          else
            echo "failed";
          break;

          default:
            echo "Wrong Month Input Format";
            break;
        }


if ($con->query($sql)==true) {
  echo "<script>alert('Salary Generated!')</script>";
  echo "<script>window.open('create_salary.html', '_self')</script>";
  }
else
 echo "Record Insertion Failed!";

 ?>
