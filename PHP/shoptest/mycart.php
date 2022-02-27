<?php
session_start();
include('connect.php');
if(!isset($_SESSION['order'])){
echo "Session expired";
}
$oid = $_SESSION['order'];
echo $oid."<br />";
$mycart = "SELECT * FROM cart WHERE oid='$oid'";
$result = mysql_query($mycart);
if(mysql_num_rows($result) == 0){
echo "Cart is empty";
echo "<a href='index2.php'>Go to homepage</a>";
exit();
}
while($row = mysql_fetch_array($result)){
$orderid = $row['oid'];
$product = $row['product'];
$date = $row['date'];
echo $oid."<br />";
echo $date."<br />";
echo $product."<br />";
echo "<form action='removecart.php' method='POST'>";
echo "<input type='hidden' name='prodname' value='$product' />";
echo "<input type='submit' name='rfc' value='Remove from Cart' /><br />";
echo "</form>";
}
echo "<input type='button' onClick=parent.location='checklist.php' value='Verify Cart'>";
?>
