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
		$deldate = mysql_real_escape_string($_POST['commdate']);
		$chkcomm = mysql_query("SELECT * FROM photocomments WHERE Date='$deldate'");
		while($crow = mysql_fetch_array($chkcomm)){
			$cuname = $crow['Username'];
		}
		if($cuname!=$suname){
			echo $commdelerralert;
			exit();
		}
		$delcomment = mysql_query("DELETE FROM photocomments WHERE photocomments.Date='$deldate' AND photocomments.Username='$suname'");
		if($delcomment){
			echo $commdelalert;
		}
		else{			
			echo $commdelfalert;
		}
		}
?>