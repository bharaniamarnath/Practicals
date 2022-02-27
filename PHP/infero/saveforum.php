<?php
session_start();
include('includes/connect.php');
if(!isset($_SESSION['user'])){
echo "User not logged in";
exit();
}
$suname = $_SESSION['user'];

if(isset($_POST['upload'])){
if(empty($_POST['fotitle'])&&empty($_POST['focontent'])){
echo "Provide valid information in all required fields.";
exit();
}
if(empty($_POST['fotitle'])){
echo "Article title is required.";
exit();
}
else if(!preg_match("#^[-A-Za-z' ]*$#", $_POST['fotitle'])){
echo "Invalid Article Title";
exit();
}
if(empty($_POST['focontent'])){
echo "Article content is required.";
exit();
}
}

$id = rand(000000,999999);
$title = mysql_real_escape_string($_POST['fotitle']);
$content = mysql_real_escape_string($_POST['focontent']);


$insert = "INSERT INTO forum (ForumID, Title, Content, Uploader) VALUES ('$id', '$title', '$content', '$suname')";
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