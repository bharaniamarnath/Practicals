<?php
$fname = $lname = "";
$fnameErr = $lnameErr = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
if(empty($_POST['firstname'])){
$fnameErr = "First name is required";
}
else{
$fname = test_input($_POST['firstname']);
}
if(empty($_POST['lastname'])){
$lnameErr = "last name is required";
}
else{
$lname = test_input($_POST['lastname']);
}
}

function test_input($data){
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

$myfilewrite = fopen("names.xml","a");
echo fwrite($myfilewrite, "<names>");

echo fwrite($myfilewrite, "<firstname>$fname</firstname>") . "<br />";
echo fwrite($myfilewrite, "<lastname>$lname</lastname>") . "<br />";
echo fwrite($myfilewrite, "</names>") . "<br />";
$filestat = stat("names.xml");
echo $filestat;
fclose($myfilewrite);

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
First Name: <input type="text" name="firstname" /><br />
Last Name: <input type="text" name="lastname" /><br />
<input type="submit" value="Record" />
</form>
</body>
</html>