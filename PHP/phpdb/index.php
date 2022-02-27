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
<td class="label">Username : </td>
<td><input type="text" name="username" /></td>
</tr>
<tr>
<td class="label">Password : </td>
<td><input  type="password" name="passwrd"  /></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="login" class="button" value="Login">
<input type="button" name="register"  class="button" value="Register" onClick="parent.location='register.php'"></form></td>
</tr>
<tr>
<td></td>
<td class="label1"><a href="resetpass.php">Forgot Password</a></td>
</tr>
</form>
</table>
</table>
</center>
</body>
</html>
