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
		<li><a href="activities.php">Activities</a></li>
		<li><a id="onlink" href="addevent.php">Add Events</a></li>
		</ul>
</div>
<div class="messageboard">
<h4>Add an event to the calendar: </h4>
<div class="postbox"><br />
<form action="eventsave.php" method="POST">
<table>
	<tr>
		<td class="event">Event Name:</td><td class="event"><input type="text" name="eventname"/></td>
	</tr>
	<tr><td class="event">Event Date:</td><td class="event"><select name="edate">
		<option value="">Date</option>
		<?php for($i=1;$i<=31;$i++):?>
		<option value="<?php echo ($i<10)?'0'.$i:$i;?>"><?php echo $i;?></option>
		<?php endfor; ?>
	</select>&nbsp;
		<select name="emonth">
		<option value="">Month</option>
		<?php for($i=1;$i<=12;$i++):?>
		<option value="<?php echo ($i<10)?'0'.$i:$i;?>"><?php echo $i;?></option>
		<?php endfor; ?>
	</select>&nbsp;
			<select name="eyear">
		<option value="">Year</option>
		<?php for($i=1910;$i<=date('Y');$i++):?>
		<option value="<?php echo $i;?>"><?php echo $i;?></option>
		<?php endfor; ?>
	</select></td></tr>
	<tr><td class="event">Event Type:</td><td class="event"><select name="eventtype">
		<option  value=""/>
		<option value="Birthday">Birthday</option>
		<option value="Personal">Personal</option>
		<option value="School">School</option>
		<option value="Work">Work</option>
		<option value="Festival">Festival</option>
		<option value="Public">Public</option>
		<option value="National">National</option>
		<option value="World">World</option>
		<option value="Sport">Sport</option>
		<option value="Media">Media</option>
		<option value="Others">Others</option>
		</select>
	</td></tr><tr><td class="event">Event Description: </td><td class="event"><textarea name="eventdes"></textarea></td></tr>
	<tr><td class="event"></td><td class="event"><input type="submit" name="addeve" value="Add Event"/></td>
</table>
</form>
</div>
</div>
</div>
</div>
<div class="footlink"><a href="terms.php" class="terms">Terms &amp; Conditions</a> . <a href="about.php" class="terms">About Webstar</a> . <a href="feedback.php" class="terms">Feedback</a></div>
<div id="footer">&copy;Copyrights 2013. Webstar Network.</div>
</body>
</html>