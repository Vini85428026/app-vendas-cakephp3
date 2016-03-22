<?php
	namespace App\Model\Table;

	use Cake\ORM\Table;
	use Cake\Validation\Validator;

	class PostsTable extends Table{
		public function initialize(array $config){
			//lembrar ou nao
			$this->addBehavior('Timestamp');
			$this->displayField('usuario');
		}

		public function validationDefault(Validator $validator){
			$validator
				->requirePresence('usuario', 'created')
				->notEmpty('usuario');

			$validator
				->requirePresence('senha', 'created')
				->notEmpty('senha');

			return $validator;
		}

	}


?>