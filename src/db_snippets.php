<-----
  Peer Review U
  BetaByte webDev Team: Anthony C. Hopkins, Sohaib Hussain, Paul Park Kwon, John Paul Wallway
  CSE 360
------>

// Database snippets for general use

<?php

// Create connection
$con=mysqli_connect("peerreviewu.com","app_user","escrowed_pass","uwb_db");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Get student's courses
$student_courses = mysqli_query($con,"SELECT course_id FROM enrollment where student_id = 12345");

// Get instructor's courses
$instructor_courses = mysqli_query($con,"SELECT course_id FROM courseswhere instructor_id = 67890");

$user_pass = getPassword()
// get id_number
$id_number = mysqli_query($con,"SELECT id_number from login_information where password = '$user_pass'");


?>
