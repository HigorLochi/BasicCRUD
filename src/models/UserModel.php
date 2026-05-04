<?php

namespace models;

class UserModel{
    private int $id = 0; 
    private string $name = "";
    private ?int $age = null;
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

    public function getAge(){
        return $this->age;
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

    public function setAge(int $age){
        $this->age = $age;
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