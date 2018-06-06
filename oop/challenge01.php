<?php

/* 1. definisati klasu Bicycle
 2. definisati istance 
 3. properties: brand, model, year, description, weight_kg
 4. definisati metode: name(brand, model, year), metod weight_lbs(convet from kg to lbs - 1kg=2.204lbs
 metoda set_weight(za definisanu vrednost u lbs konvertovati u kg i ubaciti u properti weight_kg)
 */

class Bicycle{
    var $brand;
    var $model;
    var $year;
    var $description;
    var $weight_kg;
    
    function name(){
        return $this->brand . ", " . $this->model . ", " . $this->year . ". <br />";
    }
    
    function weight_lbs(){
        return floatval($this->weight_kg) * 2.2046;
    }
    
    function set_weight_lbs($value){
    $this->weight_kg = floatval($value) / 2.2046;
    }

    }

$bmx = new Bicycle;
$bmx->brand = 'BMX';
$bmx->model = 'BMX madness';
$bmx->year = '1990';
$bmx->weight_kg = 10;

$capriolo = new Bicycle;
$capriolo->brand = 'Capriolo';
$capriolo->model = 'Synapse';
$capriolo->year = '2016';
$capriolo->weight_kg = 5;

echo "Vas bicikl ima sledece parametre: " . $bmx->name() . "<br />";
echo "Vas bicikl ima sledece parametre " . $capriolo->name() . "<br />";
echo "Tezina BMX bicikle u kg je: " . $bmx->weight_kg . "<br />";
echo "Tezina BMX bicikle u funtama je: " . $bmx->weight_lbs() . "<br />";
echo "Tezina Capriolo bicikle u kg je: " . $capriolo->weight_kg . "<br />";
echo "Tezina Capriolo bicikle u lbs je: " . $capriolo->weight_lbs() . "<br />";

$bmx->set_weight_lbs(5);
$capriolo->set_weight_lbs(8);
echo "Tezina BMX bicikle u kg je: " . $bmx->weight_kg . "<br />";
echo "Tezina Capriolo bicikle u kg je: " . $capriolo->weight_kg . "<br />";



