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
		$chkpost = mysql_query("SELECT * FROM messages WHERE Message='$delpost'");
		while($fbrow = mysql_fetch_array($chkpost)){
			$fbname = $fbrow['Username'];
		}
		if($fbname!=$suname){
			echo $deldenyalert;
			exit();
		}
		$delmsg = mysql_query("DELETE FROM messages WHERE Message='$delpost'");
		if($delmsg){
			header("Location: friendboard.php");
		}
		else{
			echo $delpostalert;
			
		}
		}
?>