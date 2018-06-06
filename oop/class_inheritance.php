<?php

    class User{
        var $first_name;
        var $last_name;
        var $username;
        
        function full_name(){
            return $this->first_name . " " . $this->last_name;
        }
    }
    
    class Customer extends User{
        
    }
    
    class CustomerKid extends Customer{
        
    }
    
    $u = new User;
    $u->first_name = 'Stefan';
    $u->last_name = 'Aleksic';
    $u->username = 'Stefa';
    
    $c = new Customer;
    $c->first_name = 'Djordje';
    $c->last_name = 'Stevanovic';
    $c->username = 'Djole';
    
    $k = new CustomerKid;
    $k->first_name = 'Mihajlo';
    $k->last_name = 'Stevanovic';
    
    echo $u->full_name() . "<br />";
    echo $c->full_name() . "<br />";
    echo $k->full_name() . "<br />";
    echo "<br />";
    
    echo get_parent_class($u) . "<br />";
    echo get_parent_class($c) . "<br />";
    echo "<Br />";
    
    if(is_subclass_of($c, 'User')){
        echo "Instance is subclass of User!" . "<br />";
    }
    
    if(is_subclass_of($u, 'User')){
        echo "Instance is subclass of User!" . "<br />";
    }else{
        echo "Instnce is not subclass of User!" . "<br />";
    }
    
    echo "<Br />";
    
    $parents = class_parents($c);
    
    echo implode(', ', $parents) . "<br />";
    $customer = class_parents($k);
    
    echo implode(', ', $customer) . "<br />";
    
    

