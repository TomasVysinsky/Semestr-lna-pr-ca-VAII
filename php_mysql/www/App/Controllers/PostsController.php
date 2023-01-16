<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Like;
use App\Models\Post;
use App\Models\User;

class PostsController extends AControllerBase
{

    public function index(): Response
    {
        $posts = Post::getAll();
        return $this->html($posts);
    }

    public function delete() {
        $id = $this->request()->getValue('id');

        $postToDelete = Post::getOne($id);
        if($postToDelete) {
            unlink($postToDelete->getImg());
            $postToDelete->delete();
        }
        return $this->redirect("?c=posts");
    }

    public function store() {
        $id = $this->request()->getValue('id');

        if ($id == null)
            return $this->redirect("?c=home");
        $post = Post::getOne($id);
        $post->setText($this->request()->getValue('obsah'));
        $post->save();

        return $this->redirect("?c=posts");
    }

    public function create() {
        return $this->html(viewName: 'register.form');
    }

    public function register() {
        $usersToCheck = User::getAll();
        $current = null;
        foreach ($usersToCheck as $user)
        {
            if ($user->getUsername() == $_SESSION['user']) {
                $current = $user;
            }
        }
        if ($current) {
            $post = new Post();
            $post->setUsersId($current->getId());
            $post->setUsersUsername($current->getUsername());
            $obsah = $this->request()->getValue('obsah');
            $post->setText($obsah);
            if (isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK) {
                $newName = "public". DIRECTORY_SEPARATOR . "images" . DIRECTORY_SEPARATOR . "PostPics". DIRECTORY_SEPARATOR . time() . "_" . $_FILES['img']["name"];
                if (move_uploaded_file($_FILES['img']["tmp_name"], $newName)){
                    $post->setImg($newName);
                }
            }
            $post->save();
        } else {
            return $this->redirect("?c=post");
        }
        return $this->redirect("?c=posts");
    }

    public function edit() {
        $id = $this->request()->getValue('id');

        $postToEdit = Post::getOne($id);
        return $this->html($postToEdit, viewName: 'edit.form');
    }

    public function like() {
        $id = $this->request()->getValue('id');
        /** @var Post $postToLike */
        $postToLike = Post::getOne($id);

        if ($postToLike) {
            /** @var Like $like */
            foreach ($postToLike->getLikes() as $like) {
                if ($like->getUser() == $this->app->getAuth()->getLoggedUserName()) {
                    $like->delete();
                    return $this->redirect($_SERVER['HTTP_REFERER']);
                }
            }
        }

        $newLike = new Like();
        $newLike->setUser($this->app->getAuth()->getLoggedUserName());
        $newLike->setPostId($id);
        $newLike->save();

        return $this->redirect($_SERVER['HTTP_REFERER']);
    }
}