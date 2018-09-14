<form action="login" method="post">
	<label for="login"> Login</label>
	<input type="text" name="login" value="<?php echo $_SESSION["login"] ?>" required>

	<label for="password">Password</label>
	<input type="password" name="password" value="" required>

	<label for="mail">E-Mail</label>
	<input type="email" name="mail" value="<?php echo $_SESSION["mail"] ?>" required>

	<label for="name"> First name and last name</label>
	<input type="text" name="name" value="<?php echo $_SESSION["name"] ?>" required>

	<label for="address">Your Address</label>
	<input type="text" name="address" value="<?php echo $_SESSION["address"] ?>" required>

	<input type="submit" name="updateUser" value="Save">
</form>
