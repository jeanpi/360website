### PHP stuff stolen from w3schools ###
mysqli_connect(host,username,password,dbname);

<?php
// Create connection
$con=mysqli_connect("example.com","peter","abc123","my_db");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>


