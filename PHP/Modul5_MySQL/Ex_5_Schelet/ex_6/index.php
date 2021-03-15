<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'baza_noua';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    insert($conn, $argv);

    echo 'Conectat cu succes!';
} catch (PDOException $e) {
    echo 'Conectare esuata: ' . $e->getMessage();
}

function insert($conn, $x): void
{
    unset($x[0]);
    array_values($x);
    if (!isset($x)) {
        exit('Nu ai setat parametri');
    }

    $d = [
        'p1' => $x[1],
        'p2' => $x[2],

    ];
    $sql = "INSERT INTO persoane(numar,nume) VALUES (:p1,:p2)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($d);
}
