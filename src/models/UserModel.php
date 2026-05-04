<?php

namespace models;

class UserModel{
    private int $id = 0; 
    private string $name = "";
    private ?string $birthdate = null;
    private ?string $phone = null;
    private string $email = "";
    private ?string $postalcode = null;

    public function __construct(){}

    // GETTERS
    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getBirthDate(){
        return $this->birthdate;
    }

    public function getPhone(){
        return $this->phone;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPostalCode(){
        return $this->postalcode;
    }

    // SETTERS
    public function setName(string $name){
        $this->name = $name;
    }

    public function setBirthDate(string $birthdate){
        $this->birthdate = $birthdate;
    }

    public function setPhone(string $phone){
        $this->phone = $phone;
    }

    public function setEmail(string $email){
        $this->email = $email;
    }

    public function setPostalCode(string $postalcode){
        $this->postalcode = $postalcode;
    }
}