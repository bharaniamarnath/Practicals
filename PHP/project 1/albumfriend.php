<?php
session_start();
include('includes/header.php');
include('includes/connect.php');
include('includes/alerts.php');
if(!isset($_SESSION['user'])){
	echo $logdenyalert;
}
	$suname = $_SESSION['user'];
	$frname = $_SESSION['friend'];
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
		<li><a href="inbox.php">Messages</a></li>
	</ul>		
	</div>
</div>
<div class="postboard">
<div id="submenubar">
<div id="holder">
	<ul>
		<li><a href="viewprofile.php">Profile</a></li>
		<li><a id="onlink" href="albumfriend.php">Photos</a></li>
	</ul>		
	</div>
</div>
<div class="messageboard">
<?php
$perpage = 2;
$msgcount = mysql_query("SELECT COUNT(*) FROM photodetails WHERE Username='$frname'");
$pages = ceil(mysql_result($msgcount, 0) / $perpage);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $perpage;
	$photores = mysql_query("SELECT * FROM photodetails WHERE Username='$frname' ORDER BY Date DESC LIMIT $start, $perpage");
		if(mysql_num_rows($photores)==0){
		echo $nofrndphotosalert;
		exit();
	}
	while($phrow = mysql_fetch_array($photores)){
		$phuid = $phrow['ID'];
		$phunme = $phrow['Username'];
		$phimg = $phrow['Photo'];
		$phname = $phrow['Filename'];
		$phdate = $phrow['Date'];
		$phdes = $phrow['Description'];
	echo "<table class='photos'>";
	echo "<tr>";
	echo "<td>";
	echo "<div id='photoimage'><img src='$phimg' id='photocrop'></img></div>";
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td class='rowbutton' colspan='3'>";
	echo "<form action='friendphotoview.php' method='POST'>";
	echo "<input type='hidden' name='viewpic' value='$phimg' />";
	echo "<input type='hidden' name='fusr' value='$phunme' />";
	echo "<input type='submit' name='picview' id='photobutton' value='View Photo'>";
	echo "</form>";
	echo "</td>";
	echo "</tr>";
	echo "</table>";
	}
	?>
	<div style="display: block; clear: both;"></div>
<?php
	echo "<div id='pagenumbers'>";
		if($pages>=1 && $page<=$pages){
		for($x = 1; $x <= $pages ; $x++){
		echo ($x == $page) ? "<a id='selected' href='?page=$x'>$x</a> " : "<a id='notselected' href='?page=$x'>$x</a> ";	
		}
	}
	echo "</div>";
?>
</div>
</div>
<div class="footlink"><a href="terms.php" class="terms">Terms &amp; Conditions</a> . <a href="about.php" class="terms">About Webstar</a> . <a href="feedback.php" class="terms">Feedback</a></div>
<div id="footer">&copy;Copyrights 2013. Webstar Network.</div>
</body>
</html>