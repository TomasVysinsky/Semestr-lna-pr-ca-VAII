<?php

namespace App\Models;

use App\Core\Model;

class Post extends Model
{
    protected $id;
    protected $users_id;
    protected $users_username;
    protected $text;
    protected $img;

    public function getLikes() {
        return Like::getAll('post_id = ?', [$this->getId()]);
    }

    /**
     * @return mixed
     */
    public function getUsersUsername()
    {
        return $this->users_username;
    }

    /**
     * @param mixed $users_username
     */
    public function setUsersUsername($users_username): void
    {
        $this->users_username = $users_username;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUsersId()
    {
        return $this->users_id;
    }

    /**
     * @param mixed $users_id
     */
    public function setUsersId($users_id): void
    {
        $this->users_id = $users_id;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text): void
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img): void
    {
        $this->img = $img;
    }


}