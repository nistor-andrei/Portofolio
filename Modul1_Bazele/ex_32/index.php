<?php

function factorii($a)
{
    $factorii = [];
    for ($i = 1; $i <= $a; $i++) {
        if ($a % $i == 0) {
            $factorii[] = $i;
        }
    }
    return $factorii;
}

var_dump(factorii(2020));
