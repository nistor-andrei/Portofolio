<?php

var_dump($argc);
var_dump($argv);

$content = fopen($argv[2], 'a+');

$continut = file_get_contents($argv[1]);
echo fwrite($content, $continut);
