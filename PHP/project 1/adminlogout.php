<?php
session_start();
include('connect.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head><title>Bluedent India - Rediscover Dentistry</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="stylesheet/page.css" />
<link rel="stylesheet" type="text/css" href="stylesheet/menu.css" />
<script type="text/javascript" src="script/scroll.js"></script>
<script type="text/javascript" src="script/scrollmsg.js"></script>
</head>
<body ondragstart="return false" onselectstart="return false">

<div id="container">

<div id="header">
<img src="logos/Bluedent.png" width="40%" style="position:relative;" />
<img src="images/envelope.png" class="designhead" />
</div>

<div id="nav">
<ul class="dropdown">
<li><a href="home.php">Home</a></li>
<li><a href="#">Dental</a>
<ul>
<li><a href="products.php?product=Oral Medicine and Radiology">Oral Medicine and Radiology</a></li>
<li><a href="products.php?product=Periodontics">Periodontics</a></li>
<li><a href="products.php?product=Orthodontics">Orthodontics</a></li>
<li><a href="products.php?product=Endodontics">Endodontics</a></li>
<li><a href="products.php?product=Pedodontics">Pedodontics</a></li>
<li><a href="products.php?product=Prosthodontics">Prosthodontics</a></li>
<li><a href="dental-instruments.php">Dental Instruments</a></li></ul></li>
<li><a href="#">Medical</a>
<ul>
<li><a href="products.php?product=Gynaecology">Gynaecology</a></li>
<li><a href="products.php?product=Iontophoresis Machine">Iontophoresis Machine</a></li>
<li><a href="products.php?product=X-Ray Apron">X-Ray Apron</a></li>
<li><a href="products.php?product=X-Ray Viewers">X-Ray Viewers</a></li></ul></li>
<li><a href="download.php">Downloads</a></li>
<li><a href="contact.php">Contact Us</a></li>
</ul>
</div>


<div class="left">
<img src="images/envelope.png" class="design" />
<h3><li class="bullet"><span>Bluedent India - Access Denied</span></li></h3>
<div id="productpage">
<?php
if(isset($_SESSION['admin'])){
	unset($_SESSION['admin']);
	session_destroy();
	echo "<div id='message'><img align='middle' src='images/checklist.png'>Administrator logged out successfully.<a href='adminpanel.php'>Go to Admin Panel</a></div>";
    exit();
}
?>
</div>

<div id="footer">
<center><a class="footlink" href="home.php">Home</a> | <a class="footlink" href="download.php">Downloads</a> | <a class="footlink" href="contact.php">Contact us</a></center>
</div>

<div id="copyright">
&copy; Copyrights 2012 Bluedent India. All rights reserved.
</div>

</div>

</div>
</body>
</html>
