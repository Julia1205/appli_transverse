<?php

namespace App\Controllers;
use App\Models\Synthese_model;
use App\Entities\Synthese_entity;

class Synthese extends BaseController{
    public function __construct()
    {
    }

    public function test($company_id)
    {
        //echo($company_id);die;
        $synthese_model = new Synthese_model;
        $objSynthese = $synthese_model->retrieveAll($company_id);
        $this->_data['company_id'] = $company_id;
        $this->_data['synthese'] = $objSynthese;
        $this->_data['h1'] = "Synthèse du diagnostic de l'entreprise";
        $this->display('synthese.tpl');
    }
}