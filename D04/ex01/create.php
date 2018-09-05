<?php
if ($_POST['login'] != null && $_POST['passwd'] != null && $_POST['submit'] == 'OK') {
    if (!file_exists('./private')) {
        mkdir('private');
    }

    echo ("OK");
} else {
    echo ("ERROR");
}
