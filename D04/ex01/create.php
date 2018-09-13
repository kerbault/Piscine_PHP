<?php
if (isset($_POST['login']) && isset($_POST['passwd']) && isset($_POST['submit'])
    && $_POST['login'] != null && $_POST['passwd'] != null && $_POST['submit'] == 'OK') {
    if (!file_exists('../private')) {
        mkdir('../private');
    }
    $tmp['login'] = htmlspecialchars($_POST['login']);
    $tmp['passwd'] = hash("sha512", htmlspecialchars($_POST['passwd']));
    if (file_exists('../private/passwd')) {
        $users = unserialize(file_get_contents("../private/passwd"));
        foreach ($users as $tmp2) {
            if ($tmp2['login'] == $tmp['login']) {
                echo "ERROR\n";
                exit;
            }
        }
    }
    $users[] = $tmp;
    file_put_contents('../private/passwd', serialize($users));
    echo "OK\n";
} else {
    echo "ERROR\n";
}
