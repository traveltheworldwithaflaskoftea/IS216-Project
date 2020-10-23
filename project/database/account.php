<?php

class account {

    private $username;
    private $name;
    private $password;
    private $email;
    private $phone_number;
    private $postal_code;
    private $adoption_basket;


    public function __construct($username, $name, $password, $email, $phone_number, $postal_code, $adoption_basket) {
        $this->username = $username;
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->phone_number = $phone_number;
        $this->postal_code = $postal_code;
        $this->adoption_basket = $adoption_basket;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getName() {
        return $this->name;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getEmail() {
        return $this->email;
    }
    
    public function getPhoneNumber() {
        return $this->phone_number;
    }

    public function getPostalCode() {
        return $this->postal_code;
    }

    public function getAdoptionBasket() {
        return $this->adoption_basket;
    }

}

?>