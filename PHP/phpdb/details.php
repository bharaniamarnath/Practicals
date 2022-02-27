<?php session_start(); 
if(!isset($_SESSION['user']))
{
header("location:login.php");
}
else
{
$con = mysql_connect("localhost","bharane","21feb1991");
 if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("phpdb", $con);
$result = mysql_query("SELECT * FROM details WHERE Username='$_SESSION[user]'");
 while($row = mysql_fetch_array($result))
{
$fname = $row['Firstname'];
$lname = $row['Lastname'];
$gend = $row['Gender'];
$mail = $row['Email'];
$dob = $row['Dob'];
$age = floor( (strtotime(date('Y-m-d')) - strtotime($dob)) / 31556926);
}
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="page.css">
</head>
<body>
<center>
<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%"><tr><td align="center" valign="middle">
<font class="header">PHPDB User Details</font>
<table class="panel" border="0" width="350">
<tr>
<td class="label">First Name : </td>
<td class="label"> 
<?php echo $fname; ?>
</td>
</tr>
<tr>
<td class="label">Last Name : </td>
<td class="label"> 
<?php echo $lname; ?>
</td>
</tr>
<tr>
<td class="label">Gender : </td>
<td class="label"> 
<?php echo $gend; ?>
</td>
</tr>
<tr>
<td class="label">Date of Birth : </td>
<td class="label"> 
<?php echo $dob; ?>
</td>
</tr>
<tr>
<td class="label">Age : </td>
<td class="label"> 
<?php echo $age; ?>
</td>
</tr>
<tr>
<td class="label">Email : </td>
<td class="label"> 
<?php echo $mail; ?>
</td>
</tr>
<tr>
<td></td>
<td><input type="button" name="main"  class="button" value="Main Page" onClick="parent.location='main.php'">
</table>
</table>
</center>
</body>
</html>
