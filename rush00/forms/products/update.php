<form action='<?php echo $_SERVER["REQUEST_URI"] ?>' method='post'>

	<input type="hidden" name="product_id" value="<?php //echo $_SESSION["product"]["id"]; ?>">

	<label for="product_name">Name</label>
	<input type="text" name="product_name" value="<?php //echo $_SESSION["product"]["name"]; ?>">

	<label for="product_qty">Stock Quantity</label>
	<input type="number" name="product_qty" value="<?php //echo $_SESSION["product"]["qty"]; ?>">

	<label for="product_image">Picture</label>
	<input type="image" name="product_image" value="<?php //echo $_SESSION["product"]["image"]; ?>">

	<label for="product_price">Price</label>
	<input type="number" name="product_price" value="<?php //echo $_SESSION["product"]["price"]; ?>">

	<input type='submit' name='update_product' value='Update'>

</form>
