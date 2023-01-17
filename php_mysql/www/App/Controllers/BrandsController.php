<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Brand;

/**
 * Class HomeController
 * Example class of a controller
 * @package App\Controllers
 */
class BrandsController extends AControllerBase
{
    /**
     *
     * @return \App\Core\Responses\RedirectResponse|\App\Core\Responses\Response
     */
    public function index(): Response
    {
        $brands = Brand::getAll();
        return $this->html($brands);
    }

    public function delete() {
        $id = $this->request()->getValue('id');

        $brandToDelete = Brand::getOne($id);
        if($brandToDelete) {
            $brandToDelete->delete();
        }
        return $this->redirect("?c=adminaccount&a=brands");
    }

    public function create() {
        return $this->html(viewName: 'register.form');
    }

    public function register() {

        $brand = new Brand();
        $brand->setName($this->request()->getValue('name'));
        $brand->setLogo($this->request()->getValue('logo'));
        $brand->save();
        return $this->redirect("?c=adminaccount&a=brands");
    }
}