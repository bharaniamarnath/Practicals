<?php
session_start();
include('includes/header.php');
include('includes/connect.php');
include('includes/alerts.php');
if(isset($_SESSION['admin'])){
	unset($_SESSION['admin']);
	session_destroy();
	header("Location: index.php");
}
?>