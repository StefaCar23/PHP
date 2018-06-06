<?php

    class Bicycle{
        public static $instance_count = 0;
        public $brand;
        public $model;
        public $year;
        public $category;
        public $description = 'Used bicycle';
        
        protected $weight_kg = 0;
        protected static $weels = 2;
        
        const CATEGORIES = ['Road', 'Mountine', 'Hybrid', 'Cruiser', 'City', 'BMX'];
        
        public static function create(){
            $class_name = get_called_class();
            $object = new $class_name;
            self::$instance_count++;
            return $object;
        }
        
    public function name(){
        return $this->brand . ", " . $this->model . ", " . $this->year;
    }
    
    public static function wheel_details(){
        $wheel_string = static::$wheels == 1 ? "1 wheel" : static::$wheels . " wheels";
        return "it has " . $wheel_string;
    }
    
    public function weight_kg(){
        return $this->weight_kg . "kg";
    }
    
    public function set_weight_kg($va){
        $this->weight_kg = floatval($var);
    }
    public function weight_lbs(){
        $weight_lbs = floatval($this->weight_kg) * 2.204622;
        return $weight_lbs . "lbs";
    }
    
    public function set_weight_lbs($val){
        $this->weight_kg = floatval($val) / 2.204622;
    }
    
    }
    
    class Unicycle extends Bicycle{
        protected static $wheels = 1;
        
        public function bug_test(){
            return $this->weight_kg;
        }
    }

