<?php

include_once 'folder/sell.php';

$vanzari= new Vanzari\Sell('Palarie');

echo $vanzari->product() . "\n";

use Vanzari\Sell;

$vanzari2= new Vanzari\Sell('Papuc');

echo $vanzari2->product() . "\n";

use Vanzari\Sell as Produs;

$vanzari3 = new Produs('Umbrela');

echo $vanzari3->product();