<?php

namespace controllers;

use models\UserModel;

class UserController extends AbstractController{
    private $userRepository;

    public function __construct($userRepository) {
        $this->userRepository = $userRepository;
    }

    public function list(){
        $this->render('user/list', ['users' =>  $this->userRepository->fetchAll()]);
    }

    public function insert(){
        $response = null;

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            if($this->userRepository->insert($_POST))
                $response = "User created.";
            else 
                $response = "An error has ocurred.";
        }

        $this->render('user/form', ['user' =>  new UserModel(), 'message' => $response]);
    }

    public function update(){
        $id = (int) $_GET['id'];
        $response = null;

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST['id'] = $id;
            if($this->userRepository->update($_POST))
                $response = "User updated.";
            else 
                $response = "An error has ocurred.";
        }
        
        $this->render('user/form', ['user' =>  $this->userRepository->fetchById($id), 'message' => $response]);
    }

    public function delete(){
        $id = (int) $_POST['id'];
        $this->userRepository->deleteById($id);
    }
}