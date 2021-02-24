<?php
session_start();
$username = 'Andrei';
$password = 'programareweb';

$_SESSION['user'] = $username;
$_SESSION['pass'] = $password;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
</style>
    <title>Login Page</title>
</head>
<body>
    <div class="box">
        <form method="POST" action="process.php" class="formular">
            <h1 class="main-title"> Sign In </h1>
            <input type= "text" name="username" placeholder="Username"  class="drept1"><br>
            <input type= "password" name="password" placeholder="Password" class="drept2" ><br>
            <input type= "submit" value="Submit" class="button">
        </form>
<?php

if (array_key_exists('eroare', $_GET)) {
    echo $_GET['eroare'];
}
?>
    </div>
</body>
</html>
