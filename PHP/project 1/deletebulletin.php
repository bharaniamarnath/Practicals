<?php
session_start();
include('includes/header.php');
include('includes/connect.php');
include('includes/alerts.php');
if(!isset($_SESSION['user'])){
	echo $logdenyalert;
}
	$suname = $_SESSION['user'];
	if(isset($_POST['delete'])){
		$delpost = mysql_real_escape_string($_POST['deletemsg']);
		$chkbul = mysql_query("SELECT * FROM bulletin WHERE Message='$delpost'");
		while($brow = mysql_fetch_array($chkbul)){
			$buname = $brow['Username'];
		}
		if($buname!=$suname){
			echo $deldenyalert;
			exit();
		}
		$delmsg = mysql_query("DELETE FROM bulletin WHERE Message='$delpost'");
		if($delmsg){
			header("Location: publicpost.php");
		}
		else{
			echo $delpostalert;
			
		}
		}
?>