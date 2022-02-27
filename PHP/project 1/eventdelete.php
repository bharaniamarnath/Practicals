<?php
session_start();
include('includes/header.php');
include('includes/connect.php');
include('includes/alerts.php');
if(!isset($_SESSION['user'])){
	echo $logdenyalert;
}
	$suname = $_SESSION['user'];
	if(isset($_POST['delevent'])){
	$evtname = mysql_real_escape_string($_POST['evntnme']);
	$evtday = mysql_real_escape_string($_POST['evntdte']);
	$delevnt = mysql_query("DELETE FROM events WHERE events.Username='$suname' AND events.Event='$evtname' AND events.Date='$evtday'");
	if($delevnt){
		echo $evntdelalert;
	}
	else{
		echo $evntdelfalert;
	}
	}
?>