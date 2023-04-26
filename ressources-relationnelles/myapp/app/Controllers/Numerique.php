<?php

namespace App\Controllers;

class Numerique extends BaseController{
    public function __construct()
    {
    }

    public function index()
    {
        echo('index numérique');
        $this->display('axe-numerique.tpl');
    }
}