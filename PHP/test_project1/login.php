<?php
include('connect.php');
if(isset($_POST['submit'])){
if(empty($_POST['username']) || empty($_POST['password'])){
echo "Both username and password is required to login";
exit();
}
if(empty($_POST['username'])){
echo "Username is required";
exit();
}
else if(!preg_match("#^[a-zA-z]*$#", $_POST['username'])){
echo "Invalid username. Special characters are not allowed in username.";
exit();
}
}
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
$result = "SELECT * FROM testtable WHERE Username='$username' AND Password='$password'";
$row = mysql_fetch_assoc(mysql_query($result));
if($row['Username'] == $username && $row['Password'] == $password){
session_start();
$_SESSION['user'] = $username;
header("Location: home.php");
}
else{
echo "Invalid username and password";
}
?>