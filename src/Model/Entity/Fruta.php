<?php
	namespace App\Model\Entity;

	use Cake\ORM\Entity;

	class Fruta extends Entity{
		protected $_accessible = [
			'*' => true,
        	'id' => true 
		];

	}
	
?>