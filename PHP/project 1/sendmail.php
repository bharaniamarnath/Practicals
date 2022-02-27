<?php
session_start();
include('includes/header.php');
include('includes/connect.php');
include('includes/alerts.php');
if(!isset($_SESSION['user'])){
	echo $logdenyalert;
}
	$suname = $_SESSION['user'];
	if(isset($_POST['send'])){
		if(empty($_POST['reciever'])){
			echo $emptytoalert;
			exit();
		}
		$recvr = mysql_real_escape_string($_POST['reciever']);
		$subj = mysql_real_escape_string($_POST['subject']);
		$mail = mysql_real_escape_string($_POST['mailbody']);
		$mailres = mysql_query("INSERT INTO maildetails (Sender, Reciever, Subject, Mail) VALUES ('$suname', '$recvr', '$subj', '$mail')");
		if($mailres){
			echo $mailsentalert;
		}
		else{
			echo $mailfalert;
		}
	}
	?>