<?php
include('includes/header.php');
include('includes/connect.php');
include('includes/alerts.php');
if(isset($_POST['update'])){
	if(empty($_POST['usrname'])){
		echo $unamealert;
		exit();
	}
	else{		
	$un = "SELECT * FROM userdetails WHERE Username = '$_POST[usrname]'";
	$result = mysql_query($un);
	if(mysql_num_rows($result)==0){
		echo $unamefailalert;
		exit();
		}
		}
	if(empty($_POST['newpasswd'])){
		echo $emptypassalert;
		exit();
	}
	if(empty($_POST['confnewpw'])){
		echo $emptypassalert;
		exit();
	}
	if($_POST['newpasswd']!==$_POST['confnewpw']){
		echo $newpassalert;
		exit();
	}
$usrnme = mysql_real_escape_string($_POST['usrname']);
$newpass = mysql_real_escape_string($_POST['newpasswd']);
mysql_select_db("webstar",$con);
$updatepw = "UPDATE userdetails SET Password='$newpass' WHERE Username='$usrnme'";
		if(mysql_query($updatepw)){
			echo $nwpwconfalert;
			exit();
		}
		else {
			echo $newpwfailalert;
			exit();
		}
		}
mysql_close($con);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Webstar - Update Password</title>
<meta name="" content="">
<link rel="stylesheet" type="text/css" href="css/layout.css" />
</head>
<body>
<table class="regform">
<form action="updatepass.php" method="POST">
<tr><td class="regform">Username:</td> <td class="regform"><input type="text" name="usrname" id="usrname" /></td></tr>
<tr><td class="regform">New Password:</td> <td class="regform"><input type="password" name="newpasswd" id="newpasswd" /></td></tr>
<tr><td class="regform">Retype New Password:</td> <td class="regform"><input type="password" name="confnewpw" id="confnewpw" /></td></tr>
<tr><td></td><td><input type="submit" name="update" id="update" value="Update" /></td></tr>
</form>
</table>
</body>
</html>		
