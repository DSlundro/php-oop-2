<?php

class User{

    protected $name;
    protected $surname;
    protected $username;
    protected $email;
    protected $card;

    public function __construct($name, $surname, $username, $email, $card)
    {
        $this -> name = $name;
        $this -> surname = $surname;
        $this -> username = $username;
        $this -> email = $email;
        $this -> card = $card;
    }

}
