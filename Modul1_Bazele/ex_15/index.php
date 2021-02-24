<?php

$numere = [10, 20, 30, 40];

$count = count($numere);
for ($i = $count - 1; $i >= 0; $i--) {
    $reverse[] = $numere[$i];
}

var_dump($reverse);
