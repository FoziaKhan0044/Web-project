<?php
require 'connection.php';

$query = "SELECT * FROM staff ORDER BY name ASC";

$result = mysqli_query($con,$query);

while ($row = mysqli_fetch_array($result)) {
  $name = $row['name'];
  $job = $row['job'];
  $father = $row['father'];
  $contact = $row['contact'];
  $email = $row['email'];
  $address = $row['address'];
  $salary = $row['salary'];
  $join = $row['joindate'];

  echo "<tr>
    <td>$name</td>
    <td>$job</td>
    <td>$father</td>
    <td>$contact</td>
    <td>$email</td>
    <td>$address</td>
    <td>$salary</td>
    <td>$join</td>
    <td><a href='update_staff.php?job=".$job."&name=".$name."&father=".$father."&contact=".$contact."&email=".$email."&salary=".$salary."&address=".$address."'>EDIT</a></td>
    <td><a href='delete_staff.php?name=".$name."&father=".$father."'>DELETE</a></td>
  </tr>";

}



 ?>
