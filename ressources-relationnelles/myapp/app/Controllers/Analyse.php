<?php

namespace App\Controllers;

class Analyse extends BaseController{
    public function __construct()
    {
    }

    public function index()
    {
        echo('analyse');
        $this->display('analyse.tpl');
    }
}