<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\User;

class UsersController extends AControllerBase
{
    public function index(): Response
    {
        return $this->html();
    }

    public function checkUser($username, $password) : bool
    {
        $user = User::getOne($username);
        if ($user) {
            if ($user->getPassword() == $password) {
                return true;
            }
        }
        return false;
    }

    public function delete() {
        $usersToCheck = User::getAll();
        $current = null;
        foreach ($usersToCheck as $user) {
            /*$user = User::getOne($login);*/
            if ($user->getUsername() == $_SESSION['user']) {
                $current = $user;
            }
        }
        if ($current) {
            $this->app->getAuth()->logout();
            $current->delete();
        }
        return $this->redirect("?c=home");
    }


    public function register()
    {
        $usersToCheck = User::getAll();
        $username = $this->request()->getValue('login');
        foreach ($usersToCheck as $user) {
            /*$user = User::getOne($login);*/
            if ($user->getUsername() == $username) {
                return $this->html(['message' => 'Username already exists. Try another one'], viewName: 'register.form');
            }
        }

        $password = $this->request()->getValue('password');
        if ($password != $this->request()->getValue('confPassword'))
        {
            return $this->html(['message' => "Passwords don't match!"], viewName: 'register.form');
        }

        $user = new User();
        $user->setUsername($username);
        $user->setPassword($password);
        $user->setEmail($this->request()->getValue('email'));
        $name = $this->request()->getValue('name');
        if(!$name)
        {
            $name = null;
        }
        $surename = $this->request()->getValue('surename');
        if(!$surename)
        {
            $surename = null;
        }
        $user->setName($name);
        $user->setSurename($surename);
        $user->save();
        $this->app->getAuth()->login($username, $password);
        return $this->redirect("?c=home");
    }

    public function store() {
        $username = $this->request()->getValue('username');
        $user = ($username ? User::getOne($username) : new User());
        $user->setName($this->request()->getValue('name'));
        $user->setSurname($this->request()->getValue('surename'));
        $user->save();
        return $this->redirect("?c=home");
    }

    public function create() {
        return $this->html([], viewName: 'register.form'); /*new User(), viewName: 'register.form'*/
    }

    public function edit() {
        $username = $this.request()->getValue('$username');
        $userToEdit = User::getOne($username);
        return $this->html($userToEdit, viewName: 'register.form');
    }

    public function profile() {
        $usersToCheck = User::getAll();
        $current = null;
        foreach ($usersToCheck as $user) {
            /*$user = User::getOne($login);*/
            if ($user->getUsername() == $_SESSION['user']) {
                $current = $user;
            }
        }
        return $this->html($current, viewName: 'profile'); /*new User(), viewName: 'register.form'*/
    }
}