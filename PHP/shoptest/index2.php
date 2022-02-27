<?php
session_start();
if(!isset($_SESSION['order'])){
$sid = rand(000000,999999);
$_SESSION['order'] = $sid;
}
?>
<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<h3>Welcome to Shop Test</h3>
<a href="pant.php">Pants</a>
<a href="shoe.php">Shoes</a><br />
<a href="mycart.php">My Cart</a><br />
<a href="vieworders.php">View Orders</a>
</body>
</html>
