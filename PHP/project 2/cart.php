<?php
session_start();
include('includes/connect.php');
$page = 'newborn.php';
if (isset($_GET['add'])){
$quantity = mysql_query('SELECT id, quantity FROM products WHERE id='.mysql_real_escape_string((int)$_GET['add']));
while ($quantrow = mysql_fetch_assoc($quantity)) {
if ($quantrow['quantity']!=$_SESSION['cart_'.(int)$_GET['add']]) {
$_SESSION['cart_'.(int)$_GET['add']]+='1';
}
}
header('Location: '.$page);
}
if (isset($_GET['remove'])) {
$_SESSION['cart_'.(int)$_GET['remove']]--;
header('Location: '.$page);
}
if (isset($_GET['delete'])) {
$_SESSION['cart_'.(int)$_GET['delete']]='0';
header('Location: '.$page);
}
function products() {
$getpro = mysql_query('SELECT id, name, description, price, photo FROM products WHERE quantity > 0 ORDER BY id DESC');
if(mysql_num_rows($getpro)==0){
echo "There are no products to display";
}
else{
while($listpro = mysql_fetch_assoc($getpro)){
$proimage = $listpro['photo'];
echo '<div class="greenbox"><img class="productimage" src='.$proimage.'></img><h4 class="productname">'.$listpro['name'].'</h4><br /><p>'.$listpro['description'].'<br />'.'<p class="price">Rs.'.number_format($listpro['price'],2).'</p><a class="addtocart" href="cart.php?add='.$listpro['id'].'">Add to cart</a></p></div>';
}
}
}
function paypal_items() {
$num = 0;
foreach($_SESSION as $name => $value) {
if ($value!=0) {
if (substr($name, 0, 5)=='cart_') {
$id = substr($name, 5, strlen($name-5));
$get = mysql_query('SELECT id, name, price, shipping FROM products WHERE id='.mysql_real_escape_string((int)$id));
while ($getrow = mysql_fetch_assoc($get)) {
$num++;
echo '<input type="hidden" name="item_number_'.$num.'" value="'.$id.'">';
echo '<input type="hidden" name="item_name_'.$num.'" value="'.$getrow['name'].'">';
echo '<input type="hidden" name="amount_'.$num.'" value="'.$getrow['price'].'">';
echo '<input type="hidden" name="shipping_'.$num.'" value="'.$getrow['shipping'].'">';
echo '<input type="hidden" name="shipping2_'.$num.'" value="'.$getrow['shipping'].'">';
echo '<input type="hidden" name="quantity_'.$num.'" value="'.$value.'">';
}
}
}
}
}
function cart(){
$total="";
foreach($_SESSION as $name => $value){
if ($value>0){
if (substr($name, 0, 5)=='cart_'){
$id = substr($name, 5, (strlen($name)-5));
$get = mysql_query('SELECT id, name, price FROM products WHERE id='.mysql_real_escape_string((int)$id));
while($getrow = mysql_fetch_assoc($get)) {
$sub = $getrow['price']*$value;
echo '<p class="cartbox">'.$getrow['name'].' x '.$value.' @ Rs.'.number_format($getrow['price'], 2).' = Rs.'.number_format($sub, 2).'<a class="cartproduct" href="cart.php?remove='.$id.'">-</a> <a class="cartproduct" href="cart.php?add='.$id.'">+</a> <a class="cartproduct" href="cart.php?delete='.$id.'">Delete</a><br /></p>';
}
}
$total += $sub;
}
}
if ($total==0) {
echo "<p>Your cart is empty</p>";
}
else {
echo '<p class="totalprice">Total: Rs.'.number_format($total, 2).'</p>';
?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="upload" value="1">
<input type="hidden" name="business" value="cephilo@gmail.com">
<?php paypal_items(); ?>
<input type="hidden" name="item_name" value="Item Name">
<input type="hidden" name="currency_code" value="INR">
<input type="hidden" name="amount" value="<?php echo $total; ?>">
<input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-but03.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
</form>
<?php
}
}
?>