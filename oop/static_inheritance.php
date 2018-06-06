<?php

    class Student{
        public static $grades = ['Freshman', 'Softmore', 'Junior', 'Senior']; //pravimo public staticku varijablu/niz
        
        private static $total_students = 0; //pravimo private staticku varijablu
        
        public static function moto(){ 
            return 'To learn PHP OOP!';
        } //pravimo public static metodu koja ispisuje "To learn PHP OOP!"
        
        public static function count(){
            return self::$total_students;
        } //pravimo public static metodu count koja ispisuje broj koji je definisan u propertiju $total_students
        
        public static function add_student(){
           self::$total_students++;
        } //pravimo public static metodu koja povecava broj koji je definisan u propertiju $tatal_studen za jedan
    }
    
    echo Student::$grades[0] . "<Br />"; //pozivamo da se ispise vrednost iz statickog niza koji smo definisali i to je Freshman]
    echo Student::moto() . "<Br />"; //pozivamo metodu koju smo definisali u klasi Student i da se ispise string koji je definisan unutar pomenute metode moto
    echo Student::count() . "<Br />"; //pozivamo metodu koju smo definisali u klasi Student i da se ispise broj koji je definisan u propertiju $total_students
    Student::add_student(); //pomocu metode add_student koja je definisana u klasi Student povecavamo broj definisan u propertiju $total_students za jedan
    echo Student::count() . "<Br />"; //posto smo u pethodnom redu povecali vrednost broja iz propertija za jedan koristeci metodu iz prethdnog reda, ispisuje se 1 umesto pretnogno definisane vrednosti nula
    
    class PartTimeStudent extends Student{
        
    } //pravimo podklsau koja extenduje klasu Student
    
    PartTimeStudent::$grades[] = 'Alumni'; //dodajemo novu vrednost nizu $grades, a to je 'Alumni'
    echo implode(', ', Student::$grades) . "<Br />"; //pomocu predefinisane metode implode() niz iz propertija $grades iz klase Student prikazujemo kao string sa dodatom novom vrednosti Alumni
    echo implode(', ', PartTimeStudent::$grades) . "<Br />"; //ovde pokazujemo da PartTimeStudent podklasa moze da koristi sve propertije i metode iz klase Student
    Student::add_student(); //povecavamo vrednost propertija $total_student za jedan
    Student::add_student(); //povecavamo vrednost propertija $total_student za jedan 
    Student::add_student(); //povecavamo vrednost propertija $total_student za jedan
    PartTimeStudent::add_student(); //povecavamo vrednost propertija $total_student za jedan, samo sto sam sada metodu add_studentkoristili kroz podklasu PartTimeStudent
    echo Student::count() . "<Br />"; //ipsisujemo novu vrednost propertija $total_student koja je povecana, ispisuje se br 5
    echo PartTimeStudent::count() . "<Br />"; //isto amo se poziva metoda kroz podklasu PartTimeStudent

