<?php
session_start();
include('includes/header.php');
include('includes/connect.php');
include('includes/alerts.php');
if(!isset($_SESSION['user'])){
	echo $logdenyalert;
}
	$suname = $_SESSION['user'];
	if(isset($_POST['picupdate'])){
		$pupimg = mysql_real_escape_string($_POST['udpic']);
		$pupdnme = mysql_real_escape_string($_POST['picname']);
		$pupdes = mysql_real_escape_string($_POST['picdesc']);
		$updpic = mysql_query("UPDATE photodetails SET Filename='$pupdnme', Description='$pupdes' WHERE Photo='$pupimg'");
		if($updpic){
			echo $photoupdalert;
		}
		else{
			echo $photoupdfalert . mysql_error();
		}
	}	
?>