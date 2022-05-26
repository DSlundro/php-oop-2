<?php

class Toys extends Products{
    public $type;
    public $age;
    public $height;

    public function __construct($name, $price, $stock, $description, $category, $type, $age, $height)
    {
        parent::__construct($name, $price, $stock, $description, $category,);
        $this -> type       = $type;
        $this -> age        = $age;
        $this -> height     = $height;
    }
}