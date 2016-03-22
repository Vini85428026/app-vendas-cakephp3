<div class="columns medium-8 content">
	<?= $this->Form->create($post); ?>
	<fieldset>
		<legend>Editar post</legend>
		<?php
			echo $this->Form->input('id', ['type'=>'hidden']);
			echo $this->Form->input('titulo');
			echo $this->Form->input('texto');
		?>
	</fieldset>

	<?= $this->Form->Button(__('Editar Post')); ?>
	<?= $this->Form->end(); ?>
</div>

<h5><?= $this->Html->link('Voltar a lista', ['controller'=>'Posts', 'action'=>'index']) ?></h5>