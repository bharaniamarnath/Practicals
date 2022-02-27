<?php
include('includes/header.php');
include('includes/connect.php');
include('includes/alerts.php');
	if(isset($_POST['delete'])){
		$delmail = mysql_real_escape_string($_POST['delmail']);
		$maildate = mysql_real_escape_string($_POST['maildate']);
		$deletemail = mysql_query("DELETE FROM maildetails WHERE Mail='$delmail' AND Date='$maildate'");
		if($deletemail){
			echo $maildelalert;
		}
		else{
			echo $maildelfalert;
			
		}
		}
?>