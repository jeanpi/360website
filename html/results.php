<!--
	Sohaib Hussain
	CSE 190M
	TA Katlyn Edwards
	HW 4 Nerd Luv
	This page displays the results for returning users by comparing a series of 
	criteria through information in singles.txt.
-->
<?php 
	include("top.html"); 
	$retname = $_GET["retname"];
	$lines = file("singles.txt");
	#find the user's line first, store it
	foreach ($lines as $line1) {
		$line = explode(",", $line1);
		if($line[0] == $retname) {
			$userline = $line;
		}
	}
?>
		<h1>Matches for <?= $retname ?></h1>
<?php
	#Runs through singles.txt and verifies that certain criteria are matched, like 
	#having one personality type letter matching first, then a series of other criteria
	foreach ($lines as $line2) {
		$line3 = explode(",", $line2);
		#personality type check
		$matchtype = str_split($line3[3]);
		$usertype = str_split($userline[3]);
		$bools = false;
		for($j = 0; $j < count($usertype); $j++) {
			if(in_array("$usertype[$j]", $matchtype)) {
				$bools = true;
			}
		}
		#check the rest of the criteria, like personality type, ages, OS.
		if($line3[1] != $userline[1] && ($line3[2] >= $userline[5] && $line3[2] <= $userline[6])
			&& ($userline[2] >= $line3[5] && $userline[2] <= $line3[6]) && 
			$userline[4] == $line3[4] && $bools) {
?>
			<div class="match">
				<p>
					<img src="http://www.cs.washington.edu/education/courses/cse190m/12su/homework/4/images/user.jpg" alt="userimage" />
					<?= $line3[0] ?>
				</p>
				<ul>
					<li><strong>gender: </strong> <?= $line3[1] ?></li>
					<li><strong>age:</strong> <?= $line3[2] ?></li>
					<li><strong>type:</strong> <?= $line3[3] ?></li>
					<li><strong>OS:</strong> <?= $line3[4] ?></li>
				</ul>
			</div>
<?php
		}
	}
?>

<?php include("bottom.html"); ?>
