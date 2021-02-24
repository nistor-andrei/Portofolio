<?php

/*
Clasa va avea:
1. O proprietate privata ce va fi array-ul tau.
2. O metoda publica set, care seteaza proprietatea din exterior.
3. O metoda publica in care se sorteaza array si-l afiseaza utilizatorului.
 */

class Sort
{
    private $arr = [];

    public function setArr(array $array = []): void
    {
        $this->arr = $array;
    }

    public function afisare()
    {
        $this->sortare();

        foreach ($this->arr as $value) {
            echo $value . '<br>';
        }

    }

    private function sortare(): void
    {
        sort($this->arr);
    }
}

$sort = new Sort();

$sort->setArr([10, 20, 30, 40]);
$sort->afisare();
