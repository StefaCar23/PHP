<?php

class Student{
    var $first_name;
    var $last_mane;
    var $country;
    
    function say_hell(){
        return 'Hello world!';
    }
    
    function full_name(){
        return $this->first_name . " " . $this->last_mane;
    }
    
    function this_name(){
        return $first_name . $last_name;
    }
}

$student1 = new Student;
$student1->first_name = 'Stefan';
$student1->last_mane = 'Aleksic';

$student2 = new Student;
$student2->first_name = 'Djordje';
$student2->last_mane = 'Stevanovic';

echo $student1->full_name() . "<br />";
echo $student2->full_name();
echo $student1->this_name();
