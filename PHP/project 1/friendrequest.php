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
<title>Webstar - Friends</title>
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
		<li><a href="people.php">People</a></li>
		<li><a id="onlink" href="friendrequest.php">Friend Requests</a></li>
	</ul>		
	</div>
</div>
<div class="messageboard">
	<?php 
	$perpage = 6;
	$msgcount = mysql_query("SELECT COUNT(*) FROM requests WHERE Requested='$suname'");
	$pages = ceil(mysql_result($msgcount, 0) / $perpage);
	$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
	$start = ($page - 1) * $perpage;
	$listres = mysql_query("SELECT * FROM requests WHERE Requested='$suname' ORDER BY Date DESC LIMIT $start, $perpage");
	if(mysql_num_rows($listres)==0){
		echo $nofreqalert .mysql_error();
	}
	while($frow = mysql_fetch_array($listres)){
		$fusrnme = $frow['Username'];
			$frnddet = mysql_query("SELECT * FROM userdetails WHERE Username='$fusrnme'");
		while($fdrow = mysql_fetch_array($frnddet)){
		$ffname = $fdrow['Firstname'];
		$flname = $fdrow['Lastname'];
		$fgend = $fdrow['Gender'];
		$fimgresult = mysql_query("SELECT * FROM imagedetails WHERE Username='$fusrnme'");
		while($imgrow = mysql_fetch_array($fimgresult)){
		$postimg = $imgrow['Image'];
		echo "<div class='friendbox'>";
		echo "<table>";
		echo "<tr>";
		echo "<td><div id='thumbimg'><img id='thumbimgcrop' src='$postimg' /></div></td>";
		echo "<td class='frienddt'><h3>$ffname $flname</h3>$fusrnme<br />$fgend</td>";
		echo "<form action='viewfriend.php' method='POST'>";
		echo "<input type='hidden' name='viewpro' value='$fusrnme' />";
		echo "<input type='submit' name='viewprofile' id='addf' value='View Profile'>";
		echo "</form>";
		echo "<form action='addfriend.php' method='POST'>";
		echo "<input type='hidden' name='addfrnd' value='$fusrnme' />";
		echo "<input type='submit' name='addfriend' id='addf' value='Accept Request'>";
		echo "</form>";
		echo "<form action='deleterequest.php' method='POST'>";
		echo "<input type='hidden' name='reqfrnd' value='$fusrnme' />";
		echo "<input type='submit' name='deleterequest' id='addf' value='Delete Request'>";
		echo "</form>";
		echo "</tr>";
		echo "</table>";
		echo "</div>";
	}
	}
	}
	?>
	<br />
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
<br />
</div>
</div>
</div>
<div class="footlink"><a href="terms.php" class="terms">Terms &amp; Conditions</a> . <a href="about.php" class="terms">About Webstar</a> . <a href="feedback.php" class="terms">Feedback</a></div>
<div id="footer">&copy;Copyrights 2013. Webstar Network.</div>
</body>
</html>