<?php

namespace App\Controllers;
use App\Models\Competence_model;
use CodeIgniter\API\ResponseTrait;

class Competence extends BaseController{
    use ResponseTrait;

    public function __construct()
    {
    }

    public function index($company_id)
    {
        $competence_model = new Competence_model;
        $objCompetence = $competence_model->retrieveAll($company_id);
        $this->_data['company_id'] = $company_id;
        $this->_data['h1'] = 'Axe Compétences';
        $this->_data['objsCompetence'] = $objCompetence;
        $this->display('axe-competence.tpl');
    }

    public function jsonComp($company_id)
    {
        $competence_model = new Competence_model;
        $data = [
            'test' => 'test2'
        ];
        $competence_model = new Competence_model;
        $objsComp = $competence_model->retrieveAll($company_id);
        return $this->respond($objsComp, 200);

    }
}