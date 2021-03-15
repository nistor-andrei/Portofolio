<?php

$array = [5, 5, 5, 4, 9, 8];

function triplaInArray($array): string
{
    for ($i = 0; $i <= count($array); $i++) {
        if ($array[$i] == 5 && $array[$i + 1] == 5 && $array[$i + 2] == 5) {
            return 'Se repeta numarul 5';
        } else {
            return 'Nu se repeta numarul 5';
        }
    }
}

echo triplaInArray($array);
