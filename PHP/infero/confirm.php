<?php
include('includes/connect.php');
$passkey = $_GET['passkey'];
$confkey = "UPDATE userdetails SET Confirmation=NULL WHERE Confirmation='$passkey'";
$result = mysql_query($confkey);
if($result){
echo "Your account has been activated. You may now <a href='index.php'>Login</a>";
}
else{
echo "Error occured. Could not activate your account.";
exit();
}
mysql_close($conn);
?>