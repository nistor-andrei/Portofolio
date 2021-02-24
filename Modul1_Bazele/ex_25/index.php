<?php

function armstrong(int $a = 153)
{
    $numar = 0;
    $variabila = $a;
    $sum = 0;
    $numar = strlen($a);
    while ($a > 0) {
        $sum = $sum + pow(($a % 10), $numar);
        $a = floor($a / 10);
    }
    if ($variabila == $sum) {
        return "true";
    } else {
        return "false";
    }
}


echo armstrong();