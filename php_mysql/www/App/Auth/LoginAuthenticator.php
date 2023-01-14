<?php

namespace App\Auth;


use App\Controllers\UsersController;
use App\Models\User;

class LoginAuthenticator extends DummyAuthenticator
{
    public function login($login, $password): bool
    {
        $usersToCheck = User::getAll();
        foreach ($usersToCheck as $user) {
            /*$user = User::getOne($login);*/
            if ($user->getUsername() == $login) {
                //if ($user->getPassword() == $password) {
                if (password_verify($password, $user->getPassword())) {
                    $_SESSION['user'] = $login;
                    return true;
                }
            }
        }
        return false;
    }
}