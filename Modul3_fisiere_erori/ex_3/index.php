<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
        <th>Nume</th>
        <th>Prenume</th>
        <th>Functie</th>
        <th>Salariu nou</th>
        <th>Bonus</th>
        <th>Data angajare</th>
        </tr>

<?php
$file = file_get_contents('companie.txt');
$angajati = explode("\n", $file);

foreach ($angajati as $angajat) {
    list($nume, $prenume, $functie, $salariu, $bonus, $dataAngajare) = explode(",", $angajat);
    $joburi[$functie][] = $salariu;
    $tipJob = [];
    $media = [];
    // Calcularea media salariilor per functie.
    foreach ($joburi as $key => $value) {
        $tipJob[] = $key;
        $media[] = array_sum($value) / count($value);
        $mediaSalariu = array_combine($tipJob, $media);
    }

    $currentDate = date('Y-m-d');

    $dif = abs(strtotime($currentDate) - strtotime($dataAngajare));

    $years = floor($dif / (365 * 60 * 60 * 24));

    $bonusVal = str_replace('%', '', $bonus);

    if ($years >= 1) {
        $salariuNou = $salariu + $salariu * $bonusVal / 100;
    } else {
        $salariuNou = $salariu;
    }
    $data = ['nume' => $nume,
        'prenume' => $prenume,
        'functie' => $functie,
        'salariu' => $salariu,
        'bonus' => $bonus,
        'dataAngajare' => $dataAngajare];
    tabel($data);
}

function tabel(array $arr): void
{
    echo "<tr>";
    echo "<td>" . $arr['nume'] . "</td>";
    echo "<td>" . $arr['prenume'] . "</td>";
    echo "<td>" . $arr['functie'] . "</td>";
    echo "<td>" . $arr['salariu'] . "</td>";
    echo "<td>" . $arr['bonus'] . "</td>";
    echo "<td>" . $arr['dataAngajare'] . "</td>";
    echo "</tr>";
}
// Daca pun echo si la </tr> si </table> primul rand afiseaza cum trebuie iar pe doilea rand se pun toate una dupa alta. Eu l-am lasat asa fara echo si imi afiseaza corect

?>
</table>



</body>
</html>
