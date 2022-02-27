<?php
session_start();
include('includes/header.php');
include('includes/connect.php');
include('includes/alerts.php');
if(!isset($_SESSION['user'])){
	echo $logdenyalert;
}
	$suname = $_SESSION['user'];
	if(isset($_POST['deletefriend'])){
		$frndname = mysql_real_escape_string($_POST['delfrnd']);
		$delfrnd = mysql_query("DELETE from friends WHERE friends.Friend='$frndname' AND friends.Username='$suname'");
		if($delfrnd){
			echo $frnddelalert;
		}
		else{
			echo $errdelfralert;
		}
			}
	?>