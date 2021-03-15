<?php 

class Nume {

   public $x = '';

    final function __construct($nume){
        $this->x=$nume;
    }
}

class Varsta extends Nume {
    public $y;

    public function __construct($nume,$varsta){
        parent:: __construct($nume);
        $this->y=$varsta;
    }
    public function afisare():void {
       echo sprintf('Numele: %s Varsta: %d',$this->x,$this->y );
    }
}

$informatii=new Varsta('Andrei',12);
$informatii->afisare();
