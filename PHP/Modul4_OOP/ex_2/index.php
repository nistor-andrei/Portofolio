<?php

class Nume
{
    public $mesaj = "Hi! I'm ";
    public function spellName(string $name)
    {
        return $this->mesaj . $name;

    }
}

$name = new Nume();

echo $name->spellName('Andrei');
