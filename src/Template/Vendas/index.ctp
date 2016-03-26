<br/><h4>Lista de Vendas</h4>

<table>
	<tr>
		<td>Valor da venda</td>
		<td>Id fruta</td>
		<td>Horário da venda</td>
		<td>Acoes</td>
	</tr>
	<? foreach($vendas as $venda):?>
	<tr>
		<td><?= $venda->valorvenda ?></td>
		<td><?= $venda->fruta_id ?></td>
		<td><?= $venda->created ?></td>
		<td>
			
		</td>
	</tr>
	<? endforeach;?>
</table>

<br/>
<center><?= $this->Html->link('Efetuar venda', ['controller'=>'vendas', 'action'=>'add']); ?></center>