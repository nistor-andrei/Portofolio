<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'first_database';

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    exit('Conexiunea esuata ' . $conn->connect_error);
} else {
    echo 'Conectare la baza de date a fost realizata cu succes!';
}
