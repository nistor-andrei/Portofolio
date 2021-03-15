<?php

function maiMare(array $array)
{
    $b = 0;
    foreach ($array as $key => $valoare) {
        if ($valoare > $b) {
            $b = $valoare;
        }
    }
    echo $b;
}

echo maiMare([40, 21, 25, 50, 100]);
