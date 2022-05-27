<?php

class User{

    protected $name;
    protected $surname;
    protected $username;
    protected $email;
    protected $card;
    protected $membership;
    protected $discount;

    public function __construct($name, $surname, $username, $email, $card, $membership, $discount = 0)
    {
        $this -> name = $name;
        $this -> surname = $surname;
        $this -> username = $username;
        $this -> email = $email;
        $this -> card = $card;
        $this -> membership = $membership;
        $this -> discount = $discount;
    }

    public function getDiscount()
    {
        return ($this -> membership == 'premium') ? $this -> discount = 'Hai 20% di sconto' : 'Registrati per avere lo sconto!';
    }
}
