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
if (isset($_POST['submit'])) {
$un = $_POST['uname'];
$pw = $_POST['pswd'];
$fn = $_POST['fname'];
$ln = $_POST['lname'];
$em = $_POST['email'];
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
$insert = mysql_query("INSERT INTO testtable (Username, Password, Firstname, Lastname, Email) VALUES ('$un', '$pw', '$fn', '$ln', '$em')");
if ($insert) {
echo "1 row inserted sucessfully";
echo "<br />";
}
else {
echo "Insertion of row failed";
echo "<br />";
}
?>
<html>
<body>
<a href="index.php">Back</a>
<a href="table.php">Show Table</a>
</body>
</html>