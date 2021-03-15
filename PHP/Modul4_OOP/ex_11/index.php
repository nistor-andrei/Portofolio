<?php

/*
Creeaza o interfata CylinderInterface care va avea:
  1. o metoda area()
  2. o metoda volume()

Creeaza un trait cu numele Helper:
  1. va contine o metoda publica statica round, care va folosi functia built-in round si vei rotunji numarul
  EX: round(5.3) => 5; round(5.6) => 6

Creeaza o clasa Cylinder:
  1. va implementa interfata
  2. va avea o constanta PI ce va contine valoarea lui PI = 3.14
  3. va avea doua proprietati private $radius si $height
  4. va calcula aria unui cilindru (metoda va returna rezultatul)
  A = 2 * PI * r * (r + h)
  5. va calcula volumul unui cilindru (metoda va returna rezultatul)
  V = PI * r ^ 2 * h
  6. daca volumul sau aria, dupa calcul, are valoarea de tip float atunci folosind metoda din trait vei face round. Metoda round va fi folosita in metoda de calcul al ariei si al volumului
Instantiaza obiectul si afiseaza aria/volumul sub forma:

The cylinder with $radius and $height has AREA and VOLUME */

interface CylinderInterface
{
    public function area();
    public function volume();
}

trait Helper
{
    public static function round($par)
    {
       return round($par);
    }
}

class Cylinder implements CylinderInterface
{
    use Helper;
    const CONSTANTA_PI = 3.14;

    private $radius;
    private $height;

    public function __construct(int $rad, int $hei)
    {
        $this->radius = $rad;
        $this->height = $hei;
    }

    public function area()
    {
        $rezultatArea = 2 * self::CONSTANTA_PI * $this->radius * ($this->radius + $this->height);
        if (is_float($rezultatArea)) {
            return Helper::round($rezultatArea);
        } else {
            return $rezultatArea;
        }
    }

    public function volume()
    {
        $rezultatVolum = self::CONSTANTA_PI * $this->radius ^ 2 * $this->height;
        if (is_float($rezultatVolum)) {
            return Helper::round($rezultatVolum);
        } else {
            return $rezultatVolum;
        }
    }

    public function afisare()
    {
        echo sprintf('The cylinder with radius %d and height %d has area %d and volume %d', $this->radius, $this->height, $this->area(), $this->volume());
    }

}

$cilindru = new Cylinder(15, 5);

$cilindru->afisare();

// Imi afiseaza 0 la Area iar volumul imi apare
