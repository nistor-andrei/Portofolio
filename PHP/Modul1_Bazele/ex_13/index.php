<?php
$parametru1 = 20;
$parametru2 = 20;
$parametru3 = 30;

function functiaParametrilor(int $parametru1, int $parametru2, int $parametru3): int
{
    $suma = $parametru1 + $parametru2 + $parametru3;
    if ($parametru1 == $parametru2) {
        return $parametru3;
    } elseif ($parametru1 == $parametru3) {
        return $parametru2;
    } elseif ($parametru2 == $parametru3) {
        return $parametru1;
    } else {
        return 0;
    }
}

echo functiaParametrilor($parametru1, $parametru2, $parametru3);
