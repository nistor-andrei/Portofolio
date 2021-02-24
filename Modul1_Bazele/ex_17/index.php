<?php

$a = [10, 20, 30];

function functieParametru(array $a): string
{

    if (in_array(15, $a)) {
        return 'true';
    } elseif (in_array(20, $a)) {
        return 'false';
    }
}
echo functieParametru($a);
