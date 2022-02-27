<?php
$con = mysql_connect("mysql12.000webhost.com", "a2165201_bharane", "webstar123");
mysql_select_db("a2165201_webstar", $con);
if(!$con){
	die("Could not connect: " .mysql_error());
}
?>