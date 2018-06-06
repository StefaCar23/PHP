<?php

    class User{
        var $first_name;
        var $last_name;
        var $username;
        var $is_admin = false;
        
        function full_name(){
            return $this->first_name . " " . $this->last_name;
        }
    }
    
    class Customer extends User{
        var $city;
        var $state;
        var $country;
        
        function location(){
            return $this->city . ", " . $this->state . ", " . $this->country;
        }
    }
    
    class AdminUser extends User{
        var $is_admin = true;
        
        function full_name_admin(){
            return $this->first_name . " " . $this->last_name . ", " . $this->is_admin;
        }
    }
    
    $u = new User;
    $u->first_name = 'Stefan';
    $u->last_name = 'Aleksic';
    $u->username = 'Stefa';
    
    $c = new Customer;
    $c->first_name = 'Djordje';
    $c->last_name = 'Stevanovic';
    $c->username = 'Djole';
    $c->city = 'Belgrade';
    $c->country = 'Banovo brdo';
    $c->state = 'Serbia';
    
    $a = new AdminUser;
    $a->first_name = 'Buda';
    $a->last_name = 'Puljevic';
    
    echo $u->full_name() . "<br />";
    echo $c->full_name() . "<Br />";
    echo $c->location() . "<br />";
    echo $a->full_name() . "<br />";
    echo $a->full_name_admin() . "<br />";
    echo "<br />";
    echo get_parent_class($u) . "<br />";
    echo get_parent_class($c) . "<br />";
    echo get_parent_class($a) . "<br />";
    echo "<br />";
    
    if(is_subclass_of($a, 'User')){
        echo "instance is the subclass of User!";
    }else{
        echo "Instance isn't subclass of User!";
    }


    
 

