<html>
<head>
<link rel="stylesheet" type="text/css" href="page.css">
</head>
<body>
<center>
<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%"><tr><td align="center" valign="middle">
<font class="header">PHPDB User Registration</font>
<table class="panel" border="0" width="350">
<form action="usereg.php" method="post">
<tr>
<td class="label">First Name : </td>
<td><input type="text" name="firstname" style="width:170px;" /></td>
</tr>
<tr>
<td class="label">Last Name : </td>
<td><input type="text" name="lastname" style="width:170px;" /></td>
</tr>
<tr>
<td class="label">Gender : </td>
<td class="label"><input type="radio" name="gender" value="Male">Male
 <input type="radio" name="gender" value="Female">Female</td>
</tr>
<tr>
<td class="label">Date of Birth: </td>
<td><select name="yearofBirth" style="width:55px;">
  <option value="">Year</option>
  <?php for ($i = 1980; $i < date('Y'); $i++) : ?>
  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
  <?php endfor; ?>
</select>

<select name="monthofBirth">
  <option value="">Month</option>
  <?php for ($i = 1; $i <= 12; $i++) : ?>
  <option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
  <?php endfor; ?>
</select>

<select name="dateofBirth">
  <option value="">Date</option>
  <?php for ($i = 1; $i <= 31; $i++) : ?>
  <option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
  <?php endfor; ?>
</select>
</td>
</tr>
<tr>
<td class="label">Username : </td>
<td><input  type="text" name="username" style="width:170px;"  /></td>
</tr>
<tr>
<td class="label">Password : </td>
<td><input  type="password" name="passwrd" style="width:170px;"  /></td>
</tr>
<tr>
<td class="label">Email : </td>
<td><input  type="text" name="email" style="width:170px;"  /></td>
</tr>
<tr>
<td></td>
<td>
<input type="submit" name="register" class="button" value="Register"></td>
</tr>
<tr>
<td></td>
<td class="label1"><a href="index.php">User already? Login</a></td>
</tr>
</form>
</table>
</table>
</center>
</body>
</html>