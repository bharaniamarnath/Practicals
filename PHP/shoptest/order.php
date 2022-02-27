<?php
session_start();
include('connect.php');
if(!isset($_SESSION['order'])){
echo "Session expired";
}
$oid = $_SESSION['order'];
echo $oid;
if(isset($_POST['order'])){
$da = $_POST['address'];
$ph = $_POST['phone'];;
$order = "INSERT INTO orders (oid,product,quantity) SELECT oid,product,quantity FROM cart WHERE oid='$oid'";
$address = "INSERT INTO delivery (oid,address,phone) VALUES ('$oid','$da','$ph')";
$result = mysql_query($order);
$dares = mysql_query($address);
if($result && $dares){
$delorder = "DELETE FROM cart WHERE oid='$oid'";
$delres = mysql_query($delorder);
echo "Order placed !";
unset($_SESSION['order']);
session_destroy();
echo "<a href='index2.php'>Go to homepage</a>";
exit();
}
else{
echo "order failed".mysql_error();
exit();
}
}
?>