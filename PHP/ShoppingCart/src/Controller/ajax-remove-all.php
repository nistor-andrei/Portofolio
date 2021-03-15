<?php
include_once '../Controller/session.php';
use Controller\SessionCart;

SessionCart::sessionStart();

if (!empty($_SESSION['products'])) {
    unset($_SESSION['products']);
}
