<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Webstar</title>
<meta name="" content="">
<link rel="stylesheet" type="text/css" href="css/layout.css" />
</head>
<body><div class="header"><br /><img src="images/header.png"></img></div>
<div id="indexpage">
<h3>Sign in</h3>

<table class="regform">
<form action="signin.php" method="POST">
	<tr><td class="regform">Username:</td> <td class="regform"><input type="text" name="uname" id="uname" /></td></tr>		
	<tr><td class="regform">Password:</td> <td class="regform"><input type="password" name="pswd" id="pswd" /></td></tr>
	<tr><td></td><td><input type="submit" name="login" id="login" value="Login" /> &nbsp;<a class="linkpage" href="checkuid.php">Forgot Password ?</a></td></tr>
	</form>
	</table><hr>
	
<h3>Register</h3>
<img src="images/adindex.png" style="float: right; height: 250px; width: 350px; margin-right: 40px;"/>
<table class="regform">
<form action="signup.php" method="POST">
	<tr><td class="regform">First name:</td> <td class="regform"><input type="text" name="firstname" id="firstname" /></td></tr>		
	<tr><td class="regform">Last name:</td> <td class="regform"><input type="text" name="lastname" id="lastname" /></td></tr>
	<tr><td class="regform">Gender:</td> <td class="regform"><input type="radio" name="gender" value="Male">Male &nbsp;
	<input type="radio" name="gender" value="Female">Female</td></tr>
	<tr><td class="regform">Date of Birth: </td>
	<td class="regform"><select name="date">
		<option value="">Date</option>
		<?php for($i=1;$i<=31;$i++):?>
		<option value="<?php echo ($i<10)?'0'.$i:$i;?>"><?php echo $i;?></option>
		<?php endfor; ?>
	</select>&nbsp;
		<select name="month">
		<option value="">Month</option>
		<?php for($i=1;$i<=12;$i++):?>
		<option value="<?php echo ($i<10)?'0'.$i:$i;?>"><?php echo $i;?></option>
		<?php endfor; ?>
	</select>&nbsp;
			<select name="year">
		<option value="">Year</option>
		<?php for($i=1910;$i<=date('Y');$i++):?>
		<option value="<?php echo $i;?>"><?php echo $i;?></option>
		<?php endfor; ?>
	</select></td></tr>
	<tr><td class="regform">Username: </td><td class="regform"><input type="text" name="username" id="username" /></td></tr>
	<tr><td class="regform">Password: </td><td class="regform"><input type="password" name="password" id="password" /></td></tr>
	<tr><td class="regform">Confirm Password: </td><td class="regform"><input type="password" name="confpass" id="confpass" /></td></tr>
	<tr><td class="regform">Email ID: </td><td class="regform"><input type="text" name="mailid" id="mailid" /></td></tr>
	<tr><td>Terms & Conditions: </td><td><input type="checkbox" name="terms" value="Accepted" />Agree to terms & conditions.</td></tr><tr><td></td><td><br /><input type="submit" name="register" id="register" value="Register" /></td></tr>
</form>
</table>
<hr>
<div class="footlink"><a href="terms.php" class="terms">Terms &amp; Conditions</a> . <a href="about.php" class="terms">About Webstar</a></div>
<div id="footer">&copy;Copyrights 2013. Webstar Network.</div>
</div>
</body>
</html>