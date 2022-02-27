<?php
$conn = mysql_connect("localhost","bharane","21feb1991");
if(!$conn){
echo "Failed to connect to the server";
exit();
}
$dbcon = mysql_select_db("testproduct",$conn);
if(!$dbcon){
echo "Could not connect to the database";
exit();
}
?>