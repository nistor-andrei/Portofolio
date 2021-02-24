<?php

/*
1. Afisare dimensiune fisier
2. Afisare tip fisier
3. Afisare nume fisier fara extensie
4. Afisare extensie fisier
5. Stergere fisier*/

$fileSize = $_FILES['file']['size'];
$fileName = $_FILES['file']['name']; // cu tot cu extensie
$fileType = $_FILES['file']['type'];
$fileTmpName = $_FILES['file']['tmp_name'];
$onlyName = pathinfo($fileName, PATHINFO_FILENAME);
$fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
$filePath = "uploads/$fileName";

if (!array_key_exists('optiune', $_POST['optiune'])) {
    exit();
}

function suici(): void
{
    $submit = $_POST['submit'];

    switch ($_POST['optiune']) {
        case 'dimensiune_fisier':
            echo $GLOBALS['fileSize'];
            break;
        case 'tip_fisier':
            echo $GLOBALS['fileType'];
            break;
        case 'fisier_fara_extensie':
            echo $GLOBALS['onlyName'];
            break;
        case 'extensie':
            echo $GLOBALS['fileExtension'];
            break;
        case 'stergere_fisier':
            unlink($GLOBALS['filePath']); // unlink pentru sters
            break;
    }
}

if (isset($_POST['submit'])) {
    if (file_exists($filePath)) {
        suici();
    } else {
        move_uploaded_file($fileTmpName, $filePath);
        suici();
    }

}
// Nu mai da nicio eroare,dar nu afiseaza nimic acuma :))
