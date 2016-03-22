<?php
	namespace App\Model\Table;


	use App\Model\Entity\Fruta;
	use Cake\ORM\Table;
	use Cake\Validation\Validator;

	class FrutasTable extends Table{
		public function initialize(array $config){
			//lembrar ou nao
			$this->addBehavior('Timestamp');
			$this->displayField('nome');
		}

		public function validationDefault(Validator $validator){
			$validator
				->requirePresence('nome', 'created')
				->notEmpty('nome');

			$validator
				->requirePresence('quantidade', 'created')
				->notEmpty('quantidade');

			$validator
				->requirePresence('valor', 'created')
				->notEmpty('valor');

			return $validator;
		}

	}


?>