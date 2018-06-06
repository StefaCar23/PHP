<?php

    class Beverage{
        public $name;
        
        public function __construct() {
            echo "New beverage was created. <br />" ;
        }
        
        public function __clone(){
            echo "Existing beverage was copied.<br />";
        }
    }
    
    $a = new Beverage;
    $a->name = 'coffee';
    echo $a->name . "<BR />";
    echo "<hr />";
    
    $b = clone $a;
    echo $a->name . "<Br />";
    echo $b->name . "<Br />";
    echo "<hr />";
    
    $b->name = 'tea';
    echo $a->name . "<Br />";
    echo $b->name . "<br />";
    
    $b->price = 120;
    echo $b->price . "<Br />";

