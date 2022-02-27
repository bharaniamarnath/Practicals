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
		<li><a href="inbox.php">Inbox</a></li>
		<li><a id="onlink" href="composemail.php">Compose Mail</a></li>
	</ul>		
	</div>
</div>
<div class="messageboard">
<?php
if(isset($_POST['reply'])){
$replyto = mysql_real_escape_string($_POST['toreply']);
echo "<h4>Compose new message</h4>";
echo "<table>";
echo "<form action='sendmail.php' method='POST'>";
echo "<table class='postbox' style='padding-top: 10px;'>";
echo "<tr>";
echo "<td class='mail'>To: </td><td class='mail'><input type='text' name='reciever' value='$replyto' /><font color='#309cbc' style='padding-left: 5px; font-size: 11px;'></font></td>";
echo "</tr>";
echo "<tr>";
echo "<td class='mail'>Subject: </td><td class='mail'><input type='text' name='subject' /></td>";
echo "</tr>";
echo "<tr>";
echo "<td class='mail'>Message: </td><td class='mail'><textarea name='mailbody'></textarea><br /><br /></td>";
echo "</tr>";
echo "<tr>";
echo "<td class='mail'></td><td class='mail'><input type='submit' value='Send Message' name='send' id='sendbutton'' /></td>";
echo "</tr>";
echo "</table>";
}
?>
</div>
<div class="footlink"><a href="terms.php" class="terms">Terms &amp; Conditions</a> . <a href="about.php" class="terms">About Webstar</a> . <a href="feedback.php" class="terms">Feedback</a></div>
<div id="footer">&copy;Copyrights 2013. Webstar Network.</div>
</body>
</html>