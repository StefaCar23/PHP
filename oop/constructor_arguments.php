<?php

    class Sofa{
        public static $instance_count = 0;
        public $seats = 3;
        public $arms = 2;
        
        public function __construct($seats, $arms) { //pravimo magicnu metodu construct i dodeljujemo joj argumente
           self::$instance_count++; //zelimo da vrednost propertija inkrementuje
           $this->seats = $seats; //zelimo da vrednost propertija bude vrednost argumenata, koju cemo definisati prilikom pravljenja instance klase
           $this->arms = $arms; //zelimo da vrednost propertija bude vrednost argumenata, koju cemo definisati prilikom pravljenja instance klase
        }
    }
    
    class Couch extends Sofa{
        public $arms = 0;
    }
    
    class Loveseat extends Sofa{
        public $seats = 2;
    }
    
    $sofa = new Sofa(3, 3); //posto smo definisali vrednost argumenata, pregazili smo prethodno postavljene vrednosti propertija iz klase i pomocu constuct metode vrednost propertija je vrednost agumenaa
    
    echo "Sofa" . "<br />";
    echo "Seats: " . $sofa->seats . "<br />";
    echo "Arms: " . $sofa->arms . "<br />";
    echo "<hr />";
    
    $couch = new Couch(3, 1); //posto smo definisali vrednost argumenata, pregazili smo prethodno postavljene vrednosti propertija iz klase i pomocu constuct metode vrednost propertija je vrednost agumenata
    
    echo "Couch" . "<br />";
    echo "Seats: " . $couch->seats . "<br />";
    echo "Arms: " . $couch->arms . "<br />";
    echo "<hr />";
    
    $loveseat = new Loveseat(2, 0); //posto smo definisali vrednost argumenata, pregazili smo prethodno postavljene vrednosti propertija iz klase i pomocu constuct metode vrednost propertija je vrednost agumenata
    echo "Loveseat" . "<br />";
    echo "Seats: " . $loveseat->seats . "<br />";
    echo "Arms: " . $loveseat->arms . "<br />";
    echo "<hr />";
    
    echo "Instance count: " . Sofa::$instance_count . "<br />";

