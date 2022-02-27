<?php
session_start();
include('includes/header.php');
include('includes/connect.php');
include('includes/alerts.php');
if(!isset($_SESSION['user'])){
	echo $logdenyalert;
}
	$suname = $_SESSION['user'];
	if(isset($_POST['sendreq'])){
		$rqrcvrnme = mysql_real_escape_string($_POST['friendname']);
		$chkfrnd = mysql_query("SELECT * FROM friends WHERE friends.Username='$suname' AND friends.Friend='$rqrcvrnme'");
		if(mysql_num_rows($chkfrnd)==1){
			echo $frndexstalert;
			exit();
		}
		$chkreq = mysql_query("SELECT * FROM requests WHERE requests.Username='$suname' AND requests.Requested='$rqrcvrnme'");
		if(mysql_num_rows($chkreq)==1){
			echo $rasalert;
			exit();
		}
		$rqsnddt = mysql_query("SELECT * FROM userdetails WHERE Username='$suname'");
		while($rqsrow = mysql_fetch_array($rqsnddt)){
			$rqsid = $rqsrow['ID'];
		}
		$rsquery = mysql_query("INSERT INTO requests (ID, Username, Requested) VALUES ('$rqsid', '$suname', '$rqrcvrnme')");
		if($rsquery){
			echo $fqsalert;
		}
		else{
			echo $fqsfalert;
		}
	}
	?>