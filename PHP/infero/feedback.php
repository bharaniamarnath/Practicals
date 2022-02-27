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
    <script>
      function countChar(val) {
        var len = val.value.length;
        if (len >= 1024) {
          val.value = val.value.substring(0, 1024);
        } else {
          $('#charNum').text(1024 - len);
        }
      };
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
<div id="articleform">
<h5>Infero Feedback</h5>
<form action="sendfeedback.php" METHOD="POST">
<table>
<input type="hidden" name="fname" id="fname" value="<?php echo $sufname.' '.$sulname; ?>"></input>
<input type="hidden" name="fmail" id="fmail" value="<?php echo $sumail; ?>"></input>
<tr><td>Feedback: </td><td><textarea size="1024" rows="6" cols="50" name="fmessage" id="fmessage" onkeyup="countChar(this)"></textarea></td></tr>
<tr><td></td><td><input type="submit" name="upload" id="upload" value="Send Feeback"></input><div id="charNum"></div></td>
</table>
</form>
</div>
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