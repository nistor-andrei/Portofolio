<?php

$array = [4, 5, 6, 10, 12, 15];

function ordineaSecventei($array): bool
{
    for ($i = 0; $i <= count($array); $i++) {
        if ($array[$i] == 1 && $array[$i + 1] == 2 && $array[$i + 2] == 3) {
            return "true";
        } else {
            return "false";
        }
    }
}

echo ordineaSecventei($array);
