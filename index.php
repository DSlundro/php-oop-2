<?php
require __DIR__ . '/Models/products.php';
require __DIR__ . '/Models/user.php';

// utente registrato
$newUser = new User('Mario', 'Rossi', 'MR69', 'mario.rossi@live.it', '1234-4321-5744-8657', 'premium');
var_dump($newUser);
var_dump($newUser -> getDiscount());

// utente non registrato
$newUser1 = new User('Mario', 'Rossi', 'MR69', 'mario.rossi@live.it', '1234-4321-5744-8657', 'base');
var_dump($newUser1);
var_dump($newUser1 -> getDiscount());

$newToy = new Toys ('Solid Rubber Ball', '$4.99', '299 pz', 'Lorem ipsum dolor sit amet.', 'Ball', 'Dogs', '1 year +', 'none');
var_dump($newToy);

$newFood = new Food ('Wellness Complete Health Dry Dog Food', '$ 29.99', '199 pz', 'Lorem ipsum dolor sit amet.', 'Dog', 'Dog Food', '3 months +');
var_dump($newFood);
?>

