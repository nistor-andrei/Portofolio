<?php

class Database
{
    private $serverName;
    private $userName;
    private $password;
    private $databaseName;

    public function __construct(string $databaseName, string $serverName = 'localhost', string $userName = 'root', string $password = '')
    {
        $this->serverName = $serverName;
        $this->userName = $userName;
        $this->password = $password;
        $this->databaseName = $databaseName;
    }

    public function connectAndCreateDatabase()
    {
        try {
            $conn = new PDO("mysql:host={$this->serverName}", $this->userName, $this->password);
            $conn->exec("CREATE DATABASE `{$this->databaseName}`");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Conectare esuata: ' . $e->getMessage();
        }
    }
}
