<?php
session_start();

$count = 0;
if (isset($_COOKIE["vizite"])) {
    $count = ++$_COOKIE["vizite"];
}

setcookie("vizite", $count);
if ($_COOKIE["vizite"] <= 1) {
    echo "Bine ai venit,nu ne-am mai vazut pana acum";
} else {
    echo "Ne-ai mai vizitat de " . $count . " ori";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events List</title>
</head>
<body>
    <form action="salveaza.php" method="POST">
        <label for="nume_evId">Nume eveniment:</label>
            <input type="text" id="nume_evId"  name="nume_ev" ><br><br>
        <label for="data_startId">Data start eveniment:</label>
            <input type="date" id="data_startId"  name="data_start" ><br><br>
        <label for="data_sfarsitId">Data starsit eveniment:</label>
            <input type="date" id="data_sfarsitId"  name="data_sfarsit" ><br><br>
        <label for="descriereId">Descriere eveniment:</label>
            <textarea type="textarea" id="descriereId" name="descriere">
            </textarea><br><br>

        <input type="checkbox" id="part1" name= "participanti[]" value="Andrei">
            <label for="part1">Andrei</label>
        <input type="checkbox" id="part2" name= "participanti[]" value="Codrin">
            <label for="part2">Codrin</label>
        <input type="checkbox" id="part3" name= "participanti[]" value="Alexandru">
            <label for="part3">Alexandru</label><br>
        <button type="submit" name="submit" class="btn">Submit</button>
    </form>
</body>
</html>
