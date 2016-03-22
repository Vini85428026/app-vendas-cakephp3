<?php
	namespace App\Model\Table;


	use App\Model\Entity\User;
	use Cake\ORM\Table;
	use Cake\Validation\Validator;

	class UsersTable extends Table{
		public function initialize(array $config){
			//lembrar ou nao
			$this->addBehavior('Timestamp');
			$this->displayField('username');
			$this->displayField('password');
		}

		public function validationDefault(Validator $validator){
			$validator
				->requirePresence('username', 'created')
				->notEmpty('username');

			$validator
				->requirePresence('password', 'created')
				->notEmpty('password');

			return $validator;
		}

	}


?>