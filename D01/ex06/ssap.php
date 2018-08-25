#!/usr/bin/php
<?php

$argv[0] = null;
$tmp = implode(" ", $argv);
$tmp = trim($tmp);
$i = -1;
while ($i != 0) {
    $tmp = str_replace("  ", " ", $tmp, $i);
}
$tab = explode(" ", $tmp);
sort($tab);
$i = count($tab);
$j = 0;
while ($i-- > 0) {
	echo $tab[$j++];
	echo "\n";
}
return (0);
?>