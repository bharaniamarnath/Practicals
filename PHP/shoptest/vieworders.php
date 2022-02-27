<?php
include('connect.php');
$vo = "SELECT oid,date FROM delivery ORDER BY date";
$res1 = mysql_query($vo);
if(mysql_num_rows($res1) == 0){
echo "No orders available";
echo "<a href='index2.php'>Go to homepage</a>";
}
while($row1 = mysql_fetch_array($res1)){
$orderid = $row1['oid'];
$odate = $row1['date'];
echo $orderid."<br />";
echo $odate."<br />";
echo "<form action='listorder.php' method='POST'>";
echo "<input type='hidden' value='$orderid' name='oid' />";
echo "<input type='submit' value='View this order' name='vieworder' />";
echo "</form>";
}
?>