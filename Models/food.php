<?php

class Food extends Products{
    public $type;
    public $age;

    public function __construct($name, $price, $stock, $description, $category, $type, $age)
    {
        parent::__construct($name, $price, $stock, $description, $category);
        $this -> type   = $type;
        $this -> age    = $age;
    }
}