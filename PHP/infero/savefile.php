<?php
session_start();
include('includes/connect.php');
if(!isset($_SESSION['admin'])){
echo "Admin not logged in";
exit();
}
$suname = $_SESSION['admin'];

if(isset($_FILES['FileUpload'])){
	$fileName = $_FILES['FileUpload']['name'];
	$fileTemp = $_FILES['FileUpload']['tmp_name'];
	$fileType = $_FILES['FileUpload']['type'];
	$fileSize = $_FILES['FileUpload']['size'];
	$fileName = preg_replace("#[^a-z0-9.]#i", "", $fileName);
	$fileLocation = "downloads/$fileName";
	$name = $_POST['ftitle'];
	$desc = $_POST['fcontent'];
	$fid = rand(000000,999999);
	$size = "$fileSize Bytes";
	
	if(!$fileTemp){
		echo("Select a file to upload");
	}
	else{
		move_uploaded_file($fileTemp, "downloads/$fileName");
	}
	
	$filequery = mysql_query("INSERT INTO downloads (FileID, Title, Content, Link, Size, Uploader) VALUES ('$fid', '$name', '$desc', '$fileLocation', '$size', '$suname')");
	if($filequery){
	header("Location: adminpanel.php");
	}
	else{
	echo "File upload failed.";
	}
}
?>