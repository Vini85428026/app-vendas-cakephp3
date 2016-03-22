
<div class="columns medium-8 content"> 
	<?= $this->Flash->render('auth') ?>
		<?= $this->Form->create(); ?>
		<fieldset>
			<legend>Login</legend>
			<?php
				echo $this->Form->input('username');
				echo $this->Form->input('password', array('type'=>'password'));
			?>
		</fieldset>

		<?= $this->Form->submit('Login',array('class' => 'button')); ?>
		<?= $this->Form->end(); ?>
</div>