<?php
session_start();
include('connect.php');
if(!isset($_SESSION['order'])){
echo "Session expired";
}
if(isset($_POST['add'])){
$pname = $_POST['product'];
$oid = $_POST['orderid'];
$add = "INSERT INTO cart (oid, product) VALUES ('$oid', '$pname')";
$result = mysql_query($add);
if($result){
echo "Item added to the cart <br />";
echo "<a href='index2.php'>Continue Shopping</a><br />";
echo "<a href='mycart.php'>Place Order</a>";
exit();
}
else{
echo "Error adding item";
}
}
mysql_close($conn);
?>