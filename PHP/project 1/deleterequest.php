<?php
session_start();
include('includes/header.php');
include('includes/connect.php');
include('includes/alerts.php');
if(!isset($_SESSION['user'])){
	echo $logdenyalert;
}
	$suname = $_SESSION['user'];
	if(isset($_POST['deleterequest'])){
		$reqname = mysql_real_escape_string($_POST['reqfrnd']);
		$delfrnd = mysql_query("DELETE from requests WHERE requests.Requested='$suname' AND requests.Username='$reqname'");
		if($delfrnd){
			echo $reqdelalert;
		}
		else{
			echo $reqdelfralert;
		}
			}
	?>