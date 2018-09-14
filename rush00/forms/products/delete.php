<form action='<?php echo $_SERVER["REQUEST_URI"] ?>' method='post'>
	<input type="hidden" name="product_id" value="<?php //echo $_SESSION["product"]["id"]; ?>">
	<input type='submit' name='delete_product' style="background-color:#f4425c;" value='Delete'>
</form>
