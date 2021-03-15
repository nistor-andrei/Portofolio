<?php

session_start();

if (empty($_POST['Submit'])) {
    header("Location:login.php");
}

function textInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}

$usr = textInput($_POST['username']);
$pass = textInput($_POST['password']);

if ($usr != $_SESSION['user'] && $pass != $_SESSION['pass']) {
    header("Location:login.php?eroare=User si parola gresita");
} elseif ($usr == $_SESSION['user'] && $pass != $_SESSION['pass']) {
    header("Location:login.php?eroare=Parola gresita");
} elseif ($usr != $_SESSION['user'] && $pass == $_SESSION['pass']) {
    header("Location:login.php?eroare=User gresit");
} elseif ($usr == $_SESSION['user'] && $pass == $_SESSION['pass']) {
    header("Location: welcome.php?");
}

