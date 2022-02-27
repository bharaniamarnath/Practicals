<?php
session_start();
include('includes/header.php');
include('includes/connect.php');
include('includes/alerts.php');
if(!isset($_SESSION['user'])){
	echo $logdenyalert;
}
$suname = $_SESSION['user'];

if(isset($_POST['submit']))
{
$name = $_FILES['myfile']['name'];
$tmp_name = $_FILES['myfile']['tmp_name'];

if($name){
	$location = "album/$name";
	move_uploaded_file($tmp_name,$location);
	$imgquery = mysql_query("UPDATE imagedetails SET Image='$location' WHERE Username='$suname'");
	echo $imageulalert;
	exit();
}	
else{
	echo $imagealert;
	exit();
}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Webstar - Image Upload</title>
<meta name="" content="">
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css" />
</head>
<body>
<div id="menubar">
<div id="holder">
	<ul>
		<li><a href="main.php">Home</a></li>
		<li><a id="onlink" href="profile.php">Profile</a></li>
		<li><a href="friends.php">Friends</a></li>
		<li><a href="photos.php">Photos</a></li>
	</ul>		
	</div>
</div>
<div class="postboard">
<div class="messageboard">
<table class='regform'>
<h2>Profile photo </h2>
<hr><br />
<?php
$imgresult = mysql_query("SELECT * FROM imagedetails WHERE Username='$suname'");
if(mysql_num_rows($imgresult)==0){
	echo $dbalert;
}
else{
	$row = mysql_fetch_assoc($imgresult);
	$imgloc = $row['Image'];
}	echo "<h3>Step 1:</h3>";
	echo "<table>";
	echo "<tr>";
	echo "<td><div id='profileimage'><img src='$imgloc' id='profilecrop' /></div></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><form action='proimagedelete.php' method='POST'>";
	echo "<input type='hidden' name='deletepic' value='$imgloc' />";
	echo "<input type='submit' name='picdelete' id='photobutton' value='Delete Profile Image'>";
	echo "</form></td>";
	echo "</tr>";
	echo "</table>";
?>
<hr><br />
<h3>Step 2: </h3>
<p>Upload an image for profile photo of any size and dimension: </p><br />
<form action='imageupload.php' method='POST' enctype='multipart/form-data'>
<table class="regform">
<tr><td class='regform'>Upload Image:</td> <td class='regform'><input type='file' name='myfile' id='myfile' /></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Upload'></form></table>
</div>
</div>
</body>
</html>