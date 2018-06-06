<?php

class Chef{
    public static function make_dinner(){
        echo 'Cook food <br />'; //pravimo metodu
    }
}

class AmateurChef extends Chef{
    public static function make_dinner() {
        echo 'Read recipe . <Br />';
        parent::make_dinner();
        echo 'Clean up mess <br />';
    } //ovde pozivamo metodu koja je definisana unutar parent klase, ali joj dodajemo i nove funkcije, ali se zadrzavaju i njene prethodno definisane funkcije iz parent klase
}


echo "Chef: " . "<Br />";
Chef::make_dinner(); //poziva se metoda iz klase Chef i ispisace samo ono sto je definisano unuar nje
echo "<br />";
echo "Amateur chef: " . "<br />";
AmateurChef::make_dinner(); //poziva se ista meoda samo iz podklase, gde smo dadali nove elemene unutar vec postojece metode iz klase Chef
echo "<br />";
echo "<hr />";

class Image{
    public static $resizing_enabled = true; 
    
    public static function geometry(){
        echo '800x600';
    }
    }
 class ProfileImages extends Image {
    public static function geometry(){
            if(self::$resizing_enabled){
                echo '100x100';
            }else{
                parent::geometry();            
                
            }
    }
    }
    
    echo Image::geometry() . "<br />";
    echo ProfileImages::geometry() . "<Br />";
    
    Image::$resizing_enabled = false;
    
    echo Image::geometry() . "<br />";
    echo ProfileImages::geometry() . "<br />";
