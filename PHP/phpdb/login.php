<?php
$uname = $_POST['username'];
$pswd = $_POST['passwrd'];
$con = mysql_connect("localhost","bharane","21feb1991");
if(!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("phpdb", $con);
$result = mysql_query("SELECT * FROM details WHERE Username='$uname' AND Password='$pswd'");
while($row = mysql_fetch_array($result))
{
 session_start();
$_SESSION['user']=$uname;
header("Location: main.php");
}
mysql_close($con);
?>