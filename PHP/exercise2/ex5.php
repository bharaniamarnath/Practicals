<?php
$firstname = $lastname = "";
$errfname = $errlname = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
if(empty($_REQUEST["firstname"])){
$errfname = "First name required";
}
else{
$fname = $_REQUEST["firstname"];
}
if(empty($_REQUEST["lastname"])){
$errlname = "Last name required";
}
else{
$lname = $_REQUEST["lastname"];
}
}

$names = array();
$names [] = array(
'firstname'=>"Bharane",
'lastname'=>"Amarnath"
); 


$doc = new DOMDocument();
$doc->formatOutput = true;

$e = $doc->createElement("names");
$doc->appendChild($e);

foreach($names as $name){
$b = $doc->createElement("name");

$fname = $doc->createElement("firstname");
$fname->appendChild(
$doc->createTextNode($name['firstname'])
);
$b->appendChild($fname);

$lname = $doc->createElement("lastname");
$lname->appendChild(
$doc->createTextNode($name['lastname'])
);
$b->appendChild($lname);

$e->appendChild($b);
}

echo $doc->saveXML();
$doc->save("names.xml");
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="<?php $_SERVER["PHP_SELF"]?>" method="POST">
First Name: <input type="text" name="firstname" /><span><?php echo $errfname; ?><br />
Last Name: <input type="text" name="lastname" /><?php echo $errlname; ?><br />
<input type="submit" value="record" />
</form>
</body>
</html>