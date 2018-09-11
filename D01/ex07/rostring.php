#!/usr/bin/php
<?php

if ($argc > 0) {
    $i = -1;
    while ($i != 0) {
        $argv[1] = str_replace("  ", " ", $argv[1], $i);
    }
	$argv[1] = trim($argv[1]);
	$tab = explode(" ", $argv[1]);
	$i = count($tab);
	$tab[$i] = $tab[0];
    $j = 1;
	$bol = 0;
	$i++;
    while ($i-- > 1) {
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