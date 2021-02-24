<?php

include_once 'Classes/CreateTable.php';
include_once 'Classes/Helper.php';

use Classes\CreateTable;
use Classes\Helper;
if (empty($dbName)) {
    header('Location:index.php?eroare=Nu este adaugata numele bazei de date');
}
if (empty($tableName)) {
    header('Location:index.php?eroare=Nu ai adaugat un nume tabelului');
}
if (empty($columnName)) {
    header('Location:index.php?eroare=Nu ai adaugat un nume coloanei');
}
if (empty($columnType)) {
    header('Location:index.php?eroare=Nu ai selectat un tip de coloana');
}
if (empty($columnSize)) {
    header('Location:index.php?eroare=Nu ai adaugat o dimensiune coloanei');
}

$dbName = Helper::preventXSS($_POST['numeDB']);
$tabelName = Helper::preventXSS($_POST['numeTabel']);
$columnName = Helper::preventXSSArr($_POST['columnName']);
$columnType = Helper::preventXSSArr($_POST['columnType']);
$columnSize = Helper::preventXSSArr($_POST['columnSize']);

$table = new CreateTable($dbName, $tabelName, $columnName, $columnType, $columnSize);

$table->createTable();
