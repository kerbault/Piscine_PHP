<?php

$deleteForm = include("forms/products/delete.php");
$insertForm = include("forms/products/insert.php");
$selectForm = include("forms/products/select.php");
$updateForm = include("forms/products/update.php");

echo $deleteForm;
echo $insertForm;
echo $selectForm;
echo $updateForm;

$category = $_SESSION["params"]["active"];

if ($category == "pants" || $category == "tshirts" || $category == "shoes") {

	$res = mysqli_query(getDB(), "SELECT * FROM products WHERE name='".$_SESSION["params"]["product_name"]."'");
	$row = mysqli_fetch_assoc($res);
}
else {
	// code...
}
 ?>
