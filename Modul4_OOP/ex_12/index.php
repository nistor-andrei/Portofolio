<?php

/*
Creeaza:
  1. o clasa abstracta Rectangle
  2. o clasa Square ce va extinde clasa Rectangle
  3. o clasa Circle
  4. o interfata CircleInterface>

Clasa Rectangle:
  1. va avea doua proprietati protected $width si $height
  2. o metoda publica area() ce va calcula aria si o va returna
  A = w x h

Clasa Cirlce va avea:
  1. o constanta PI = 3.14
  2. o proprietate privata $radius
  3. o metoda publica area() ce va calcula aria si o va returna
  A = PI * ( r ^ 2)

Instantiaza cele doua clase si afiseaza ariile */

abstract class Rectangle
{
    protected $width;
    protected $height;
    abstract public function area();

}

interface CircleInterface
{
    const PI = 3.14;

}

class Square extends Rectangle
{
    public function __construct(int $w, int $h)
    {
        $this->width = $w;
        $this->height = $h;
    }
    public function area():int
    {
        $aria = $this->width * $this->height;
        return $aria;
    }

}

class Circle implements CircleInterface
{
    private $radius;

    public function __construct(int $r)
    {
        $this->radius = $r;
    }

    public function area():float
    {
        $rezultat = self::PI * ($this->radius ** 2);
        return $rezultat;
    }
}

$patrat = new Square(10, 20);
$cerc = new Circle(10);

echo $patrat->area() . "\n";
echo $cerc->area();
