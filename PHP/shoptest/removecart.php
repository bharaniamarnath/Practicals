<?php
session_start();
include('connect.php');
if(!isset($_SESSION['order'])){
echo "Session expired";
}
$oid = $_SESSION['order'];
echo $oid."<br />";
if(isset($_POST['rfc'])){
$prdnme = $_POST['prodname'];
$delprod = "DELETE FROM cart WHERE product='$prdnme' AND oid='$oid'";
$delres = mysql_query($delprod);
if($delres){
echo "Item removed from cart. <a href='mycart.php'>My Cart</a>";
exit();
}
else{
echo "Could not remove item".mysql_error();
exit();
}
}
?>