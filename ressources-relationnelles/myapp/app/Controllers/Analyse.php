<?php

namespace App\Controllers;
use App\Models\Analyse_model;

class Analyse extends BaseController{
    public function __construct()
    {
    }

    public function index($company_id)
    {
        $this->_data['company_id'] = $company_id;
        $analyse_model = new Analyse_model;
        $objAna = $analyse_model->retrieveAll($company_id);
        $this->_data['h1'] = 'Analyse par métier';
        $this->_data['objAna'] = $objAna;
        $this->display('analyse.tpl');
    }
}