<?php
	include('includes/header.php');
	include('includes/connect.php');
	include('includes/alerts.php');
	if(isset($_POST['picdelete'])){
		$delpic = mysql_real_escape_string($_POST['deletepic']);
		$delmsg = mysql_query("UPDATE imagedetails SET Image='album/userprofile.png' WHERE Image='$delpic'");
		$image = rawurldecode(basename($delpic));
		@unlink("./album/" . $image);
		if($delmsg){
			header("Location: imageupload.php");
		}
		else{
			echo $delpropicalert;
			
		}
		}
?>