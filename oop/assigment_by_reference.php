<?php

    class Beverage{
        public $name;
        
        public function __construct() { //pravimo construct metoda koja ce da se ispise svaki put kada poyivamo instancu klase Beverage
            echo "New Beverage was created! <Br />"; //ovaj string se ispisuje svaki put kad se napravi instanca klas Beverage
        }
        
        public function __clone() {
            echo "Existing beverage was copied. <Br />"; //pravimo clone funkciju i ovaj string ce se ispisati svaki put kada kloniamo neku instancu
        }
    }
    
    $a = new Beverage; //pravimo instancu klase Beverage
    $a->name = 'coffee'; //dodelili smo vednost propertiju iz klase Beverage
    echo $a->name . "<Br />"; //ipsujemo vrednost dodeljenu u prethodnom redu
    
    $b = clone $a; //ovako se klonira instanca, u ovom slucaju $b je klon instance $a
    echo $a->name . "<Br />"; 
    echo $b->name . "<Br />"; //dokazali smo da ce pozivanjem propertija $name kroy kloniranu instancu $b ispisati istu vrednost kao pozianjem kroz insancu $a
    echo "<hr />";
    
    $c = $b; //pravimo da je instanca $c jednaka instanci $b
    $c->name = 'juice'; //menjamo vrednosti propertija instance $c i zelimo da pokazemo da li se automatki menja i vrednost propertija ako se poziva kroz intancu $b
    echo $a->name . "<Br />";
    echo $b->name . "<Br />"; //pokazali smo da se promenila vrednost propertija koji se poziva kroz instancu $b i ispisuje se juice
    echo $c->name . "<Br />";

