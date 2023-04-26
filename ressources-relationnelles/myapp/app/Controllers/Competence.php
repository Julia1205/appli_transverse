<?php

namespace App\Controllers;
use App\Entities\Competence_entity;
use App\Models\Competence_model;

class Competence extends BaseController{
    public function __construct()
    {
    }

    public function index($company_id)
    {
        $competence_model = new Competence_model;
        $objCompetence = $competence_model->retrieveAll($company_id);
        $this->_data['company_id'] = $company_id;
        $this->_data['objsCompetence'] = $objCompetence;
        $this->display('axe-competence.tpl');
    }
}