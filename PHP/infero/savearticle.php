<?php
session_start();
include('includes/connect.php');
if(!isset($_SESSION['admin'])){
echo "Admin not logged in";
exit();
}
$suname = $_SESSION['admin'];

if(isset($_POST['upload'])){
if(empty($_POST['atitle'])&&empty($_POST['acontent'])){
echo "Provide valid information in all required fields.";
exit();
}
if(empty($_POST['atitle'])){
echo "Article title is required.";
exit();
}
else if(!preg_match("#^[-A-Za-z' ]*$#", $_POST['atitle'])){
echo "Invalid Article Title";
exit();
}
if(empty($_POST['acontent'])){
echo "Article content is required.";
exit();
}
}

$id = rand(000000,999999);
$title = mysql_real_escape_string($_POST['atitle']);
$content = mysql_real_escape_string($_POST['acontent']);


$insert = "INSERT INTO articles (ArticleID, Title, Content, Uploader) VALUES ('$id', '$title', '$content', '$suname')";
$iresult = mysql_query($insert);
if(!$iresult){
echo "Upload Failed." . mysql_error();
exit();
}
else{
header("Location: adminpanel.php");
exit();
}
mysql_close($conn);
?>