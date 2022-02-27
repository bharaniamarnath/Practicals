<?php session_start(); 
if(!isset($_SESSION['user']))
{
header("location:login.php");
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="page.css">
</head>
<body>
<center>
<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%"><tr><td align="center" valign="middle">
<font class="header">Welcome to PHPDB</font>
<table class="panel" border="0" width="350">
<form action="login.php" method="post">
<tr>
<td class="label">Welcome <?php echo $_SESSION['user']; ?></td>
</tr>
<tr><td><input type="button" name="details" class="button" value="View Details" onClick="parent.location='details.php'">
<input type="button" name="register"  class="button" value="Register" onClick="parent.location='register.php'">
<input type="button" name="logout"  class="button" value="Log out" onClick="parent.location='logout.php'"></form></td>
</tr>
</form>
</table>
</table>
</body>
</html>