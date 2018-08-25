#!/usr/bin/php
<?php

include "ft_is_sort.php";

$tab = array("!/@#;", "42", "Hello world", "salut", "zzzZZ");
$tab[] = "Ceci n'est qu'un test";
if (ft_is_sort($tab)) {
    echo "Le tableau est trie\n";
} else {
    echo "Le tableau n'est pas trie\n";
}

?>