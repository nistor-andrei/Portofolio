<?php

$anDeProductie = [
    'Golf 4 ' => 1999,
    'Golf 5 ' => 2003,
    'Golf 6 ' => 2009,
];

function repeatArray(array $anDeProductie): void
{
    foreach ($anDeProductie as $key => $an) {
        echo sprintf("Am un %s din anul %s'.\n", $key, $an, );}
}

ksort($anDeProductie);
repeatArray($anDeProductie);
asort($anDeProductie);
repeatArray($anDeProductie);
arsort($anDeProductie);
repeatArray($anDeProductie);
krsort($anDeProductie);
repeatArray($anDeProductie);
