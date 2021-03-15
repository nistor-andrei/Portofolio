<?php

function textInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}

function verificare($dataV)
{
    if (!empty($dataV)) {
        $dataV = textInput($dataV);
        return $dataV;
    }

}

function eveExista(array $sesiune, array $event): bool
{
    return in_array($event, $sesiune);
}

function grupareDate(array $evenimente, array $event)
{
    if (empty($evenimente)) {
        return $event;
    }
    $grupareDataCalendar = [];
    foreach ($evenimente as $e) {
        $grupareDataCalendar[$e['data_start']][] = $e['participanti'];
    }

    foreach ($grupareDataCalendar as $data => $persoane) {
        if ($data === $event['datast']) {
            $persoaneDataActuala = array_merge(...$persoane);
            $nrAparatii = array_count_values($persoaneDataActuala);
            $persoaneAparitii = [];
            foreach ($event['participanti'] as $participant) {
                if ($nrAparatii['participant'] >= 2) {
                    $persoaneAparitii = array_diff($event['participanti'], $participant);
                }
                $event['participanti'] = $persoaneAparitii;
            }
        }
    }
    return $event;
}

function afisareBaza(array $eve)
{
    foreach ($eve as $e) {
        echo "Eveniment -" . $e['nume'] . "</br>";
        echo "Data start -" . $e['datast'] . "</br>";
        echo "Data sfarsit -" . $e['datasf'] . "</br>";
        echo "Descriere -" . $e['descriere'] . "</br>";
        echo "Participanti -";
        foreach ($e['participanti'] as $nume) {
            echo $nume . ",";
        }
    }
    echo "</br>" . "</br>" . "</br>";
}
