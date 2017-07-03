<?php

class Animal
{
    protected $name;
    
    protected function __construct($name)
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
}