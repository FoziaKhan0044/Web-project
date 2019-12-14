<?php

  $staff = $_GET['name'];
  $father = $_GET['father'];

  session_start();

  $_SESSION['sname'] = $staff;
  $_SESSION['sfather'] = $father;

  include 'connection.php';

  $sql = "SELECT * FROM staff WHERE name='$staff' AND father='$father'";

	$result = $con->query($sql);

	if (mysqli_num_rows($result)==0) {
            echo "<script>alert('No Record Found')</script>";
         }

   $row = $result->fetch_assoc();
   $name = $row['name'];
   $fathr = $row['father'];
   $job = $row['job'];
   $email = $row['email'];
   $contact = $row['contact'];
   $salary = $row['salary'];
   $address = $row['address'];
 ?>

<html lang="en">
<head>
  <title>Accounts Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body style="background:url('test.jpg') no-repeat; background-size: cover;">
<div class="container-fluid" style="width: 80%;margin-top: 60px;border:solid #3498db 2px; padding-top:20px">

    <div class="card-body" style="background-color: #3498db; color:#ffffff">
      <form action="std_update.php" method="post">
        <div class="form-row">
          <div class="col">
          <h4>Name: <?php echo "$name"; ?></h4>
          </div>
          <div class="col">
        <h4 style="text-align: right">Father's Name: <?php echo "$father"; ?></h4>
          </div>
        </div>
      </div>
      </form>

      <div class="card-body">
      <form class="form-group"action="staff_update.php" method="post" style="color:#ffffff; text-align: center;">
        <div class="form-row">
          <div class="col">
            <label>Job Title</label>
            <input class="form-control" style="text-align:center" type="text" name="job" value="<?php echo "$job"; ?>">
          </div>
          <div class="col">
            <label>Email Address</label>
            <input class="form-control" style="text-align:center" type="text" name="email" value="<?php echo "$email"; ?>">
          </div>
          <div class="col">
            <label>Contact</label>
            <input class="form-control" style="text-align:center" type="text" name="contact" value="<?php echo "$contact"; ?>">
          </div>
          <div class="col">
            <label>Salary</label>
            <input class="form-control" style="text-align:center" type="text" name="salary" value="<?php echo "$salary"; ?>">
          </div>
          <div class="col">
            <label>Address</label>
            <input class="form-control" style="text-align:center" type="text" name="address" value="<?php echo "$address"; ?>">
          </div>
        </div>
        <br>
        <input style="font-size: 20px; width: 200px; color: #ffffff" type="submit" class="btn btn-outline-primary btn-lg" value="Update">
      </form>
    </div>
</div>

</body>
</html>
