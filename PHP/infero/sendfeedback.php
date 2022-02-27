<?php
session_start();
include('includes/connect.php');
if(!isset($_SESSION['user'])){
echo "User not logged in";
exit();
}
$suname = $_SESSION['user'];

if(isset($_POST['upload'])){
if(empty($_POST['fmessage'])){
echo "Provide feedback.";
exit();
}
else if(!preg_match("#^[-A-Za-z' ]*$#", $_POST['fmessage'])){
echo "Invalid Feedback.";
exit();
}
}

$id = rand(000000,999999);
$name = mysql_real_escape_string($_POST['fname']);
$email = mysql_real_escape_string($_POST['fmail']);
$content = mysql_real_escape_string($_POST['fmessage']);

$insert = "INSERT INTO feedback (FID, Sender, Email, Content) VALUES ('$id', '$name', '$email', '$content')";
$iresult = mysql_query($insert);
if(!$iresult){
echo "Upload Failed." . mysql_error();
exit();
}
else{
header("Location: home.php");
exit();
}
mysql_close($conn);
?>