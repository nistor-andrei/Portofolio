<?php

$a = 24;
$b = 14;

function intervalRepetare($a, $b): string
{
    $cat = floor($a / 10);
    $cat2 = floor($b / 10);

    $valoareaA = $a % 10;
    $valoareaB = $b % 10;

    if ((10 <= $a && $a <= 90) && (10 <= $b && $b <= 90)) {
        if ($cat === $cat2 || $cat === $valoareaB || $valoareaA === $cat2 || $valoareaA === $valoareaB) {
            return 'true';
        }
    } else {
        return 'false';
    }
}

echo intervalRepetare($a, $b);
