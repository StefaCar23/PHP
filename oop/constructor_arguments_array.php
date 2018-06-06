<?php

    class Sofa{
        public static $instance_count = 0;
        public $seats = 3;
        public $arms = 2;
        
        public function __construct($args = []) { //pozivamo magicnu metodu construct i stavljamo da argument bude niz
            self::$instance_count++; //zelimo da se public static properti inkrementuje
            $this->seats = $args['seats'] ?? $this->seats; //zelimo da vrednost propertija bude vrednost kljuca seat iz niza args ili ukoliko se vrednost ne dodeli, onda da bude vec dodeljena vrednost
            $this->arms = $args['arms'] ?? NULL; //zelimo da vrednost propertija bude vrednost kljuca arms iz niza args ili ukoliko se vrednost ne dodeli, onda da bude nula
        }
    }
    
    class Couch extends Sofa{
        public $arms = 0;
    }
    
    class Loveseat extends Sofa{
        public $seats = 2;
    }
    
    $sofa = new Sofa(['arms' => 2]); //pravimo instance klase Sofa i dodeljjujemo vrednost kljucu arms, koja ce pregaziti prethodnu definisanu vrednsot.
    
    echo "Sofa" . "<br />";
    echo "Seats: " . $sofa->seats . "<br />";
    echo "Arms: " . $sofa->arms . "<br />";
    echo "<hr />";
    
    $couch = new Couch(['seats' => 8, 'arms' => 6]); 
    
    echo "Couch" . "<br />";
    echo "Seat: " . $couch->seats . "<br />";
    echo "Arms: " . $couch->arms . "<br />";
    echo "<hr />";
    
    $loveseat = new Loveseat(['seats' => 15, 'arms' => '']);
    
    echo "Loveseat" . "<br />";
    echo "Seats: " . $loveseat->seats . "<br />";
    echo "Arms: " . $loveseat->arms . "<br />";
    echo "<hr />";
    
