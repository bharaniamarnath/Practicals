<?php
$conn = mysql_connect("localhost","bharane","21feb1991");
if ($conn) {
echo "Connected to host succesfully";
echo "<br />";
}
else {
echo "Could not connect to the host";
echo "<br />";
}
$testdb = mysql_select_db("testdb",$conn);
if ($testdb) {
echo "Connected to database successfully";
echo "<br />";
}
else {
echo "Could not connect to teh database";
echo "<br />";
}
$result = mysql_query("SELECT * FROM testtable");
while ($row = mysql_fetch_assoc($result)) {
echo $row['Username'];
echo $row['Firstname'];
echo $row['Lastname'];
echo $row['Email'];
}
?>
