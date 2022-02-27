<!DOCTYPE html>
<html>
<head>
<style>
.error{
color: #ff0000;
}
</style>
</head>
<body>
<?php
$fnameErr = $lnameErr = $emailErr = "";
$fname = $lname = $email = "";

function test_input($data){
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

if(empty($_POST["firstname"])){
$fnameErr = "First name is required";
}
else{
$fname = test_input($_POST["firstname"]);
}

if(empty($_POST["lastname"])){
$lnameErr = "Last name is required";
}
else{
$lname = test_input($_POST["lastname"]);
}

if(empty($_POST["email"])){
$emailErr = "Email is required";
}
else{
$email = test_input($_POST["email"]);
}

}
?>
<h3>Registration form</h3>
<p><span class="error">* required fields</p>
<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
First name: <input type="text" name="firstname" /><span class="error">*<?php echo $fnameErr; ?></span><br />
Last name: <input type="text" name="lastname" /><span class="error">*<?php echo $lnameErr; ?></span><br />
Email: <input type="text" name="email" /><span class="error">*<?php echo $emailErr; ?></span><br />
<input type="submit" value="register" name="submit" /><br />
</form>
<?php
echo "First Name: " . $fname . "<br />";
echo "Last Name: " . $lname . "<br />";
echo "Email: " . $email . "<br />";
?>
</body>
</html>
