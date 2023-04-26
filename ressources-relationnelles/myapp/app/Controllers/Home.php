<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $this->_data['h1'] = "test";
        $this->_data['h2'] = "test20";
        //$this->_data['title'] = "Cocktail point";
        $this->display('home.tpl');
    }
}