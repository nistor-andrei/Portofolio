<?php

include_once '../Controller/session.php';
use Controller\SessionCart;

SessionCart::sessionStart();

// if(isset($_POST['remove-to-cart'])){
//     unset($_SESSION['products'][$id]);
// }

$id = $_POST['id_product'];

if (!empty($_SESSION['products'])) {
    foreach ($_SESSION['products'] as $k => $v) {
        if ($id == $v) {
            unset($_SESSION['products'][$k]);
        }
    }
}

