#!/usr/bin/php
<?php

if ($argc > 0) {
    $i = -1;
    while ($i != 0) {
        $argv[1] = str_replace("  ", " ", $argv[1], $i);
    }
    $tab = explode(" ", $argv[1]);
    $i = count($tab);
    $tmp = $tab[$i - 1];
    $tab[$i - 1] = $tab[0];
    $tab[0] = $tmp;
    $j = 0;
    $bol = 0;
    while ($i-- > 0) {
        if ($bol == 1) {
            echo " ";
        }
        echo $tab[$j++];
        $bol = 1;
    }
    echo "\n";
}
return (0);
?>