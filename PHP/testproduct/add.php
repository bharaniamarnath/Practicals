<?php
include("connect.php");
if(isset($_POST['add'])){
$pid = rand(000000,999999);
$pname = mysql_real_escape_string($_POST['pname']);
$cat = mysql_real_escape_string($_POST['category']);
$subcat = mysql_real_escape_string($_POST['subcategory']);
$desc = mysql_real_escape_string($_POST['description']);
$name = $_FILES['pimage']['name'];
$tmp_name = $_FILES['pimage']['tmp_name'];
$imgpath = "images/$cat/$subcat/$pid.jpg";
$addpro = "INSERT INTO products (pid,name,category,subcategory,description,image,date) VALUES ('$pid','$pname','$cat','$subcat','$desc','$imgpath',now())";
$result = mysql_query($addpro);
if($name){
move_uploaded_file($tmp_name,$imgpath);
}
if($result){
echo "Product added to the database. <a href='index.php'>Go Back</a>";
exit();
}
else{
echo "Error: Failed to add the product. <a href='index.php'>Go Back</a>";
exit();
}
}
?>
<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<h3>Add a new product</h3>
<form action="add.php" method="POST" enctype="multipart/form-data">
<table>
<tr><td>Product name</td><td><input type="text" name="pname" /></td></tr>
<tr><td>Category</td><td><select name="category" />
<option value="clothes">Clothes</option>
<option value="electronics">Electronics</option>
</select></td></tr>
<tr><td>Sub-Category</td><td><select name="subcategory" />
<option value="shirt">Shirt</option>
<option value="pant">Pant</option>
<option value="mobile">Mobile</option>
<option value="laptop">Laptop</option>
</select></td></tr>
<tr><td>Description</td><td><textarea name="description"></textarea></td></tr>
<tr><td>Image</td><td><input type="file" name="pimage" /></td></tr>
<tr><td colspan="2"><input type="submit" name="add" value="Add" style="float: right;"/></td></tr> 
</table> 
</form>
</body>
</html>