<?php

session_start();

if (isset($_SESSION['modele'])) {
    foreach ($_SESSION['modele'] as $value) {
        var_dump($value) . '<br / >';
    }
}

echo session_id();

session_destroy();
