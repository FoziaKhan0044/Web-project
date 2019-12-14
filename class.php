
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     <title>Students Details</title>
     <style>
     .fakeimg {
       height: 200px;
       background: #aaa;
     }
     </style>
   </head>
   <body>
     <div class="jumbotron text-center" style="background:url(jumbotron.jpg); height: 350px;margin-bottom:30px;" >
     </div>

     <div class="container-fluid">
       <div class="card">
         <div class="card-body" style="background-color: #3498db; color:#ffffff;">

       <div class="row">
         <div class="col-md-2">
           <a href="classify_students.html" class="btn btn-outline-dark" style="width:100px;">Back</a>
         </div>
         <div class="col-md-3">
           <h3>Student Details</h3>
         </div>
         <div class="col-md-1"></div>
         <div class="col-md-6">
           <form class="form-group" action="classwise_search.php" method="get">
             <div class="row">
               <div class="col-md-9">
                 <input type="text" name="search" class="form-control" placeholder="Search student by Name" required>
               </div>
               <div class="col-md-3">
                 <input type="submit" value="Search" class="btn btn-outline-dark" style="width:100px;">
               </div>
             </div>

           </form>

         </div>

       </div>

         </div>
         <div class="card-body"></div>

         <table class="table table-hover">
       <thead>
         <tr>
           <th scope="col">Name</th>
           <th scope="col">Father's Name</th>
           <th scope="col">Jan</th>
           <th scope="col">Feb</th>
           <th scope="col">Mar</th>
           <th scope="col">Apr</th>
           <th scope="col">May</th>
           <th scope="col">June</th>
           <th scope="col">July</th>
           <th scope="col">Aug</th>
           <th scope="col">Sep</th>
           <th scope="col">Oct</th>
           <th scope="col">Nov</th>
           <th scope="col">Dec</th>
         </tr>
       </thead>
       <tbody>
         <?php
         require 'connection.php';

         session_start();

         $_SESSION['target'] = $_GET['classId'];

         if (isset($_GET['classId'])) {

           $one = $_GET['classId'];

           $query = "SELECT * FROM student WHERE Class='$one' ORDER BY Name ASC";

           $result = mysqli_query($con,$query);

           if (mysqli_num_rows($result)==0) {
              echo "<script>alert('No Record Found')</script>";
           }

           while ($row = mysqli_fetch_array($result)) {
             $name = $row['Name'];
             $father = $row['Father'];
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

             echo "<tr>
               <td>$name</td>
               <td>$father</td>
               <td>$jan</td>
               <td>$feb</td>
               <td>$mar</td>
               <td>$apr</td>
               <td>$may</td>
               <td>$jun</td>
               <td>$jul</td>
               <td>$aug</td>
               <td>$sep</td>
               <td>$oct</td>
               <td>$nov</td>
               <td>$dec</td>
               <td><a href='update_student.php?classId=".$_GET['classId']."&name=".$name."&father=".$father."'>EDIT</a></td>
             </tr>";
           }
         }

        elseif (isset($_GET['classId'])) {

           $nursery = $_GET['classId'];
           $query = "SELECT * FROM student WHERE Class='$nursery' ORDER BY Name ASC";

           $result = mysqli_query($con,$query);

           if (mysqli_num_rows($result)==0) {
              echo "<script>alert('No Record Found')</script>";
           }

           while ($row = mysqli_fetch_array($result)) {
             $name = $row['Name'];
             $father = $row['Father'];
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

             echo "<tr>
               <td>$name</td>
               <td>$father</td>
               <td>$jan</td>
               <td>$feb</td>
               <td>$mar</td>
               <td>$apr</td>
               <td>$may</td>
               <td>$jun</td>
               <td>$jul</td>
               <td>$aug</td>
               <td>$sep</td>
               <td>$oct</td>
               <td>$nov</td>
               <td>$dec</td>
               <td><a href='update_student.php?classId=".$_GET['classId']."&name=".$name."&father=".$father."'>EDIT</a></td>
             </tr>";
           }
         }

        elseif (isset($_GET['classId'])) {

           $two = $_GET['classId'];
           $query = "SELECT * FROM student WHERE Class='$two' ORDER BY Name ASC";

           $result = mysqli_query($con,$query);

           if (mysqli_num_rows($result)==0) {
              echo "<script>alert('No Record Found')</script>";
           }

           while ($row = mysqli_fetch_array($result)) {
             $name = $row['Name'];
             $father = $row['Father'];
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

             echo "<tr>
               <td>$name</td>
               <td>$father</td>
               <td>$jan</td>
               <td>$feb</td>
               <td>$mar</td>
               <td>$apr</td>
               <td>$may</td>
               <td>$jun</td>
               <td>$jul</td>
               <td>$aug</td>
               <td>$sep</td>
               <td>$oct</td>
               <td>$nov</td>
               <td>$dec</td>
               <td><a href='update_student.php?classId=".$_GET['classId']."&name=".$name."&father=".$father."'>EDIT</a></td>
             </tr>";
           }
        }

        elseif (isset($_GET['classId'])) {

           $three = $_GET['classId'];
           $query = "SELECT * FROM student WHERE Class='$three' ORDER BY Name ASC";

           $result = mysqli_query($con,$query);

           if (mysqli_num_rows($result)==0) {
              echo "<script>alert('No Record Found')</script>";
           }

           while ($row = mysqli_fetch_array($result)) {
             $name = $row['Name'];
             $father = $row['Father'];
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

             echo "<tr>
               <td>$name</td>
               <td>$father</td>
               <td>$jan</td>
               <td>$feb</td>
               <td>$mar</td>
               <td>$apr</td>
               <td>$may</td>
               <td>$jun</td>
               <td>$jul</td>
               <td>$aug</td>
               <td>$sep</td>
               <td>$oct</td>
               <td>$nov</td>
               <td>$dec</td>
               <td><a href='update_student.php?classId=".$_GET['classId']."&name=".$name."&father=".$father."'>EDIT</a></td>
             </tr>";
           }
        }

        elseif (isset($_POST['classId'])) {

           $four = $_POST['classId'];
           $query = "SELECT * FROM student WHERE Class='$four' ORDER BY Name ASC";

           $result = mysqli_query($con,$query);

           if (mysqli_num_rows($result)==0) {
              echo "<script>alert('No Record Found')</script>";
           }

           while ($row = mysqli_fetch_array($result)) {
             $name = $row['Name'];
             $father = $row['Father'];
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

             echo "<tr>
               <td>$name</td>
               <td>$father</td>
               <td>$jan</td>
               <td>$feb</td>
               <td>$mar</td>
               <td>$apr</td>
               <td>$may</td>
               <td>$jun</td>
               <td>$jul</td>
               <td>$aug</td>
               <td>$sep</td>
               <td>$oct</td>
               <td>$nov</td>
               <td>$dec</td>
               <td><a href='update_student.php?classId=".$_GET['classId']."&name=".$name."&father=".$father."'>EDIT</a></td>
             </tr>";
           }
        }

        elseif (isset($_GET['classId'])) {

           $five = $_GET['classId'];
           $query = "SELECT * FROM student WHERE Class='$five' ORDER BY Name ASC";

           $result = mysqli_query($con,$query);

           if (mysqli_num_rows($result)==0) {
              echo "<script>alert('No Record Found')</script>";
           }

           while ($row = mysqli_fetch_array($result)) {
             $name = $row['Name'];
             $father = $row['Father'];
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

             echo "<tr>
               <td>$name</td>
               <td>$father</td>
               <td>$jan</td>
               <td>$feb</td>
               <td>$mar</td>
               <td>$apr</td>
               <td>$may</td>
               <td>$jun</td>
               <td>$jul</td>
               <td>$aug</td>
               <td>$sep</td>
               <td>$oct</td>
               <td>$nov</td>
               <td>$dec</td>
               <td><a href='update_student.php?classId=".$_GET['classId']."&name=".$name."&father=".$father."'>EDIT</a></td>
             </tr>";
           }
        }

        elseif (isset($_GET['classId'])) {

           $six = $_GET['classId'];
           $query = "SELECT * FROM student WHERE Class='$six' ORDER BY Name ASC";

           $result = mysqli_query($con,$query);

           if (mysqli_num_rows($result)==0) {
              echo "<script>alert('No Record Found')</script>";
           }

           while ($row = mysqli_fetch_array($result)) {
             $name = $row['Name'];
             $father = $row['Father'];
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

             echo "<tr>
               <td>$name</td>
               <td>$father</td>
               <td>$jan</td>
               <td>$feb</td>
               <td>$mar</td>
               <td>$apr</td>
               <td>$may</td>
               <td>$jun</td>
               <td>$jul</td>
               <td>$aug</td>
               <td>$sep</td>
               <td>$oct</td>
               <td>$nov</td>
               <td>$dec</td>
               <td><a href='update_student.php?classId=".$_GET['classId']."&name=".$name."&father=".$father."'>EDIT</a></td>
             </tr>";
           }
        }

        elseif (isset($_GET['classId'])) {

           $three = $_GET['classId'];
           $query = "SELECT * FROM student WHERE Class='$three' ORDER BY Name ASC";

           $result = mysqli_query($con,$query);

           if (mysqli_num_rows($result)==0) {
              echo "<script>alert('No Record Found')</script>";
           }

           while ($row = mysqli_fetch_array($result)) {
             $name = $row['Name'];
             $father = $row['Father'];
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

             echo "<tr>
               <td>$name</td>
               <td>$father</td>
               <td>$jan</td>
               <td>$feb</td>
               <td>$mar</td>
               <td>$apr</td>
               <td>$may</td>
               <td>$jun</td>
               <td>$jul</td>
               <td>$aug</td>
               <td>$sep</td>
               <td>$oct</td>
               <td>$nov</td>
               <td>$dec</td>
               <td><a href='update_student.php?classId=".$_GET['classId']."&name=".$name."&father=".$father."'>EDIT</a></td>
             </tr>";
           }
        }

        elseif (isset($_GET['classId'])) {

           $seven = $_GET['classId'];
           $query = "SELECT * FROM student WHERE Class='$seven' ORDER BY Name ASC";

           $result = mysqli_query($con,$query);

           if (mysqli_num_rows($result)==0) {
              echo "<script>alert('No Record Found')</script>";
           }

           while ($row = mysqli_fetch_array($result)) {
             $name = $row['Name'];
             $father = $row['Father'];
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

             echo "<tr>
               <td>$name</td>
               <td>$father</td>
               <td>$jan</td>
               <td>$feb</td>
               <td>$mar</td>
               <td>$apr</td>
               <td>$may</td>
               <td>$jun</td>
               <td>$jul</td>
               <td>$aug</td>
               <td>$sep</td>
               <td>$oct</td>
               <td>$nov</td>
               <td>$dec</td>
               <td><a href='update_student.php?classId=".$_GET['classId']."&name=".$name."&father=".$father."'>EDIT</a></td>
             </tr>";
           }
        }

        elseif (isset($_GET['classId'])) {

           $eight = $_GET['classId'];
           $query = "SELECT * FROM student WHERE Class='$eight' ORDER BY Name ASC";

           $result = mysqli_query($con,$query);

           if (mysqli_num_rows($result)==0) {
              echo "<script>alert('No Record Found')</script>";
           }

           while ($row = mysqli_fetch_array($result)) {
             $name = $row['Name'];
             $father = $row['Father'];
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

             echo "<tr>
               <td>$name</td>
               <td>$father</td>
               <td>$jan</td>
               <td>$feb</td>
               <td>$mar</td>
               <td>$apr</td>
               <td>$may</td>
               <td>$jun</td>
               <td>$jul</td>
               <td>$aug</td>
               <td>$sep</td>
               <td>$oct</td>
               <td>$nov</td>
               <td>$dec</td>
               <td><a href='update_student.php?classId=".$_GET['classId']."&name=".$name."&father=".$father."'>EDIT</a></td>
             </tr>";
           }
        }

        elseif (isset($_GET['classId'])) {

           $nine = $_GET['classId'];
           $query = "SELECT * FROM student WHERE Class='$nine' ORDER BY Name ASC";

           $result = mysqli_query($con,$query);

           if (mysqli_num_rows($result)==0) {
              echo "<script>alert('No Record Found')</script>";
           }

           while ($row = mysqli_fetch_array($result)) {
             $name = $row['Name'];
             $father = $row['Father'];
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

             echo "<tr>
               <td>$name</td>
               <td>$father</td>
               <td>$jan</td>
               <td>$feb</td>
               <td>$mar</td>
               <td>$apr</td>
               <td>$may</td>
               <td>$jun</td>
               <td>$jul</td>
               <td>$aug</td>
               <td>$sep</td>
               <td>$oct</td>
               <td>$nov</td>
               <td>$dec</td>
               <td><a href='update_student.php?classId=".$_GET['classId']."&name=".$name."&father=".$father."'>EDIT</a></td>
             </tr>";
           }
        }

        elseif (isset($_GET['classId'])) {

           $ten = $_GET['classId'];
           $query = "SELECT * FROM student WHERE Class='$ten' ORDER BY Name ASC";

           $result = mysqli_query($con,$query);

           if (mysqli_num_rows($result)==0) {
              echo "<script>alert('No Record Found')</script>";
           }

           while ($row = mysqli_fetch_array($result)) {
             $name = $row['Name'];
             $father = $row['Father'];
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

             echo "<tr>
               <td>$name</td>
               <td>$father</td>
               <td>$jan</td>
               <td>$feb</td>
               <td>$mar</td>
               <td>$apr</td>
               <td>$may</td>
               <td>$jun</td>
               <td>$jul</td>
               <td>$aug</td>
               <td>$sep</td>
               <td>$oct</td>
               <td>$nov</td>
               <td>$dec</td>
               <td><a href='update_student.php?classId=".$_GET['classId']."&name=".$name."&father=".$father."'>EDIT</a></td>
             </tr>";
           }
        }

        elseif (isset($_GET['classId'])) {

           $kgtwo = $_GET['classId'];
           $query = "SELECT * FROM student WHERE Class='$kgtwo' ORDER BY Name ASC";

           $result = mysqli_query($con,$query);

           if (mysqli_num_rows($result)==0) {
              echo "<script>alert('No Record Found')</script>";
           }

           while ($row = mysqli_fetch_array($result)) {
             $name = $row['Name'];
             $father = $row['Father'];
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

             echo "<tr>
               <td>$name</td>
               <td>$father</td>
               <td>$jan</td>
               <td>$feb</td>
               <td>$mar</td>
               <td>$apr</td>
               <td>$may</td>
               <td>$jun</td>
               <td>$jul</td>
               <td>$aug</td>
               <td>$sep</td>
               <td>$oct</td>
               <td>$nov</td>
               <td>$dec</td>
               <td><a href='update_student.php?classId=".$_GET['classId']."&name=".$name."&father=".$father."'>EDIT</a></td>
             </tr>";
           }
        }

        elseif (isset($_GET['classId'])) {

           $kgone = $_GET['classId'];
           $query = "SELECT * FROM student WHERE Class='$kgone' ORDER BY Name ASC";

           $result = mysqli_query($con,$query);

           if (mysqli_num_rows($result)==0) {
              echo "<script>alert('No Record Found')</script>";
           }

           while ($row = mysqli_fetch_array($result)) {
             $name = $row['Name'];
             $father = $row['Father'];
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

             echo "<tr>
               <td>$name</td>
               <td>$father</td>
               <td>$jan</td>
               <td>$feb</td>
               <td>$mar</td>
               <td>$apr</td>
               <td>$may</td>
               <td>$jun</td>
               <td>$jul</td>
               <td>$aug</td>
               <td>$sep</td>
               <td>$oct</td>
               <td>$nov</td>
               <td>$dec</td>
               <td><a href='update_student.php?classId=".$_GET['classId']."&name=".$name."&father=".$father."'>EDIT</a></td>
             </tr>";
           }
        }


          ?>
       </tbody>
     </table>
 </div>
 </div>

   </body>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </html>
