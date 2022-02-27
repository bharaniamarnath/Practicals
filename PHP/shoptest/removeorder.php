<?php
include('connect.php');
if(isset($_POST['remorder'])){
$orderid = $_POST['orderid'];
$remord = "DELETE FROM orders WHERE oid='$orderid'";
$res1 = mysql_query($remord);
$remordac = "DELETE FROM delivery WHERE oid='$orderid'";
$res2 = mysql_query($remordac);
if($res1 && $res2){
echo "Order removed";
echo "<a href='vieworders.php'>View Orders</a>";
}
}
?>