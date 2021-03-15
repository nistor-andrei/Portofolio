<?php

$servername = 'localhost';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo 'Conectat cu succes!';
} catch (PDOEXception $e) {
    echo 'Conectare esuata: ' . $e->getMessage();
}
