<?php

    class Student{
        
        var $first_name;
        var $last_name;
        var $country;
        var $date_of_birth;
        
        function say_hello(){
            return 'Hello world!';
        }
        function save_world(){
            return 'We want peace in world!';
        }
 
    } //napravili smo klasu Student, koja sadrzi 4 properties i 2 metode
    
    $student1 = new Student; //pravimo istancu klase Student
    
    $student1->first_name = 'Stefan'; //objekat uzima properties iz klase Student
    $student1->last_name = 'Aleksic';
    
    $student2 = new Student; //isto kao i za prvi objekat
    
    $student2->first_name = 'Djordje';
    $student2->last_name = 'Stevanovic';
    $student2->country = 'Serbia';
    
    $student3 = new Student; //isto i za treci objekat
    
    $student3->first_name = 'Buda';
    $student3->last_name = 'Puljevic';
    $student3->date_of_birth = '15.feb.1970.';
    
    echo $student1->first_name . " " . $student1->last_name . "<br />";
    echo $student2->first_name . " " . $student2->last_name . ", " . $student2->country . "<br />";
    echo $student3->first_name . " " . $student3->last_name . ", " . $student3->date_of_birth . "<br />";
    
   $class_methods = get_class_methods('Student'); //pravi niz elemenata metoda koje su definisane unutar klase Student
   
   echo "Class methods: " . implode('. ', $class_methods) . "<br />"; //ovim ispisujemo sve elemente iz niza class_methods
   
   if(method_exists('Student', 'save_world')){
       echo "Method save_world exisitss in Student class. <br />";
   }else{
       echo "Method save_world doesn't exsists in Student class. <br />";
   } //proveravamo da li u klasi Student postoji metod save_world

