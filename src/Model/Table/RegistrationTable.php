<?php

namespace App\Model\Table;
use Cake\ORM\Table;


class RegistrationTable extends Table{

	public function initialize(array $config)
	{
		 parent::initialize($config);

		 	$this->table('registration');
		 	$this->primaryKey('id');

		 	
	}
    
}