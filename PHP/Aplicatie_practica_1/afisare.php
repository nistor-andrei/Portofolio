<?php

session_start();
include_once 'helper.php';

if (isset($_SESSION['events'])) {
    afisareBaza($_SESSION['events']);
}
