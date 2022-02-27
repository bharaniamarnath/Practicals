<?php
include('includes/header.php');
include('includes/connect.php');
include('includes/alerts.php');
if(isset($_POST['check'])){
	if(empty($_POST['userid'])){
		echo $useridalert;
		exit();
	}
	else{
		
	$id = "SELECT * FROM userdetails WHERE ID = '$_POST[userid]'";
	$result = mysql_query($id);
	if(mysql_num_rows($result)==0){
		echo $noidexistalert;
		exit();
		}
	else{
		header("Location: updatepass.php");
		}
		}
mysql_close($con);
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Sign Up</title>
<meta name="" content="">
<link rel="stylesheet" type="text/css" href="css/layout.css" />
</head>
<body>
<div class="dashboard">
<h3>Enter the 6 digit user ID given after registration:</h3><hr><br />
<table class="regform">
<form action="checkuid.php" method="POST">
	<tr><td class="regform">User ID:</td> <td class="regform"><input type="text" name="userid" id="userid" /></td></tr>
	<tr><td></td><td><input type="submit" name="check" id="check" value="Check ID" /></td></tr>
	</form>
	</table></div>
	</body>
	</html>