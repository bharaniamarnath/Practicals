<?php
include('includes/connect.php');
if(isset($_POST['login'])){
$adminname = mysql_real_escape_string($_POST['auname']);
$passwd = mysql_real_escape_string(md5($_POST['apass']));
if(empty($adminname) && empty($passwd)){
		echo "Username and Password is required to login";
		exit();
	}
$result = "SELECT * FROM admindetails WHERE Username='$adminname' AND Password=('$passwd')";
$row = mysql_fetch_assoc(mysql_query($result));
if($row['Username'] == $adminname && $row['Password'] == $passwd){
	session_start();
	$_SESSION['admin'] = $adminname;
	header("Location: adminpanel.php");
}
else{
	echo "Login failed. Check username and password";
}
}
?>