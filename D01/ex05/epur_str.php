#!/usr/bin/php
<?php

if ($argc == 2) {
    $i = -1;
    $argv[1] = trim($argv[1]);
    while ($i != 0) {
        $argv[1] = str_replace("  ", " ", $argv[1], $i);
    }
    printf("$argv[1]\n");
}
?>