<?php

function bisect(int $an): bool
{
    if ($an % 4 == 0 && $an % 100 != 0) {
        return true;
        if ($an % 400 == 0) {
            return true;
        }

    }
    return false;
}

$anBisect = bisect(2020);

if ($anBisect == true) {
    echo 'Este an bisect';
} else {
    echo 'Nu este an bisect';
}
