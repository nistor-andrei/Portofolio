<?php

$a = [10, 20, -30, -40, 30];
$b = [10, 20, 30, 40, 30];

$pozitiaA = floor(count($a) / 2);
$pozitiaB = floor(count($b) / 2);

$mijlocA = $a[$pozitiaA];
$mijlocB = $b[$pozitiaB];

$c = [$mijlocA, $mijlocB];
var_dump($c);
