<?php
require __DIR__ . '/food.php';
require __DIR__ . '/toys.php';


class Products{
    public $name;
    public $price;
    public $stock;
    public $description;
    public $category;

    function __construct($name, $price, $stock, $description, $category){
        $this -> name           = $name;
        $this -> price          = $price;
        $this -> stock          = $stock;
        $this -> description    = $description;
        $this -> category       = $category;
    }
}


