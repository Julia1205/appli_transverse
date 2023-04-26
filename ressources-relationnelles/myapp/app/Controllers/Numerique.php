<?php

namespace App\Controllers;
use App\Models\Numerique_model;

class Numerique extends BaseController{
    public function __construct()
    {
    }

    public function index($company_id)
    {
        echo('index numérique');
        $this->_data['company_id'] = $company_id;
        $numerique_model = new Numerique_model;
        $objsNum = $numerique_model->retrieveAll($company_id);
        $this->_data['objsNum'] = $objsNum;
        $this->_data['company_id'] = $company_id;
        $this->display('axe-numerique.tpl');
    }
}