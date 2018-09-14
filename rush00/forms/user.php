<?php

if (isset($_SESSION["params"]))
	$params = $_SESSION["params"];

// show error if there is
if (isset($params["error"]))
{
	echo "<h1 style='color:red;'>ERROR : ".$params["error"]."</h1>";
}

// logout form
if (isset($_POST["logout"]))
{
	mysqli_query(getDB(), "UPDATE `users` SET `logged`= 0 WHERE `id`=".(int)$_SESSION['id']);
	session_destroy();
	header("Location: home");
}

// sign-in form
if (isset($_POST["signin"]))
{
	mysqli_query(getDB(), "INSERT INTO `users`(`name`, `mail`, `address`, `password`, `login`)
	VALUES ('".$_POST['name']."', '".$_POST['mail']."', '".$_POST['address']."', '".$_POST['password']."', '".$_POST['login']."')");

	$_POST["log"] = True;

	header("Location: login");
}

// login form
if (isset($_POST["log"]))
{
	$query = mysqli_query(getDB(), 'SELECT * FROM users WHERE login = "'.$_POST["login"].'"');
	$query = mysqli_fetch_assoc($query);

	if ($query &&
		$query['login'] == $_POST['login'] &&
		$query['password'] == $_POST['password'])
	{
		$_SESSION['id'] = (int)$query['id'];
		$_SESSION['login'] = $query['login'];
		$_SESSION['name'] = $query['name'];
		$_SESSION['mail'] = $query['mail'];
		$_SESSION['logged'] = True;
		$_SESSION['address'] = $query['address'];
		$_SESSION['rank'] = (int)$query['rank'];

		mysqli_query(getDB(), "UPDATE `users` SET `logged`=1 WHERE `id`=".(int)$_SESSION['id']);
		unset($params["error"]);
	}
	else {
		$params["error"] = "Wrong login or password.";
	}

	if (isset($params["error"]))
		header("Location: login");
	else
		header("Location: home");
}

// update user form
if (isset($_POST["updateUser"]))
{
	mysqli_query(getDB(), "UPDATE `users` SET
		 `name`='".$_POST['name']."',
		 `mail`='".$_POST['mail']."',
		 `address`='".$_POST['address']."',
		 `password`='".$_POST['password']."',
		 `login`='".$_POST['login']."'
		 WHERE `id`=".(int)$_SESSION['id']);

		 $_SESSION['login'] = $_POST['login'];
		 $_SESSION['name'] = $_POST['name'];
		 $_SESSION['mail'] = $_POST['mail'];
		 $_SESSION['address'] = $_POST['address'];

	header("Location: login");
}
?>
