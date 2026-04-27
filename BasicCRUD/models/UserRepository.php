<?php

namespace models;

use PDO;

class UserRepository{
    public function __construct(private PDO $pdo) {}

    public function fetchAll(): array {
        $query = $this->pdo->prepare("SELECT * FROM users ORDER BY name");
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, UserModel::class);

        return $query->fetchAll();
    }

    public function fetchById(int $id): UserModel {
        $query = $this->pdo->prepare("SELECT * FROM users WHERE id = :id");
        $query->bindValue(':id', $id);
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, UserModel::class);

        return $query->fetch();
    }

    public function insert(array $user): bool {
        try{
            $query = $this->pdo->prepare("INSERT INTO users(name, age, phone, email, postalcode) VALUES(:name, :age, :phone, :email, :postalcode)");

            $query->bindValue(':name', $user['name']);
            $query->bindValue(':age', $user['age'], PDO::PARAM_INT);
            $query->bindValue(':phone', $user['phone']);
            $query->bindValue(':email', $user['email']);
            $query->bindValue(':postalcode', $user['postalcode']);

            $query->execute();

            return true;
        }catch(Exception $e){
            return false;
        }
    }

    public function update(array $user): bool {
        try{
            $query = $this->pdo->prepare("UPDATE users SET name = :name, age = :age, phone = :phone, email = :email, postalcode = :postalcode WHERE id = :id");

            $query->bindValue(':id', $user['id']);
            $query->bindValue(':name', $user['name']);
            $query->bindValue(':age', $user['age'], PDO::PARAM_INT);
            $query->bindValue(':phone', $user['phone']);
            $query->bindValue(':email', $user['email']);
            $query->bindValue(':postalcode', $user['postalcode']);

            $query->execute();

            return true;
        }catch(Exception $e){
            return false;
        }
    }

    public function deleteById(int $id): bool {
        try{
            $query = $this->pdo->prepare("DELETE FROM users WHERE id = :id");
            $query->bindValue(':id', $id);
            $query->execute();

            return true;
        }catch(Exception $e){
            return false;
        }
    }
}