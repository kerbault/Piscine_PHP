#!/usr/bin/php
<?php

function cmp($a, $b)
{
    $ca = strtolower($a);
    $cb = strtolower($b);
    $i = 0;
    $comp = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
    while (($i < strlen($ca)) || ($i < strlen($cb))) {
        $posa = ($ca[$i]) ? strpos($comp, $ca[$i]) : 0;
        $posb = ($cb[$i]) ? strpos($comp, $cb[$i]) : 0;
        if ($posa < $posb) {
            return (-1);
        } else if ($posa > $posb) {
            return (1);
        } else {
            $i++;
        }

    }
}

if ($argc > 1) {
    $argv[0] = null;
    $tmp = implode(" ", $argv);
    $tmp = trim($tmp);
    $i = -1;
    $tmp = str_replace("\t", " ", $tmp);
    while ($i != 0) {
        $tmp = str_replace("  ", " ", $tmp, $i);
    }
    $tab = explode(" ", $tmp);
    usort($tab, "cmp");
    foreach ($tab as $val) {
        echo ("$val\n");
    }
}
return (0);
?>