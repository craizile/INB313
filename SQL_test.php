<?php

$con=mysqli_connect("localhost","root","","test");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Insert values (more duongasaur!!!)

mysqli_query($con,"INSERT INTO testTable (Name, ID) VALUES ('Duongasaur',69)");

// Display value (A LOT OF duongasaur!)

$result = mysqli_query($con,"SELECT * FROM testTable");

while($row = mysqli_fetch_array($result))
  {
  echo $row['Name'] . " " . $row['ID'];
  echo "<br>";
  }


mysqli_close($con);
?>
