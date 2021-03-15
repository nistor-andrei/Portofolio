<?php

class Calculator
{

    public $numar1;
    public $numar2;

    public function __constructor(int $n1, int $n2)
    {
        $this->numar1 = $n1;
        $this->numar2 = $n2;
    }

    private function adunare()
    {
        echo $this->numar1 + $this->numar2;
    }

    private function scadere()
    {
        echo $this->numar1 - $this->numar2;
    }

    private function inmultire()
    {
        echo $this->numar1 * $this->numar2;
    }

    private function modulo()
    {
        echo $this->numar1 % $this->numar2;
    }
    public function logica($o)
    {
        switch ($o) {
            case '+':
                $this->adunare();
                break;
            case '-':
                $this->scadere();
                break;
            case '*':
                $this->inmultire();
                break;
            case '%':
                $this->modulo();
                break;
        }
    }

}

$calc = new Calculator(2,3);
$calc->logica('-');


//Imi afiseaza rezultatul 0
