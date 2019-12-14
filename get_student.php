<?php
require 'connection.php';

$query = "SELECT * FROM student ORDER BY name ASC";

$result = mysqli_query($con,$query);

while ($row = mysqli_fetch_array($result)) {
  $name = $row['Name'];
  $father = $row['Father'];
  $contact = $row['Contact'];
  $address = $row['Address'];
  $class = $row['Class'];
  $admission_fee = $row['admission_fee'];
  $tuition_fee = $row['tuition_fee'];
  $join = $row['Joiningdate'];

  echo "<tr>
    <td>$name</td>
    <td>$father</td>
    <td>$contact</td>
    <td>$address</td>
    <td>$class</td>
    <td>$admission_fee</td>
    <td>$tuition_fee</td>
    <td>$join</td>
    <td><a href='delete_student.php?class=".$class." &name=".$name." &father=".$father."''>Delete</a><td>
  </tr>";

}

$con->close();

 ?>
