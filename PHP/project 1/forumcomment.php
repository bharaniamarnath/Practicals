<?php
session_start();
include('includes/connect.php');
if(!isset($_SESSION['user'])){
	echo "User not logged in";
}
	$suname = $_SESSION['user'];	
?>
<?php
	if(isset($_POST['comment'])){
		$forumcomm = mysql_real_escape_string($_POST['forumcomment']);
		$articlet = mysql_real_escape_string($_POST['articletitle']);
		$articleid = mysql_real_escape_string($_POST['articleid']);
			$fquery = mysql_query("INSERT INTO forumcomments (ForumID, Title, Comment, Uploader) VALUES ('$articleid', '$articlet', '$forumcomm', '$suname')");
			if($cpquery){
				header("Location: home.php");
			}
			else
			{
				echo "Failed to post comment";
			}		 
	}
?>