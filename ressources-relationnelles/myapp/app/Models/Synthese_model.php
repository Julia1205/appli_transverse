<?php

namespace App\Models;
use CodeIgniter\Model;

class Synthese_model extends Model{
    protected $table         = 'synthese';
    // Nom du champ de la clé primaire
    protected $primaryKey    = 'synthese_id';
    // Champs utilisables
    protected $allowedFields = ['synthese_axe_name', 'synthese_axe_note'];
 
    // what is returned when this model is initiated 
    protected $returnType    = 'App\Entities\Synthese_entity';
 
    // is using timestamps
    protected $useTimestamps = false;
    //protected $createdField  = '';
    //protected $updatedField  = '';

    public function retrieveAll(){
        $test = $this->findAll();
        return $test;
    }
}