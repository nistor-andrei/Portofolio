<?php

$parametrul1 = 22;
$parametrul2 = 28;

function verificareaParametrilor(int $parametrul1, int $parametrul2): int
{
    $rest1 = $parametrul1 / 5;
    $rest2 = $parametrul2 / 5;
    if ($rest1 === $rest2) {
    } elseif ($parametrul2 > $parametrul1) {
        return $parametrul1;
        if ($parametrul1 === $parametrul2) {
            return 0;
        }
    }
}

echo verificareaParametrilor($parametrul1, $parametrul2);
