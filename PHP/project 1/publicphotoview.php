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
		<li><a href="photos.php">Private Photos</a></li>
		<li><a id="onlink" href="publicphotos.php">Public Photos</a></li>
		<li><a href="uploadphotos.php">Upload Photos</a></li>
	</ul>		
	</div>
</div>
<div class="messageboard">
<?php
if(isset($_POST['picview'])){
	$picvdet = mysql_real_escape_string($_POST['viewpic']);
	$vpicres = mysql_query("SELECT * FROM publicphotos WHERE Photo='$picvdet'");
	while($vpicrow = mysql_fetch_array($vpicres)){
		$vpicimg = $vpicrow['Photo'];
		$vpicname= $vpicrow['Filename'];
		$vpicuname = $vpicrow['Username'];
		$vpicdesc = $vpicrow['Description'];
		$vpicdate = $vpicrow['Date'];
		$vpicvote = $vpicrow['Vote'];
		echo "<div class='photobox'>";
		echo "<table class='photoedit'>";
		echo "<form action='publiccomment.php' method='POST'>";
		echo "<th><h4>Private Photo:<font style='color:#000;'> $vpicname</font> - Photo Details</h4></th>";
		echo "<tr>";
		echo "<td class='picedit'><img src=$vpicimg height=75% width=75% /></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td class='piceditdetail'><h4>Photo Title: <font style='color:#000;'>$vpicname</font></h4><h4>Uploaded by: <font style='color:#000;'>$vpicuname</font></h4><h4>Updated on: <font style='color:#000;'>$vpicdate</font></h4><h4>Photo Description: <font style='color:#000;'>$vpicdesc</font></h4></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td class='picedit'>Comment Photo: <br /><br /><textarea name='piccomm'></textarea></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<input type='hidden' name='commentpic' value='$vpicimg' />";
		echo "<td><input type='submit' name='commpic' id='photoedit' value='Comment'>";
		echo "<input type='button' onClick=parent.location='publicphotos.php' value='Back' id='photoedit'></input></td>";
		echo "</form>";
		echo "<form action='photovotes.php' method='POST'>";
		echo "<td class='picedit'><input type='hidden' name='picdate' value='$vpicdate' />";
		echo "<input type='hidden' name='commentpic' value='$vpicimg' />";
		echo "<input type='submit' name='vote' value='Vote' id='photoedit' style='margin-top:5px;'></input></td>";
		echo "<div class='votes'>Votes: <font style='color:#000;'>$vpicvote</font></div>";
		echo "</form>";
		echo "</tr>";
		echo "</table>";
		$dispcomm = mysql_query("SELECT * FROM photocomments WHERE Photo='$vpicimg' ORDER BY Date DESC");
		while($dcrow = mysql_fetch_array($dispcomm)){
			$dcuname = $dcrow['Username'];
			$dccomment = $dcrow['Comment'];
			$dcdate = $dcrow['Date'];
			$dcpic = mysql_query("SELECT * FROM imagedetails WHERE Username='$dcuname'");
			while($dcprow = mysql_fetch_array($dcpic)){
				$dcupic = $dcprow['Image'];
			echo "<div class='postbox'>";
			echo "<img id='postimg' src='$dcupic' />";
			echo "<div id='posttime'>Posted on: $dcdate</div>";
			echo "<h4>";
			echo $dcuname;
			echo "</h4>";
			echo $dccomment;
			echo "<form action='deletecomment.php' method='POST'>";
			echo "<input type='hidden' name='commdate' value='$dcdate' />";
			echo "<input type='hidden' name='commuser' value='$dcuname' />";
			echo "<input type='submit' name='delete' id='postdelete' value='delete'>";
	echo "</form>";		
		echo "</div>";
		}
		}
	}
	
}
?>
</div>
</div>
</div>
<div class="footlink"><a href="terms.php" class="terms">Terms &amp; Conditions</a> . <a href="about.php" class="terms">About Webstar</a> . <a href="feedback.php" class="terms">Feedback</a></div>
<div id="footer">&copy;Copyrights 2013. Webstar Network.</div>
</body>
</html>