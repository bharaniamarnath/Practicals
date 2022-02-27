<?php
$con = mysql_connect("localhost","bharane","21feb1991");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
if (isset($_POST['register']) == "Register")
{
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$gend = $_POST['gender']; 
$yearofBirth = $_POST['yearofBirth'];
$monthofBirth = $_POST['monthofBirth'];
$dateofBirth = $_POST['dateofBirth'];
$usrname = $_POST['username'];
$passwrd = $_POST['passwrd'];
$mail = $_POST['email'];
$date = $yearofBirth  . $monthofBirth . $dateofBirth;
}
if (!$fname && !$lname && !$usrname && !$passwrd && !$mail)
{
header("Location: regerror.php");
}
mysql_select_db("phpdb", $con);
$dbuname = mysql_query("SELECT * FROM details WHERE Username='$usrname'");  
if ($usrname == $dbuname)
{
header("Location: regerror.php");
}
$sql="INSERT INTO details (Firstname, Lastname, Gender, Dob, Username, Password, Email) VALUES ('$fname', '$lname', '$gend', '$date', '$usrname', '$passwrd', '$mail')";
if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
header("Location: regconf.php");
mysql_close($con);
?>