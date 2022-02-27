<?php
include('includes/header.php');
include('includes/connect.php');
include('includes/alerts.php');
if(isset($_POST['sendfb'])){
	if(empty($_POST['fbfrom'])){
		echo $emptysenderalert;
		exit();
	}
	$id = rand(000000,999999);
	$from = mysql_real_escape_string($_POST['fbfrom']);
	$subject = mysql_real_escape_string($_POST['fbsubj']);
	$feedback = mysql_real_escape_string($_POST['feedbk']);
	$feedbck = mysql_query("INSERT INTO feedbacks (`ID`, `From`, `Subject`, `Feedback`) VALUES ('$id', '$from', '$subject', '$feedback')");
	if($feedbck){
		echo $fbacksentalert;
	}
	else{
		echo $fbackfalert .mysql_error();
	}
}
?>