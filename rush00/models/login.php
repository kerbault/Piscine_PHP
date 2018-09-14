<?php
function getUserModel($login){
    include("db.php");
 
    $query= mysqli_query(getDB(), 'SELECT * FROM Users WHERE `login`="'.$login.'"');
    $user = mysqli_fetch_all($query);
    return $user;
}

function logoutUser() {
	mysqli_query(getDB(), "UPDATE `users` SET `logged`= 0 WHERE `id`=".(int)$_SESSION['id']);
	session_destroy();
}

function signinUser() {
	mysqli_query(getDB(), "INSERT INTO `users`(`name`, `mail`, `address`, `password`, `login`)
	VALUES ('".$_POST['name']."', '".$_POST['mail']."', '".$_POST['address']."', '".$_POST['password']."', '".$_POST['login']."')");

	$_POST["log"] = True;
}

function loginUser() {
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
	}
}

function updateUser() {
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
}
?>
