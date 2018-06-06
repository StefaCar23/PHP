<?php

    class Furniture{
        var $width;
        var $depth;
        var $height;
        var $is_seating = false;
        var $is_sleeper = false;
        var $is_upholsetered = false;
        
        function area(){
            return floatval($this->width) * floatval($this->depth);        
            
        }
        
        function volume(){
            return $this->area() * floatval($this->height);
        }
        
    }
    
    class Bed extends Furniture{
        var $is_sleeper = true;
        
    }
    
    class Sofa extends Furniture{
        var $is_seating = true;
        var $is_upholsetered = true;
        
        var $seats = 3;
        var $has_seat_cushions = true;
        var $has_back_cushions = true;
        var $arms = 2;
        var $depth_opened;
        
        function area_opened(){
            if($this->is_sleeper){
                return $this->area();
            }
            return floatval($this->width) * floatval($this->depth_opened);
        }
       }
       
       class Couch extends Sofa{
           var $arms = 0;
           
           
       }
       
       class Loveseat extends Sofa{
           var $seat = 2;
           
       }
       
       class Bench extends Couch{
           var $has_back_cushions = false;
       }
       
       $sofa = new Sofa;
       $sofa->width = 4;
       $sofa->depth = 2;
       $sofa->height = 3;
       
       echo "Sofa " . "<br />";
       echo "Area: " . $sofa->area() . "<br />";
       echo "Volume " . $sofa->volume() . "<br />";
       echo "<br />";
       echo "Area opened: " . $sofa->area_opened() . "<br />";
       echo "<br />";
       
       $bench = new Bench;
       $bench->width = 3;
       $bench->depth = 1.5;
       $bench->height = 1;
       
       echo "Bench" . "<br />";
       echo "Area " . $bench->area() . "<br />";
       echo "Sleeping?: " . ($bench->is_sleeper ? 'ture':'false') . "<br />";
       echo "Seating?: " . ($bench->is_seating ? 'true':'false') . "<br />";
       echo "Backcushion?: " . ($bench->has_back_cushions ? 'true':'false') . "<br />";
    
    

