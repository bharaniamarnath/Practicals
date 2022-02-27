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
		$articlei = mysql_real_escape_string($_POST['articleid']);
			$fquery = mysql_query("INSERT INTO forumcomments (ForumID, Title, Comment, Uploader) VALUES ('$articlei', '$articlet', '$forumcomm', '$suname')");
			if($fquery){
				header("Location: forum.php");
			}
			else
			{
				echo "Failed to post comment";
			}		 
	}
?>