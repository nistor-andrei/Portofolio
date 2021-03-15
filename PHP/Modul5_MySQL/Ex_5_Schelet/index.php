<?php

include_once('Classes/AbstractForm.php');
include_once('Classes/NumberOfColumnsForm.php');
include_once('Classes/ColumnsForm.php');

use Classes\NumberOfColumnsForm;
use Classes\ColumnsForm;

/** 
 * Instantiaza clasa NumberOfColumnsForm ce va avea ca action fisierul curent si un method type
 * Se verifica daca informatia din formular a fost trimisa la server si se creeaza o instanta din ColumnsForm si se afiseaza noul formular
 * Formularul nou va avea action-ul fisierul db.php, loc in care se face crearea tabelei
*/

$numberCF=new NumberOfColumnsForm("index.php","POST");

echo $numberCF->buildForm();
if(isset($_POST['numarColumns'])){
    $columnForm= new ColumnsForm("db.php","POST", $_POST['numarColumns']);
    echo $columnForm->buildForm();
}