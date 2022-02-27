<?php
session_start();
include('includes/header.php');
include('includes/connect.php');
include('includes/alerts.php');
if(!isset($_SESSION['user'])){
	echo $logdenyalert;
}
	$suname = $_SESSION['user'];
	if(isset($_POST['vote'])){
		$picname = mysql_real_escape_string($_POST['commentpic']);
		$picdate = mysql_real_escape_string($_POST['picdate']);
		$addvote = mysql_query("UPDATE publicphotos SET Vote=Vote+1 WHERE publicphotos.Photo='$picname' AND publicphotos.Date='$picdate'");
		if($addvote){
			header("Location: publicphotos.php");
		}		
		else{
			echo $votefalert;
		}
	}
?>