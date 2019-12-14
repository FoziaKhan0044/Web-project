
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

     <div class="container-fluid" style="width:80%">
       <div class="card">
         <div class="card-body" style="background-color: #3498db; color:#ffffff;">

       <div class="row">
         <div class="col-md-2">
           <a href="students_detail.php" class="btn btn-outline-dark" style="width:100px;">Back</a>
         </div>
         <div class="col-md-3">
           <h3>Student Details</h3>
         </div>
         <div class="col-md-1"></div>
         <div class="col-md-6">
           <form class="form-group" action="search.php" method="post">
             <div class="row">
               <div class="col-md-9">
                 <input type="text" name="search" class="form-control" placeholder="Search student by Name OR Class" required>
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
       <thead style="text-align: center">
         <tr>
           <th scope="col">Name</th>
           <th scope="col">Father's Name</th>
           <th scope="col">Contact</th>
           <th scope="col">Address</th>
           <th scope="col">Grade</th>
           <th scope="col">Tuition Fee</th>
           <th scope="col">Joining Date</th>
         </tr>
       </thead>
       <tbody style="text-align: center">
         <?php
         require 'connection.php';

         $search = $_POST['search'];

         $query = "SELECT * FROM student WHERE Name='$search' OR Class='$search' ORDER BY name ASC";

         $result = mysqli_query($con,$query);

         if (mysqli_num_rows($result)==0) {
            echo "<script>alert('$search Not Exists in School')</script>";
            echo "<script>window.open('students_detail.php','_self')</script>";
         }

         while ($row = mysqli_fetch_array($result)) {
           $name = $row['Name'];
           $father = $row['Father'];
           $contact = $row['Contact'];
           $address = $row['Address'];
           $class = $row['Class'];
           $tuition_fee = $row['tuition_fee'];
           $join = $row['Joiningdate'];

           echo "<tr>
             <td>$name</td>
             <td>$father</td>
             <td>$contact</td>
             <td>$address</td>
             <td>$class</td>
             <td>$tuition_fee</td>
             <td>$join</td>
             <td><a href='delete_student.php?class=".$class." &name=".$name." &father=".$father."''>Delete</a><td>
           </tr>";
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
