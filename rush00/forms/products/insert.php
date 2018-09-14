<form action='<?php echo $_SERVER["REQUEST_URI"] ?>' method='post'>

	<input type="hidden" name="product_id" value="<?php //echo $_SESSION["product"]["id"]; ?>">

	<label for="product_name">Name</label>
	<input type="text" name="product_name" value="" required>

	<label for="product_qty">Stock Quantity</label>
	<input type="number" name="product_qty" value="9999" required>

	<label for="product_image">Picture</label>
	<input type="image" name="product_image" value="">

	<label for="product_price">Price</label>
	<input type="number" name="product_price" value="" required>

	<input type='submit' name='insert_product' value='Update'>

</form>
