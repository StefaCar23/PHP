<?php

    function my_autoload($class){ //ovako se poziva funkcija autoload
        if(preg_match('/\A\w+\Z/', $class)){ //ovako se postavlja uslov da zelimo da se poziva klasa koja sadrzi samo reci od A do Z
            include 'classes/' . $class . '.class.php'; //uslov je da se poyivaju klase iz foldera class/, sa nazivom (argument $class), i koje imaju nastavak .class.php
        } 
           
    }
    
    spl_autoload_register('my_autoload'); //pomocu spl funkcije pozivamo tacno klase koje zelimo
    
    $bike = new Bicycle;
    $bike->brand = 'Trek';
    echo $bike->brand . "<Br />";
    
    $uni = new Unicycle;
    $uni->brand = 'Uni';
    echo $uni->brand . "<br />";
    //ovde smo dokazali da smo uspesno pozavli funkcije i napravili smo insance klasa, koje su smestene u folderu classes
    

