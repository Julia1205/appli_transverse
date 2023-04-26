<?php

namespace App\Models;
use CodeIgniter\Model;

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

    public function retrieveAll(){
        $test = $this->findAll();
        return $test;
    }
}