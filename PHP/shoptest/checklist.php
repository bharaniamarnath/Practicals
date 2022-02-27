<?php
session_start();
include('connect.php');
if(!isset($_SESSION['order'])){
echo "Session expired";
}
$oid = $_SESSION['order'];
$i = 0;
echo $oid."<br />";
$mycart = "SELECT * FROM cart WHERE oid='$oid'";
$result = mysql_query($mycart);
if(mysql_num_rows($result) == 0){
echo "Cart is empty";
exit();
}
echo "<form action='verifycart.php' method='POST'>";
while($row = mysql_fetch_array($result)){
$orderid = $row['oid'];
$product = $row['product'];
$date = $row['date'];
echo $oid."<br />";
echo $date."<br />";
echo $product."<br />";
echo "<input type='hidden' name='prodname[$i]' value='$product' />";
echo "Quantity: <input type='text' name='quant[$i]' size='3' /><br />";
++$i;
}
echo "<input type='submit' name='verify' value='Verify Cart' />";
echo "</form>";
?>
