<?php
	include('includes/connect.php');
	include('includes/alerts.php');
	if(isset($_POST['delete'])){
		$delpost = mysql_real_escape_string($_POST['deletemsg']);
		$delmsg = mysql_query("DELETE FROM messages WHERE Message='$delpost'");
		if($delmsg){
			header("Location: main.php");
		}
		else{
			echo $delpostalert;
			
		}
		}
?>