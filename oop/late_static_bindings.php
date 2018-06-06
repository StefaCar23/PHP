<?php

    class Sofa{
        protected static $identity = 'Sofa class'; //pravimo protected satic properti
        
        public static function identity_test(){
            echo 'Self: ' . self::$identity . '<Br />'; //ispisuje se vrednost definisana u propertiju u klasi Sofa
            echo 'Static: ' . static::$identity . '<br />'; //ispisuje se vrednost iz propertija definisana u klasi Sofa
            echo 'Get class: ' . get_class() . '<br />'; //prikazuje unutar koje klase se nalazi funkcija
            echo 'Get called class: ' . get_called_class() . '<br />'; //pomocu funkcije get_called_class se pokazuje iz koje klase se poziva vrednost
        }
    }
    
    class LoveSeat extends Sofa{
        protected static $identity = 'Loveseat class'; //dajemo novu vrednost propertiju $identity, podklase LoveSeat
        
        
    }
    
    Sofa::identity_test(); //pozivamo metodu koju smo definisali unutar klase Sofa i bice ispisana vrednost definisan u propertiju $identity unutar klase Sofa
    echo "<br />";
    LoveSeat::identity_test(); //posto podkalsa LoveSeat extenduje klasu Sofa, onda korisiti i njenu metodu, ali je vrednost propertija predefinisana u LoveSeat
	//objasnjenje metode, posto se promenila vrednost propertija: u prvom redu ce se prikazati vrednost iz propertija koji je definisan u klasi Sofa, posto se poziva sa \self::'
	//u sledecem redu ce se ispisati vrednost koja je predefinisana u proertiju, posto se pozivalo sa 'statsi::'
	//pomocu funkcije get_class() se pokazuje unutar koje klase se nalazi metoda, odnosno gde je definisana
	//pomocu funkcije get_called_class() se pokazuje iz koje klase je pozvana metoda, u ovom slucaju pozvana je iz podklase LoveSeat
    echo "<Br />";

