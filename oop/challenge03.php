<?php

class Bicycle{
    public $brand;
    public $model;
    public $year;
    public $description = 'Used bicycle';
    
    private $weight_kg = 0.0;
    
    protected $wheels = 2;
    
   public function name(){
        return $this->brand . ", " . $this->model . " " . $this->year;
    }
    
   public function wheel_details(){
        $wheel_string = $this->wheels == 1 ? "1 wheel":"{$this->wheels} wheels";
        return "It has " . $wheel_string;
    }
    
    public function weight_kg(){
        return $this->weight_kg . " kg";
    }
    
public function set_weight_kg($val){
    $this->weight_kg = floatval($val);
}

public function weight_lbs(){
    $weight_lbs = floatval($this->weight_kg) * 2.2046222;
    return $weight_lbs . " lbs";
}

public function set_weight_lbs($val){
    $this->weight_kg = floatval($val) / 2.2046222;
}
}

class Unicycle extends Bicycle{
    protected $wheels = 1;
    
    /*public function bug_testing(){
        return $this->weight_kg; ne moze se praviti metoda u podklasi koristeci private propetie iz parent klase */
}

$trek = new Bicycle;
$trek->brand = 'Trek';
$trek->model = 'Emonda';
$trek->year = 2017;

$uni = new Unicycle();

echo "Bicycle: " . $trek->wheel_details() . "<br />";
echo "Unicycle: " . $uni->wheel_details() . "<br />";
echo "Set weight using kg <br />";
echo "Weight for bicycle" . "<br />";
$trek->set_weight_kg(2.0);

echo $trek->weight_kg() . "<br />";
echo $trek->weight_lbs() . "<br />";
echo "<br />";

$uni->set_weight_kg(1);
echo "Weight for Unicycle" . "<br />";
echo $uni->weight_kg() . "<br />";
echo $uni->weight_lbs() . "<br />";
echo "<br />";
$trek->set_weight_lbs(5.5413);
echo "Set weight using lbs <br />";
echo "Weight for Bicycle in lbs" . "<br />";
echo $trek->weight_kg() . "<br />";
echo $trek->weight_lbs() . "<br />";
echo "Weight for Unicycle in lbs" . "<br />";

$uni->set_weight_lbs(4.8746);
echo $uni->weight_kg() . "<br />";
echo $uni->weight_lbs() . "<br />";
 
