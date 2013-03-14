<!--
	Sohaib Hussain
	CSE 190M
	TA Katlyn Edwards
	HW 4 Nerd Luv
	This is the user sign up page. It includes a form where new users enter in their information,
	like age, fav OS, gender, name, personality type. It links up to confirm.php.
-->
<?php include("top.html"); ?>
	<form action="confirm.php" method="post" >
		<fieldset>
			<legend>New User Signup:</legend>
			<ul>
				<li><strong>Name: </strong> <input type="text" name="name" size="16" /></li>
				<li><strong>Gender:</strong>  <input type="radio" name="gender" value="M" /> Male <input type="radio" name="gender" value="F" checked="checked"/> Female</li>
				<li><strong>Age:</strong> <input type="text" name="age" size="6" maxlength="2"/></li>
				<li>
					<strong>Personality type: </strong>
					<input type="text" name="personality" size="6" maxlength="4" />
					(<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't know your type?</a>)
				</li>
				<li>
					<strong>Favorite OS:</strong>
					<select name="os">
						<option value="Windows" selected="selected">Windows</option>
						<option value="Mac OS X">Mac OS X</option>
						<option value="Linux">Linux</option>
					</select>
				</li>
				<li>
					<strong>Seeking Age:</strong>
						<input type="text" name="min" placeholder="min" size="6" maxlength="2"/> to 
						<input type="text" name="max" placeholder="max" size="6" maxlength="2"/>	
				</li>
			</ul>
			<input type="submit" value="Sign Up" />
		</fieldset>
	</form>
<?php include("bottom.html"); ?>
