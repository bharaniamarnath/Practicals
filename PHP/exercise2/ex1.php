
<?php
// Make user select product and add to cart with quantity
$conn = mysql_connect("localhost","bharane","21feb1991");
if(!$conn){
echo("Could not connect to the server !");
}
else{
$order_no = rand(000000,999999);
$product_name = mysql_real_escape_string($_POST['product']);
$qty = mysql_real_escape_string($_POST['quantity']);
$currency = "Rs.";
$price = mysql_real_escape_string($_POST['price']);
$final_price = $currency . $price;
$total = $currency . $qty * $price;
$dbcon = mysql_select_db("products",$conn);
if(!$dbcon){
echo("Error connecting database");
}
else{
$add_pro = "INSERT INTO shoes (Order_No, Name, Quantity, Price, Total) VALUES ('$order_no', '$product_name', '$qty', '$final_price', '$total')";
if(!mysql_query($add_pro)){
echo("Error updating the information." . mysql_error());
}
else{
echo("Thank you for online purchasing !");
}
}
}
?>
<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<div class="product">
<h3>Black Shoe</h3>
<img src="shoe1.bmp" style="width:150px; height:150px;"></img>
<p><b>Price: Rs.599.00</b></p> 
<form action="ex1.php" method="post">
<input type="checkbox" name="product" id="product" value="Black Shoe">Select this Product</input><br /><br />
Quantity: <input type="text" name="quantity" id="qunatity" />
<input type="hidden" name="price" id="price" value="599" id="599" />
<input type="submit" name="submit" id="submit" value="Add to Cart" />
</form>
</div>
