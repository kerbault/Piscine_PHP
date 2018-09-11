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
