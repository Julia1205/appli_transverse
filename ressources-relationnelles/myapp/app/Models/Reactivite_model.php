<?php

namespace App\Models;
use CodeIgniter\Model;

class Reactivite_model extends Model{
    protected $table         = 'axe_reactivite';
    // Nom du champ de la clé primaire
    protected $primaryKey    = 'axe_reactivite_id';
    // Champs utilisables
    protected $allowedFields = ['axe_reactivite_item_id', 'axe_reactivite_question', 'axe_reactivite_score', 'axe_reactivite_coment'];
 
    // what is returned when this model is initiated 
    protected $returnType    = 'App\Entities\Reactivite_entity';
 
    // is using timestamps
    protected $useTimestamps = false;
    //protected $createdField  = '';
    //protected $updatedField  = '';

    public function retrieveAll($company_id){
        $test = $this->where('company_id', $company_id)->findAll();
        return $test;
    }
}