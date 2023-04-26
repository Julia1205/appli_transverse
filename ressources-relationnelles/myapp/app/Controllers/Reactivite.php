<?php

namespace App\Controllers;

class Reactivite extends BaseController{
    public function __construct()
    {
    }

    public function index()
    {
        echo('index réactivité');
        $this->display('axe-reactivite.tpl');
    }
}