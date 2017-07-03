<?php

class Cat extends Animal
{
    
    public function __construct($name)
    {
        parent::__construct($name);
    }
    
    public function meow()
    {
        $catname = $this->name;
        return "Cat {$catname} is saying meow";
    }
}