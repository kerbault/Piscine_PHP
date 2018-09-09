<?php
if ($_POST['login'] != null && $_POST['passwd'] != null && $_POST['submit'] == 'OK') {
    if (!file_exists('./private')) {
        mkdir('private');
    }
    $tmp = unserialize(file_get_contents('./private/passwd'));
    $tmp[] = array($_POST['login'] => $_POST['passwd']);
    file_put_contents('./private/passwd', serialize($tmp));
    echo ("OK");
} else {
    echo ("ERROR");
}
// hash('sha256', 