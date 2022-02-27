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
<a href="home.php">Infero</a><img src="images/patharrow.png" /><a href="forum.php">Forum</a>
</div>
<div id="welcome">
<h5>Welcome to Infero Blog</h5>
<p>Hello, and welcome to Infero Forum section. Check out the interesting articles, forums, discussions, downloads and many more useful informations.</p>
<input type="button" id="close" value="close"></input>
</div>
<div id="newarticles">
<h5>Infero Forum</h5>
<form action="createforum.php" method="POST">
<input type="submit" id="forumbutton" value="Create New Topic" name="forumbutton"></input>
</form>
<?php 
$aresult = mysql_query("SELECT * FROM forum ORDER BY Date DESC");
while($arow = mysql_fetch_array($aresult)){
$aid = $arow['ForumID'];
$atitle = $arow['Title'];
$acontent = $arow['Content'];
$auploader = $arow['Uploader'];
$adate = $arow['Date'];
	echo "<div id='articlebox'>";
	echo "<form action='forumcomment.php' method='POST'>";
	echo "<h3>";
	echo $atitle;
	echo "</h3>";
	echo "<div id='fid'>Forum ID: $aid</div>";
	echo "<div id='adate'>Posted on: $adate</div>";
	echo "$acontent<br />";
	echo "<div id='auploader'>Posted by: $auploader</div><br />";
	echo "Write Comment: <br /><textarea name='forumcomment' id='forumcomment'></textarea><br />";
	echo "<input type='hidden' value='$atitle' name='articletitle' />";
	echo "<input type='hidden' value='$aid' name='articleid' />";
	echo "<td><input type='submit' name='comment' id='photoedit' value='Comment'>";
	echo "</form>";
$comments = mysql_query("SELECT * FROM forumcomments WHERE ForumID='$aid' ORDER BY Date DESC");
while($crow = mysql_fetch_array($comments)){
$ccomment= $crow['Comment'];
$cuploader = $crow['Uploader'];
$cdate = $crow['Date'];
	echo "<div id='commentbox'>";
	echo "<h4>$cuploader</h4>";
	echo "<div id='adate'>Posted on: $cdate</div>";
	echo $ccomment;
	echo "</div>";
}
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
</ul>
<p>&copy; Copyrights 2013. Infero. All rights reserved.</p>
</div>
</div>
</body>
</html>