<?php
include('connect.php');
if(isset($_POST['vieworder'])){
$ordid = $_POST['oid'];
echo "Order No: ";
echo $ordid."<br />";
echo "Ordered products: <br />";
$li = "SELECT product,quantity FROM orders WHERE oid='$ordid'";
$res1 = mysql_query($li);
while($row1 = mysql_fetch_array($res1)){
$prod = $row1['product'];
$qnty = $row1['quantity'];
echo $prod."-".$qnty."<br />";
}
$la = "SELECT address,phone,date FROM delivery WHERE oid='$ordid'";
$res2 = mysql_query($la);
while($row2 = mysql_fetch_array($res2)){
$date = $row2['date'];
$addr = $row2['address'];
$cont = $row2['phone'];
echo $date."<br />";
echo $addr."<br />";
echo $cont."<br />";
}
echo "<form action='removeorder.php' method='POST'>";
echo "<input type='hidden' value='$ordid' name='orderid' />";
echo "<input type='submit' value='delivered' name='remorder' />";
echo "</form>";
}
?>