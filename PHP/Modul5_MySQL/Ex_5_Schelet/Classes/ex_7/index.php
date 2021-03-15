<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'baza_noua';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql= 'SELECT ID , numar , nume FROM persoane';
    foreach($conn->query($sql) as $row){
        echo $row['ID'] . " ";
        echo $row['numar'] . " ";
        echo $row['nume'] . "\n" ;
    }

    echo 'Conectat cu succes!';
} catch(PDOException $e) {
    echo 'Conectare esuata: ' . $e->getMessage();
}