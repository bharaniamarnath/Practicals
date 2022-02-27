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
$filename = $_POST['filename'];
$filedesc = $_POST['filedes'];

if($name){
	$location = "publicphotos/$name";
	move_uploaded_file($tmp_name,$location);
	$pudet = mysql_query("SELECT * FROM userdetails WHERE Username='$suname'");
	while($puud = mysql_fetch_array($pudet)){
		$puuid = $puud['ID'];
	}	
	$imgquery = mysql_query("INSERT INTO publicphotos (ID, Username, Photo, Filename, Description) VALUES ('$puuid', '$suname', '$location', '$filename', '$filedesc')");
	echo $puphotoulalert;
	exit();
}	
else{
	echo $photoalert;
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
<link rel="stylesheet" type="text/css" href="css/submenu.css" />
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
<div id="submenubar">
<div id="holder">
	<ul>
		<li><a href="photos.php">Album</a></li>
		<li><a href="publicphotos.php">Public Photos</a></li>
		<li><a id="onlink" href="publicphotos.php">Upload Photos</a></li>
	</ul>		
	</div>
</div>
<div class="messageboard">
<h2>Upload public photos:</h2>
<h4>The photos uploaded here can be viewed by everyone public.</h4><hr><br />
<table class='regform'>
<form action='uploadpublicphotos.php' method='POST' enctype='multipart/form-data'>
<tr><td class='regform'>Photo Title:</td> <td class='regform'><input type='text' name='filename' id='filename' /></td></tr>
<tr><td class='regform'>Photo Description:</td> <td class='regform'><textarea name='filedes' id='filedes'></textarea></td></tr>
<tr><td class='regform'>Upload Photo:</td> <td class='regform'><input type='file' name='myfile' id='myfile' /></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Upload'></form></table>
</div>
</body>
</html>