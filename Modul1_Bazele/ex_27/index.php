<?php

$a = [1, 2, 3, 4, 0, 5, 6, 0, 9, 7];

$multi = [];
$x = [];

foreach ($a as $value) {
    if ($value === 0) {
        $multi[] = $x;
        $x = [];
    } else {
        $x[] = $value;
    }
}

if (!empty($x)) {
    $multi[] = $x;
}

function verificare(array $parametru)
{
    $oldArray = $parametru;
    sort($parametru);
    $ok = true;
    foreach ($parametru as $key => $value) {
        if ($value !== $oldArray[$key]) {
            $ok = false;
        }
    }
    return $ok;
}

foreach ($multi as $key => $value) {
    if (verificare($value)) {
        var_dump($value);
    } else {
        unset($value);
    }

}
