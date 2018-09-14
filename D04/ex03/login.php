<?php
session_start();

include 'auth.php';
if (isset($_GET["login"]) && isset($_GET["passwd"])) {
    $login = $_GET["login"];
    $passwd = $_GET["passwd"];
    if (auth($login, $passwd) == true) {
        $_SESSION['loggued_on_user'] = $login;
        echo "OK\n";
        exit;
    }
}
echo "ERROR\n";
exit;
