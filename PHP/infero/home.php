<?php
session_start();
include('includes/connect.php');
if(!isset($_SESSION['user'])){
echo "User not logged in";
exit();
}
$suname = $_SESSION['user'];
$result = mysql_query("SELECT * FROM userdetails WHERE Username='$suname'");
while($row = mysql_fetch_array($result)){
$suid = $row['UserID'];
$sufname = $row['FirstName'];
$sulname = $row['LastName'];
$sumail = $row['Email'];
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
<li><a href="home.php">Home</a></li>
<li><a href="articles.php">Articles</a></li>
<li><a href="downloads.php">Downloads</a></li>
<li><a href="forum.php">Forum</a></li>
</ul>
</div>
<div id="searchbar">
<input type="text" name="keyword" id="keyword" /><input type="submit" name="search" id="search" value="" />
</div>
</div>
<div id="content">
<div id="userpanel">
<h5>Welcome, <?php echo $sufname . " " . $sulname; ?></h5>
<p><font color="#ff9900">User Details</font><br />
User ID: <?php echo $suid; ?><br />
Username: <?php echo $suname; ?><br />
Email: <?php echo $sumail; ?></p>
<form action="signout.php" method="POST">
<input type="submit" name="logout" id="logout" value="Logout" />
</form>
</div>
<div id="leftpanel">
<h5 style="color: #00d9ff;">Menu Panel</h5>
<ul>
<li><a href="articles.php">Articles</a></li>
<li><a href="news.php">Infero News</a></li>
<li><a href="downloads.php">Downloads</a></li>
<li><a href="forum.php">Discussions</a></li>
<li><a href="members.php">Members</a></li>
<li><a href="adminlogin.php">Admin Panel</a></li>
<li><a href="authors.php">Authors Desk</a></li>
</ul>
</div>
<div id="maincontent">
<div id="sitepath">
<a href="#">Infero</a><img src="images/patharrow.png" /><a href="home.php">Home</a>
</div>
<div id="welcome">
<h5>Welcome to Infero Blog</h5>
<p>Hello, and welcome to Infero. Check out the interesting articles, forums, discussions, downloads and many more useful informations.</p>
<input type="button" id="close" value="close"></input>
</div>
<div id="newarticles">
<h5>Recent Articles</h5>
<?php 
$aresult = mysql_query("SELECT * FROM articles WHERE DATE(Date)=CURDATE()");
if(mysql_num_rows($aresult) == 0){
	echo "<div id='articlebox'>";
	echo "<div id='adate'>No articles posted recently.</div>";
	echo "</div>";
	}
while($arow = mysql_fetch_array($aresult)){
$atitle = $arow['Title'];
$acontent = $arow['Content'];
$auploader = $arow['Uploader'];
$adate = $arow['Date'];
	echo "<div id='articlebox'>";
	echo "<h4>";
	echo $atitle;
	echo "</h4>";
	echo "<div id='adate'>Posted on: $adate</div>";
	echo $acontent;
	echo "<div id='auploader'>Posted by: $auploader</div>";
	echo "</div>";
}
?>
</div>
<div id="newarticles">
<h5>Latest Infero News</h5>
<?php 
$nresult = mysql_query("SELECT * FROM news WHERE DATE(Date)=CURDATE()");
if(mysql_num_rows($nresult) == 0){
	echo "<div id='articlebox'>";
	echo "<div id='adate'>No latest news are currently updated.</div>";
	echo "</div>";
	}
while($nrow = mysql_fetch_array($nresult)){
$ntitle = $nrow['Title'];
$ncontent = $nrow['Content'];
$nuploader = $nrow['Uploader'];
$ndate = $nrow['Date'];
	echo "<div id='articlebox'>";
	echo "<h4>";
	echo $ntitle;
	echo "</h4>";
	echo "<div id='adate'>Posted on: $ndate</div>";
	echo $ncontent;
	echo "<div id='auploader'>Posted by: $nuploader</div>";
	echo "</div>";
}
?>
</div>
<div id="newarticles">
<h5>Recently Added Downloads</h5>
<?php 
$dresult = mysql_query("SELECT * FROM downloads WHERE DATE(Date)=CURDATE()");
if(mysql_num_rows($dresult) == 0){
	echo "<div id='articlebox'>";
	echo "<div id='adate'>No recent download files uploaded.</div>";
	echo "</div>";
	}
while($drow = mysql_fetch_array($dresult)){
$dtitle = $drow['Title'];
$dcontent = $drow['Content'];
$dlink = $drow['Link'];
$dsize = $drow['Size'];
$duploader = $drow['Uploader'];
$ddate = $drow['Date'];
	echo "<div id='articlebox'>";
	echo "<h4>";
	echo $dtitle;
	echo "</h4>";
	echo "<div id='adate'>Posted on: $ddate</div>";
	echo $dcontent;
	echo "<br />";
	echo "<div id='fsize'>File size: $dsize</div>";
	echo "<a id='downloadbutton' href='$dlink'>Download File</a>";
	echo "<div id='auploader'>Posted by: $duploader</div>";
	echo "</div>";
}
?>
</div>
</div>
<div id="socialpanel">
<h5>Find Infero Networks</h5>
<a href="http://www.facebook.com/infero"><img src="images/fb.png" alt="facebook"></img></a>
<a href="http://www.twitter.com/infero"><img src="images/twitter.png" alt="twitter"></img></a>
<a href="http://www.pinterest.com/infero"><img src="images/pinterest.png" alt="pinterest"></img></a>
<a href="http://www.linkedin.com/infero"><img src="images/linkedin.png" alt="linkedin"></img></a>
</div>
</div>
<div id="footer">
<ul>
<li><a href="home.php">Home</a></li>
<li><a href="articles.php">Articles</a></li>
<li><a href="downloads.php">Downloads</a></li>
<li><a href="forum.php">Forum</a></li>
<li><a href="feedback.php">Feedback</a></li>
</ul>
<p>&copy; Copyrights 2013. Infero. All rights reserved.</p>
</div>
</div>
</body>
</html>