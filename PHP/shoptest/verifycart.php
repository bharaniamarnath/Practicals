<?php
session_start();
include('connect.php');
if(!isset($_SESSION['order'])){
echo "Session expired";
}
$oid = $_SESSION['order'];
echo $oid."<br />";
$size = count($_POST['quant']);
echo $size;
$i = 0;
while($i < $size){
$qnty = $_POST['quant'][$i];
$pname = $_POST['prodname'][$i];
$vq = "UPDATE cart SET quantity='$qnty' WHERE product='$pname' LIMIT 1";
$result = mysql_query($vq);
++$i;
}
?>
<html>
<head>
</head>
<body>
<form action="order.php" method="POST">
<input type="hidden" value="<?php echo $oid; ?>" name="orderno" />
Enter delivery address: <br />
<textarea name="address"></textarea><br />
Enter contact number: <br />
<input type="text" name="phone" size="10" /><br />
<input type="submit" value="Place Order" name="order" />
</form>
</body>
</html>