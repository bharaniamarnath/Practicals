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
		<li><a href="profile.php">Profile</a></li>
		<li><a id="onlink" href="calendar.php">calendar</a></li>
		<li><a href="activities.php">Activities</a></li>
		<li><a href="addevent.php">Add Events</a></li>
		</ul>
</div>
<div class="messageboard">
<?php
$perpage = 10;
$msgcount = mysql_query("SELECT COUNT(*) FROM messages WHERE Username='$suname'");
$pages = ceil(mysql_result($msgcount, 0) / $perpage);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $perpage;
	$listevent = mysql_query("SELECT * FROM events WHERE Username='$suname' ORDER BY Included DESC LIMIT $start, $perpage");
		if(mysql_num_rows($listevent)==0){
			echo $emptyeventalert;
			exit();
		}
	while($erow = mysql_fetch_array($listevent)){
		$evname = $erow['Event'];
		$evday = $erow['Date'];
		$evtype = $erow['Type'];
		$evdes = $erow['Description'];
		$evinc = $erow['Included'];
		echo "<table class='calendar'>";
		echo "<tr>";
		echo "<td colspan='2'><h2>
$evname</h2></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td class='eventlist'>Event Date: </td>";
		echo "<td>$evday</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td class='eventlist'>Event Type: </td>";
		echo "<td>$evtype</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td class='eventlist'>About Event: </td>";
		echo "<td>$evdes</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td class='eventlist'>Included on: </td>";
		echo "<td>$evinc</td>";
		echo "</tr>";
		echo "<form action='eventdelete.php' method='POST'>";
		echo "<tr>";
		echo "<input type='hidden' name='evntnme' value='$evname' />";
		echo "<input type='hidden' name='evntdte' value='$evday' />"; 
		echo "<td colspan='2'><input type='submit' id='photobutton' name='delevent' value='Delete Event' style='float:right;'/></td>";
		echo "</tr>";
		echo "</form>";
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
<div class="footlink"><a href="terms.php" class="terms">Terms &amp; Conditions</a> . <a href="about.php" class="terms">About Webstar</a> . <a href="feedback.php" class="terms">Feedback</a></div>
<div id="footer">&copy;Copyrights 2013. Webstar Network.</div>
</body>
</html>
	