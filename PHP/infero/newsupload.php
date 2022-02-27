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
<li><a href="adminpanel.php">Home</a></li>
<li><a href="articleupload.php">Articles</a></li>
<li><a href="newsupload.php">News</a></li>
<li><a href="fileupload.php">Downloads</a></li>
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
<div id="articleform">
<h5>Upload News</h5>
<form action="savenews.php" METHOD="POST">
<table>
<tr><td>News Title: </td><td><input type="text" name="ntitle" id="ntitle" /></td></tr>
<tr><td>Content: </td><td><textarea size="1024" rows="6" cols="50" name="ncontent" id="ncontent" onkeyup="countChar(this)"></textarea></td></tr>
<tr><td></td><td><input type="submit" name="upload" id="upload" value="Upload News"></input><div id="charNum"></div></td>
</table>
</form>
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