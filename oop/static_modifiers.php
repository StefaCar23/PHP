<?php

    class Student{
        public static $grades = ['Freshman', 'Softmore', 'Junior', 'Senior']; //pravimo static propertie
        
        private static $total_student = 0; //pravimo jos jedan static propertie koji je privae
        
        public static function moto(){
            return "To learn PHP OOP!";
        } //pravimo static public metodu
        
    public static function count(){
        return self::$total_student;
    } //pravimo public static metodu i koristimo propertie prethodno definisan
    
    public static function add_student(){
        self::$total_student++; //pravstatik public metodu koja inkrementuje properti definisan na pocetku klase $total_students
    }
    }
    
    echo Student::$grades[0] . "<Br />"; //ovako se poziva staticki properti
    echo Student::moto() . "<Br />"; //ovako se poyiva staticka metoda
    //echo Student::$total_student . "<Br />"; ne mozemo pozivati privatne staticke propertie
    echo Student::count() . "<Br />";
    Student::add_student();
    echo Student::count() . "<Br />";
    Student::add_student();
    Student::add_student();
    Student::add_student();
    echo Student::count() . "<br />";
