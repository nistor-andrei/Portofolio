<?php

$a = 21;
$b = 25;

function valoareaMare($a, $b): int
{
    if (20 <= $a && $a <= 30 && 20 <= $b && $b <= 30) {
        if ($a < $b) {
            return $b;
        }
    } else {
        return 0;
    }

}

echo valoareaMare($a, $b);
