<!--
  Peer Review U
  BetaByte webDev Team: Anthony C. Hopkins, Sohaib Hussain, Paul Park Kwon, John Paul Wallway
  CSE 360
	login.php just contains a field for returning users login info
-->
<?php include("top.html"); ?>
	<form action="results.php" method="get">
		<fieldset>
			<legend>Returning User:</legend>
			<ul>
				<li><strong>Name: </strong><input type="text" size="16" name="retname" /></li>
			</ul>
			<input type="submit" value="View My Reviews" />
		</fieldset>	
	</form>
<?php include("bottom.html"); ?>
