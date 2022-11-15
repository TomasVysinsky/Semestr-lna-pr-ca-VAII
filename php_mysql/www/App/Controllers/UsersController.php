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
}