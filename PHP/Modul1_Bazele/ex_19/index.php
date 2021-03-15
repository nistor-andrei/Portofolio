<?php

$a = [1, 5, 7, 9, 11, 13];

$count = count($a);

$pozitia1 = floor(count($a) / 2);
$pozitia2 = floor(count($a) / 2) + 1;

$mijloc1 = $a[$pozitia1];
$mijloc2 = $a[$pozitia2];

$b = [$mijloc1, $mijloc2];

var_dump($b);
