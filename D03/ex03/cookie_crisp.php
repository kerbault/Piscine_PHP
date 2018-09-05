<?php

if (isset($_GET['action']) && isset($_GET['name'])) {
    if ($_GET['action'] == 'set') {
        setcookie($_GET['name'], isset($_GET['value']) ? $_GET['value'] : null, time() + 3600);
    } elseif ($_GET['action'] == 'get' && isset($_COOKIE[$_GET['name']])) {
        echo ($_COOKIE[$_GET['name']]);
        echo "\n";
    } elseif ($_GET['action'] == 'del') {
        setcookie($_GET['name'], 0, time() - 1);
    }
}
