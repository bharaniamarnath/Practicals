<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/layout.css" />
</head>
<body>
<div id="container">
<div id="header">
<img src="images/headerlogo.png" />
</div>
<div id="content">
<div id="loginform">
<h2>Sign In</h2>
<form action="signin.php" method="POST">
<table>
<tr><td>Username:</td> <td><input type="text" name="uname" id="uname" size="30" /></td></tr>
<tr><td>Password:</td> <td><input type="password" name="pswd" id="pswd" size="15" /></td></tr>
<tr><td></td><td><input type="submit" name="login" id="login" value="Login" /></td></tr>
</table>
</form>
</div>
<div id="signupform">
<h2>Sign Up</h2>
<form action="signup.php" method="POST">
<table>
<tr><td>First Name:</td> <td> <input type="text" name="firstname" id="firstname" size="30" /></td></tr>
<tr><td>Last Name:</td> <td> <input type="text" name="lastname" id="lastname" size="30" /></td></tr>
<tr><td>Username:</td> <td> <input type="text" name="username" id="username" size="30" /></td></tr>
<tr><td>Password:</td> <td> <input type="password" name="password" id="password" size="15" /></td></tr>
<tr><td>Email:</td> <td> <input type="text" name="email" id="email" size="50" /></td></tr>
<tr><td></td> <td> <input type="submit" name="register" id="register" value="Signup" /> </td></tr>
</table>
</form> 
</div>
</div>
<div>
</div>
<div id="footer">
<ul>
<li><a href="terms.php">Terms &amp; Conditions</a></li>
<li><a href="feedback.php">Feedback</a></li>
<li><a href="about.php">About Infero</a></li>
</ul>
<p>&copy; Copyrights 2013. Infero. All rights reserved.</p>
</div>
</div>
</body>
</html>