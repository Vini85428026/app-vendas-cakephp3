<div class="columns medium-8 content">
		<?= $this->Form->create($fruta); ?>
		<fieldset>
			<legend>Cadastro de frutas</legend>
			<?php
				echo $this->Form->input('id', ['type'=>'hidden']);
				echo $this->Form->input('nome');

				$class = ['extra' => 'Extra', 'primeira' => 'Primeira', 'segunda' => 'Segunda', 'terceira' => 'Terceira'];
				echo $this->Form->label('Classificação:');
				echo $this->Form->select('classif', $class, ['default' => 'extra']);
				
				$fresco = ['sim' => 'Sim', 'nao' => 'Não'];
				echo $this->Form->label('Fresco:');
				echo $this->Form->select('fresco', $fresco, ['default' => 'sim']);
				
				echo $this->Form->input('quantidade');

				echo $this->Form->input('valor');

			?>
		</fieldset>

		<?= $this->Form->submit('Editar',array('class' => 'button')); ?>
		<?= $this->Form->end(); ?>
</div>
<br/>

<a href="#"><?= $this->Html->link('Listar Frutas', ['controller'=>'Frutas', 'action'=>'index']) ?></a>