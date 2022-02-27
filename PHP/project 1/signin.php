<?php
include('includes/header.php');
include('includes/connect.php');
include('includes/alerts.php');
if(isset($_POST['login'])){
$usrname = mysql_real_escape_string($_POST['uname']);
$passwd = mysql_real_escape_string(md5($_POST['pswd']));
if(empty($usrname) && empty($passwd)){
		echo $logemptyalert;
		exit();
	}
$result = "SELECT * FROM userdetails WHERE Username='$usrname' AND Password=('$passwd')";
$row = mysql_fetch_assoc(mysql_query($result));
if($row['Username'] == $usrname && $row['Password'] == $passwd){
	session_start();
	$_SESSION['user'] = $usrname;
	header("Location: main.php");
}
else{
	echo $logerroralert;
}
}
?>
