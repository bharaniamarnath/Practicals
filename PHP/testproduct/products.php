<?php
include("connect.php");
$pname = $_GET['product'];
$listpro  = "SELECT * FROM products WHERE subcategory='$pname'";
$result = mysql_query($listpro);
if(mysql_num_rows($result) < 0){
echo "No products available in $pname category";
exit();
}
while($row = mysql_fetch_array($result)){
$pname = $row['name'];
$cat = $row['category'];
$subcat = $row['subcategory'];
$desc = $row['description'];
$edesc = htmlentities($desc);
$image = $row['image'];
echo "<table>";
echo "<tr>";
echo "<td><img src='$image'></img></td>";
echo "<td><h4>$pname</h4><p>$cat<br />$subcat<br/>$desc</td>";
echo "</tr>";
echo "</table>";
}
?>