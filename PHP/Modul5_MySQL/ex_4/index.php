<?php

include_once 'form.php';
include_once 'database.php';
$form = new Form('POST', 'index.php');
echo $form->build();

if (isset($_POST['text'])) {

    $textName = $form->preventXSS($_POST['text']);
    $db = new Database($textName);
    $db->connectAndCreateDatabase();
    header('Location:index.php?=Baza de date a fost creata cu succes');
}
