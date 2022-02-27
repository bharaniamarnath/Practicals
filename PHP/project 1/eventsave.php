<?php
session_start();
include('includes/header.php');
include('includes/connect.php');
include('includes/alerts.php');
if(!isset($_SESSION['user'])){
	echo $logdenyalert;
}
	$suname = $_SESSION['user'];
	if(isset($_POST['addeve'])){
		$ename = mysql_real_escape_string($_POST['eventname']);
		$edte = mysql_real_escape_string($_POST['edate']);
		$emnth = mysql_real_escape_string($_POST['emonth']);
		$eyr = mysql_real_escape_string($_POST['eyear']);
		$eday = $eyr . $emnth . $edte;
		$etype = mysql_real_escape_string($_POST['eventtype']);
		$edes = mysql_real_escape_string($_POST['eventdes']);
	}
		$chkevent = mysql_query("SELECT * FROM events WHERE events.Username='$suname' AND events.Event='$ename'");
		if(mysql_num_rows($chkevent)==1){
			echo $eventexstalert;
			exit();
		}
		$insertevent = mysql_query("INSERT INTO events (Username, Event, Date, Type, Description) VALUES ('$suname', '$ename', '$eday', '$etype', '$edes')");
		if($insertevent){
			echo $eventaddalert;
		}
		else{
			echo $eventaddfalert;
		}
?>