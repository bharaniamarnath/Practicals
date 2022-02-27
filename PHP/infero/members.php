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
<a href="home.php">Infero</a><img src="images/patharrow.png" /><a href="members.php">Members</a>
</div>
<div id="welcome">
<h5>Welcome to Infero Blog</h5>
<p>Hello, and welcome to Infero Members section. Check out the interesting articles, forums, discussions, downloads and many more useful informations.</p>
<input type="button" id="close" value="close"></input>
</div>
<div id="newarticles">
<h5>Infero Members</h5>
<?php 
$uresult = mysql_query("SELECT * FROM userdetails ORDER BY FirstName");
while($urow = mysql_fetch_array($uresult)){
$ufname = $urow['FirstName'];
$ulname = $urow['LastName'];
$uuname = $urow['Username'];
	echo "<div id='memberbox'>";
	echo "<div id='memberlogo'></div>";
	echo "<h6>";
	echo $ufname . " " . $ulname;
	echo "</h6>";
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