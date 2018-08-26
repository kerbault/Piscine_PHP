#!/usr/bin/php
<?php

if ($argc == 2) {
    $tmp = file_get_contents($argv[1]);
    echo ($tmp);
}
return (0);
?>