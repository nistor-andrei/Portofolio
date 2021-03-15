<?php

$parametru1 = 30;
$parametru2 = 20;

function parametrulApropiat(int $parametru1, int $parametru2): int
{
    $rezultat1 = 100 - $parametru1;
    $rezultat2 = 100 - $parametru2;

    if ($rezultat1 < $rezultat2) {
        return $parametru1;
    } elseif ($rezultat1 == $rezultat2) {
        return '0';
    }
    return '0';
}

echo parametrulApropiat($parametru1, $parametru2);
