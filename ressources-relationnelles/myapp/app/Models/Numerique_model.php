<?php

namespace App\Models;
use CodeIgniter\Model;
use App\Models\Item_model;

class Numerique_model extends Model{
    protected $table         = 'axe_num';
    // Nom du champ de la clé primaire
    protected $primaryKey    = 'axe_num_id';
    // Champs utilisables
    protected $allowedFields = ['axe_num_item_id', 'axe_num_question', 'axe_num_score', 'axe_num_coment'];
 
    // what is returned when this model is initiated 
    protected $returnType    = 'App\Entities\Numerique_entity';
 
    // is using timestamps
    protected $useTimestamps = false;
    //protected $createdField  = '';
    //protected $updatedField  = '';

    public function retrieveAll($company_id){
        $test = $this->where('company_id', $company_id)->findAll();
        $item_model = new Item_model;

        foreach ($test as $key => $value) {
            $ttest = $item_model->retrieveByID($value->axe_num_item_id);
            $value->axe_num_item_id = $ttest;
        }
        return $test;
    }
}