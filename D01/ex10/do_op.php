#!/usr/bin/php
<?php

if ($argc != 4) {
    echo ("Incorrect Parameters");
    exit;
} else {
    if (trim($argv[2]) == '+' ){
        $ret = trim($argv[1]) + trim($argv[3]);
    } elseif (trim($argv[2]) == '-') {
        $ret = trim($argv[1]) - trim($argv[3]);
    } elseif (trim($argv[2]) == '*') {
        $ret = trim($argv[1]) * trim($argv[3]);
    } elseif (trim($argv[2]) == '/') {
        $ret = trim($argv[1]) / trim($argv[3]);
    } elseif (trim($argv[2]) == '%') {
        $ret = trim($argv[1]) % trim($argv[3]);
	}
	echo ("$ret\n");
}

?>