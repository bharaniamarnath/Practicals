<?php
require 'cart.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Diapers - Home</title>
<meta name="" content="">
<script src="scripts/js-image-slider.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/menubar.css" />
<link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
	<a href="index.php"><img class="logo" src="images/logo.png"></img></a>
	<div id="menubar">
		<ul>
			<li><a href="index.php"><img id="menulogo" src="images/home.png">Home</img></a></li>
			<li><a href="products.php"><img id="menulogo" src="images/product.png">Products</img><img id="arrow" src="images/darrow.png"></img></a>
			<ul>
				<li><a href="newborn.php">New Born</a></li>	
				<li><a href="baby.php">Baby</a></li>	
				<li><a href="toddler.php">Toddler</a></li>
				<li><a href="preschool.php">Pre-School</a></li>		
			</ul></li>
			<li><a href="contact.php"><img id="menulogo" src="images/contact.png">Contact Us</img></a></li>
		</ul>
	</div>
</div>
<div id="container">
	<div id="content">
	<h3 id="maintitle">Products - New Born</h3>
<?php products(); ?>
<div class="mycart">
<h2 class="redtitle">My Cart</h2>
<?php cart(); ?>
</div>
</div>
</div>
<div id="footer">
<table class="quicklink" align="left"><tr>
<th>Quick Links</th></tr> <tr><td><a class="shortcut" href="#">Home</a></td></tr> <tr><td><a class="shortcut" href="#">Products</a></td></tr> <tr><td><a class="shortcut" href="#">About Us</a></td></tr> <tr><td><a class="shortcut" href="#">Contact Us</a></td></tr></table>
<table class="quicklink" align="left"><tr>
<th>Products</th></tr> <tr><td><a class="shortcut" href="#">New Born</a></td></tr> <tr><td><a class="shortcut" href="#">Baby</a></td></tr> <tr><td><a class="shortcut" href="#">Toddler</a></td></tr> <tr><td><a class="shortcut" href="#">Pre-School</a></td></tr></table>
<table class="quicklink" align="left"><tr>
<th>About Us</th></tr> <tr><td><a class="shortcut" href="#">Our Team</a></td></tr> <tr><td><a class="shortcut" href="#">Our Mission</a></td></tr> <tr><td><a class="shortcut" href="#">Facilities</a></td></tr> <tr><td><a class="shortcut" href="#">Organisation</a></td></tr></table>
<table class="quicklink" align="left"><tr>
<th>Contact Us</th></tr> <tr><td><a class="shortcut" href="#">Location</a></td></tr> <tr><td><a class="shortcut" href="#">View Map</a></td></tr> <tr><td><a class="shortcut" href="#">Feedback</a></td></tr> <tr><td><a class="shortcut" href="#">Customer Support</a></td></tr></table>
<div id="copyright">&copy; Copyrights 2013. Diapers.</div>
</div>
</body>
</html>