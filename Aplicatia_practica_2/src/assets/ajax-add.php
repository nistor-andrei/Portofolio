<?php
include_once '../Controller/session.php';
use Controller\SessionCart;

SessionCart::sessionStart();
$id = $_POST['id_product'];
$_SESSION['products'][]=$id;
echo count($_SESSION['products']);


