<?php
session_start();
include('includes/connect.php');
if(!isset($_SESSION['admin'])){
echo "Admin not logged in";
exit();
}
$suname = $_SESSION['admin'];
$result = mysql_query("SELECT * FROM admindetails WHERE Username='$suname'");
while($row = mysql_fetch_array($result)){
$suid = $row['AdminID'];
$sufname = $row['Firstname'];
$sulname = $row['Lastname'];
}
?>
<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#close").click(function(){
    $("#welcome").hide();
  });
});
</script>
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css" />
</head>
<body>
<div id="container">
<div id="header">
<img src="images/headerlogo.png" />
<div class="menu">
<ul>
<li><a href="adminpanel.php">Home</a></li>
<li><a href="articleupload.php">Articles</a></li>
<li><a href="fileupload.php">Downloads</a></li>
<li><a href="createforum.php">Forum</a></li>
</ul>
</div>
<div id="searchbar">
<input type="text" name="keyword" id="keyword" /><input type="submit" name="search" id="search" value="" />
</div>
</div>
<div id="content">
<div id="adminleftpanel">
<h5 style="color: #00d9ff;">Admin Panel</h5>
<ul>
<li><a href="articleupload.php">Upload Articles</a></li>
<li><a href="newsupload.php">Upload News</a></li>
<li><a href="fileupload.php">Upload Files</a></li>
<li><a href="viewfeed.php">Feedbacks</a></li>
</ul>
</div>
<div id="maincontent">
<div id="sitepath">
<a href="#">Infero</a><img src="images/patharrow.png" /><a href="viewfeed.php">Feedbacks</a>
</div>
<div id="welcome">
<h5>Admins Control Panel</h5>
<p>Hello, and welcome to Infero Feedbacks section.</p>
<input type="button" id="close" value="close"></input>
</div>
<div id="newarticles">
<h5>Feedbacks</h5>
<?php 
$aresult = mysql_query("SELECT * FROM feedback WHERE DATE(Date)=CURDATE()");
if(mysql_num_rows($aresult) == 0){
	echo "<div id='articlebox'>";
	echo "<div id='adate'>No feedbacks were added recently.</div>";
	echo "</div>";
	}
while($arow = mysql_fetch_array($aresult)){
$asender= $arow['Sender'];
$amail = $arow['Email'];
$amessage = $arow['Content'];
$adate = $arow['Date'];
	echo "<div id='articlebox'>";
	echo "<h4>";
	echo $asender;
	echo "</h4>";
	echo "<div id='adate'>Email: $amail</div>";
	echo "<div id='adate'>Sent on: $adate</div>";
	echo $amessage;
	echo "</div>";
}
?>
</div>
</div>
<div id="userpanel">
<h5>Welcome, <?php echo $sufname . " " . $sulname; ?></h5>
<p><font color="#ff9900">Admin Details</font><br />
Admin ID: <?php echo $suid; ?><br />
Username: <?php echo $suname; ?><br />
<form action="adminlogout.php" method="POST">
<input type="submit" name="logout" id="logout" value="Admin Logout" />
</form>
</div>
</div>
<div id="footer">
<ul>
<li><a href="adminpanel.php">Home</a></li>
<li><a href="articleupload.php">Articles</a></li>
<li><a href="newsupload.php">News</a></li>
<li><a href="fileupload.php">Downloads</a></li>
</ul>
<p>&copy; Copyrights 2013. Infero. All rights reserved.</p>
</div>
</div>
</body>
</html>