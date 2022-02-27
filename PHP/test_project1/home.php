<?php
session_start();
include('connect.php');
if(!isset($_SESSION['user'])){
echo "Login to access this page";
exit();
}
$sname = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Homepage</title>
</head>
<body>
<h3>Welcome <?php echo $sname; ?></h3>
<p>Login success.</p>
<p>This is the homepage.</p>
<form action="logout.php" method="POST">
<input type="submit" value="logout" name="logout" />
</form>
</body>
</html>