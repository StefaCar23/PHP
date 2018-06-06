<?php

    class Student {
        
    }
    
    class Teacher {
        
    } //sintaksa za kreiranje  klasa
    
    $classes = get_declared_classes(); //pravimo varijablu za postojanje klasa
    
    echo "Classes: " . implode('<br /> ', $classes) . "<br />"; //prikazuju se sve predefinisane klase i one koje smo mi definisali
    
    $class_names = ['Product', 'Student', 'student']; //pravimo niz
    
    foreach($class_names as $class_name){
        if(class_exists($class_name)){
            echo "{$class_name} is declared class. <br />";
        }else{
            echo "{$class_name} is not declared class. <br />";
        }
    } //foreach petljom proveravamo sve klase iz niza $class_names da li su definisane
    

