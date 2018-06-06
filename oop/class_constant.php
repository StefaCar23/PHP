<?php

    class Clock{
        const DAY_IN_SECONDS = 60*60*24; //ovako se pravi konstanta unutar klase, u ovom slucaju racunamo koliko sekundi ima jedan dan
        
        public function tomorrow(){
            return time() + self::DAY_IN_SECONDS; //na ovaj nacin pozivamo konstantu unutar metode, definisanu u propertiju
        }
    }
    
    echo Clock::DAY_IN_SECONDS . "<br />"; //pozivamo properti definisan u klasi Clock
    
    $clock = new Clock; //pravimo objekat klase Clock
    
    echo $clock->tomorrow() . "<br />"; //pozivamo metodu iz klase Clock u kojoj se nalazi i konsanta $DAY_IN_SECONDS
    
    
