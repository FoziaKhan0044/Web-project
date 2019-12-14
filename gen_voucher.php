<?php

  include 'connection.php';

  $name = $_POST['name'];
  $father = $_POST['father'];
  $class = $_POST['class'];
  $today_date = $_POST['today_date'];
  $month = $_POST['month'];
  $tuition_fee = $_POST['tuition_fee'];
  $dues = $_POST['dues'];
  $annual_fee = $_POST['annual_fee'];
  $paid = "Paid";

  $query = "SELECT * FROM student WHERE Name='$name' AND Father='$father' AND Class='$class'";

  $res = mysqli_query($con,$query);

  if (mysqli_num_rows($res)==0) {
      echo "<script>
      alert ('Student not exists in class $class');
      window.open('accounts.html','_self');
      </script>";
  }
  else {

  $insert = "INSERT INTO voucher (name,father,class,_date,month,tuition_fee,dues,annual_fee)
              VALUES ('$name','$father','$class','$today_date','$month','$tuition_fee','$dues','$annual_fee')";

  switch ($month) {
    case 'jan':
    case 'Jan':
    $update = "UPDATE student SET jan='$paid' Where Name='$name' AND Father='$father' AND Class='$class'";
    if ($con->query($update)==true) {
    //  echo "success";
    }
    else
      echo "failed";

    break;

    case 'feb':
    case 'Feb':
    $update = "UPDATE student SET feb='$paid' Where Name='$name' AND Father='$father' AND Class='$class'";
    if ($con->query($update)==true) {
      //echo "success";
    }
    else
      echo "failed";
    break;

    case 'Mar':
    case 'mar':
    $update = "UPDATE student SET mar='$paid' Where Name='$name' AND Father='$father' AND Class='$class'";
    if ($con->query($update)==true) {
      //echo "success";
    }
    else
      echo "failed";
    break;

    case 'apr':
    case 'Apr':
    $update = "UPDATE student SET apr='$paid' Where Name='$name' AND Father='$father' AND Class='$class'";
    if ($con->query($update)==true) {
    //  echo "success";
    }
    else
      echo "failed";
    break;

    case 'may':
    case 'May':
    $update = "UPDATE student SET may='$paid' Where Name='$name' AND Father='$father' AND Class='$class'";
    if ($con->query($update)==true) {
    //  echo "success";
    }
    else
      echo "failed";
    break;

    case 'jun':
    case 'Jun':
    $update = "UPDATE student SET jun='$paid' Where Name='$name' AND Father='$father' AND Class='$class'";
    if ($con->query($update)==true) {
      //echo "success";
    }
    else
      echo "failed";
    break;

    case 'jul':
    case 'Jul':
    $update = "UPDATE student SET jul='$paid' Where Name='$name' AND Father='$father' AND Class='$class'";
    if ($con->query($update)==true) {
      //echo "success";
    }
    else
      echo "failed";
    break;

    case 'aug':
    case 'Aug':
    $update = "UPDATE student SET aug='$paid' Where Name='$name' AND Father='$father' AND Class='$class'";
    if ($con->query($update)==true) {
      //echo "success";
    }
    else
      echo "failed";
    break;

    case 'sep':
    case 'Sep':
    $update = "UPDATE student SET sep='$paid' Where Name='$name' AND Father='$father' AND Class='$class'";
    if ($con->query($update)==true) {
    //  echo "success";
    }
    else
      echo "failed";
    break;

    case 'oct':
    case 'Oct':
    $update = "UPDATE student SET oct='$paid' Where Name='$name' AND Father='$father' AND Class='$class'";
    if ($con->query($update)==true) {
      //echo "success";
    }
    else
      echo "failed";
    break;

    case 'nov':
    case 'Nov':
    $update = "UPDATE student SET jun='$paid' Where Name='$name' AND Father='$father' AND Class='$class'";
    if ($con->query($update)==true) {
      //echo "success";
    }
    else
      echo "failed";
    break;

    case 'dec':
    case 'Dec':
    $update = "UPDATE student SET decr='$paid' Where Name='$name' AND Father='$father' AND Class='$class'";
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

  if($con->query($insert)==true) {
      echo "<script>alert('Voucher Generated!')</script>";
      echo "<script>window.open('accounts.html', '_self')</script>";
  }
  else
      echo "Record Insertion Failed!";

}

 ?>
