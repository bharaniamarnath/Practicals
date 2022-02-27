<?php
session_start();
include('includes/connect.php');
if(isset($_SESSION['user'])){
	unset($_SESSION['user']);
	session_destroy();
	header("Location: index.php");
	exit();
}
?>