#!/usr/bin/php
<?php

function replace($tab)
{
    $tab[0] = preg_replace("#$tab[1]#", strtoupper($tab[1]), $tab[0]);
    return ($tab[0]);
}

if ($argc == 2) {
    $tmp = file_get_contents($argv[1]);
    $tab = preg_replace_callback("#<a .*>(.*)<#Uis", "replace", $tmp);
    $tab = preg_replace_callback("#title\s*=[ '\"](.*)['\"]#Uis", "replace", $tab);
    echo ($tab);
}
return (0);
?>