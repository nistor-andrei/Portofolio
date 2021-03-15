<?php

$a = 12;
$b = 22;

function numereIntregi(int $a, int $b): string
{
    $valoareaA = $a % 10;
    $valoareaB = $b % 10;
    if ($valoareaA === $valoareaB) {
        return 'Au ultima cifra la fel';
    } else {
        return 'Nu au ultima cifra la fel';
    }
}

echo numereIntregi($a, $b);
