<?php
include('includes/connect.php');
if(isset($_POST['login'])){
$usrname = mysql_real_escape_string($_POST['uname']);
$passwd = mysql_real_escape_string(md5($_POST['pswd']));
if(empty($usrname) && empty($passwd)){
		echo "Username and Password is required to login";
		exit();
	}
$result = "SELECT * FROM userdetails WHERE Username='$usrname' AND Password=('$passwd')";
$row = mysql_fetch_assoc(mysql_query($result));
if($row['Username'] == $usrname && $row['Password'] == $passwd){
	session_start();
	$_SESSION['user'] = $usrname;
	header("Location: home.php");
}
else{
	echo "Login failed. Check username and password";
}
}
?>