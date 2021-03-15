<?php

/*
Creeaza o interfata Animal si o clasa Dog:
  1. Interfata va avea o metoda numita action ce va returna un string (actiunea pe care o face, ex: Alearga, Mananca etc)
  2. Clasa va implementa interfata
  3. Creeaza un obiect din clasa Dog si afiseaza ce returneaza metoda
 */

interface Animal
{
    public function action(): string;
}

class Dog implements Animal
{
    public $dog = '';
    public $actiune = '';

    public function __construct(string $name, string $actiune)
    {
        $this->dog = $name;
        $this->actiune = $actiune;
    }

    public function action(): string
    {
        return sprintf('Cainele, %s %s', $this->dog, $this->actiune);
    }
}

$caine = new Dog('Max', 'alearga');

echo $caine->action();
