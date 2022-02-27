<?php
session_start();
if(!isset($_SESSION['order'])){
echo "Session expired";
}
$oid = $_SESSION['order'];
echo $oid;
?>
<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<form action="addcart.php" method="POST">
<h4>Pant</h4>
<input type="hidden" value="Pant" name="product" />
<input type="hidden" value="<?php echo $oid; ?>" name="orderid" />
<input type="submit" value="Add to Cart" name="add" />
</form>
</body>
</html>