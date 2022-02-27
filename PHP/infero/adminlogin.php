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
<div id="adminlogform">
<h5>Admin Login Panel</h5>
<form action="admincheck.php" METHOD="POST">
<table>
<tr><td>Admin Username: </td><td><input type="text" name="auname" id="auname" /></td></tr>
<tr><td>Password: </td><td><input type="password" name="apass" id="apass" /></td></tr>
<tr><td></td><td><input type="submit" name="login" id="login" value="Admin Login"></input></td>
</table>
</form>
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