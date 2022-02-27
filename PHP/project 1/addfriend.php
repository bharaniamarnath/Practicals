<?php
session_start();
include('includes/header.php');
include('includes/connect.php');
include('includes/alerts.php');
if(!isset($_SESSION['user'])){
	echo $logdenyalert;
}
	$suname = $_SESSION['user'];
	if(isset($_POST['addfriend'])){
		$frndnme = mysql_real_escape_string($_POST['addfrnd']);
		$frndexst = mysql_query("SELECT * FROM friends WHERE Username='$suname' AND Friend='$frndnme'");
		if(mysql_num_rows($frndexst)==1){
			echo $frndexstalert;
			exit();
		}
		$addfr = mysql_query("INSERT INTO friends (Username, Friend) VALUES ('$suname', '$frndnme')");
		$addfragn = mysql_query("INSERT INTO friends (Username, Friend) VALUES ('$frndnme', '$suname')");
		$remreq = mysql_query("DELETE FROM requests WHERE requests.Requested='$suname' AND requests.Username='$frndnme'");
		if($addfr){		
		if($addfragn){
			if($remreq){
			echo $frndaddalert;
		}
		}
		}
		else{
			echo $frndfailalert;
			
		}
		}
		
?>