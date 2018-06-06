<?php

    class Student {
        
    } //napravili smo klasu Student
    
    class Teacher{
        
    } //napravili smo klasu Teacher
    
    $student1 = new Student; //ovako se pravi istanca //pravimo prvu istancu klase Student
    $student2 = new Student; //pravimo drugu istancu iste klase Student
    
    $teacher1 = new Teacher; //pravimo istancu klase teacher
    $teacher2 = new Teacher; //pravimo drugu istancu klase Teacher
    
    $class_names = ['Product', 'Student', 'student', 'teacher', 'Stefan', 'Djordje']; //praivmo niz
    
    foreach($class_names as $class_name){
        if(is_a($student1, $class_name)){
            echo "student1 is an instance of class {$class_name} <br />";
        }else{
            echo "student1 isn't an instance of class {$class_name} <br />";
        }
    } //proveravamo da li je objkat $student1 istanca klase navedene unutar niza class_names
    
    echo "<br />";
    
    foreach ($class_names as $class_name){
        if(is_a($teacher1, $class_name)){
            echo "teacher1 is a instance of the class {$class_name} <br />";
        }else{
            echo "teacher1 isn't a instance of the class {$class_name} <br />";
        }
    } //isto to radimo zamo za objekat Teacher