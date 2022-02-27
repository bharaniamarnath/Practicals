<?php
session_start();
include('includes/header.php');
include('includes/connect.php');
include('includes/alerts.php');
if(!isset($_SESSION['user'])){
	echo $logdenyalert;
}
	$suname = $_SESSION['user'];
	if(isset($_POST['picdelete'])){
		$delpic = mysql_real_escape_string($_POST['deletepic']);
		$chkpic = mysql_query("SELECT * FROM publicphotos WHERE Photo='$delpic'");
		while($prow = mysql_fetch_array($chkpic)){
			$puname = $prow['Username'];
		}
		if($puname!=$suname){
			echo $pbdelpicalert;
			exit();
		}
		$delmsg = mysql_query("DELETE FROM publicphotos WHERE Photo='$delpic'");
		$image = rawurldecode(basename($delpic));
		@unlink("./photos/" . $image);
		if($delmsg){
			header("Location: publicphotos.php");
		}
		else{
			echo $delpicalert;
			
		}
		}
?>