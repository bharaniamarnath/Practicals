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
		<li><a href="calendar.php">calendar</a></li>
		<li><a id="onlink" href="activities.php">Activities</a></li>
		<li><a href="addevent.php">Add Events</a></li>
		</ul>
</div>
<div class="messageboard">
<div class="dashboard">
<h3>View activities by either selecting year or month.</h3>
<form action="activities.php" method="POST">
<table cellspacing="10">
<tr>
<td class="activitybox">Select activity by year: <select name="ayear">
		<option value="">Year</option>
		<?php for($i=2013;$i<=date('Y');$i++):?>
		<option value="<?php echo $i;?>"><?php echo $i;?></option>
		<?php endfor; ?>
	</select><br />
<input type="submit" name="viewyearactivity" id="activitybutton" value="View Year Activity" />
</td>
<td class="activitybox">Select activity by month: <select name="amonth">
		<option value="">Month</option>
		<?php for($i=1;$i<=12;$i++):?>
		<option value="<?php echo ($i<10)?'0'.$i:$i;?>"><?php echo $i;?></option>
		<?php endfor; ?>
	</select><br />
<input type="submit" name="viewmonthactivity" id="activitybutton" value="View Month Activity" /></td>
</tr>
</table>
</form>
</div><br />
<div class='dashboard'>
<?php
	if(!isset($_POST['viewyearactivity']) && !isset($_POST['viewmonthactivity'])){
		echo $noactivityalert;
	}	
	if(isset($_POST['viewyearactivity'])){
		$avyear = mysql_real_escape_string($_POST['ayear']);
		$avpost = mysql_query("SELECT * FROM messages WHERE Username='$suname' AND DATE_FORMAT(Time,'%Y')='$avyear' ORDER BY Time DESC");
			echo "<h2>Private messages  posted during year - <font color='#000'>$avyear</font></h2>";
			if(mysql_num_rows($avpost)==0){
				echo $noactivityalert;
			}
		while($avprow = mysql_fetch_array($avpost)){
			$avpimg = $avprow['Image'];
			$avpuname = $avprow['Username'];
			$avpmsg = $avprow['Message'];
			$avptime = $avprow['Time'];
			$postthumb = mysql_query("SELECT * from imagedetails WHERE Username='$avpuname'");
		while($imgrow = mysql_fetch_array($postthumb)){
			$imgthumb = $imgrow['Image'];	
		}
			echo "<div class='postbox'>";
			echo "<img id='postimg' src='$imgthumb' />";
			echo "<div id='posttime'>Posted on: $avptime</div>";
			echo "<h4>";
			echo $avpuname;
			echo "</h4>";
			echo $avpmsg;
			echo "</div>";
		}
		$avbul = mysql_query("SELECT * FROM bulletin WHERE Username='$suname' AND DATE_FORMAT(Time,'%Y')='$avyear' ORDER BY Time DESC");
			echo "<br /><h2>Public messages  posted during year - <font color='#000'>$avyear</font></h2>";
				if(mysql_num_rows($avbul)==0){
				echo $noactivityalert;
			}
		while($avbrow = mysql_fetch_array($avbul)){
			$avbimg = $avbrow['Image'];
			$avbuname = $avbrow['Username'];
			$avbmsg = $avbrow['Message'];
			$avbtime = $avbrow['Time'];
			$postthumb = mysql_query("SELECT * from imagedetails WHERE Username='$avbuname'");
	while($imgrow = mysql_fetch_array($postthumb)){
		$imgthumb = $imgrow['Image'];	
		}
			echo "<div class='postbox'>";
			echo "<img id='postimg' src='$imgthumb' />";
			echo "<div id='posttime'>Posted on: $avbtime</div>";
			echo "<h4>";
			echo $avbuname;
			echo "</h4>";
			echo $avbmsg;
			echo "</div>";
		}
		$avphotos = mysql_query("SELECT * FROM photodetails WHERE Username='$suname' AND DATE_FORMAT(Date,'%Y')='$avyear' ORDER BY Date DESC");
		echo "<br /><h2>Private images posted during year - <font color='#000'>$avyear</font></h2>";
			if(mysql_num_rows($avphotos)==0){
				echo $noactivityalert;
			}
		while($avirow = mysql_fetch_array($avphotos)){
			$aviphoto = $avirow['Photo'];
			$aviname = $avirow['Filename'];
			$avides = $avirow['Description'];
			$avidate = $avirow['Date'];
	echo "<table class='photos'>";
	echo "<tr>";
	echo "<td colspan='3'>";
	echo "<div id='photoimage'><img src='$aviphoto' id='photocrop'></img></div>";
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>";
	echo "<form action='photodelete.php' method='POST'>";
	echo "<input type='hidden' name='deletepic' value='$aviphoto' />";
	echo "<input type='submit' name='picdelete' id='photobutton' value='Delete'>";
	echo "</form>";
	echo "</td>";
	echo "<td>";
	echo "<form action='photoedit.php' method='POST'>";
	echo "<input type='hidden' name='editpic' value='$aviphoto' />";
	echo "<input type='submit' name='picedit' id='photobutton' value='Edit'>";
	echo "</form>";
	echo "</td>";
	echo "<td>";
	echo "<form action='photoview.php' method='POST'>";
	echo "<input type='hidden' name='viewpic' value='$aviphoto' />";
	echo "<input type='submit' name='picview' id='photobutton' value='View'>";
	echo "</form>";
	echo "</td>";
	echo "</tr>";
	echo "</table>";
		}
	echo "<div style='display: block; clear: both;'></div>";
		$avpubphotos = mysql_query("SELECT * FROM publicphotos WHERE Username='$suname' AND DATE_FORMAT(Date,'%Y')='$avyear' ORDER BY Date DESC");
		echo "<br /><h2>Public images posted during year - <font color='#000'>$avyear</font></h2>";
			if(mysql_num_rows($avpubphotos)==0){
				echo $noactivityalert;
			}
		while($avprow = mysql_fetch_array($avpubphotos)){
			$avpphoto = $avprow['Photo'];
			$avpname = $avprow['Filename'];
			$avpdes = $avprow['Description'];
			$avpdate = $avprow['Date'];
	echo "<table class='photos'>";
	echo "<tr>";
	echo "<td colspan='3'>";
	echo "<div id='photoimage'><img src='$avpphoto' id='photocrop'></img></div>";
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>";
	echo "<form action='publicphotodelete.php' method='POST'>";
	echo "<input type='hidden' name='deletepic' value='$avpphoto' />";
	echo "<input type='submit' name='picdelete' id='photobutton' value='Delete'>";
	echo "</form>";
	echo "</td>";
	echo "<td>";
	echo "<form action='publicphotoview.php' method='POST'>";
	echo "<input type='hidden' name='viewpic' value='$avpphoto' />";
	echo "<input type='submit' name='picview' id='photobutton' value='View'>";
	echo "</form>";
	echo "</td>";
	echo "</tr>";
	echo "</table>";
		}
		
	}
	
	if(isset($_POST['viewmonthactivity'])){
		$avmonth = mysql_real_escape_string($_POST['amonth']);
		$avpost = mysql_query("SELECT * FROM messages WHERE Username='$suname' AND DATE_FORMAT(Time,'%m')='$avmonth' ORDER BY Time DESC");
			echo "<h2>Private messages  posted during month - <font color='#000'>$avmonth </font></h2>";
			if(mysql_num_rows($avpost)==0){
				echo $noactivityalert;
			}
		while($avprow = mysql_fetch_array($avpost)){
			$avpimg = $avprow['Image'];
			$avpuname = $avprow['Username'];
			$avpmsg = $avprow['Message'];
			$avptime = $avprow['Time'];
			$postthumb = mysql_query("SELECT * from imagedetails WHERE Username='$avpuname'");
	while($imgrow = mysql_fetch_array($postthumb)){
		$imgthumb = $imgrow['Image'];	
		}
			echo "<div class='postbox'>";
			echo "<img id='postimg' src='$imgthumb' />";
			echo "<div id='posttime'>Posted on: $avptime</div>";
			echo "<h4>";
			echo $avpuname;
			echo "</h4>";
			echo $avpmsg;
			echo "</div>";
		}
		$avbul = mysql_query("SELECT * FROM bulletin WHERE Username='$suname' AND DATE_FORMAT(Time,'%m')='$avmonth' ORDER BY Time DESC");
			echo "<br /><h2>Public messages  posted during month - <font color='#000'>$avmonth </font></h2>";
				if(mysql_num_rows($avbul)==0){
				echo $noactivityalert;
			}
		while($avbrow = mysql_fetch_array($avbul)){
			$avbimg = $avbrow['Image'];
			$avbuname = $avbrow['Username'];
			$avbmsg = $avbrow['Message'];
			$avbtime = $avbrow['Time'];
			$postthumb = mysql_query("SELECT * from imagedetails WHERE Username='$avbuname'");
	while($imgrow = mysql_fetch_array($postthumb)){
		$imgthumb = $imgrow['Image'];	
		}
			echo "<div class='postbox'>";
			echo "<img id='postimg' src='$imgthumb' />";
			echo "<div id='posttime'>Posted on: $avbtime</div>";
			echo "<h4>";
			echo $avbuname;
			echo "</h4>";
			echo $avbmsg;
			echo "</div>";
		}
		$avphotos = mysql_query("SELECT * FROM photodetails WHERE Username='$suname' AND DATE_FORMAT(Date,'%m')='$avmonth' ORDER BY Date DESC");
		echo "<br /><h2>Private images posted during month - <font color='#000'>$avmonth </font></h2>";
			if(mysql_num_rows($avphotos)==0){
				echo $noactivityalert;
			}
		while($avirow = mysql_fetch_array($avphotos)){
			$aviphoto = $avirow['Photo'];
			$aviname = $avirow['Filename'];
			$avides = $avirow['Description'];
			$avidate = $avirow['Date'];
	echo "<table class='photos'>";
	echo "<tr>";
	echo "<td colspan='3'>";
	echo "<div id='photoimage'><img src='$aviphoto' id='photocrop'></img></div>";
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>";
	echo "<form action='photodelete.php' method='POST'>";
	echo "<input type='hidden' name='deletepic' value='$aviphoto' />";
	echo "<input type='submit' name='picdelete' id='photobutton' value='Delete'>";
	echo "</form>";
	echo "</td>";
	echo "<td>";
	echo "<form action='photoedit.php' method='POST'>";
	echo "<input type='hidden' name='editpic' value='$aviphoto' />";
	echo "<input type='submit' name='picedit' id='photobutton' value='Edit'>";
	echo "</form>";
	echo "</td>";
	echo "<td>";
	echo "<form action='photoview.php' method='POST'>";
	echo "<input type='hidden' name='viewpic' value='$aviphoto' />";
	echo "<input type='submit' name='picview' id='photobutton' value='View'>";
	echo "</form>";
	echo "</td>";
	echo "</tr>";
	echo "</table>";
		}
	echo "<div style='display: block; clear: both;'></div>";
		$avpubphotos = mysql_query("SELECT * FROM publicphotos WHERE Username='$suname' AND DATE_FORMAT(Date,'%m')='$avmonth' ORDER BY Date DESC");
		echo "<br /><h2>Public images posted during month - <font color='#000'>$avmonth </font></h2>";
			if(mysql_num_rows($avpubphotos)==0){
				echo $noactivityalert;
			}
		while($avprow = mysql_fetch_array($avpubphotos)){
			$avpphoto = $avprow['Photo'];
			$avpname = $avprow['Filename'];
			$avpdes = $avprow['Description'];
			$avpdate = $avprow['Date'];
	echo "<table class='photos'>";
	echo "<tr>";
	echo "<td colspan='2'>";
	echo "<div id='photoimage'><img src='$avpphoto' id='photocrop'></img></div>";
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>";
	echo "<form action='publicphotodelete.php' method='POST'>";
	echo "<input type='hidden' name='deletepic' value='$avpphoto' />";
	echo "<input type='submit' name='picdelete' id='photobutton' value='Delete'>";
	echo "</form>";
	echo "</td>";
	echo "<td>";
	echo "<form action='publicphotoview.php' method='POST'>";
	echo "<input type='hidden' name='viewpic' value='$avpphoto' />";
	echo "<input type='submit' name='picview' id='photobutton' value='View'>";
	echo "</form>";
	echo "</td>";
	echo "</tr>";
	echo "</table>";
		}		
	}
?>
<div style="display: block; clear: both;"></div>
</div>
</div>
</div>
</div>
<div class="footlink"><a href="terms.php" class="terms">Terms &amp; Conditions</a> . <a href="about.php" class="terms">About Webstar</a> . <a href="feedback.php" class="terms">Feedback</a></div>
<div id="footer">&copy;Copyrights 2013. Webstar Network.</div>
</body>
</html>