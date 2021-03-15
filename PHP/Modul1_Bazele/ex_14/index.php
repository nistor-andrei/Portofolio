<?php

$x = 20;
$y = 13;
$z = 30;

function treiValori(int $x, int $y, int $z): int
{
    if ($x === 13) {
        return 0;
    } elseif ($y === 13) {
        return $z;
    } elseif ($z === 13) {
        return $x + $y;
    } else {
        return $x + $y + $z;
    }
}

echo treiValori($x, $y, $z);
