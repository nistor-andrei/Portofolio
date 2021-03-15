<?php
namespace Model;

use PDO;

class ConnectDb
{
    public function connectDB()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $db = 'mvc';
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$db;", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Conectat
            return $conn;
        } catch (PDOException $e) {
            echo 'Conectare esuata: ' . $e->getMessage();
        }
    }
}
