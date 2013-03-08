<!--
	Sohaib Hussain
	CSE 190M
	TA Katlyn Edwards
	HW 4 Nerd Luv
	Confirm.php just adds the info passed by signup.php into the text file containing
	everyone's records, singles.txt.
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
		<p>Welcome to NerdLuv, <?= $name ?>!</p>
		<p>Now <a href="matches.php">log in to see your matches!</a></p>
<?php include("bottom.html"); ?>
