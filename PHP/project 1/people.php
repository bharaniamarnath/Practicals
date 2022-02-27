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
<title>Webstar</title>
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
		<li><a id="onlink" href="friends.php">Friends</a></li>
		<li><a href="photos.php">Photos</a></li>
		<li><a href="inbox.php">Messages</a></li>
	</ul>		
	</div>
</div>
<div class="postboard">
<div id="submenubar">
<div id="holder">
	<ul>
		<li><a href="friends.php">Friends</a></li>
		<li><a id="onlink" href="people.php">People</a></li>
		<li><a href="friendrequest.php">Friend Requests</a></li>
	</ul>		
	</div>
</div>
<div class="messageboard">
<?php 
	$perpage = 20;
	$msgcount = mysql_query("SELECT COUNT(*) FROM userdetails");
	$pages = ceil(mysql_result($msgcount, 0) / $perpage);
	$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
	$start = ($page - 1) * $perpage;
	$listres = mysql_query("SELECT * FROM userdetails WHERE Username NOT IN (SELECT Username FROM friends WHERE friends.Username='$suname' OR friends.Friend='$suname') ORDER BY Created DESC LIMIT $start, $perpage");		
	while($frow = mysql_fetch_array($listres)){
		$fusrnme = $frow['Username'];
		$ffname = $frow['Firstname'];
		$flname = $frow['Lastname'];
		$fimgresult = mysql_query("SELECT * FROM imagedetails WHERE Username='$fusrnme'");
		while($imgrow = mysql_fetch_array($fimgresult)){
		$postimg = $imgrow['Image'];
		echo "<div class='friendbox'>";
		echo "<table>";
		echo "<tr>";
		echo "<td><div id='thumbimg'><img id='thumbimgcrop' src='$postimg' /></div></td>";
		echo "<td class='frienddt'>";
		echo "<font color='#009bc1' style='font-size:12px;'>";
		echo $ffname . ' ' . $flname;
		echo "<br />";
		echo "</font>";
		echo $fusrnme;
		echo "</td>";
		echo "<form action='replymail.php' method='POST'>";
		echo "<input type='hidden' name='toreply' value='$fusrnme' />";
		echo "<input type='submit' name='reply' id='addf' value='Send Message'>";
		echo "</form>";
		echo "<form action='sendrequest.php' method='POST'>";
		echo "<input type='hidden' name='friendname' value='$fusrnme' />";
		echo "<input type='submit' name='sendreq' id='addf' value='Add Friend'>";
		echo "</form>";
		echo "</tr>";
		echo "</table>";
		echo "</div>";
	}
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
<div class="footlink"><a href="terms.php" class="terms">Terms &amp; Conditions</a> . <a href="about.php" class="terms">About Webstar</a> . <a href="feedback.php" class="terms">Feedback</a></div>
<div id="footer">&copy;Copyrights 2013. Webstar Network.</div>
</body>
</html>