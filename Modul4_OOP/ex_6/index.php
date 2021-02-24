<?php

/*
1. Creeaza o clasa parinte numita Vehicle ce va contine urmatoarele:
  - Proprietati protected:
   * $color -> string
   * $weight -> float
   * $consumption -> float
   * $countryOfOrigin -> string
   * $fuelType -> string
   * $tachometer -> float
  - Un constructor care sa initializeze proprietatile (vor avea valori predefinite)
  - Un destructor ce va afisa un simplu string: The destruct method was called!
  - O metoda publica care afiseaza informatiile despre vehicul
  2. Creeaza o clasa copil numita Car ce va contine:
  - Proprietati private ce vor forma numarul de inmatriculare:
   * $county -> string (doar 2 caractere, ex: IS)
   * $number -> string (doar 2 cifre, ex: 01)
   * $characters -> string (doar 3 caractere, ex: ABC)
  - O metoda publica ce va afisa numarul de inmatriculare sub forma: IS 01 ABC
  - Creeaza doua obiecte si apeleaza metodele.
  3. Creeaza o clasa copil numita Bike:
  - Suprascrie metoda din clasa parinte si afiseaza doar $color si $weight.

Ex: The bike has a $color color and a weight of $weight.

  - Creeaza un obiect si apeleaza metoda de afisare a informatiilor.
 */

class Vehicle
{
    protected $color;
    protected $weight;
    protected $consumption;
    protected $countryOfOrigin;
    protected $fuelType;
    protected $tachometer;

    public function __construct(string $c, float $w, float $consum, string $origin, string $fuel, float $km)
    {
        $this->color = $c;
        $this->weight = $w;
        $this->consumption = $consum;
        $this->countryOfOrigin = $origin;
        $this->fuelType = $fuel;
        $this->tachometer = $km;
    }

    public function __destruct()
    {
        echo "The destruct method was called!" . "<br>";
    }

    public function afisare()
    {
        echo "Color :" . $this->color . "<br>";
        echo "Weight :" . $this->weight . "<br>";
        echo "Consumption:" . $this->consumption . "<br>";
        echo "Country of Origin: " . $this->countryOfOrigin . "<br>";
        echo "Fuel type : " . $this->fuelType . "<br>";
        echo "Tachometer : " . $this->tachometer . "<br>";
    }
}

class Car extends Vehicle
{
    private $county;
    private $number;
    private $characters;

    public function __construct(string $characters, int $number, string $county, string $c, float $w, float $consum, string $origin, string $fuel, float $km)
    {

        $this->county = $county;
        $this->number = $number;
        $this->characters = $characters;
        parent::__construct($c, $w, $consum, $origin, $fuel, $km);
    }
    public function inmatriculare()
    {
        echo "Numar inmatriculare:" . $this->county . $this->number . $this->characters;
    }

}
$afisare = new Car('NIS', 97, 'IS', 'Red', 1230, 4.6, 'Romania', 'Diesel', 110.000);

$afisare->inmatriculare();
$afisare->afisare();



class Bike extends Vehicle
{
    public function afisare()
    {
        echo "Culoare bicicletei este " . $this->color . "\n";
        echo "Greutatea bicicletei este de " . $this->weight . "kg" . "\n";
    }
}

$bike=new Bike('Albastru',20,1.2,'Germania','Pedala','100');

$bike->afisare();

// Bike imi afiseaza corect