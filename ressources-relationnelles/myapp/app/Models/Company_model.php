<?php

namespace App\Models;
use CodeIgniter\Model;

class Company_model extends Model{
    protected $table         = 'company';
    // Nom du champ de la clé primaire
    protected $primaryKey    = 'company_id';
    // Champs utilisables
    protected $allowedFields = ['company_name'];
 
    // what is returned when this model is initiated 
    protected $returnType    = 'App\Entities\Company_entity';
 
    // is using timestamps
    protected $useTimestamps = false;
    //protected $createdField  = '';
    //protected $updatedField  = '';

    public function retrieveAll(){
        $test = $this->findAll();
        return $test;
    }
}