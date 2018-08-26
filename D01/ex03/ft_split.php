<?php

function ft_split($str)
{
    if ($str == null) {
        exit;
    }

    $i = -1;
    while ($i != 0) {
        $str = str_replace("  ", " ", $str, $i);
    }

    $array = explode(" ", trim($str));
    sort($array);
    return ($array);
}

// Main to delete
// print_r(ft_split(trim("           Hello          World AAA")));
