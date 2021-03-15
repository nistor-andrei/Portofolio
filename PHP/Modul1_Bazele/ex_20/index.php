<?php

define('c', 10);
$arr = [];

for ($i = 10; $i <= 20; $i++) {
    $arr[] = $i + c;
}

var_dump($arr);
