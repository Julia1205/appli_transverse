<?php

namespace App\Models;
use CodeIgniter\Model;

class Item_model extends Model{
    protected $table         = 'item';
    // Nom du champ de la clé primaire
    protected $primaryKey    = 'item_id';
    // Champs utilisables
    protected $allowedFields = ['item_name'];
 
    // what is returned when this model is initiated 
    protected $returnType    = 'App\Entities\Item_entity';
 
    // is using timestamps
    protected $useTimestamps = false;
    //protected $createdField  = '';
    //protected $updatedField  = '';

    public function retrieveByID($item_id){
        $test = $this->where('item_id', $item_id)->first();
        return $test->item_name;
    }
}