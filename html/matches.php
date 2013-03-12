<!--
	Sohaib Hussain
	CSE 190M
	TA Katlyn Edwards
	HW 4 Nerd Luv
	Matches.php just contains a field for returning users so they can 
	look at their matches.
-->
<?php include("top.html"); ?>
	<form action="results.php" method="get">
		<fieldset>
			<legend>Returning User:</legend>
			<ul>
				<li><strong>Name: </strong><input type="text" size="16" name="retname" /></li>
			</ul>
			<input type="submit" value="View My Matches" />
		</fieldset>	
	</form>
<?php include("bottom.html"); ?>
