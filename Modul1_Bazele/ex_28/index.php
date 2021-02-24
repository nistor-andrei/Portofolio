<?php

function factorial($numar)
{

    $rezultatul = 1;
    for ($i = $numar; $i >= 1; $i--) {
        $rezultatul *= $i;
    }
    return $rezultatul;
}

echo factorial(6);
