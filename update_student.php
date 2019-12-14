<?php

  $std = $_GET['name'];
  $father = $_GET['father'];

  session_start();

  $_SESSION['uname'] = $std;
  $_SESSION['ufather'] = $father;

  include 'connection.php';

  $sql = "SELECT * FROM student WHERE Name='$std' AND Father='$father'";

	$result = $con->query($sql);

	if (mysqli_num_rows($result)==0) {
            echo "<script>alert('No Record Found')</script>";
         }

   $row = $result->fetch_assoc();
   $name = $row['Name'];
   $fathr = $row['Father'];
   $jan = $row['jan'];
   $feb = $row['feb'];
   $mar = $row['mar'];
   $apr = $row['apr'];
   $may = $row['may'];
   $jun = $row['jun'];
   $jul = $row['jul'];
   $aug = $row['aug'];
   $sep = $row['sep'];
   $oct = $row['oct'];
   $nov = $row['nov'];
   $dec = $row['decr'];
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
          <h4 style="margin-left:30px">Name: <?php echo "$name"; ?></h4>
          </div>
          <div class="col">
        <h4 style="text-align: right; margin-right:50px">Father's Name: <?php echo "$father"; ?></h4>
          </div>
        </div>
      </div>
      </form>

      <div class="card-body">
      <form class="form-group"action="std_update.php?classId=<?php echo $_GET['classId'] ?>" method="post" style="color:#ffffff; text-align: center;">
        <div class="form-row">
          <div class="col">
            <label>Jan</label>
            <input class="form-control" type="text" name="jan" value="<?php echo "$jan"; ?>">
          </div>
          <div class="col">
            <label>Feb</label>
            <input class="form-control" type="text" name="feb" value="<?php echo "$feb"; ?>">
          </div>
          <div class="col">
            <label>Mar</label>
            <input class="form-control" type="text" name="mar" value="<?php echo "$mar"; ?>">
          </div>
          <div class="col">
            <label>Apr</label>
            <input class="form-control" type="text" name="apr" value="<?php echo "$apr"; ?>">
          </div>
          <div class="col">
            <label>May</label>
            <input class="form-control" type="text" name="may" value="<?php echo "$may"; ?>">
          </div>
          <div class="col">
            <label>Jun</label>
            <input class="form-control" type="text" name="jun" value="<?php echo "$jun"; ?>">
          </div>
          <div class="col">
            <label>Jul</label>
            <input class="form-control" type="text" name="jul" value="<?php echo "$jul"; ?>">
          </div>
          <div class="col">
            <label>Aug</label>
            <input class="form-control" type="text" name="aug" value="<?php echo "$aug"; ?>">
          </div>
          <div class="col">
            <label>Sep</label>
            <input class="form-control" type="text" name="sep" value="<?php echo "$sep"; ?>">
          </div>
          <div class="col">
            <label>Oct</label>
            <input class="form-control" type="text" name="oct" value="<?php echo "$oct"; ?>">
          </div>
          <div class="col">
            <label>Nov</label>
            <input class="form-control" type="text" name="nov" value="<?php echo "$nov"; ?>">
          </div>
          <div class="col">
            <label>Dec</label>
            <input class="form-control" type="text" name="dec" value="<?php echo "$dec"; ?>">
          </div>
        </div>
        <br>
        <input style="font-size: 20px; width: 200px; color: #ffffff" type="submit" class="btn btn-outline-primary btn-lg" value="Update">
      </form>
    </div>
</div>

</body>
</html>
