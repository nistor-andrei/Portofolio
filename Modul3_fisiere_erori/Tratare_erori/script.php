<?php

var_dump($argv);
var_dump($argc);

$n1=$argv[1];
$n2=$argv[2];
$produs= $n1*$n2;
set_error_handler('functieEroare');

function functieEroare(int $errno,string $errstr):void{
    echo "<b> Eroare : </b> [$errno] $errstr ";
    die;
}

if(!is_numeric($n1) && !is_numeric($n2)){
    trigger_error('Parametri nu sunt numere', E_USER_WARNING);
}elseif($produs>1000){
    echo $produs;
}elseif($produs<=1000){
    echo $n1+$n2;
}