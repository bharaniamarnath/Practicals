<?php
session_start();
include('includes/header.php');
include('includes/connect.php');
include('includes/alerts.php');
if(!isset($_SESSION['user'])){
	echo $logdenyalert;
}
	$suname = $_SESSION['user'];	
?>
<?php
	if(isset($_POST['commpic'])){
		$cpic = mysql_real_escape_string($_POST['commentpic']);
		$pcomm = mysql_real_escape_string($_POST['piccomm']);
		$cpicdet = mysql_query("SELECT * FROM userdetails WHERE Username='$suname'");
		while($cprow = mysql_fetch_array($cpicdet)){
			$cpuid = $cprow['ID'];
			$cpquery = mysql_query("INSERT INTO photocomments (ID, Username, Photo, Comment) VALUES ('$cpuid', '$suname', '$cpic', '$pcomm')");
			if($cpquery){
				echo $commentalert;
			}
			else
			{
				echo $commfailalert;
			}
		}		 
	}
?>