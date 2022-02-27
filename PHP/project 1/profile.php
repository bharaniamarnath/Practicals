<?php
session_start();
include('includes/header.php');
include('includes/connect.php');
include('includes/alerts.php');
if(!isset($_SESSION['user'])){
	echo $logdenyalert;
}
	$result = mysql_query("SELECT * FROM userdetails WHERE Username='$_SESSION[user]'");
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
	$proresult = mysql_query("SELECT * FROM personaldetails WHERE Username='$_SESSION[user]'");
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
$imgresult = mysql_query("SELECT * FROM imagedetails WHERE Username='$_SESSION[user]'");
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
		<li><a id="onlink" href="profile.php">Profile</a></li>
		<li><a href="calendar.php">calendar</a></li>
		<li><a href="activities.php">Activities</a></li>
		<li><a href="addevent.php">Add Events</a></li>
	</ul>		
	</div>
</div>
<div class="messageboard">
<table class="proform">
<tr><td id="profilehead"><div id="profileimage"><?php echo "<a href='imageupload.php'><img src='$imgloc' id='profilecrop' /></a>"; ?></div></td><td id="profilehead"><h2>Profile - <font style="color:#000000;"><?php echo $usrnme; ?></font></h2></td></tr>
</table>
<table class="proform">	
<th>Basic Details</th>
		<tr><td class="proform">Username:</td> <td class="pdform"><?php echo $usrnme; ?></td></tr>
		<tr><td class="proform">First name:</td> <td class="pdform"><?php echo $fname; ?></td></tr>
		<tr><td class="proform">Last name:</td> <td class="pdform"><?php echo $lname; ?></td></tr>
		<tr><td class="proform">Gender:</td> <td class="pdform"><?php echo $gend; ?></td></tr>
		<tr><td class="proform">Date of Birth:</td> <td class="pdform"><?php echo $dob; ?></td></tr>
		<tr><td class="proform">Age:</td> <td class="pdform"><?php echo $age; ?></td></tr>
</table>
<table class="proform">
<th>Contact Details</th>
		<tr><td class="proform">City:</td> <td class="pdform"><?php echo $city; ?></td></tr>
		<tr><td class="proform">Country:</td> <td class="pdform"><?php echo $cntry; ?></td></tr>
		<tr><td class="proform">Contact:</td> <td class="pdform"><?php echo $cont; ?></td></tr>
		<tr><td class="proform">Email:</td> <td class="pdform"><?php echo $mail; ?></td></tr>
</table>
<table class="proform">
<th>Professional Details</th>
		<tr><td class="proform">Occupation:</td> <td class="pdform"><?php echo $occ; ?></td></tr>
		<tr><td class="proform">School:</td> <td class="pdform"><?php echo $schl; ?></td></tr>
		<tr><td class="proform">Work Place:</td> <td class="pdform"><?php echo $wrk; ?></td></tr>
</table>
<table class="proform">
<th>Personal Details</th>
		<tr><td class="proform">Languages known:</td> <td class="pdform"><?php echo $lang; ?></td></tr>
		<tr><td class="proform">About Me: </td> <td class="pdform"><?php echo $abtme; ?></td></tr>
		</table>
		<input type='button' onClick=parent.location='updateprofile.php' value='Profile Update'></input>&nbsp;
</div><br />
</div>
<div class="footlink"><a href="terms.php" class="terms">Terms &amp; Conditions</a> . <a href="about.php" class="terms">About Webstar</a> . <a href="feedback.php" class="terms">Feedback</a></div>
<div id="footer">&copy;Copyrights 2013. Webstar Network.</div>
</body>
</html>