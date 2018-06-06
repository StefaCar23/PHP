<?php

    class Product{
        public $name;
        public $color;
        
        public function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }
    }
    
    $shirt = new Product('t-shirt', 'blue');
    
    echo $shirt->color . "<Br />";
    echo $shirt->name . "<Br />";
    
    $pants = new Product('jeans', 'blue');
    echo $pants->name . "<Br />";
    echo $pants->color . "<Br />";

