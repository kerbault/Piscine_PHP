#!/usr/bin/php
<?php

while (1) {
    echo "Entrez un nombre: ";
    $var = trim(fgets(STDIN));
    if (feof(STDIN) == true) {
        exit();
    }

    if (is_numeric($var) != 1) {
        echo "'$var' n'est pas un chiffre\n";
    } else {
        if ($var % 2 == 0) {
            echo "Le chiffre $var est Pair\n";
        } else {
            echo "Le chiffre $var est Impair\n";
        }

    }
}
?>