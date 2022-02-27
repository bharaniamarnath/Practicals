<?php
session_start();
include('includes/header.php');
include('includes/connect.php');
include('includes/alerts.php');
if(!isset($_SESSION['user'])){
	echo $logdenyalert;
}
	$suname = $_SESSION['user'];
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
		<li><a href="profile.php">Profile</a></li>
		<li><a href="friends.php">Friends</a></li>
		<li><a id="onlink" href="photos.php">Photos</a></li>
		<li><a href="inbox.php">Messages</a></li>
	</ul>		
	</div>
</div>
<div class="postboard">
<div id="submenubar">
<div id="holder">
	<ul>
		<li><a id="onlink" href="photos.php">Private Photos</a></li>
		<li><a href="publicphotos.php">Public Photos</a></li>
		<li><a href="uploadphotos.php">Upload Photos</a></li>
	</ul>		
	</div>
</div>
<div class="messageboard">
<?php
if(isset($_POST['picview'])){
	$pictag = mysql_real_escape_string($_POST['viewpic']);
	$frnme = mysql_real_escape_string($_POST['fusr']);
	$picdet = mysql_query("SELECT * FROM photodetails WHERE photodetails.Photo='$pictag' AND photodetails.Username='$frnme'");
	while($pedrow = mysql_fetch_array($picdet)){
		$pename = $pedrow['Filename'];
		$pedes = $pedrow['Description'];
		$peimg = $pedrow['Photo'];
		$pedate = $pedrow['Date'];
		echo "<div class='photobox'>";
		echo "<table class='photoedit'>";
		echo "<form action='photoupdate.php' method='POST'>";
		echo "<th><h4>Private Photo:<font style='color:#000;'> $pename</font> - Photo Details</h4></th>";
		echo "<tr>";
		echo "<td class='picedit'><img src=$peimg height=75% width=75% /></td>";
		echo "<input type='hidden' name='udpic' value='$peimg' />";
		echo "</tr>";
		echo "<tr>";
		echo "<td class='piceditdetail'><h4>Photo Title: <font style='color:#000;'>$pename</font></h4>
<h4>Updated on: <font style='color:#000;'>$pedate</h4>
<h4>Photo Description: <font style='color:#000;'>$pedes</h4></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td></td>";
		echo "<td><input type='button' onClick='history.go(-1)' value='Photos' id='photoedit'></input></td>";
		echo "</tr>";
		echo "</form>";
		echo "</table><br />";
		echo "</div>";
	}
}
?>
</div>
</body>
</html>