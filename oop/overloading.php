<?php

class Student{
    public $first_name;
    public $last_name;
    public $country;
    
    protected $reg_id;
    private $tuition = 500.00;
    
    public function full_name(){
        return $this->first_name . " " . $this->last_name;
    }
    
public function hello_world(){
    return "Hello world!";
}

protected function hello_family(){
    return "Hello family";
}

private function hello_me(){
    return "Hello me!";
}
public function skolarina(){
    return "Dinara: " . $this->tuition;
}

}

class PartTimeStudent extends Student{
    public function hello_parent(){
        return $this->hello_family();
    }
}

$student1 = new Student;
$student1->first_name = 'Stefan';
$student1->last_name = 'Aleksic';
$student1->country = 'Banovo brdo';

$student2 = new PartTimeStudent;
$student2->first_name = 'Djordje';
$student2->last_name = 'Strevanovic';
$student2->country = 'Banovo brdo';

echo $student1->full_name() . "<br />";
echo $student2->full_name() . "<br />";
echo $student1->hello_world() . "<br />";
/* ne moze se pozivati metoda koja je protected unutar klase
echo $student1->hello_family() . "<br />"; */
/* ne moze se pozivati metoda koja je private unutar klase
echo $student1->hello_me() . "<br />"; */
echo $student2->hello_parent() . "<br />";

//PRIMER OVERLOADIN-a desava se kada pozivamo private properi kroz subklasu

$student2->tuition = 1000.00;
echo $student2->tuition . "<br />"; 
/*ovo ne radi posto se poziva private propertie direktno iz objekta koji je istanca klase
$student1->tuition = 1500.00;
echo $student1->tuition . "<br />"; */
//ovako treba da se poziva metoda i private propertie
echo $student1->skolarina() . "<br />";



