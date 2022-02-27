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
<title>Sign Up</title>
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
		<li><a href="photos.php">Photos</a></li>
		<li><a id="onlink" href="mail.php">Messages</a></li>
	</ul>		
	</div>
</div>
<div class="postboard">
<div id="submenubar">
<div id="holder">
	<ul>
		<li><a id="onlink" href="inbox.php">Inbox</a></li>
		<li><a href="composemail.php">Compose Mail</a></li>
	</ul>		
	</div>
</div>
<div class="messageboard">
<?php 
$perpage = 20;
$msgcount = mysql_query("SELECT COUNT(*) FROM maildetails WHERE Reciever='$suname'");
$pages = ceil(mysql_result($msgcount, 0) / $perpage);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $perpage;
$chkmail = mysql_query("SELECT * FROM maildetails WHERE Reciever='$suname' ORDER BY Date DESC LIMIT $start, $perpage");
if(mysql_num_rows($chkmail)==0){
	echo $emptyinboxalert;
}
while($cmrow = mysql_fetch_array($chkmail)){
	$cmsender = $cmrow['Sender'];
	$cmsubj = $cmrow['Subject'];
	$cmbody = $cmrow['Mail'];
	$cmdate = $cmrow['Date'];
	echo "<table class='mailbox'>";
	echo "<tr>";
	echo "<td class='mail'>Sender: </td><td>$cmsender</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td class='mail'>Sent on: </td><td>$cmdate</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td class='mail'>Subject: </td><td>$cmsubj</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td class='mail'>Message: </td><td>$cmbody</td>";
	echo "</tr>";
	echo "</tr>";
	echo "<tr>";
	echo "<td></td><td>
	<form action='replymail.php' method='POST'>
	<input type='hidden' name='toreply' value='$cmsender'></input>
	<input type='submit'id='sendbutton' name='reply' value='Reply' style='margin-top:12px;' />
	</form>
	<form action='deletemail.php' method='POST'>
	<input type='hidden' name='maildate' value='$cmdate'></input>
	<input type='hidden' name='delmail' value='$cmbody'></input>
	<input type='submit'id='sendbutton' name='delete' value='Delete' />
	</form>";
	echo "</tr>";
	echo "</table>";
}
?>
</div>
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
</div>
<div class="footlink"><a href="terms.php" class="terms">Terms &amp; Conditions</a> . <a href="about.php" class="terms">About Webstar</a> . <a href="feedback.php" class="terms">Feedback</a></div>
<div id="footer">&copy;Copyrights 2013. Webstar Network.</div>
</body>
</html>