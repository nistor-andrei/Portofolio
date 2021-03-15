<?php

$a = [2, 5, 3, 10, 25, 4, 100];

$par = [];
$impar = [];
foreach ($a as $valoare) {
    if ($valoare % 2) {
        $impar[] = $valoare;
    } else {
        $par[] = $valoare;
    }

}

var_dump($impar, $par);
