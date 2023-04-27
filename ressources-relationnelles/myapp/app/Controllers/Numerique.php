<?php

namespace App\Controllers;
use App\Models\Numerique_model;
use CodeIgniter\API\ResponseTrait;

class Numerique extends BaseController{
    use ResponseTrait;
    public function __construct()
    {
    }

    public function index($company_id)
    {
        $this->_data['company_id'] = $company_id;
        $numerique_model = new Numerique_model;
        $objsNum = $numerique_model->retrieveAll($company_id);
        $this->_data['h1'] = 'Axe numérique';
        $this->_data['objsNum'] = $objsNum;
        $this->_data['company_id'] = $company_id;
        $this->display('axe-numerique.tpl');
    }

    public function jsonNum($company_id)
    {
        $data = [
            'test' => 'test2'
        ];
        $numerique_model = new Numerique_model;
        $objsNum = $numerique_model->retrieveAll($company_id);
        return $this->respond($objsNum, 200);
    }
}