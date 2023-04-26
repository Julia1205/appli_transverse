<?php

namespace App\Models;
use CodeIgniter\Model;

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
        return $test;
    }
}