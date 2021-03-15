<?php
session_start();

include_once 'helper.php';
if (!isset($_POST['submit'])) {
    exit('Completeaza formularul');
}

if (!isset($_SESSION['events'])) {
    $_SESSION['events'] = [];
}


$event = [];
$event['nume'] = verificare($_POST['nume_ev']);
$event['datast'] = verificare($_POST['data_start']);
$event['datasf'] = verificare($_POST['data_sfarsit']);
$event['descriere'] = verificare($_POST['descriere']);
$event['participanti'] = $_POST['participanti'];

if (eveExista($_SESSION['events'], $event) === true) {
    header('Location: index.php');
} else {
    $event = grupareDate($_SESSION['events'], $event);
    $_SESSION['events'][] = $event;
    header('Location: afisare.php');
}
