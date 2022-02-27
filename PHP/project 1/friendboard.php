<?php
session_start();
include('includes/header.php');
include('includes/connect.php');
include('includes/alerts.php');
if(!isset($_SESSION['user'])){
	echo $logdenyalert;
}
	$suname = $_SESSION['user'];
	$result = mysql_query("SELECT * FROM userdetails WHERE Username='$suname'");
 	while($row = mysql_fetch_array($result))
	{
		$userid = $row['ID'];
		$usrnme = $row['Username'];
		$fname = $row['Firstname'];
		$lname = $row['Lastname'];
		$gend = $row['Gender'];
		$mail = $row['Email'];
		$dob = $row['Dob'];
		$age = floor( (strtotime(date('Y-m-d')) - strtotime($dob)) / 31556926);
}
	$proresult = mysql_query("SELECT * FROM personaldetails WHERE Username='$suname'");
 	while($prow = mysql_fetch_array($proresult))
	{
		$userid = $prow['ID'];
		$occ = $prow['Occupation'];
		$cont = $prow['Contact'];
		$city = $prow['City'];
		$cntry = $prow['Country'];
		$schl = $prow['School'];
		$wrk = $prow['Work'];
		$lang = $prow['Language'];
		$abtme = $prow['About'];	
}
$imgresult = mysql_query("SELECT * FROM imagedetails WHERE Username='$suname'");
if(mysql_num_rows($imgresult)==0){
	echo $dbalert;
}
else{
	$row = mysql_fetch_assoc($imgresult);
	$imgloc = $row['Image'];
}
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
<div class="dashboard"><div id="profileimage"><?php echo "<a href='imageupload.php'><img src='$imgloc' id='profilecrop' /></a>"; ?></div><h2><?php echo $fname . ' ' . $lname; ?></h2><?php echo $userid; ?><br /><?php echo $gend; ?><br /><?php echo $mail; ?>&nbsp;<input type='button' onClick=parent.location='signout.php' value='Sign Out'></input><br /><br /></div><br />
<div id="menubar">
<div id="holder">
	<ul>
		<li><a id="onlink" href="main.php">Home</a></li>
		<li><a href="profile.php">Profile</a></li>
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
		<li><a href="main.php">Private Board</a></li>
		<li><a href="publicpost.php">Public Board</a></li>
		<li><a id="onlink" href="friendboard.php">Friends Board</a></li>
	</ul>		
	</div>
</div>
<div class="messageboard"><form action="bulletin.php" method="POST"><p>Post Message:</p><textarea name="msgpost"></textarea><br /><input type="submit" name="post" value='Post' id="postbutton"></input><br /></form></div><br />
<?php 
$perpage = 20;
$msgcount = mysql_query("SELECT COUNT(*) FROM messages WHERE Username IN (SELECT Username FROM friends WHERE friends.Username='$suname' OR friends.Friend='$suname')");
$pages = ceil(mysql_result($msgcount, 0) / $perpage);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $perpage;
$msgresult = mysql_query("SELECT * FROM messages WHERE Username IN (SELECT Username FROM friends WHERE friends.Username='$suname' OR friends.Friend='$suname') ORDER BY Time DESC LIMIT $start, $perpage");
 	while($msgrow = mysql_fetch_array($msgresult))
	{
	$postimg = $msgrow['Image'];
	$posttime = $msgrow['Time'];
	$postuname = $msgrow['Username'];
	$postm = $msgrow['Message'];
	$postthumb = mysql_query("SELECT * from imagedetails WHERE Username='$postuname'");
	while($imgrow = mysql_fetch_array($postthumb)){
		$imgthumb = $imgrow['Image'];	
		}
	echo "<div class='postbox'>";
	echo "<div id='postimg'><img id='postimgcrop' src='$imgthumb' /></div>";
	echo "<h4>";
	echo "<div id='posttime'>Posted on: $posttime</div>";
	echo $postuname;
	echo "</h4>";
	echo $postm;
	echo "<form action='friendpostdelete.php' method='POST'>";
	echo "<input type='hidden' name='deletemsg' value='$postm' />";
	echo "<input type='submit' name='delete' id='postdelete' value='delete'>";
	echo "</form>";	
	echo "</div>";	
		}
	echo "<div id='pagenumbers'>";
		if($pages>=1 && $page<=$pages){
		for($x = 1; $x <= $pages ; $x++){
		echo ($x == $page) ? "<a id='selected' href='?page=$x'>$x</a> " : "<a id='notselected' href='?page=$x'>$x</a> ";	
		}
	}
	echo "</div>";
?>
</div>
<br />
<div class="footlink"><a href="terms.php" class="terms">Terms &amp; Conditions</a> . <a href="about.php" class="terms">About Webstar</a> . <a href="feedback.php" class="terms">Feedback</a></div>
<div id="footer">&copy;Copyrights 2013. Webstar Network.</div>
</body>
</html>