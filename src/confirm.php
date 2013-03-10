<!--
	Peer Review U 
  BetaByte webDev Team: Anthony C. Hopkins, Sohaib Hussain, Paul Park Kwon, John Paul Wallway 
	CSE 360
	Confirm.php just adds the info passed by signup.php into the text file containing
	everyone's records
-->
<?php 
	include("top.html"); 
	$name = $_POST["name"];
	$gender = $_POST["gender"];
	$age = $_POST["age"];
	$type = $_POST["personality"];
	$os = $_POST["os"];
	$min = $_POST["min"];
	$max = $_POST["max"];
	$line = "$name,$gender,$age,$type,$os,$min,$max\n";
	file_put_contents("singles.txt", $line, FILE_APPEND);
?>
		<p>Thank you!</p>
		<p>Welcome to Peer Review U, <?= $name ?>!</p>
		<p>Now <a href="login.php">log in to review!</a></p>
<?php include("bottom.html"); ?>
