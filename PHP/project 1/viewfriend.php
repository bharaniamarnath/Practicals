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
		<li><a id="onlink" href="main.php">Profile</a></li>
		<li><a href="albumfriend.php">Photos</a></li>
	</ul>		
	</div>
</div>
<div class="messageboard">
<?php
if(isset($_POST['viewprofile'])){
		$fpro = mysql_real_escape_string($_POST['viewpro']);
		$_SESSION['friend']=$fpro;
		$fprores = mysql_query("SELECT * FROM userdetails WHERE Username='$fpro'");
		while($fprow = mysql_fetch_array($fprores)){
		$userid = $fprow['ID'];
		$usrnme = $fprow['Username'];
		$fname = $fprow['Firstname'];
		$lname = $fprow['Lastname'];
		$gend = $fprow['Gender'];
		$mail = $fprow['Email'];
		$dob = $fprow['Dob'];
		$age = floor( (strtotime(date('Y-m-d')) - strtotime($dob)) / 31556926);
}
	$fproresult = mysql_query("SELECT * FROM personaldetails WHERE Username='$fpro'");
 	while($fpprow = mysql_fetch_array($fproresult))
	{
		$userid = $fpprow['ID'];
		$occ = $fpprow['Occupation'];
		$cont = $fpprow['Contact'];
		$city = $fpprow['City'];
		$cntry = $fpprow['Country'];
		$schl = $fpprow['School'];
		$wrk = $fpprow['Work'];
		$lang = $fpprow['Language'];
		$abtme = $fpprow['About'];	
$fimgresult = mysql_query("SELECT * FROM imagedetails WHERE Username='$fpro'");
if(mysql_num_rows($fimgresult)==0){
	echo $dbalert;
}
else{
	$frow = mysql_fetch_assoc($fimgresult);
	$fimgloc = $frow['Image'];
}
}
echo "<table class='proform'>";
echo "<tr><td id='profilehead'><div id='profileimage'><?php echo '<a href='imageupload.php'><img src='$fimgloc' width='120' height='120'/></a></div></td><td id='profilehead'><h2>Profile - <font style='color:#000000;'>$usrnme</font></h2><br />";
echo "<form action='replymail.php' method='POST'>";
echo "<input type='hidden' name='toreply' value='$usrnme' />";
echo "<input type='submit' name='reply' id='addvf' value='Send Message'>";
echo "</form>";
echo "</td>";
echo "</tr>";
echo "</table>";
echo "<table class='proform'>";	
echo "<th>Basic Details</th>";
echo "<tr><td class='proform'>Username:</td> <td class='pdform'>$usrnme</td></tr>";
echo "<tr><td class='proform'>First name:</td> <td class='pdform'>$fname</td></tr>";
echo "<tr><td class='proform'>Last name:</td> <td class='pdform'>$lname</td></tr>";
echo "<tr><td class='proform'>Gender:</td> <td class='pdform'>$gend</td></tr>";
echo "<tr><td class='proform'>Date of Birth:</td> <td class='pdform'>$dob</td></tr>";
echo "<tr><td class='proform'>Age:</td> <td class='pdform'>$age</td></tr>";
echo "</table>";
echo "<table class='proform'>";
echo "<th>Contact Details</th>";
echo "<tr><td class='proform'>City:</td> <td class='pdform'>$city</td></tr>";
echo "<tr><td class='proform'>Country:</td> <td class='pdform'>$cntry</td></tr>";
echo "<tr><td class='proform'>Contact:</td> <td class='pdform'>$cont</td></tr>";
echo "<tr><td class='proform'>Email:</td> <td class='pdform'>$mail</td></tr>";
echo "</table>";
echo "<table class='proform'>";
echo "<th>Professional Details</th>";
echo "<tr><td class='proform'>Occupation:</td> <td class='pdform'>$occ</td></tr>";
echo "<tr><td class='proform'>School:</td> <td class='pdform'>$schl</td></tr>";
echo "<tr><td class='proform'>Work Place:</td> <td class='pdform'>$wrk</td></tr>";
echo "</table>";
echo "<table class='proform'>";
echo "<th>Personal Details</th>";
echo "<tr><td class='proform'>Languages known:</td> <td class='pdform'>$lang</td></tr>";
echo "<tr><td class='proform'>About Me: </td> <td class='pdform'>$abtme</td></tr>";
echo "</table>";
echo "</div>";
echo "<input type='button'' onclick='parent.location='people.php'' value='People'' />";
echo "<br />";
} 
?>
<div class="footlink"><a href="terms.php" class="terms">Terms &amp; Conditions</a> . <a href="about.php" class="terms">About Webstar</a> . <a href="feedback.php" class="terms">Feedback</a></div>
<div id="footer">&copy;Copyrights 2013. Webstar Network.</div>
</body>
</html>