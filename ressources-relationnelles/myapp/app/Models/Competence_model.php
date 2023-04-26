<?php

namespace App\Models;
use CodeIgniter\Model;
use App\Models\Item_model;

class Competence_model extends Model{
    protected $table         = 'axe_competence';
    // Nom du champ de la clé primaire
    protected $primaryKey    = 'axe_competence_id';
    // Champs utilisables
    protected $allowedFields = ['axe_competence_item_id', 'axe_competence_question', 'axe_competence_score', 'axe_competence_coment'];
 
    // what is returned when this model is initiated 
    protected $returnType    = 'App\Entities\Competence_entity';
 
    // is using timestamps
    protected $useTimestamps = false;
    //protected $createdField  = '';
    //protected $updatedField  = '';

    public function retrieveAll($company_id){
        $test = $this->where('company_id', $company_id)->findAll();
        $item_model = new Item_model;

        foreach ($test as $key => $value) {
            $ttest = $item_model->retrieveByID($value->axe_competence_item_id);
            $value->axe_competence_item_id = $ttest;
        }
        //$item->axe_competence_item_id;
        return $test;
    }
}