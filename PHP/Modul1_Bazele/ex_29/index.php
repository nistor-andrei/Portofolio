<?php

function fibonacci($numar): array
{
    $a = 0;
    $b = 1;
    $rezultat = 0;
    $r = [$a, $b];

    for ($i = 0; $i <= $numar; $i++) {
        $rezultat = $a + $b;
        $a = $b;
        $b = $rezultat;
        $r[] = $rezultat;
    }
    return ($r);
}

var_dump(fibonacci(2));
