<?php

namespace App\Models;
use CodeIgniter\Model;
use App\Models\Item_model;

class Analyse_model extends Model{
    protected $table         = 'analyse';
    // Nom du champ de la clé primaire
    protected $primaryKey    = 'analyse_id';
    // Champs utilisables
    protected $allowedFields = ['analyse_item_id', 'analyse_question', 'analyse_score', 'analyse_coment', 'company_id'];
 
    // what is returned when this model is initiated 
    protected $returnType    = 'App\Entities\Analyse_entity';
 
    // is using timestamps
    protected $useTimestamps = false;
    //protected $createdField  = '';
    //protected $updatedField  = '';

    public function retrieveAll($company_id){
        $test = $this->where('company_id', $company_id)->findAll();
        $item_model = new Item_model;

        foreach ($test as $key => $value) {
            $ttest = $item_model->retrieveByID($value->analyse_item_id);
            $value->analyse_item_id = $ttest;
        }


        
        return $test;
    }
}