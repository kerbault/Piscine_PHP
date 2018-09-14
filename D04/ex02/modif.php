<?php
$bol = 0;
if (isset($_POST['login']) && isset($_POST['oldpw']) && isset($_POST['newpw']) && isset($_POST['submit'])
    && $_POST['login'] != null && $_POST['oldpw'] != null && $_POST['newpw'] != null && $_POST['submit'] == "OK"
    && file_exists("../private/passwd")) {
    $tmpnew['login'] = $_POST['login'];
    $tmpnew['oldpw'] = hash("sha512", $_POST['oldpw']);
    $tmpnew['newpw'] = hash("sha512", $_POST['newpw']);
    $users = unserialize(file_get_contents("../private/passwd"));
    foreach ($users as $tmpold) {
        if ($tmpold['login'] == $tmpnew['login'] && $tmpold['passwd'] == $tmpnew['oldpw']) {
            $tmpold['passwd'] = $tmpnew['newpw'];
            $bol = 1;
        }
        $tmp[] = $tmpold;
    }
    if ($bol == 1) {
        file_put_contents('../private/passwd', serialize($tmp));
        echo "OK\n";
        exit;
    }

}
echo "ERROR\n";
exit;
