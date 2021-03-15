<?php

//   Creaza logica unui calculator minimal. Logica operatorilor (**; +; -; *; /; %) va fi creata in functii separate.

//  1.Fiecare functie are doi parametri de tipul int si/sau float (combinate)
//  2. Afiseaza ceea ce returneaza fiecare functie (rezultatul operatiei)
//  3. Foloseste return type hint unde este cazul

function calculPlus(float $numar1, int $numar2): void
{

    echo $numar1 + $numar2;
}
function calculMinus(float $numar1, int $numar2): void
{

    echo $numar1 - $numar2;
}
function calculInmultit(float $numar1, int $numar2): void
{

    echo $numar1 * $numar2;
}
function calculImpartit(float $numar1, int $numar2): void
{

    echo $numar1 / $numar2;
}
function calculModulo(float $numar1, int $numar2): void
{

    echo $numar1 % $numar2;
}
function calculExponential(float $numar1, int $numar2): void
{

    echo $numar1 ** $numar2;
}

function calculator($parametru1, $operator, $parametru2)
{

    switch ($operator) {
        case '+':
            calculPlus($parametru1, $parametru2);
            break;

        case '-':
            calculMinus($parametru1, $parametru2);
            break;

        case '*':
            calculInmultit($parametru1, $parametru2);
            break;

        case '/':
            calculImpartit($parametru1, $parametru2);
            break;

        case '%':
            calculModulo($parametru1, $parametru2);
            break;

        case '**':
            calculExponential($parametru1, $parametru2);
            break;
    }
}

calculator(2, '+', 3);

// Cred ca din cauza faptului ca am 2 parametri iar switch compara un singur parametru,cum as putea sa fac sa functioneze.
