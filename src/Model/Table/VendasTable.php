<?php

	namespace App\Model\Table;


	use App\Model\Entity\User;
	use Cake\ORM\Table;
	use Cake\Validation\Validator;

	/**
	* 
	*/
	class VendasTable extends Table {
		public function initialize(array $config){
			//lembrar ou nao
			$this->addBehavior('Timestamp');
		}

		public function validationDefault(Validator $validator){
			$validator
				->requirePresence('valorvenda', 'created')
				->notEmpty('valorvenda');

			return $validator;
		}
	}

?>