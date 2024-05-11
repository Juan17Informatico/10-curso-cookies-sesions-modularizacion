<?php 

namespace App\classes; 

class Michi {
    protected $name; 
    protected $color; 
    protected $age; 


    function __construct($name, $color, $age) {
        $this->name = $name; 
        $this->color = $color; 
        $this->age = $age; 

    }


    /**
     * Get the value of name
     */ 
    public function getName() {
        return $this->name;
    }

    /**
     * Get the value of color
     */ 
    public function getColor() {
        return $this->color;
    }

    /**
     * Get the value of age
     */ 
    public function getAge() {
        return $this->age;
    }

    public function sayMeow() {
        return "Meow"; 
    }
}
