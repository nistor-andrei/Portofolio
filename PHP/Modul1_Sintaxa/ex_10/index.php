<?php

$sporturi = ['fotbal', 'baschet', 'inot', 'voley'];
sort($sporturi);

foreach ($sporturi as $key => $numarul) {
    echo "$key = $numarul\n";
}
;
