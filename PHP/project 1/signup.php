<?php
include('includes/header.php');
include('includes/connect.php');
include('includes/alerts.php');
if(isset($_POST['register'])){
if(empty($_POST['firstname'])&&empty($_POST['lastname'])&&empty($_POST['gender'])&&empty($_POST['date'])&&empty($_POST['month'])&&empty($_POST['year'])&&empty($_POST['username'])&&empty($_POST['password'])&&empty($_POST['confpass'])&&empty($_POST['mailid'])){
	echo $fieldalert;
	exit();
}
if(empty($_POST['firstname'])){
	echo $fnamealert;
	exit();
}
else if(!preg_match("#^[-A-Za-z' ]*$#", $_POST['firstname'])){
	 echo $invalidfname;
	 exit();
	 }
if(empty($_POST['lastname'])){
	echo $lnamealert;
	exit();
}
else if(!preg_match("#^[-A-Za-z' ]*$#", $_POST['lastname'])){
	 echo $invalidlname;
	 exit();
	 }
if(empty($_POST['gender'])){
	echo $genderalert;
	exit();
}
if(empty($_POST['date'])){
	echo $dobdalert;
	exit();
}
if(empty($_POST['month'])){
	echo $dobmalert;
	exit();
}
if(empty($_POST['gender'])){
	echo $dobyalert;
	exit();
}
if(empty($_POST['username'])){
	echo $unamealert;
	exit();
}
if(strlen($_POST['username']) > 15){
	echo $unamecountalert;
	exit();
}
else{
$user = "SELECT * FROM userdetails WHERE Username = '$_POST[username]'";
$result = mysql_query($user);
if(mysql_num_rows($result)==1){
	echo $unameexistalert;
	exit();
}
}
if(empty($_POST['password'])){
	echo $passalert;
	exit();
}
if(strlen($_POST['password']) > 15){
	echo $passcountalert;
	exit();
}
elseif($_POST['password']!==$_POST['confpass']){
	echo $passconfalert;
	exit();
}
if(empty($_POST['mailid'])){
	echo $mailidalert;
	exit();
}
elseif(!filter_var($_POST['mailid'], FILTER_VALIDATE_EMAIL)){
	echo $invalidemail;
	exit();
}
else{
mysql_select_db("webstar",$con);
$mail = "SELECT * FROM userdetails WHERE Email = '$_POST[mailid]'";
$result = mysql_query($mail);
if(mysql_num_rows($result)>0){
	echo $emlexistalert;
	exit();
}
if(empty($_POST['terms'])){
	echo $termsalert;
	exit();
}
}
}
$id = rand(000000,999999);
$fname = mysql_real_escape_string($_POST['firstname']);
$lname = mysql_real_escape_string($_POST['lastname']);
$gend = mysql_real_escape_string($_POST['gender']);
$dt = mysql_real_escape_string($_POST['date']);
$mnth = mysql_real_escape_string($_POST['month']);
$yr = mysql_real_escape_string($_POST['year']);
$dob = $yr . $mnth . $dt;
$uname = mysql_real_escape_string($_POST['username']);
$pswd = mysql_real_escape_string(md5($_POST['password']));
$confpswd = mysql_real_escape_string($_POST['confpass']);
$eml = mysql_real_escape_string($_POST['mailid']);
mysql_select_db("webstar",$con);
$query = "INSERT INTO userdetails (ID, Firstname, Lastname, Gender, Dob, Username, Password, Email) VALUES ('$id', '$fname', '$lname', '$gend', '$dob', '$uname', '$pswd', '$eml')";
$pdquery = "INSERT INTO Personaldetails (ID, Username) VALUES ('$id', '$uname')";
$idquery = "INSERT INTO imagedetails (ID, Username, Image) VALUES ('$id', '$uname', 'album/userprofile.png')";
if(!mysql_query($query)){
	echo $regerroralert;	
}
if(!mysql_query($pdquery)){
	echo $regerroralert;
}
if(!mysql_query($idquery)){
	echo $regerroralert;
}
else{
	echo $regconfalert;
}
mysql_close($con);
?>