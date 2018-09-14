<?php
include("models/login.php");

if (isset($_POST["log"]))
	$model = getUserModel($_POST["login"]);


if (isset($_SESSION["logged"]) && $_SESSION["logged"]) {
	$LogoutForm = include("forms/users/logout.php");
	$UpdateUserForm = include("forms/users/update.php");
	echo $LogoutForm;
	echo $UpdateUserForm;
}
else {
	$LoginForm = include("forms/users/login.php");
	$SigninForm = include("forms/users/signin.php");
	echo $LoginForm;
	echo $SigninForm;
}
include("views/login.php");
?>
