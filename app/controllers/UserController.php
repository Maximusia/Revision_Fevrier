<?php 
namespace app\controllers;
use app\models\UserModels;
use Flight\Engine;

class UserController {
        public static function addUser()
    {
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        if ($username !== '' && $email !== '' && $password !== '') {
            UserModels::addUser($username, $email, $password);
        }

        Flight::redirect(Flight::get('flight.base_url') . '/connect');
    }
}