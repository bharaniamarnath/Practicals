<?php
$con = mysql_connect("localhost","bharane","21feb1991");
if(!$con){
echo "Error connecting the server <br />";
}
else {
echo "Successfully connected to the server <br />";
}
$dbcon = mysql_select_db("testdb",$con);
if(!$dbcon){
echo "Could not connect to the database <br />";
}
else {
echo "Connected to the database <br />";
}
?>