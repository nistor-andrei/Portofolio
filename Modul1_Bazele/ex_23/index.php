<?php

$a = [1, 2, 3, 4, 5];

$reindex = array_values($a);
function deleteElement(int $pozitie): void
{
    global $a;
    unset($a[$pozitie]);
    var_dump($a);
}

echo deleteElement(2);
var_dump($reindex);
