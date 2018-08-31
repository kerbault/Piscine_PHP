<?php

if ($_GET['action'] && $_GET['name']) {
    if ($_GET['action'] == 'set') {
        setcookie($_GET['name'], $_GET['value'], time() + 3600);
    } elseif ($_GET['action'] == 'get' && isset($_COOKIE[$_GET['name']])) {
        echo $_COOKIE[$_GET['name']];
    } elseif ($_GET['action'] == 'del') {
        setcookie($_GET['name'], $_GET['value'], time() - 1);
    }
}
