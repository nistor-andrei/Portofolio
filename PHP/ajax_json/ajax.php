<?php

$caut = $_POST['cautare'];
$cautari = [
    'Invat PHP',
    'Sunt web developer',
];

foreach ($cautari as $cautare) {
    if (strpos($cautare, $caut)!==false) {
        echo $cautare;
        break;
    }
}
