#!/usr/bin/php
<?php

if ($argc > 1) {
    $ret = trim(preg_replace('#[ \t]+#', " ", $argv[1]));
    echo ("$ret\n");
}
return (0);
?>