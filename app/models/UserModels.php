<?php
namespace app\models;

use PDO;
use Flight;

class UserModels {
    public static function addUser ($username, $email, $password) {
        $db = Flight::db();
        $sql = "INSERT INTO users (username, email, mdp) VALUES (:username, :email, :mdp)";
        $stmt = $db->prepare($sql);
        $stmt->execute(['username' => $username, 'email' => $email, 'mdp' => $password]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}