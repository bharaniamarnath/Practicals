<?php
	include('includes/header.php');
	include('includes/connect.php');
	include('includes/alerts.php');
	if(isset($_POST['picdelete'])){
		$delpic = mysql_real_escape_string($_POST['deletepic']);
		$delmsg = mysql_query("DELETE FROM photodetails WHERE Photo='$delpic'");
		$image = rawurldecode(basename($delpic));
		@unlink("./photos/" . $image);
		if($delmsg){
			header("Location: photos.php");
		}
		else{
			echo $delpicalert;
			
		}
		}
?>