<?php

    class Product{
        public $name;
        public $color;
        public $price;
        
        public function __construct($args = []) {
            $this->name = $args['name'] ?? NULL;
            $this->color = $args['color'] ?? NULL;
            $this->price = $args['price'] ?? NULL;
        }
    }
    
    $shirt = new Product(['name' => 't-shirt', 'color' => 'yellow', 'price' => 99]);
    
    echo $shirt->name . "<BR />";
    echo $shirt->color . "<BR />";
    echo $shirt->price . "<BR />";
    
    $jeans = new Product(['color' => 'blue', 'price' => 125]);
    
    echo $jeans->color . "<BR />";
    echo $jeans->price . "<BR />";
    
    $skirt = new Product(['name', 'color', 'price']);
    echo $skirt->name . ", " . $skirt->color . ", " . $skirt->price . "<BR />";
    
    class Student{
        public $first_name;
        public $last_name;
        public $country;
        public $city;
        public $id;
        public $tuition;
        public $subject;
        public $university;
        public $address;
        
        public function __construct($args1 = []) {
            $this->first_name = $args1['first_name'] ?? NULL;
            $this->last_name = $args1['last_name'] ?? NULL;
            $this->country = $args1['country'] ?? NULL;
            $this->city = $args1['city'] ?? NULL;
            $this->id = $args1['id'] ?? NULL;
            $this->tuition = $args1['tuition'] ?? NULL;
            $this->subject = $args1['subject'] ?? NULL;
            $this->university = $args1['universtiy'] ?? NULL;
            $this->address = $args1['address'] ?? NULL;
        } 
    }
    
    $student1 = new Student(['first_name' => 'Stefan', 'last_name' => 'Aleksic', 'city' => 'Banovo brdo', 'tuition' => 1200, 'address' => 'Svetolika Lazarevica 14']);
    echo $student1->first_name . " " , $student1->last_name . " lives in " . $student1->city . ", on " . $student1->address . "<br />";
    echo "His tuition is " . $student1->tuition . "<Br />";