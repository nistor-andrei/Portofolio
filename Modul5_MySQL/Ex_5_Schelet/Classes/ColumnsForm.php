<?php

namespace Classes;

use Classes\AbstractForm;

class ColumnsForm extends AbstractForm
{
    private $numberOfColumns;

    public function __construct(
        string $action,
        string $method,
        int $numberOfColumns
    ) {
        parent::__construct($action, $method);

        $this->numberOfColumns = $numberOfColumns;
    }

    public function buildForm(): string
    {
        $form = $this->startForm($this->action, $this->method);
        /**
         * Aceasta metoda va crea formularul in functie de valoarea input-ului primit de la primul formular
         * ce reprezinta numarul de coloane
         * Formularul va avea:
         *  - 1 input text numele bazei de date
         *  - 1 input text numele tabelei
         *  - n (numarul de coloane primit de la primul form) seturi de forma: Ce ar trebui sa fac aici,ma folosesc de $numberOfColumns?
         *      * input text cu name = columnName[]
         *      * select cu name = columnName[] si optiunile lui (VEZI LOGICA METODEI IN AbstractForm)
         *      * input text cu name = columnSize[]
         *  - 1 input submit
         */
        $form .= "Nume baza de date: " . $this->textType('numeDB') . "<br>";
        $form .= "Nume tabel: " . $this->textType('numeTabel') . "<br>";
        for ($i = 0; $i < $this->numberOfColumns; $i++) {
            $form .= "Nume Column: " .$this->textType('columnName[]') . "<br>";
            $form .= "Column Type: " . $this->selectType('columnType[]',['INT'=>'int','BOOL'=>'Boolean','VARCHAR'=>'varchar','CHAR'=>'Char']) . "<br>";
            $form .= "Column Size: " . $this->textType('columnSize[]') . "<br>";
        }
        $form .= $this->submitType('', 'Submit');
        $form .= $this->endForm();
        return $form;
    }
}
