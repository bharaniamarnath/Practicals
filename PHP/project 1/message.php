<?php
session_start();
include('includes/header.php');
include('includes/connect.php');
include('includes/alerts.php');
if(!isset($_SESSION['user'])){
	echo $logdenyalert;
}
$suname = $_SESSION['user'];
if(isset($_POST['post'])){
	if(empty($_POST['msgpost'])){
		echo $postemptyalert;
		exit();
	}
	if(strlen($_POST['msgpost']>100)){
		echo $posterralert;
		exit();
	}
	$postmsg = mysql_real_escape_string($_POST['msgpost']);
	$dtquery = mysql_query("SELECT * FROM userdetails WHERE Username='$suname'");
	while($dtrow = mysql_fetch_array($dtquery))
	{
		$msguserid = $dtrow['ID'];
		$msgusrnme = $dtrow['Username'];
}
	$imquery = mysql_query("SELECT * FROM imagedetails WHERE Username='$suname'");
	while($imrow = mysql_fetch_array($imquery)){
		$imgid = $imrow['Image'];
	}
	
	$pstquery = mysql_query("INSERT INTO messages (ID, Username, Message, Image) VALUES ('$msguserid', '$msgusrnme', '$postmsg', '$imgid')");
	if($pstquery){
		header("location: main.php");
	}
	else{
		echo $msgerralert;
	}
	}
?>