<h3>Posts</h3>

<table>
	<tr>
		<td><?=$this->Paginator->sort('id', 'ID')?></td>
		<td><?=$this->Paginator->sort('usuario')?></td>
		<td><?= $this->Paginator->sort('senha') ?></td>
		<td>Criado em</td>
		<td>Editado em</td>
		<td>Acoes</td>
	</tr>
	<? foreach($users as $post):?>
	<tr>
		<td><?=$post->id ?></td>
		<td><?=$post->usuario ?></td>
		<td><?=$post->senha ?></td>
		<td><?=$post->created ?></td>
		<td><?=$post->modified ?></td>
		<td>
			<?= $this->Html->link('Visualizar', ['controller'=>'Posts','action'=>'view',$post->id]) ?>
			| <?= $this->Html->link('Editar', ['controller'=>'Posts','action'=>'edit',$post->id]) ?>
			| <?= $this->Form->postLink(__('Excluir'), ['action'=>'delete', $post->id],[
				'confirm' => __("Deseja excluir o post com id # {0}?", $post->id)
			]) ?>
		</td>
	</tr>
	<? endforeach;?>
</table>

<div class='paginator'>
	<ul class="pagination">
		<?php
			echo $this->Paginator->prev('<< | '),
			$this->Paginator->numbers(),
			$this->Paginator->next(' | >>')?>
	</ul>
</div>

<div>
	<a href="#"><?= $this->Html->link('Registrar novo Post', ['controller'=>'Posts', 'action'=>'add']) ?></a>
</div>

