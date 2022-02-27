<?php

$conn = mysql_connect("localhost", "bharane", "21feb1991");
$db = mysql_select_db("infero", $conn);

if(!$conn){
	die("Could not connect to the host." . mysql_error());
}
if(!$db){
	die("Could not connect to the database." . mysql_error());
}
?>