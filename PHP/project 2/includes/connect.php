<?php
$con = mysql_connect("localhost","project","myproject123");
mysql_select_db("diapers", $con);
if(!$con){
	die("Could not connect: ".mysql_error());
}
?>