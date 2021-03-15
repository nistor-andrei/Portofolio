<?php

// 1 5 9  3
// 2 6 10 2
// 3 7 11 1
// 4 8 12 0

$start = 1;

for ($i = $start; $i <= 4; $i++) {
    echo $start . " " . ($start + 4) . " " . ($start + 8) . "\n";
    $start++;
}
