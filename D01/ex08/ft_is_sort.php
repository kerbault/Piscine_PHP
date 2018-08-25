<?php

function ft_is_sort($tab)
{
    $tmp = $tab;
    sort($tmp);
    if (array_diff_assoc($tab, $tmp) != null) {
        return (0);
    } else {
        return ($tab);
    }
}
