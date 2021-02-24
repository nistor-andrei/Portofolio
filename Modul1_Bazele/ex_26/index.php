<?php

function linie(int $a = 1): void
{
    while ($a <= 10) {
        echo $a;
        if ($a < 10) {
            echo "-";
        }
        $a++;
    }

}

linie();
