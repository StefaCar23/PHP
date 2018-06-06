<?php

    class Sofa{
        public static $instance_count = 0; //pravimo public static properti i dodelili smo mu vrednost 0
        public $seat = 3; //pravimo public properti i dodelili smo mu vrednost 3
        public $arms = 2; //pravimo public propertie i dodelili smo mu vrednost 2
        
        
        public function __construct() { //na ovaj nacin se poziva magicna construct metoda
            self::$instance_count++; //zelimo da se static properti koji je definisan gore inkrementuje prilikom pravljenja svake nove instance klase
        } //magicna metoda se svaki put automatksi poziva kada se koristi klasa u kojoj je metoda definisana, u ovom slucaju ce se $instance_count inkrementovati prilikom pravljenja savke nove instance klase
        
        
    }
    
    class Couch extends Sofa{
        public $arms = 0; //napravili smo novu podklasu i dodelili joj novu vrednost ya properti $arms
    }
    
    class Loveseat extends Sofa{
        public $seat = 2; //napravili smo novu podklasu i dodelili joj novu vrednost ya propertie "seat"
    }
    
    $sofa = new Sofa; //pravimo instancu klase Sofa
    
    
    echo "Sofa" . "<Br />";
    echo "Seats: " . $sofa->seat . "<Br />"; //pozivamo vrednost propertija definisanu u klasi Sofa
    echo "Arms: " . $sofa->arms . "<Br />"; //pozivamo vrednost propertija definisanu u klasi Sofa
    echo "<hr />";
    $couch = new Couch; //pravimo novu instancu klase Couch
    
    echo "Couch" . "<Br />";
    echo "Seat: " . $couch->seat . "<Br />"; //pozivamo vrednost propertija definisanu u klasi Couch
    echo "Arms: " . $couch->arms . "<Br />"; //pozivamo vrednost propertija definisanu u klasi Couch
    echo "<hr />";
    $loveseat = new Loveseat; //pravimo novu instancu klase Loveseat
    
    echo "Loveseat" . "<Br />";
    echo "Seat: " . $loveseat->seat . "<Br />"; //pozivamo vrednost propertija definisanu u klasi Loveseat
    echo "Arms: " . $loveseat->arms . "<Br />"; //pozivamo vrednost propertija definisanu u klasi Loveseat
    echo "<hr />";
    
    echo "Instance count: " . Sofa::$instance_count . "<Br />"; //zelimo da dokazemo da se vrednost koja je definisana u klasi Sofa povecala ya onaj broj koliko smo objekata napravili, u ovom slucaju za 3
	//na ovaj nacin smo dokazali da je consturc magicna metoda "Radila"sve vreme, tj. da se broj inkrementova sa svakom novom instancom
        

