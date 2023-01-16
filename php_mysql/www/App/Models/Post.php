<?php

namespace App\Models;

use App\Core\Model;

class Post extends Model
{
    protected $id;
    protected $user_userId;
    protected $text;
    protected $img;

    public function getLikes() {
        return Like::getAll('post_id = ?', [$this->getId()]);
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
    public function getUserUserId()
    {
        return $this->user_userId;
    }

    /**
     * @param mixed $user_userId
     */
    public function setUserUserId($user_userId): void
    {
        $this->user_userId = $user_userId;
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