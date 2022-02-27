<?php
$conn = mysql_connect("localhost","project","myproject123");
if(!$conn){
die("Error connecting the server" . mysql_error());
}
else{
$db = mysql_select_db("testdb",$conn);
if(!$db){
die("Could not connect to the datatbase" . mysql_error());
}
}
?>