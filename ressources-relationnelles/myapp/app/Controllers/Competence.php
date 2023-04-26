<?php

namespace App\Controllers;
use App\Entities\Competence_entity;
use App\Models\Competence_model;

class Competence extends BaseController{
    public function __construct()
    {
    }

    public function index()
    {
        echo('index competence');
        $competence_model = new Competence_model;
        $objCompetence = $competence_model->retrieveAll();
        $this->_data['objsCompetence'] = $objCompetence;
        $this->display('axe-competence.tpl');
    }
}