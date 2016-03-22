<h3>Frutas</h3>

<table>
	<tr>
		<td><?=$this->Paginator->sort('id', 'ID')?></td>
		<td><?=$this->Paginator->sort('nome')?></td>
		<td>Classificação</td>
		<td>Fresco</td>
		<td>Quantidade</td>
		<td>Valor Inteiro R$</td>
		<td>Criado em</td>
		<td>Editado em</td>
		<td>Acoes</td>
	</tr>
	<? foreach($frutas as $fruit):?>
	<tr>
		<td><?=$fruit->id ?></td>
		<td><?=$fruit->nome ?></td>
		<td><?=$fruit->classif ?></td>
		<td><?=$fruit->fresco ?></td>
		<td><?=$fruit->quantidade ?></td>
		<td><?=$fruit->valor ?></td>
		<td><?=$fruit->created ?></td>
		<td><?=$fruit->modified ?></td>
		<td>
			<?= $this->Html->link('Editar', ['controller'=>'Frutas','action'=>'edit',$fruit->id]) ?>
			| <?= $this->Form->postLink(__('Excluir'), ['action'=>'delete', $fruit->id],[
				'confirm' => __("Deseja excluir o/a {0}?", $fruit->nome)
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
<div>
	<a href="#"><?= $this->Html->link('Registrar nova fruta', ['controller'=>'Frutas', 'action'=>'add']) ?></a>


