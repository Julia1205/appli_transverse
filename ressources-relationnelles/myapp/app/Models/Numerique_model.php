<?php

namespace App\Models;
use CodeIgniter\Model;

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
        return $test;
    }
}