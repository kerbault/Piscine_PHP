<?php

function getDB()
{
	$servername = "172.18.0.2";
	$username = "root";
	$password = "";
	$database = "rush00";
	return (mysqli_connect($servername, $username, $password, $database));
}
?>
