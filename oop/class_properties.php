<?php

    class Student{
        
        var $first_name;
        var $last_name;
        var $country;
        var $date_of_birth;
 
    } //pravimo klasu Student i unutar nje definisemo properties
    
    $student1 = new Student; //pravimo novi objekat klase Student
    
    $student1->first_name = 'Stefan'; //dodajemo properties klae Student objektu #student1 i dodeljujemo vrednost
    $student1->last_name = 'Aleksic'; //isto samo se dodeljuje drugi properties
    
    $student2 = new Student; //isto kao i za prethodni objekat
    
    $student2->first_name = 'Djordje';
    $student2->last_name = 'Stevanovic';
    $student2->country = 'Serbia';
    
    $student3 = new Student; //istokao za prethodni objekat
    
    $student3->first_name = 'Buda';
    $student3->last_name = 'Puljevic';
    $student3->date_of_birth = '15.feb.1970.';
    
    echo $student1->first_name . " " . $student1->last_name . "<br />"; //ispisali smo propertise odredjenih klasa
    echo $student2->first_name . " " . $student2->last_name . ", " . $student2->country . "<br />";
    echo $student3->first_name . " " . $student3->last_name . ", " . $student3->date_of_birth . "<br />";
    
    $class_vars = get_class_vars('Student'); //funkcija pravi niz od propertisa iz klase Student
     
    echo "Class vars(properties): <br />";
    echo "<pre>"; 
    print_r ($class_vars);
    echo "</pre>"; //ispisali smo sve properties iz klase Student
    
    $obj_vars = get_object_vars($student1);  //funkcija pravi niz propertisa iz objekta $student1
    
    echo "Object vars(properties): <Br /> ";
    echo "<pre>";
    print_r ($obj_vars);
    echo "</pre>"; //ispisali smo properties iz objekta $student1
    
    $obj_vars2 = get_object_vars($student2); //isto kao za objekat2
    
    echo "Objest vars(properties): <br />";
    echo "<pre>";
    print_r ($obj_vars2);
    echo "</pre>";
    
    $obj_vars3 = get_object_vars($student3); //isto i za objekat #student3
    
    echo "Object vars(propertis): <br />";
    echo "<pre>";
    print_r ($obj_vars3);
    echo "</pre>";