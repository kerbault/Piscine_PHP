<?php

$cart = array();
$_SESSION["cart"] = $cart;

function getAddToCartForm($product_id)
{
	return "
	<form action='".$_SERVER["REQUEST_URI"]."' method='post'>
		<input type='hidden' name='product_id' value='".$product_id."'>
		<input type='number' name='qty' value='1'>
		<input type='submit' name='addToCart' value='Add'>
	</form>
	";
}

function getAllProducts()
{
	return "rien";
}


// add article to the cart
if (isset($_POST["addToCart"])) {
	array_push($cart, $_POST["product_id"]);
}

if (isset($_POST["cart"])) {
	var_dump($_SESSION["cart"]);
}
?>
