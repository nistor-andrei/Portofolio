<?php

$origin = new DateTime('2009-10-11');
$target = new DateTime('2020-11-29');

$interval = $origin->diff($target);

echo $interval->format('%Y years ,%m months and %d days');