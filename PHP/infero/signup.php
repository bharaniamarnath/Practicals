<?php
include('includes/connect.php');

if(isset($_POST['register'])){
if(empty($_POST['firstname'])&&empty($_POST['lastname'])&&empty($_POST['username'])&&empty($_POST['password'])&&empty($_POST['email'])){
echo "Provide valid information in all required fields.";
exit();
}
if(empty($_POST['firstname'])){
echo "First Name is required.";
exit();
}
else if(!preg_match("#^[-A-Za-z' ]*$#", $_POST['firstname'])){
echo "Invalid First Name";
exit();
}
if(empty($_POST['lastname'])){
echo "Last Name is required.";
exit();
}
else if(!preg_match("#^[-A-Za-z' ]*$#", $_POST['lastname'])){
echo "Invalid Last Name";
exit();
}
if(empty($_POST['username'])){
echo "Username is required.";
exit();
}
else{
$user = "SELECT * FROM userdetails WHERE Username = '$_POST[username]'";
$uresult = mysql_query($user);
if(mysql_num_rows($uresult)>0){
echo "Username already exists.";
exit();
}
}
if(empty($_POST['password'])){
echo "Password is required.";
exit();
}
if(empty($_POST['email'])){
echo "Email is required.";
exit();
}
else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
echo "Invalid Email address";
exit();
}
else{
$em = "SELECT * FROM userdetails WHERE Username = '$_POST[email]'";
$emresult = mysql_query($user);
if(mysql_num_rows($emresult)>0){
echo "Email already registered to another user.";
exit();
}
}
}

$id = rand(000000,999999);
$fname = mysql_real_escape_string($_POST['firstname']);
$lname = mysql_real_escape_string($_POST['lastname']);
$uname = mysql_real_escape_string($_POST['username']);
$pswd = mysql_real_escape_string(md5($_POST['password']));
$email = mysql_real_escape_string($_POST['email']);

$insert = "INSERT INTO userdetails (UserID, FirstName, LastName, Username, Password, Email) VALUES ('$id', '$fname', '$lname', '$uname', '$pswd', '$email')";
$iresult = mysql_query($insert);
if($iresult){
header("Location: index.php");
exit();
}
else{
echo "Registration Failed." . mysql_error();
exit();
}
mysql_close($conn);
?>