<?php

namespace App\Controllers;
use App\Models\Company_model;

class Home extends BaseController
{
    public function index()
    {
        $company_model = new Company_model;
        $objCompanies = $company_model->retrieveAll();
        $this->_data['companies'] = $objCompanies;
        $this->_data['h1'] = "Diagnostiques de digitalisation";
        $this->display('home1.tpl');
    }
}