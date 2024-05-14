<?php

namespace MichisAdoptados; 

class Michi {


    protected $name; 
    protected $date_adopeted; 
    protected $adopted_by; 

    function __construct($name, $date_adopeted, $adopted_by) {
        $this->name = $name;
        $this->date_adopeted = $date_adopeted;
        $this->adopted_by = $adopted_by;
    }


    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of date_adopeted
     */ 
    public function getDate_adopeted()
    {
        return $this->date_adopeted;
    }

    /**
     * Get the value of adopted_by
     */ 
    public function getAdopted_by()
    {
        return $this->adopted_by;
    }
}