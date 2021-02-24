<?php
include_once 'Model/model.php';
include_once 'Controller/controller.php';
include_once 'View/view.php';

use Controller\Controller;
use Model\Model;
use View\View;

$model = new Model;
$view = new View($model);
$view->showTable();
$view->showForm();

//Pas 1 instantiez model
//Pas 2 instantiez View
//Pas 3 Apelez metoda afisare tabel
//Pas 4 Apelez metoda pentru afisare formular
// Pas 5 Verificare daca formularul a fost trimis. Daca da instantie controller si apelez metoda de updatePriceAndCurrency

if(isset($_POST['submit'])){
    $controller = new Controller($_POST,$model);
    $controller->updateCurrency();
    header("Location:index.php");
}