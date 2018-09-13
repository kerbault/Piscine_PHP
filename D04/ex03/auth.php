<?php

function auth($login, $passwd)
{
	$users = unserialize(file_get_contents("../private/passwd"));
	$passwd = hash("sha512", $passwd);
    foreach ($users as $tmp) {
		if ($tmp['login'] == $login && $tmp['passwd'] == $passwd) {
			return TRUE;
		}
	}
	return FALSE;
}
