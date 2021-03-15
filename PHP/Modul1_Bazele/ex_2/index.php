<?php

$numar = 50;
$parametru = 20;

function diferentaAbsoluta($numar, $parametru): int
{
    $diff = abs($numar - $parametru);
    if ($parametru > $numar) {
        $diff = $diff * 3;
    }
    return $diff;
};

echo diferentaAbsoluta($numar, $parametru);
