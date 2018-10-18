<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class RecipesTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
        ->notEmpty('mailAddress')
        ->requirePresence('mailAddress')
        ->notEmpty('areaName')
        ->requirePresence('areaName')
        ->notEmpty('status')
        ->requirePresence('status');

        return $validator;
    }
}