<?php

namespace App\Controllers;
use App\Models\Reactivite_model;

class Reactivite extends BaseController{
    public function __construct()
    {
    }

    public function index($company_id)
    {
        //echo('index réactivité');
        $this->_data['company_id'] = $company_id;
        $reactivite_model = new Reactivite_model;
        $objReac = $reactivite_model->retrieveAll($company_id);
        $this->_data['objReac'] = $objReac;

        $this->display('axe-reactivite.tpl');
    }
}