<?php

class Product{
    private $price;
    
    public function set_price($val){
        $no_format = preg_replace('/[\$,]/', '', $val); //vom funkcijom se zasticujemo da izbacimo karaktere koji nam nisu potreebni u $val
        $float = floatval($no_format);
        if($float <= 0){
            trigger_error('Price must be greater than 0', E_USER_NOTICE); //ova funkcija radi kao pop-up u jquery
            return;
        }
        $this->price = $float;
        
    }
    
    public function get_price(){
        return 'Dolar: ' . number_format($this->price, 3);
    }
}

$p = new Product;
$p->set_price(121,34568);
$p->get_price();

echo $p->get_price() . "<br />";
   

